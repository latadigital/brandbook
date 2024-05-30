<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\User;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

	//
	// Autenticacion SAML
	Event::listen(\Slides\Saml2\Events\SignedIn::class, function (\Slides\Saml2\Events\SignedIn $event) {
    		$messageId = $event->getAuth()->getLastMessageId();
    
    		// your own code preventing reuse of a $messageId to stop replay attacks
    		$samlUser = $event->getSaml2User();
    
    		$userData = [
        		'id' => $samlUser->getUserId(),
        		'attributes' => $samlUser->getAttributes(),
        		'assertion' => $samlUser->getRawSamlAssertion()
    		];
		
		Log::info('Datos desde el realm saml: '.json_encode($userData));

#   		$user = User::where('email', $userData['id']) -> first();
		$user = User::where('email', $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress"][0]) -> first();	
		/*
		 * Deuda tecnica: En esta parte del codigo, corresponde mapear los atributos
		 *                provenientes del idP. Una vez configurado el idP, se debe
		 *                configurar el correcto map de datos.
		 *
		 * Import de usuarios: Dado que Laravel no permite realizar el login con un
		 *                     usuario que no exista en la base de datos, el flujo
		 *                     del inicio de sesion externo debe considerar la
		 *                     creacion de un usuario si no existe, y actualizacion
		 *                     de los datos, para que la administración de los
		 *                     atributos del usaurio sea administrada por el SSO.
		 *                     
		 */

		if($user == null){
			// En caso que no exista, será creado con los datos que vienen del idP
			Log::info('El usuario ['.$userData['id'].'] no existe, sera creado');
			$user = new User();
        	        $user->firstname = $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname"][0];
			$user->lastname = $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname"][0];
			$user->position = "SIN ATRIBUTO";
			$user->email = $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress"][0];
			$user->role_id = 2; // DEFINIR QUE ROLE DEBE TOMAR SEGUN CORRESPONDA
			$user->business_id = 1;
			$user->setPasswordAttribute(base64_encode(random_bytes(10)));
			$user->save();
		}
		else{
			// En caso que exista, será actualizado con los datos que vienen del idP
			Log::info('El usuario ['.$userData['id'].'] ya  existe, sera actualizado');

			$user->firstname = $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname"][0];
                        $user->lastname = $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname"][0];
                        $user->position = "SIN ATRIBUTO";
                        $user->email = $userData['attributes']["http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress"][0];
                        $user->role_id = 2; // DEFINIR QUE ROLE DEBE TOMAR SEGUN CORRESPONDA
                        $user->business_id = 1;
                        $user->setPasswordAttribute(base64_encode(random_bytes(10)));
                        $user->save();
		}

		Log::info('Iniciando sesion el usuario: '.json_encode($user));

    		// Login a user.
		Auth::login($user);
	});

	Event::listen('Slides\Saml2\Events\SignedOut', function (SignedOut $event) {
		Auth::logout();
		Session::save();
	});

    }
}
