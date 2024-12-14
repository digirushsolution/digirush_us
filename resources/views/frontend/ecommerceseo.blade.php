@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png') }}');">
    <div class="page-header-shape"></div>
    <div class="container">
      <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Ecommerce SEO Agency</h1>
                    <p>Expert Strategies to Skyrocket Your eCommerce Visibility and Conversions</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="banner_us_forms">
                    <div class="get-in_touch_form">
                        <h3>Request a Callback</h3>
                        <form id="callbackForm">
                            <div class="cnt_form">
                                <input class="form-control" type="text" id="name" placeholder="Your Name" maxlength="50" required>
                                <span class="error-message" id="nameError"></span>
                            </div>
                            <div class="cnt_form">
                                <input class="form-control" type="tel" id="phone" placeholder="Phone No" maxlength="11" required>
                                <span class="error-message" id="phoneError"></span>
                            </div>
                            <div class="cnt_form">
                                <input class="form-control" type="email" id="email" placeholder="Email" required>
                                <span class="error-message" id="emailError"></span>
                            </div>
                            <div class="cnt_form">
                                <textarea class="form-control" id="message" cols="30" rows="6" placeholder="Your Message" required></textarea>
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
                    <h2>Key Benefits of Partnering with Digi Rush Solutions eCommerce SEO Team</h2>
                    <p>Partnering with our expert eCommerce SEO team offers numerous advantages. We increase your store’s visibility through targeted SEO strategies, driving more organic traffic. Our focus on user experience, site speed, and mobile optimization ensures higher engagement and reduced bounce rates. By optimizing product pages and targeting high-intent keywords, we boost conversion rates. Additionally, our technical expertise ensures your site performs optimally, delivering long-term, sustainable growth for your online store.
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
                    <h2>Proven Techniques to Boost Your Online Store's Visibility and Rankings</h2>
                    <p>To stand out in the crowded eCommerce marketplace, it's essential to implement effective SEO techniques that improve your online store’s visibility and search engine rankings. Here are proven strategies that can help your eCommerce site rank higher and attract more customers.</p>
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
                                    <h3>Comprehensive Keyword Research</h3>
                                    <p>Keyword research is the cornerstone of any successful eCommerce SEO strategy. Identifying the right keywords—those with high search volume and strong intent—is essential for driving targeted traffic. Use tools like Google Keyword Planner or SEMrush to find product-related search terms, long-tail keywords, and questions that potential customers are searching for. Focus on both short-tail and long-tail keywords to target broader searches and more specific, highly-converting queries.
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
                                    <h3>Optimize Product Pages</h3>
                                    <p>Product pages are the heart of any eCommerce site. Optimizing these pages for SEO ensures they rank higher in search results and effectively convert visitors into buyers.
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
                                    <h3>Mobile Optimization</h3>
                                    <p>With mobile commerce on the rise, ensuring your eCommerce store is mobile-friendly is crucial. Google uses mobile-first indexing, meaning the mobile version of your site is prioritized in rankings. Implement a responsive design, optimize images, and ensure fast loading times to provide a smooth experience for mobile users. This not only helps with rankings but also improves user engagement and conversions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get4.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Site Speed Optimization</h3>
                                    <p>Page speed is a critical ranking factor for Google and a key part of providing a good user experience. Slow-loading pages can lead to high bounce rates and low conversions. 
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
                                    <h3> Implement Structured Data (Schema Markup)</h3>
                                    <p>Schema markup helps search engines understand your website’s content better and can improve visibility in search results by enabling rich snippets. By adding structured data to your product pages (such as price, ratings, availability, and product descriptions), you increase the chances of showing up in rich search results, which can improve click-through rates (CTR).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Content Marketing and Blogging</h3>
                                    <p>Content marketing plays an essential role in boosting visibility. Regularly publishing high-quality, informative blog posts related to your products or industry helps establish your store as an authority. Content like buying guides, how-to articles, and customer testimonials not only provide value but also target long-tail keywords, driving more organic traffic to your site.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Link Building and Backlinks</h3>
                                    <p>Building high-quality backlinks from reputable websites can significantly improve your store's domain authority and search rankings. Strategies include guest blogging, influencer partnerships, and creating shareable content like infographics. Aim for natural, relevant backlinks that add value to both users and search engines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get6.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Social Media Integration</h3>
                                    <p>While social media signals don't directly impact rankings, they can drive traffic and increase brand visibility. Promoting your products on platforms like Facebook, Instagram, and Pinterest creates opportunities for engagement and social proof. Linking your eCommerce site to your social profiles can also generate additional backlinks, helping your SEO efforts.</p>
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
                <h2>Why Digi Rush Solutions is Your Ideal SEO Partner</h2>
                <p>Digi Rush Solutions is the perfect SEO company for your business. Here's why:
                    </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Expertise and Experience</h4>
                            <p> Our team has extensive experience handling diverse SEO challenges, with proven results in eCommerce and other industries.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Custom SEO Strategies</h4>
                            <p>We craft custom SEO strategies based on your business' needs so that there is a greater chance of actual ranking improvements and more targeted traffic.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Data-Driven Approach</h4>
                            <p>All of our strategies are rooted in analytics and research to assure measurable and sustainable growth.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Transparent Reporting</h4>
                            <p>We provide clear, regular reports to track progress and optimize strategies for ongoing success.
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
                      <a href="#accordion-2" class="accordion-section-title">What is eCommerce SEO?<span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-2" class="accordion-section-content" style="display: none;">
                         <p>eCommerce SEO involves optimizing your online store to rank higher in search engine results, driving organic traffic. It focuses on improving product pages, site speed, mobile usability, and technical aspects like structured data.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-3" class="accordion-section-title">Why is site speed important for eCommerce SEO?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-3" class="accordion-section-content" style="display: none;">
                         <p>Faster site speed improves user experience, reduces bounce rates, and helps with better rankings on search engines. Slow websites can hurt both SEO and conversions.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-4" class="accordion-section-title">How does mobile optimization impact eCommerce SEO?
                      <span  class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-4" class="accordion-section-content" style="display: none;">
                         <p>With mobile-first indexing, Google prioritizes the mobile version of your website. Mobile optimization is crucial for improving rankings and user engagement.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-5" class="accordion-section-title">What is structured data in eCommerce SEO?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-5" class="accordion-section-content" style="display: none;">
                         <p>Structured data is markup added to product pages to help search engines understand your content, leading to enhanced visibility and rich snippets in search results.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-6" class="accordion-section-title"> How does link building help eCommerce SEO?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-6" class="accordion-section-content" style="display: none;">
                         <p>Link building increases your site's authority by acquiring high-quality backlinks. This can improve your search engine rankings and drive more organic traffic to your online store.
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection