@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png') }}');">
    <div class="page-header-shape"></div>
    <div class="container">
      <div class="row align-items-center">
            <div class="col-md-7">
                <div class="page-header-info">
                    <h1>Professional Web Design Agency in USA </h1>
                    <p>Digirush Solutions - Your Trusted Choice for custom web designs and team of expert designers mainly focusing on business growth.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="banner_us_forms">
                    <div class="get-in_touch_form">
                        <h3>Request a Callback</h3>
                        <form id="callbackForm" action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="cnt_form">
                                <input type="hidden" name="form_type" value="web_des">
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
                    <h2>Expert Web Design Services</h2>
                    <p>At Digirush Solutions, we offer expert web design services, helping businesses build visually appealing, user-friendly websites. Our team focuses on creating designs that are not only attractive but also responsive, ensuring they work well across all devices. We collaborate closely with you to understand your business needs and craft a website that reflects your brand identity. </p>
                    <p>Whether you're launching a new site or revamping an existing one, we ensure it's optimized for speed, performance, and ease of use. With our expertise, we help you establish a strong online presence that attracts and engages your target audience, driving growth and success in the digital world.</p>
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

<section class="our_expertise_sec padding">
    <div class="container">
        <div class="heading_our_expertise">
            <h2>Types of Web Design Services at Digirush Solutions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>WordPress Web Design </h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/wordpress_logo_img.png') }}" alt="" class="wordpress_logo_size">
                            </div>
                       </div>
                        <p>WordPress web design makes creating a stunning website easy. You can achieve a unique, professional look without extensive coding knowledge by leveraging customizable themes and plugins. WordPress offers responsive designs, ensuring your site functions seamlessly on all devices. WordPress provides the tools to enhance user experience and elevate your online presence, whether for personal use or business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Custom Web Design</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/shopify_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>For businesses that require a completely unique online presence, Digirush Solutions offers custom web design services. Unlike template-based designs, a custom design is created specifically for your brand, reflecting your values, goals, and target audience.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Responsive Web Design</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/laravel_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>In an era where mobile internet usage is at an all-time high, having a responsive web design is non-negotiable. Responsive web design ensures that your website adapts to different screen sizes, whether it’s a smartphone, tablet, or desktop.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>E-Commerce Web Design</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/php_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>
                            Effective e-commerce web design is essential for online businesses, as it influences user experience, trust, and sales. Key components include intuitive navigation, high-quality product pages, and a streamlined shopping cart. Secure payment gateways are vital to protect customer data, enhancing trust and encouraging purchases. Additionally, customer support features—like live chat and FAQs—help address questions and improve satisfaction. A successful e-commerce design combines a brand-aligned, visually appealing layout with usability, security, and mobile responsiveness to provide a seamless shopping experience that converts visitors into loyal customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Shopify Web Design</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/angular_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>
                            Shopify web design enables retailers to create appealing, user-friendly online stores with customizable themes and essential e-commerce tools. Its responsive design ensures a smooth experience on any device, increasing customer engagement. With features like secure payments, easy product management, and inventory tracking, Shopify simplifies online sales. This platform empowers businesses to showcase their brand effectively, build customer trust, and drive sales growth in today’s competitive e-commerce environment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>UX/UI Design</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/cake_php_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>User experience (UX) and user interface (UI) design are central to the success of any website. At Digirush Solutions, we carefully consider both UX and UI to deliver a website that’s not only visually appealing but also functional and easy to use.
                        </p>
                        <ul>
                            <li>
                                <p><strong>UX Design</strong> focuses on the user's overall experience, ensuring they can easily navigate the site.
                                </p>
                            </li>
                            <li>
                                <p><strong>UI Design</strong> refers to the design elements users interact with, such as buttons, navigation menus, and forms.

                                </p>
                            </li>
                        </ul>
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
                <h2>Web Design Services What We’re Offering</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4> Free Consultation</h4>
                            <p> <strong>Client Needs Assessment:</strong> Understand the client’s business, target audience, and goals for the website.</p>
                            <p> <strong>Design Preferences:</strong>  Discuss the visual style, color schemes, fonts, and branding requirements.</p>
                            <p> <strong>Competitor Analysis:</strong> Reviewing similar websites for design inspiration and identifying trends in the industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4> User Experience Design</h4>
                            <p> <strong>Wireframing:</strong> Creating basic wireframes (blueprints) to outline page layouts, navigation structure, and content placement.
                            </p>
                            <p> <strong>Information Architecture:</strong>Organizing content in a way that is intuitive and easy to navigate for users.</p>
                            <p> <strong>User Flow:</strong>Mapping out the journey users will take through the website, from landing pages to conversion points (contact forms, product pages).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Design Revisions & Finalization</h4>
                            <p> <strong>Client Feedback Integration:</strong> Revising the design based on client input and ensuring alignment with project goals.
                            </p>
                            <p> <strong>Polishing:</strong>Fine-tuning all visual aspects of the website, ensuring every detail is consistent and aligned with the brand’s aesthetics.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Handoff for Development</h4>
                            <p> <strong>Design Handoff:</strong>
                                Once the design is finalized, provide developers with the necessary assets (images, fonts, design specifications), any other documentation needed to build the site, and ensure clear communication on design intent for accurate implementation.

                            </p>
                         
                        </div>
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
                    <h2>Advantages of Effective Web Design</h2>
                    <p>A proper web design is a key to facilitating retention and involvement of the user. A well-designed website, with intuitive navigation, fast loads, and mobile responsiveness, assures that users can return again because they can easily access your services.</p>
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
                                    <h3>Improving Brand Credibility</h3>
                                    <p>A professionally designed website enhances your brand’s image by conveying reliability and expertise. It fosters trust among visitors, giving them confidence in your products or services and encouraging them to engage further with your business.
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
                                    <h3>Simplifying Navigation and Usability</h3>
                                    <p>Clear, intuitive navigation makes it easy for visitors to quickly locate information, products, or services. A user-friendly design minimizes frustration and enhances the overall experience, leading to higher engagement and improved user satisfaction.
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
                                    <h3>Increasing Site Performance</h3>
                                    <p>Fast-loading pages and optimized functionality ensure that users can access your content without delays. This improves user retention, reduces bounce rates, and enhances the likelihood of conversions, as visitors are more likely to stay longer.
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
                                    <h3>Establishing Trust and Loyalty</h3>
                                    <p>A clean, well-structured website design instills confidence in your audience by offering a seamless browsing experience. This professionalism encourages visitors to trust your brand and return, fostering long-term loyalty and increasing repeat business.
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
        <div class="col-md-8">
            <div class="custom_under_designs">
              <h2> Why Digirush Solutions is the Best Choice for Your Business</h2>
                <p>We offer innovative solutions for business, exceptional customer support, fast turnaround times, and competitive pricing, ensuring your projects succeed effortlessly and efficiently. Here is the list of some reasons why we</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Expert Team</h4>
                            <p>Our company's expert team comprises highly skilled professionals, including the best web designers, with extensive experience in their respective fields. Their deep knowledge allows us to provide innovative and effective solutions tailored to business's unique needs. We prioritize continuous learning and development, ensuring that our team remains at the forefront of industry trends. This expertise enables us to address challenges efficiently and deliver results that exceed expectations, making us a trusted partner for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Quality Assurance</h4>
                            <p>Quality assurance is a fundamental aspect of our service. We have implemented rigorous testing protocols to ensure that every solution we offer meets the highest standards of reliability and performance. Our dedicated QA team meticulously evaluates each project to identify and rectify any issues before delivery. This commitment to quality means you can trust that the results are practical and consistent, ensuring your business operates smoothly at all times.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Scalability</h4>
                            <p>We understand that businesses evolve, and our solutions are designed with scalability. As your business grows, our services can quickly expand and adapt to meet your changing needs. We create flexible solutions that integrate seamlessly with your existing systems while allowing for future enhancements. This approach minimizes disruption and maximizes efficiency, enabling you to focus on growth while we handle the technical complexities of scaling your operations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Customer-Centric Approach</h4>
                            <p>A customer-centric approach is at the core of what we do. We prioritize understanding your specific needs and goals, ensuring that our solutions are tailored to fit your business perfectly. Our team actively engages with you throughout the process, offering support and guidance to optimize outcomes. By listening to your feedback and adjusting our strategies accordingly, we build strong partnerships that result in successful, lasting solutions that truly work for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="custom_design_">
                <img src="{{ asset('assets/image/services-main-hero.webp') }}" alt="">
            </div>
        </div>
       </div> 
    </div>
