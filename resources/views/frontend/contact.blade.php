@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/contact_us_banner.jpg') }}');">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h1>Contact Us</h1>
            <p>We are here to help you elevate your online presence. Reach out today for expert guidance and support.</p>
        </div>
    </div>
</section>

<section class="contact_form_  padding">
    <div class="container">
        <div class="contact_bottom_main">
            <p>We would love to hear from you! At DigiRush Solutions, we’re committed to providing exceptional service and support. Whether you have questions about our services, need assistance or want to discuss a project, our team is aleays here to assist you anytime.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-block">
                    <div class="block-inner">
                        <span class="icon"><img src="{{ asset('assets/image/contact-2.png') }}" alt=""></span>
                        <strong>Telephone number</strong>
                        <ul class="contact-details">
                            <a href="tel:+44 1865 60 0823"> <li> United Kingdom <br>+44 1865 60 0823</li></a>
                            <a href="tel:+1 202 539 0556"> <li>United States of America<br>+1 202 539 0556</li></a>
                            <a href="tel:+61 2 8006 9769"> <li> Australia <br>+61 2 8006 9769</li></a>
                            <a href="tel:+91 99159 54999"> <li>India<br>+91 99159 54999 </li></a>
                        </ul>
                    </div>
                </div>
                <div class="contact-block">
                    <div class="block-inner">
                        <span class="icon"><img src="{{ asset('assets/image/contact-3.png') }}" alt=""></span>
                        <strong>Mail address</strong>
                        <a href="mailto:contact@digirushsolutions.uk">contact@digirushsolutions.uk</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="get-in-touch-form">
                    <h3>Request a Callback</h3>
                    <form id="callbackForm">
                        <div class="cnt-form">
                            <input class="form-control" type="text" id="name" placeholder="Your Name" maxlength="50" required>
                            <span class="error-message" id="nameError"></span>
                        </div>
                        <div class="cnt-form">
                            <input class="form-control" type="tel" id="phone" placeholder="Phone No" maxlength="11" required>
                            <span class="error-message" id="phoneError"></span>
                        </div>
                        <div class="cnt-form">
                            <input class="form-control" type="email" id="email" placeholder="Email" required>
                            <span class="error-message" id="emailError"></span>
                        </div>
                        <div class="cnt-form">
                            <textarea class="form-control" id="message" cols="30" rows="6" placeholder="Your Message" required></textarea>
                            <span class="error-message" id="messageError"></span>
                        </div>
                        <button class="contact_page_button">
                            <a href="#" class="button">
                            <div class="backdrop" bis_skin_checked="1">
                                <span>Send Message</span>
                            </div>
                            <div class="overlay" bis_skin_checked="1">
                                <span>Send Message</span>
                            </div>
                            </a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map-wrapper pt-90">
<iframe
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6859.944289020427!2d76.708462658844!3d30.71918348473811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4028918ae34084cf%3A0x71348db7307cc64e!2sDigi%20Rush%20Solutions!5e0!3m2!1sen!2sus!4v1718789548219!5m2!1sen!2sus"
    width="100%" height="450" style="border:0;" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection