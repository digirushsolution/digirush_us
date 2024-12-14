@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url(image/about_banner_img.png);">
    <div class="page-header-shape"></div>
    <div class="container">
      <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Best Digital Marketing Agency in USA</h1>
                    <p>Get the maximum reach and real results with the top USA digital marketing agency right by your side!
                   </p>
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
                    <h2>Welcome to Digi Rush Solutions – Your Partner in Digital Success</h2>
                    <p>For any business in this fast-growing digital world, it is indispensable to be noticed and make an impact online to grow. Digi Rush Solutions brings you professional digital marketing services under one roof to make your brand stand out the most. As one of the best digital marketing agencies, we undertake work to deliver matchless results that build traffic, generate leads, and increase conversions.
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
                    <img src="image/services-main-hero.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured_services_slider padding"  style="background-image: url(image/featured_background.webp);">
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
                     <img src="image/loan_suvidha (1).png" alt="Maintenance">
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
                     <img src="image/great_media_in (1).png" alt="Maintenance">
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
                     <img src="image/baby_corn_group (1).png" alt="Maintenance">
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
                    <h2>Digi Rush Solutions Core Digital Marketing Services</h2>
                    <p>Digi Rush Soultions - Your Fast Track Partner for Innovative Digital Marketing Strategies That Drive Results!</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_ul_li_flx_service">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="image/we_do_get1.webp" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Keyword Research</h3>
                                    <p>Appropriate keyword research will determine the appropriate terms your audience is searching for which would help Digi Rush Solutions optimize the content, rank higher, and get more targeted traffic at the website.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="image/we_do_get2.webp" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>SEO</h3>
                                    <p>Climb the search rankings with our professional SEO strategies. Implement tried and tested methods that ensure you get a better performing website to climb the ranks and bring genuine organic traffic in the long run.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="image/we_do_get3.webp" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Local SEO</h3>
                                    <p>It optimizes your local digital presence to rank in your region, allowing Digi Rush Solutions to gain customers who are in your locale and compete more strongly in USA markets. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="image/we_do_get4.webp" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>PPC Advertising</h3>
                                    <p>You can gain complete visibility within an instant using pay-per-click advertising. With our data-driven campaigns targeting the right keywords and demographics, we make sure your ad will be seen by those potential customers who are ready to engage.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="image/we_do_get5.webp" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>SMM</h3>
                                    <p>Engage your audience through impactful social media campaigns. We support you in building a strong social media presence and drive engagement around your brand with effective community building. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="image/we_do_get6.webp" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Content Marketing</h3>
                                    <p>Tell your story and attract customers with meaningful content. Our content marketing team creates engaging, SEO-friendly content that educates, inspires, and converts. </p>
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
       <div class="row">
        <div class="col-md-5">
            <div class="custom_design_">
                <img src="image/services-main-hero.webp" alt="">
            </div>
        </div>
        <div class="col-md-7">
            <div class="custom_under_designs">
                <h2>Why Choose Digi Rush Solutions?</h2>
                <p>Our team consists of expertise, innovation, and industry insight, dedicated to developing strategic solutions tailored to meet your unique goals. Digi Rush Solutions is steadfastly committed to driving measurable growth for your brand—from boosting your online presence to building lasting relationships with your audience.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Expertise & Innovation</h4>
                            <p> Our team brings years of experience, combined with innovative solutions to tackle your business challenges.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Results-Driven Strategies</h4>
                            <p>We focus on measurable outcomes, ensuring every action contributes to your brand’s growth and success.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Tailored Solutions</h4>
                            <p>We understand that each business is unique, so we develop custom strategies that align with your specific needs and objectives.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Customer-Centric Approach</h4>
                            <p>Our priority is building lasting relationships by delivering exceptional customer service and creating meaningful connections with your audience.
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
            <h2 class="role_our">Role of Digital Marketing Agency in the USA</h2>
            <p>Building, expansion, and achievement of excellence online is extremely critical for growth and success in the highly competitive U.S. market. Digi Rush Solutions can play that role. Combining service expertise, strategic planning, and cutting-edge technology, Digi Rush Solutions will take the best of it to your business.</p>
          </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Customized Strategy </h3>
                        <p>The uniqueness of each brand, as well as its goals, may differ. We have been able to work out customized strategies with our clients concerning their vision and mission through our clients. Our team will surely ensure that businesses meet their long-term goals with the memorable brand presence and personalized roadmaps.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Targeted Audience Identification and Segmentation</h3>
                        <p>Using sharp insights from data, we can identify relevant segments of audience through demographic, interest, and behavioral perspectives, thereby targeting efforts appropriately to reach those who would most be interested in your brand and help them become some of your best customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3> Comprehensive SEO Services
                        </h3>
                        <p>It's through SEO that makes possible the increase of visibility and generation of natural traffic. Our SEO professionals make use of proven strategies like keyword optimization, on-page improvements, and link-building to help a website attain page one rankings in search-engine results so that prospective customers can easily find your business online.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Social Media Management and Engagement
                        </h3>
                        <p>Social media has been a marvelous tool for engaging audiences. It is, in reality, a tool for community building. Manage social accounts, create interesting content, and run targeted ad campaigns on platforms such as Facebook, Instagram, LinkedIn, and Twitter.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3> Content Creation and Marketing</h3>
                        <p>Quality content is at the core of digital marketing success. We develop high-quality, relevant, engaging content that speaks to your audience. Our content strategies, from blog posts and videos to graphics and infographics, support brand authority and drive conversions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>PPC and Paid Advertising Campaigns</h3>
                        <p>We design and operate effective PPC campaigns that could reach the masses in the shortest span possible. Through Google Ads and social media, we further refine ads with results. Our method maximizes your return on investment by targeting the relevant audience at a cost-effective rate.
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

 <section class="faq_sec padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
             <div class="get_extra_benefit">
                <h2>Frequently Asked Questions</h2>
             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
             <div class="faq_main_home">
                <div class="accordion">
                   <div class="accordion_section">
                      <a href="#accordion-2" class="accordion-section-title"> Which Services Are Provided by Your US Digital Marketing Agency? <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-2" class="accordion-section-content" style="display: none;">
                         <p>Digi Rush Solutions offers SEO, PPC, social media, content marketing, and email campaigns nationwide.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-3" class="accordion-section-title">How Can Digital Marketing Help My Business Grow?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-3" class="accordion-section-content" style="display: none;">
                         <p>Our strategies drive traffic, boost engagement and increase conversions for sustainable business growth.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-4" class="accordion-section-title">What Industries Do You Serve with Your Digital Marketing Services?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-4" class="accordion-section-content" style="display: none;">
                         <p>We serve e-commerce, healthcare, finance, technology, real estate and other diverse industries.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-5" class="accordion-section-title">Do You Provide Customized Digital Marketing Strategies?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-5" class="accordion-section-content" style="display: none;">
                         <p>Yes, Digi Rush Solutions crafts tailored strategies to meet your business goals and audience needs.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-6" class="accordion-section-title"> Can Your Agency Help with Local SEO for USA-Based Businesses?
                      <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-6" class="accordion-section-content" style="display: none;">
                         <p>Absolutely! We optimize for local searches, enhancing your visibility in targeted U.S. locations.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection