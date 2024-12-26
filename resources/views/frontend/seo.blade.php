@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png') }}');">
    <div class="page-header-shape"></div>
    <div class="container">
      <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Professional SEO Services</h1>
                    <p>Unlock your visibility with search engine optimization</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="banner_us_forms">
                    <div class="get-in_touch_form">
                        <h3>Request a Callback</h3>
                        <form action="{{ route('store') }}" method="POST" id="callbackForm">
                            @csrf
                            <div class="cnt_form">
                                <input type="hidden" name="form_type" value="seo">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Your Name" maxlength="50" required>
                                <span class="error-message" id="nameError"></span>
                            </div>
                            <div class="cnt_form">
                                <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone No" maxlength="11" required>
                                <span class="error-message" id="phoneError"></span>
                            </div>
                            <div class="cnt_form">
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                                <span class="error-message" id="emailError"></span>
                            </div>
                            <div class="cnt_form">
                                <textarea class="form-control" id="message" name="message" cols="30" rows="6" placeholder="Your Message" required></textarea>
                                <span class="error-message" id="messageError"></span>
                            </div>
                            <div class="get-in-touch-form-btn">
                                <button class="get_in_touch_button">
                                    <a href="#" type="submit" class="button">
                                        <div class="backdrop" bis_skin_checked="1">
                                        <span>Send Message</span>
                                        </div>
                                        <div class="overlay" bis_skin_checked="1">
                                        <span>Send Message</span>
                                        </div>
                                    </a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
</section>

<section class="branding_services_brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="under_branding_service">
                    <h2>Advanced SEO Strategies for Enhanced Search Engine Performance and Optimization</h2>
                    <p>Is the unawareness of your website about search engines sabotaging your potential business? Discover elite SEO services that can catapult your brand's online presence and make your website stand out so it is seen, heard and not forgotten. Our SEO services are your secret to ranking above any of your competitors; thus, your business will always be the first preference for customers.
                    </p>
                    <button class="branding_banner_button">
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
           
            <div class="col-md-6">
                <div class="under_service_img">
                    <img src="{{ asset('assets/image/services-main-hero.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured_services_slider padding"  style="background-image: url('{{ asset('assets/image/featured_background.webp') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="heading_featured">
                    <h2>Featured Work </h2>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="paragrph_txt">
                    <p>At Digi Rush Solutions, our featured work demonstrates our expertise in creating innovative and impactful digital solutions. We build custom websites with user-friendly designs, advanced functionality and seamless performance, helping clients achieve their business goals and stand out online.</p>
                </div>
            </div>
        </div>

    <div class="owl-carousel owl-theme" id="carousel_feature">
        <div class="item">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="slider_under_sec">
                        <div class="heading_under_txt">
                            <h3>Loan Suvidhaa</h3>
                            <p>We are proud to have developed the Loansuvidhaa website. The team focused on delivering a clean, user-friendly design with key features like loan calculators, easy loan application forms, secure payment gateways and a smooth, responsive experience across devices, all while aligning with the brand's mission to simplify financial services.</p>
                            <button class="slider_button">
                                <a href="https://loansuvidhaa.com/" class="button">
                                   <div class="backdrop" bis_skin_checked="1">
                                      <span>View Website</span>
                                   </div>
                                   <div class="overlay" bis_skin_checked="1">
                                      <span>View Website</span>
                                   </div>
                                </a>
                             </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="imageBox aos-init" data-aos="zoom-in-up">
                        <div class="portfolio-item">
                        <a data-fancybox="gallery" href="https://loansuvidhaa.com/" tabindex="0">
                     <img src="{{ asset('assets/image/loan_suvidha (1).png') }}" alt="Maintenance">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="slider_under_sec">
                        <div class="heading_under_txt">
                            <h3>Great Media</h3>
                            <p>We at Digi Rush Solutions are proud to have developed the Great Media website. Our team focused on creating a seamless, visually engaging platform that effectively showcases their digital expertise and services.	</p>
                            <button class="slider_button">
                                <a href="https://greatmedia.in/" class="button">
                                   <div class="backdrop" bis_skin_checked="1">
                                      <span>View Website</span>
                                   </div>
                                   <div class="overlay" bis_skin_checked="1">
                                      <span>View Website</span>
                                   </div>
                                </a>
                             </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="imageBox aos-init" data-aos="zoom-in-up">
                        <div class="portfolio-item">
                        <a data-fancybox="gallery" href="https://greatmedia.in/" tabindex="0">
                     <img src="{{ asset('assets/image/great_media_in (1).png') }}" alt="Maintenance">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="slider_under_sec">
                        <div class="heading_under_txt">
                            <h3>Babycorn Group</h3>
                            <p>Digi Rush Solutions is proud to have developed the Baby Corn Group website. The team focused on creating a modern, intuitive, and mobile-friendly platform, incorporating key functionalities like easy navigation, a product catalog, contact forms and a seamless user experience, all while reflecting the brand's identity and values.</p>
                            <button class="slider_button">
                                <a href="https://babycorngroup.com/" class="button">
                                   <div class="backdrop" bis_skin_checked="1">
                                      <span>View Website</span>
                                   </div>
                                   <div class="overlay" bis_skin_checked="1">
                                      <span>View Website</span>
                                   </div>
                                </a>
                             </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="imageBox aos-init" data-aos="zoom-in-up">
                        <div class="portfolio-item">
                        <a data-fancybox="gallery" href="https://babycorngroup.com/" tabindex="0">
                     <img src="{{ asset('assets/image/baby_corn_group (1).png') }}" alt="Maintenance">
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what_you_get padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="under_what_you_get">
                    <h2>SEO Solutions for Achieving Sustainable Organic Growth</h2>
                    <p>Do you ever get frustrated, feeling like your website rankings were at the very bottom? Our sophisticated SEO strategies ensure fast performance improvements and sustainable growth, securing you strong online presence for the future. Our SEO methods are different from other providers. Experience the key to long-term growth with our SEO solutions today.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_ul_li_flx_service">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get1.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Technical Audit</h3>
                                    <p>You cannot measure success or failure of your SEO activities unless you do not track and measure their effectiveness. Our Organic SEO Specialist identify and prioritize every aspect of the website to make sure if it is working properly or not. We make sure that the website is completely bug-free, fully responsive, SEO and user-friendly, etc. Our team employs the latest and the best SEO tools for website audit that will help your website rank on the web.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get2.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Keyword Research</h3>
                                    <p>Keyword research is the essential part of any SEO campaign you will get to know the keyword phrases for which your search engine needs to go for. We find you an extensive list of keywords suitable for your website. We keep an eye on top competitors' keywords and their ranking and then derive relevant keywords for your business through the best keyword research tools.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get3.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>ON-Page SEO</h3>
                                    <p>ON-Page SEO is best to optimize your web page that helps your pages rank higher in the search results. Our expert team of SEO experts ensures that your Meta Tags, Heading Tags, GEO-Tags, XML Sitemap, Robots.txt, Speed, Schema and Image Alt Tags optimization meets with standards. We can easily fix any problem for you. Our team is known with knowledge and skills to assure that your site is adequately optimized from top to bottom. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get4.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Content Creation & Optimization</h3>
                                    <p>Other feature that helps to enhance your SEO ranking is website content. We prepare website content and optimize it with a process to ensure that your website is both SEO and user-friendly, enabling it to achieve the right search engine relevancy. Our content optimization process involves keyword or key phrase discovery on a per-page basis, internal linking, keyword or key phrase density implementation, and many more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get5.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Competitive Analysis</h3>
                                    <p>Knowing how to analyze your competitors is the most important step that you would be needing for your overall SEO and keyword strategy. We work closely to validate and identify your top competitors then analyze your position among those competitors and at last, we develop the SEO strategy for best results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>OFF-Page SEO/Link Building</h3>
                                    <p>This includes the techniques that develop your organic traffic as well as the position of your website on the search engine results page. Our expert team works on every aspect of OFF-Page SEO that includes Link Building, Social Media, Guest Blogging, and Local SEO. We give focus on gaining and building high-quality backlinks with fresh and unique content. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custom_design_services padding">
    <div class="container">
       <div class="row align-items-center">
        <div class="col-md-4">
            <div class="custom_design_">
                <img src="{{ asset('assets/image/services-main-hero.webp') }}" alt="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="custom_under_designs">
                <h2>Why Opt for Digi Rush Solutions for SEO Services?</h2>
                <p>At Digi Rush Solutions, we are on a mission to help businesses become better through the improvement of online presence with successful SEO strategies. Here's why we're the perfect solution to your SEO needs:</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Expertise & Experience</h4>
                            <p>The SEO team in our company has seasoned professionals with years of experience optimizing websites across different sectors. Our SEO professionals keep abreast of the latest developments in SEO, algorithm updates, and best practices in ensuring the rank of your website on any given search engine.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Customized SEO strategies</h4>
                            <p>Every business is unique. Our proven SEO strategies are thus tailored to your specific needs, the target audience, and business goals. Whether you want to increase traffic, enhance ranks, or encourage more user engagement, we've got it all covered.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>All-inclusive SEO Services</h4>
                            <p>From keyword research, on-page optimization, and content creation to link building and technical SEO, we offer a full scope of services to boost visibility and organic traffic for your site.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Transparency & Results-Driven Approach</h4>
                            <p> We believe in clear communication and measurable results. With regular reports and in-depth analytics, you will always know how an SEO campaign is performing and how you are being driven forward by this.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div> 
    </div>
