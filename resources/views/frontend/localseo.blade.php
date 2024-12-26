@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png') }}">
    <div class="page-header-shape"></div>
    <div class="container">
      <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Best Local SEO Agency</h1>
                    <p>Driving Targeted Traffic and Higher Rankings with Expert Local SEO Strategies</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="banner_us_forms">
                    <div class="get-in_touch_form">
                        <h3>Request a Callback</h3>
                        <form id="callbackForm" action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="cnt_form">
                                <input type="hidden" name="form_type" value="local_seo">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" maxlength="50" required>
                                <span class="error-message" id="nameError"></span>
                            </div>
                            <div class="cnt_form">
                                <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone No" maxlength="11" required>
                                <span class="error-message" id="phoneError"></span>
                            </div>
                            <div class="cnt_form">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email" required>
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
                    <h2>Bring In Local Customers with Expert Local SEO Solutions</h2>
                    <p>Search Engine Optimization SEO optimizes your website and content so that it is easily accessible and understandable for the search engines. How this is more specific is the way local SEO improves how your website appears for a specific area of audience, helping businesses target customers in their geographies. If you want to grow your business locally, then practicing local SEO is essential. Using the proper local keywords will ensure that your website is ranked higher for customers searching for businesses like yours near the specific location. Digi Rush Solutions is a top-rated local SEO agency that specializes in helping small businesses grow by developing customized SEO strategies for local markets.
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

<section class="featured_services_slider padding"  style="background-image: url('{{ asset('assets/image/featured_background.webp') }}">
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
                    <h2>What Our Local SEO Experts Do?</h2>
                    <p>Digi Rush Solutions' local SEO experts make your website search locally. Starting from keyword research to on-page SEO audit to creating content and managing citations on local places, we ensure that your business improves its position in local search results and calls towards your business increase effectively. Here is our process,</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_ul_li_flx_service">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get1.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Website Analysis or Audit</h3>
                                    <p>To be successful in internet marketing, you must monitor and measure the effectiveness of your plans. Our service scrutinizes all features of your website to ensure that everything is working correctly. We ensure that your site contains zero errors, is totally responsive, SEO-friendly, and easy to use. We perform advanced audits of your site to get higher rankings and improved overall performance using the most advanced as well as powerful SEO tools available.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get2.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Local Keyword Research & Targeting</h3>
                                    <p>A good keyword research is the beginning of any SEO strategy. We help you discover the best search terms to target by analyzing your competitors' keywords and rankings. Our team employs advanced keyword research tools to compile a list of relevant, tailored keywords so that your business is rightly attracted by the right people.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get3.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>On-Site/On-Page SEO</h3>
                                    <p>On-page SEO is optimizing individual web pages to improve their rankings in search results. Our SEO specialist ensures that every element on your website, from Meta Tags, Heading Tags, GEO-Tags, XML Sitemap, Robots.txt, website speed, Schema markup to Image Alt Tags, is optimized. We cut issues and ensure that from the top on down, your site is optimized.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get4.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Local Schema Markup</h3>
                                    <p>Schema markup is simply a kind of coding that enables search engines to understand what your website is about, including its relevance towards local searches. It will make it easy to inform the search engines about what your business is all about. The implementation of local schema markup helps improve your website's local SEO so more people can easily find what they're looking for.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get5.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Content Creation & Optimization</h3>
                                    <p>Content is also vital in the improvement of SEO rankings. We create compelling and SEO-friendly content that caters to your website's need for relevance and user-friendliness to search engines. This process generally involves keyword discovery, internal linking, and optimizing keyword density on a per-page basis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Analyzing Your Local Competitors</h3>
                                    <p>Analyzing competitors is one of the essential steps in shaping an effective SEO and keyword strategy. We identify and assess your main competitors, evaluate your standing in the market, and develop tailored SEO strategies to outperform them and achieve the best possible results. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Off-Page SEO</h3>
                                    <p>Off-page SEO can be termed as an improvement of the organic traffic and your position in search engine result pages. We offer a full range of services for off-page SEO, such as Link Building, Social Media engagement, Guest Blogging, and Local SEO, wherein we first give importance to high-quality backlinks and fresh content to develop your online presence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Local Citation Management</h3>
                                    <p>We assist local businesses to claim and maintain their presence across local listings, ensure that customers could easily find and contact you regardless of where they search, and keep your business information accurate and up to date through effective local citation management, which strengthens online visibility.
                                    </p>
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
                <h2>Why Choose Digi Rush Solutions for Local SEO Services?</h2>
                <p>Digi Rush Solutions provide the expert local SEO services tailored to your business needs. With tried and tested strategies, we help you increase local visibility, attract targeted traffic and drive business growth. Our all-encompassing approach ensures that your business stands out in local search.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Expertise in Local Market Optimization</h4>
                            <p>We specialize in the optimization of websites for local search engines so that your business is front and center to the right audience within your defined geographic area.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Personalized SEO Policies</h4>
                            <p>We design customized local SEO strategies that will meet the needs of your unique business, which allows you to stay ahead of local competition.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Successful History</h4>
                            <p>The Digi Rush Solutions has an extensive history of elevating the ranks for a given business for local searches, traffic, and customer engagement within your business for all sizes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Fully Comprehensive Services</h4>
                            <p>From local keyword research to citation management and content optimization, we deliver a comprehensive set of services to help enhance your presence online and grow locally.
                            </p>
                        </div>
                    </div>
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
                      <a href="#accordion-2" class="accordion-section-title">What is Local SEO and how can it help my business?<span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-2" class="accordion-section-content" style="display: none;">
                         <p>Local SEO refers to optimizing the organic results of your website on a local search base. For businesses looking to tap into customer bases within a specific geographic area, this becomes important. Increasing local search rankings will increase visibility, which in turn drives traffic, resulting in higher conversion rates and sales.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-3" class="accordion-section-title">How do we research keywords for local SEO?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-3" class="accordion-section-content" style="display: none;">
                         <p>We thoroughly research advanced SEO tools to determine the best-relevant local keywords for your business, taking into account search volume, user intent, and competitor keyword performance. We then ensure that the keywords you're targeting are quite relevant to your location and industry so you target the correct audience.
                        </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-4" class="accordion-section-title">What is NAP consistency, and why is it so important?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-4" class="accordion-section-content" style="display: none;">
                         <p>NAP, which is the abbreviation for Name, Address, and Phone number, consistency; this is actually making sure that your business information is consistent across all the online directories and websites. This is very important for local SEO as it allows search engines to ensure your credibility and location, hence enriching your rankings in local search.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-5" class="accordion-section-title">What does Digi Rush Solutions do to optimize my website for local search?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-5" class="accordion-section-content" style="display: none;">
                         <p>Our technical SEO team will tweak your website for all on-page elements (meta tags, headings, content), add local schema markup and get it to load super fast. We also optimize for mobile responsiveness - this is hard for search and an absolute killer for user experience.

                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-6" class="accordion-section-title">How long will it take to start seeing results with Local SEO?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-6" class="accordion-section-content" style="display: none;">
                         <p>Local SEO is a long-term approach and results are usually there to notice after 3-6 months. However, the presence of competition, quality of your website, and effectiveness of local SEO efforts will determine the timeline. Nonetheless, we make sure that every step we take will first contribute to gradual and sustainable improvements in local search rankings and visibility.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection