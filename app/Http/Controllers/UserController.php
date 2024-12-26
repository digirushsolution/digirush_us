<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiries;
use App\Models\Contact_us;

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

    public function case_studies(){
        return view('frontend.caseStudies');
    }

    public function case_study_single(){
        return view('frontend.caseStudySingle');
    }

    public function contact(){
        return view('frontend.contact');
    }

    //saving data
    public function store_enquiry(Request $request){
        if($request->form_type == "case_study"){
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
                'subject' => 'required',
                'email' => 'required|email|max:255|unique:enquiries',
                'message' => 'required|string',
            ], [
                'name.required' => 'Please provide your full name.',
                'name.regex' => 'The full name may only contain letters and spaces.',
                'email.required' => 'Please enter a valid email address.',
                'email.email' => 'The email address must be a valid email format.',
            ]);

            $enquiry            = new Enquiries;
            $enquiry->form_type = $request->form_type;
            $enquiry->name      = $request->name;
            $enquiry->subject   = $request->subject;
            $enquiry->email     = $request->email;
            $enquiry->message   = $request->message;
            $enquiry->save();
            return redirect()->route('index')->withSuccess('Enquiry Submitted Sucessfully!');

        }else{
            $validatedData = $request->validate([
                'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
                'phone' => 'required|numeric|digits:10|unique:enquiries',
                'email' => 'required|email|max:255|unique:enquiries',
                'message' => 'required|string',
            ], [
                'name.required' => 'Please provide your full name.',
                'name.regex' => 'The full name may only contain letters and spaces.',
                'phone.required' => 'The phone number field is required.',
                'phone.digits' => 'The phone number must be exactly 10 digits.',
                'phone.unique' => 'This phone number has already been taken.',
                'email.required' => 'Please enter a valid email address.',
                'email.email' => 'The email address must be a valid email format.',
            ]);

            $enquiry = new Enquiries;
            $enquiry->form_type = $request->form_type;
            $enquiry->name = $request->name;
            $enquiry->phone = $request->phone;
            $enquiry->email = $request->email;
            $enquiry->message = $request->message;
            $enquiry->save();
            return redirect()->route('index')->withSuccess('Enquiry Submitted Sucessfully!');
        } 
    }

    public function store_contact(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/^[A-Za-z ]+$/',
            'phone' => 'required|numeric|digits:10|unique:contact_us',
            'email' => 'required|email|max:255|unique:contact_us',
            'message' => 'required|string',
        ], [
            'name.required' => 'Please provide your full name.',
            'name.regex' => 'The full name may only contain letters and spaces.',
            'phone.required' => 'The phone number field is required.',
            'phone.digits' => 'The phone number must be exactly 10 digits.',
            'phone.unique' => 'This phone number has already been taken.',
            'email.required' => 'Please enter a valid email address.',
            'email.email' => 'The email address must be a valid email format.',
        ]);
        $contact = new Contact_us;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('index')->withSuccess('We respect your quote!');
    }
}