</section>

<section class="our_expertise_sec padding">
    <div class="container">
        <div class="heading_our_expertise">
            <h2 class="role_our">Our Methodologies for Organic Results</h2>
            <p>Our methodologies prioritize sustainable, white-hat SEO techniques designed to drive organic growth. We focus on high-quality content, strategic backlinks, and user-centric optimization to deliver long-lasting, impactful results.</p>
                    </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Fetch Requirements</h3>
                        <p>We take a complete technical analysis of your website and then take some important details of your business to start our SEO campaign. For details, we will be requiring the official Email Id of your website, Phone Number, Business Address, Targeted Location, your competitors and what keyword you want to target in your business, Your targeted audience, etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Strategy</h3>
                        <p>We plan as per the Google Webmaster Guidelines and these marketing plans drive organic traffic on your website. We employ innovative techniques to keep you ahead of your customers by generating leads. Our On-page and Off-page SEO plan will help you improve CTR (Click Through Rate) by optimising keywords, meta tags, content, etc., and helps to build authority over your website by giving high authority backlinks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3> Optimization</h3>
                        <p>After formulating a strategy, we begin the optimization process. Our experts understand your target audience and search competition then work on the SEO strategy to rank your site for target keywords on Google search results. Our ON-Page and OFF-Page SEO process refers to all the SEO activities that need to take to attract people to your website.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Reporting</h3>
                        <p>SEO work reports helps to track the performance and the progress of the website's ranking and traffic. You can analyze work via monthly or weekly reports, these reports help you to identify the overall data of your website in the form of different document softwares. With our reports and tracking tools, you can check how our work impacts your online presence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="faq_sec padding">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
             <div class="get_extra_benefit">
                <h2>Frequently Asked Questions</h2>
             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
             <div class="faq_main_home">
                <div class="accordion">
                   <div class="accordion_section">
                      <a href="#accordion-2" class="accordion-section-title">What makes Digi Rush Solutions’ SEO services different from others?<span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-2" class="accordion-section-content" style="display: none;">
                         <p>We offer tailored, data-driven SEO strategies that focus on sustainable growth, long-term results, and using the latest industry practices to enhance online visibility.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-3" class="accordion-section-title">How do you determine the right SEO strategy for my business?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-3" class="accordion-section-content" style="display: none;">
                         <p>We analyze your business, target audience, and competitors, then create a customized SEO plan focused on keyword research, content optimization, and technical improvements for better rankings.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-4" class="accordion-section-title">Can you guarantee top rankings on search engines?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-4" class="accordion-section-content" style="display: none;">
                         <p>No one can guarantee top rankings, but we implement proven SEO strategies to improve visibility, increase traffic, and achieve long-term organic growth.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-5" class="accordion-section-title">How long will it take to see results from your SEO services?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-5" class="accordion-section-content" style="display: none;">
                         <p>SEO results typically take 3-6 months to show, depending on competition and your website’s current status. We focus on sustainable, long-term growth.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-6" class="accordion-section-title">How do I track the progress of my SEO campaign?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-6" class="accordion-section-content" style="display: none;">
                         <p>We provide monthly reports with detailed insights on keyword rankings, organic traffic, and other key metrics using tools like Google Analytics and Search Console.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection