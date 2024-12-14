<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about_us(){
        return view('frontend.aboutus');
    }

    public function seo(){
        return view('frontend.seo');
    }

    public function local_seo(){
        return view('frontend.localseo');
    }

    public function ecommerce_seo(){
        return view('frontend.ecommerceseo');
    }

    public function social_media_marketing(){
        return view('frontend.socialMediaMarketing');
    }

    public function digital_marketing(){
        return view('frontend.digitalMarketing');
    }

    public function ppc_service(){
        return view('frontend.ppcService');
    }

    public function web_service(){
        return view('frontend.webService');
    }

    public function content_management_marketing(){
        return view('frontend.contentManagementMarketing');
    }

    public function web_development(){
        return view('frontend.webDevelopment');
    }

    public function web_design(){
        return view('frontend.webDesign');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