</section>

<section class="our_expertise_sec padding">
    <div class="container">
        <div class="heading_our_expertise">
            <h2>Why Digirush Solutions is the Right Web Development Partner</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Custom Website Design for Unique Brand Identity</h3>
                        <p>We craft personalized websites that capture your brand’s essence, incorporating unique style and messaging for a memorable digital presence that connects with customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Responsive Web Design for Mobile and Desktop</h3>
                        <p>For desktop and mobile Responsive websites adapt perfectly across devices so that you can present an audience with an awesome experience, and then you keep them on mobile, tablet, and desktop.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>E-commerce Web Site Design and Optimization</h3>
                        <p>We focus on easy navigation, secure payments, and an intuitive shopping experience to add value to online stores, hence retain customers and enhance sales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Ux and Ux design</h3>
                        <p>With such UX/UI designs, we focus on usability, so the website will guide visitors in an effortless way that is intuitive to navigate as well as visually appealing for a productive online experience. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Website Redesign and Modernization</h3>
                        <p>Do you need a fresh look? We redesign old sites with clean and streamlined designs while improving load times and functionality for an enhanced user experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>SEO-Optimized Web Design for Enhanced Visibility</h3>
                        <p>Our sites are built with SEO in mind, featuring clean code, fast load times, and optimized content structure to help your business rank higher and attract organic traffic.
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem suscipit hic atque esse ducimus animi cum, nulla in inventore nobis voluptate odit asperiores voluptatem neque accusamus ea possimus ab ad!</p>
             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
             <div class="faq_main_home">
                <div class="accordion">
                   <div class="accordion_section">
                      <a href="#accordion-2" class="accordion-section-title"> Why is professional web design necessary for businesses?

                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-2" class="accordion-section-content" style="display: none;">
                         <p>Professional web design is essential for businesses as it enhances credibility, improves user experience, and drives conversions through effective branding.

                        </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-3" class="accordion-section-title">What are the benefits of attractive web design for a website?
                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-3" class="accordion-section-content" style="display: none;">
                         <p>Attractive web design captures user attention, fosters engagement, encourages higher conversion rates, and builds brand loyalty by creating a positive impression.
                        </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-4" class="accordion-section-title">Do you provide responsive web design services?

                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-4" class="accordion-section-content" style="display: none;">
                         <p>Yes, we provide responsive web design services that ensure websites function seamlessly across various devices, enhancing user experience and accessibility.
                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-5" class="accordion-section-title">How much time is needed for web design?

                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-5" class="accordion-section-content" style="display: none;">
                         <p> The time needed for web design varies based on project complexity, typically ranging from a few weeks to several months.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-6" class="accordion-section-title">What is the main difference between UX and UI design?
                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-6" class="accordion-section-content" style="display: none;">
                         <p>UX design focuses on overall user experience and satisfaction, while UI design concentrates on the visual elements and functionality of a website.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection