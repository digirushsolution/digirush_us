@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png') }}');">
    <div class="page-header-shape"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
            <div class="page-header-info">
                <h1>Best Web Development Company in USA </h1>
                <p>Professional USA web development company, specialized in custom web development, offers innovative business solutions</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="banner_us_forms">
                <div class="get-in_touch_form">
                    <h3>Request a Callback</h3>
                    <form id="callbackForm" action="{{ route('store') }}" method="POST">
                        @csrf
                       <div class="cnt_form">
                        <input type="hidden" name="form_type" value="web_dev">
                          <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" maxlength="50" >
                          <span class="error-message" id="nameError"></span>
                       </div>
                       <div class="cnt_form">
                          <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone No" maxlength="11" >
                          <span class="error-message" id="phoneError"></span>
                       </div>
                       <div class="cnt_form">
                          <input class="form-control" type="email" id="email" name="email" placeholder="Email" >
                          <span class="error-message" id="emailError"></span>
                       </div>
                       <div class="cnt_form">
                          <textarea class="form-control" id="message" name="message" cols="30" rows="6" placeholder="Your Message" ></textarea>
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
                    <h2>Web Development with Digirush Solutions</h2>
                    <p>Digirush Solutions, the best web development company, offers premier web development services in the USA, specializing in robust digital solutions that enhance your business's online presence. Whether you’re a startup wanting an engaging website or an established business expanding with e-commerce, we bring your vision to life using trending platforms like wordpress, shopify, wix, laravel, and core php. We focus on creating responsive, secure, and scalable websites tailored to your needs, solutions for data-driven platforms, custom CRM development, and real-time web to help your business grow competitively in the digital world.</p>
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
            <h2>Our Expertise in Key Platforms and Technologies</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>WordPress Development</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/wordpress_logo_img.png') }}" alt="" class="wordpress_logo_size">
                            </div>
                       </div>
                        <p>Our phenomenal WordPress development offers the best of the web. We are your number one agency in web development for designing amazing, bumping brands that bring out the best in your unique vision. Our warm team ensures that everything will work right and look good.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Shopify Development</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/shopify_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>Shopify development empowers your online business to reach new heights! Our team specializes in crafting custom e-commerce solutions that are user-friendly and visually captivating. From unique themes to smooth payment integration, we ensure your store shines in the digital marketplace. Enhance your brand—let's get started today.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Laravel</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/laravel_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>Laravel is a PHP framework renowned for its elegant syntax and user-friendly features, making it a favourite for developing complex backend systems. By leveraging Laravel’s MVC architecture, we streamline web application development, utilizing its built-in tools for routing, authentication, and database management to ensure a smooth and efficient process.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Core PHP Development</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/php_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>Core PHP development is essential for creating dynamic and robust web applications. Our experienced team leverages PHP's flexibility and efficiency to build custom solutions tailored to your needs. From server-side scripting to database integration, we ensure high performance and security, enabling your website to thrive in today’s competitive digital landscape.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Angular</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/angular_logo_img.png') }}" alt="">
                            </div>
                       </div>
                      
                        <p>This refers to using Angular to develop highly interactive, real-time, one-page applications. Our web developers use this technology to obtain modularity and reusability as provided by component-based architecture and ensure that applications are high-performance, maintainable, and smooth for clients to use.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>CakePHP</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/cake_php_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        
                        <p>By following the MVC pattern, we enhance productivity while ensuring a robust website structure. Our expertise includes built-in tools for database management and user authentication, guaranteeing the success of your project.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>CodeIgniter</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/codelgniter_logo_img.png') }}" alt="">
                            </div>
                       </div>
                       
                        <p>We use CodeIgniter purely because of its lightweight and efficient approach to PHP development. That framework just enables us to create fast, lightweight applications with fewer configurations. In any project, we also ensure reliable performance and add all the necessary libraries for security, session management, and database interaction tailored to your needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>React</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/react_logo_img.png') }}" alt="" class="wordpress_logo_size">
                            </div>
                       </div>
                        <p>We develop interactive, modern web application user interfaces using React. With reusable elements and highly efficient state management, our solutions deliver extremely fluid, high-performance, responsive user experiences on any device.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Node.js</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/node_logo_img.png') }}" alt="">
                            </div>
                       </div>

                        <p>With Node.js non-blocking architecture, we deliver high-performance solutions capable of real-time data processing. This enables our clients to engage users effectively and efficiently while ensuring robustness in web development.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                    
                        <div class="flex_logo_expertise">
                            <h3>Wix</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/wix_logo_img.png') }}" alt="">
                            </div>
                       </div>
                        <p>Wix web development became a lifeline for a small business owner who dreamed of an engaging online presence. With our team guiding them, they navigated customizing templates, integrating valuable apps, and optimizing for search engines. The result was a captivating website, turning their vision into reality and helping them connect with customers effortlessly.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <div class="flex_logo_expertise">
                            <h3>Responsivenes Web Development</h3>
                            <div class="img_logo_wordpress">
                                <img src="{{ asset('assets/image/responsive_logo_img.png') }}" alt="">
                            </div>
                       </div>
                  
                        <p>We are into top-class responsive web development, and our service will be delivered to our clients. Our websites are user-friendly, mobile-friendly, and accommodate any device to provide the best browsing experience. Scalability, performance, and high-performance solutions help businesses grow and thrive in the internet world.

                        </p>
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
                <h2>What We Do During Our Website Development Process</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Custom Website Development</h4>
                            <p>Custom website development that meets your company's needs, improves user experience, and increases engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Responsive Web Development</h4>
                            <p>Our responsive development process optimizes your website for all devices, increasing usability and reach.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Testing & Launch</h4>
                            <p>Thorough testing and careful launch assist ensure that your website works smoothly across all devices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Web Maintenance & Support</h4>
                            <p>Reliable online maintenance and support services to keep your website functional and secure.
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
                    <h2>Benefits of Web Development Services</h2>
                    <p>A strong website builds trust and credibility with your audience. We focus on performance, speed, and user experience to deliver outstanding results. Whether you’re launching a new business or upgrading an existing site, Digirush Solutions provides expert web development in the USA to meet your goals.</p>
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
                                    <h3>Enhanced Online Presence</h3>
                                    <p>Web development enables businesses to establish a solid online presence, reach a global audience, and improve brand visibility, which drives traffic, sales, and customer engagement.
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
                                    <h3> Increased Accessibility</h3>
                                    <p>A well-designed website ensures your business is accessible 24/7, allowing customers to access information, products, and services anytime, anywhere. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get3.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3>Improved User Experience</h3>
                                    <p>Quality web development focuses on user-centric design, ensuring faster loading times, intuitive navigation, and mobile responsiveness, which leads to higher customer satisfaction and retention.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main_flx_under">
                                <div class="img_flx">
                                    <img src="{{ asset('assets/image/we_do_get4.webp') }}" alt="">
                                </div>
                                <div class="main_flx_txt">
                                    <h3> Competitive Advantage</h3>
                                    <p>Investing in web development gives businesses a competitive edge by enabling them to stay updated with modern technologies, enhance functionality, and adapt quickly to market changes.
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
                <span>Custom Designs Services</span>
                <h2>Why Choose Us</h2>
                <p>A good website has the prime importance of building trust with your audience and fosters credibility. At Digi Rush Solutions, we focus on performance and speed, and user experience so you will not just get results. Whether you are launching a new business or upgrading your existing site, our USA-based web development services can tackle all of your business needs.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Strong Online Presence</h4>
                            <p>Our Web development service shall help you develop a robust online presence, expand your reach to other parts of the world, improve visibility, increase traffic with elevated customer engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Accessibility is round the clock.</h4>
                            <p>We design a website that may be accessed 24/7 by customers so that they can see your products, services, and all information at any point in time—24 hours a day, anywhere in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4> Excellent User Experience</h4>
                            <p>Easy navigation should always be on our headsets: We ensure you will receive a website that is fast, easy to navigate, and which works perfectly in cross-device, hence customers happy and will stay with you for longer periods.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main_services_dolor">
                        <div class="full_services">
                            <h4>Stay Ahead of Competition</h4>
                            <p>With advanced web development, always stay ahead of this dynamic changing market. Our solutions assure that you remain in the latest pace of technology to enjoy more effectiveness and flexibility in your website</p>
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
                        <h3>Expertise in Custom Web Solutions</h3>
                        <p>We specialize in creating customized web pages to meet the needs of your business. We can help you launch from a simple personal blog, a portfolio, or an advanced eCommerce site, as our experienced developers present solutions usable, consistent, good-to-go, and tailored to meet your business objectives for highlighting your unique site.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3> User-Centered Design</h3>
                        <p>We believe in intuitive and engaging websites. Our design process focuses on intuitive user experience, clear navigation, fast loading, and excellent overall visiting experiences. We ensure your website not only looks beautiful but is also easy to use and brings in higher engagement or conversion rates.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>SEO-Friendly Development</h3>
                        <p>A successful website lies in visibility. We incorporate proper SEO practices into every step of the development process so that your site is search-engine-friendly right from the start. Focusing on on-page optimization, fast loading times, and mobile optimization, we can help improve your site's positioning and visibility, thus gaining organic traffic and bringing in more visitors and potential customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Mobile First Approach</h3>
                        <p>With mobile traffic now forming the majority of internet usage, we are right on top of ensuring that your website delivers an exceptional experience on every device: from smartphones to tablets and desktops, our mobile-first design enables complete responsiveness, rapid loading, and supreme viewing on every screen; thus helping you in reaching a broader clientele and also improves customer satisfaction.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>End-to-End Solutions</h3>
                        <p>Our company offers web development services from scratch. From concept to design, development, testing, deployment, and ongoing updates, we’re right next to you, ensuring your website runs smoothly so you can focus on other essential areas of your business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="our_expertise_main">
                    <div class="under_cntent_expertise">
                        <h3>Prompt delivery and support</h3>
                        <p>We understand that deadlines are the lifeline of this fast-paced digital world. Our team works efficiently to ensure your site is delivered on time without compromising quality. Our customer service team is also always available to assist you with any issues. We are committed to ensuring smooth long-term operation while catering to your business needs

                        </p>
                    </div>
                </div>
            </div>
                         
        </div>
    </div>
</section>
<!-- <section class="web_design_services padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="under_webdesign_services">
                    <h2>Web Design Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum voluptatem sapiente excepturi necessitatibus deleniti alias inventore nulla molestias, quisquam reprehenderit aliquid rerum consequuntur soluta unde perspiciatis explicabo ad harum doloremque.</p>
                    <ul>
                        <li>
                             <a href="#">WordPress Web Design</a>
                        </li>
                        <li>
                            <a href="#">Website Redesign Services</a>
                        </li>
                        <li>
                            <a href="#">Responsive Website Design</a>
                        </li>
                        <li>
                            <a href="#">UI UX Web Design</a>
                        </li>
                        <li>
                            <a href="#">Shopify Web Design</a>
                        </li>
                        <li>
                            <a href="#">Magento Web Design</a>
                        </li>
                        <li>
                            <a href="#">Corporate Blog Design/a>
                        </li>
                        <li>
                            <a href="#">CMS Web Design</a>
                        </li>
                        <li>
                            <a href="#">UI UX Analysis</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="web_design_services_img">
                    <img src="image/LL_Services-About-LL.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->

 <section class="faq_sec padding">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
             <div class="get_extra_benefit">
                                    <h2>Frequently Asked Questions</h2>
                <p>At Digi Rush Solutions, we believe in delivering more than exceptional digital services. When you partner with us, you Gain exclusive benefits designed to enhance your experience and maximize your success. You'll also receive personalized support from our dedicated team. You'll also get priority access to new features and tailored insights to help your business thrive digitally.</p>

             </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
             <div class="faq_main_home">
                <div class="accordion">
                   <div class="accordion_section">
                      <a href="#accordion-2" class="accordion-section-title"> What is web development and why do businesses need it?
                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-2" class="accordion-section-content" style="display: none;">
                         <p>Web Development is the process of creating websites and is essential to boost business visibility and growth.
                        </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-3" class="accordion-section-title">Who provides the best web development services?
                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-3" class="accordion-section-content" style="display: none;">
                         <p> DigiRush Solutions offers top-tier web development services with expertise and proven results.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-4" class="accordion-section-title">How does web Development increase the online presence of a business?

                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-4" class="accordion-section-content" style="display: none;">
                         <p>Enhances your online presence through functional, user-friendly web development.

                         </p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-5" class="accordion-section-title">Where can I find the best web development services?
                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-5" class="accordion-section-content" style="display: none;">
                         <p> Find the best web development services at DigiRush Solutions, where quality meets innovation.</p>
                      </div>
                   </div>
                   <div class="accordion_section">
                      <a href="#accordion-6" class="accordion-section-title">Do you provide web maintenance and support?
                        <span
                         class="plus">+</span><span class="minus">-</span></a>
                      <div id="accordion-6" class="accordion-section-content" style="display: none;">
                         <p>Yes, DigiRush Solutions provides reliable web maintenance and ongoing support.</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection