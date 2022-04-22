<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view("front.index");
    }

    // OUR BRAND
    public function ourBrand() {
        return view("front.our-brand");
    }
    public function ourBrandLogo() {
        return view("front.our-brand.logo");
    }
    public function ourBrandColor() {
        return view("front.our-brand.color");
    }
    public function ourBrandImage() {
        return view("front.our-brand.image");
    }
    public function ourBrandUses() {
        return view("front.our-brand.uses");
    }
    public function ourBrandType() {
        return view("front.our-brand.type");
    }
    // END OUR BRAND

    // EASY.CL
    public function easycl() {
        return view("front.easycl");
    }
    public function easyclLogo() {
        return view("front.easycl.logo");
    }
    public function easyclColor() {
        return view("front.easycl.color");
    }
    public function easyclUses() {
        return view("front.easycl.uses");
    }
    // END EASY.CL


    // EXPERT
    public function expert() {
        return view("front.expert");
    }
    public function expertLogo() {
        return view("front.expert.logo");
    }
    public function expertColor() {
        return view("front.expert.color");
    }
    public function expertImage() {
        return view("front.expert.image");
    }
    public function expertUses() {
        return view("front.expert.uses");
    }
    public function expertType() {
        return view("front.expert.type");
    }
    // END EXPERT


    public function positioning() {
        return view("front.positioning");
    }
    public function institutionalMarketing() {
        return view("front.institutional-marketing");
    }
    public function endoMarketing() {
        return view("front.endomarketing");
    }
    public function graphicResources() {
        return view("front.graphic-resources");
    }
    public function login() {
        return view("front.login");
    }
}
