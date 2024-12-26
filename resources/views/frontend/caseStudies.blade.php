@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Case Study</h1>
                    <p>Empowering your digital journey with innovative SEO strategies and tailored solutions for
                        sustainable growth. </p>
                    <button class="about_banner_button">
                        <a href="#" class="button">
                            <div class="backdrop" bis_skin_checked="1">
                                <span>Read More</span>
                            </div>
                            <div class="overlay" bis_skin_checked="1">
                                <span>Read More</span>
                            </div>
                        </a>
                    </button>
                </div>
            </div>

            <div class="col-md-5">
                <div class="contact-form-container">
                    <h2>Contact Us</h2>
                    <form action="{{ route('store') }}" method="post" class="contact-form">
                        @csrf
                        <label for="name">Name</label>
                        <input type="hidden" name="form_type" value="case_study">
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>

                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>

                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <button class="form_submit_button">
                            <a href="#" class="button">
                                <div class="backdrop" bis_skin_checked="1">
                                    <span>Send Messsage </span>
                                </div>
                                <div class="overlay" bis_skin_checked="1">
                                    <span>Send Messsage </span>
                                </div>
                            </a>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="case_Study padding">
    <div class="container">
        <div class="case_Study1 sm-padding wow fade-in-right" data-wow-delay="200ms"
            style=" visibility: visible; animation-delay: 200ms;animation-name: fade-in-right;">
            <div class="section-heading mb-20 about_phome sub_heading_response default-side-heading ">
                <span>About Our Company</span>
                <h2> Unveiling Success: Our Project Highlights and Achievements </h2>
            </div>
            <div class="about-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo hic quo iusto et exercitationem repellat adipisci reiciendis reprehenderit pariatur labore maiores laborum ea illum saepe mollitia nulla ab, magni officia maxime repudiandae dicta nesciunt ratione. Quos magni tempora labore at sit! Repellendus ex excepturi, blanditiis mollitia laudantium commodi in dolore, architecto modi impedit odio ipsam laborum ullam sunt nemo, id aut distinctio velit error molestiae ut repellat quo laboriosam. Eveniet, officiis dolores illum molestiae facere culpa quas ut non quae fuga dolorum, dignissimos eos ea! Adipisci, distinctio itaque. Sint voluptas distinctio perspiciatis dicta ea eveniet eaque, beatae aspernatur iure. Provident.
                </p>


            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-s-12">
                <div class="project_item">
                    <div class="project_img">
                        <a href="#"><img src="{{ asset('assets/image/1726754715_banner.jpg') }}" alt="best seo services in india"></a>
                    </div>
                    <div class="project_content">
                    <h3>eCommerce website built for advanced steel products manufacturer – Channel and Tray</h3>
                    <button class="case_btn">
                        <a href="{{ route('case_study_single') }}" class="">
                                <span>Read More</span>
                        </a>
                      
                        
                      

                    </button>
                </div>
                </div>
                
            </div>

            <div class="col-lg-4 col-md-6 col-s-12">
                <div class="project_item">
                    <div class="project_img">
                        <a href="#"><img src="image/1726754715_banner.jpg" alt="best seo services in india"></a>
                    </div>
                    <div class="project_content">
                    <h3>eCommerce website built for advanced steel products manufacturer – Channel and Tray</h3>
                    <button class="case_btn">
                        <a href="{{ route('case_study_single') }}" class="">
                                <span>Read More</span>
                        </a>
                      
                        
                      

                    </button>
                </div>
                </div>
                
            </div> <div class="col-lg-4 col-md-6 col-s-12">
                <div class="project_item">
                    <div class="project_img">
                        <a href="#"><img src="image/1726754715_banner.jpg" alt="best seo services in india"></a>
                    </div>
                    <div class="project_content">
                    <h3>eCommerce website built for advanced steel products manufacturer – Channel and Tray</h3>
                    <button class="case_btn">
                        <a href="{{ route('case_study_single') }}" class="">
                                <span>Read More</span>
                        </a>
                      
                        
                      

                    </button>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection