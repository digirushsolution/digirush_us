@extends('include.front.app')
@section('content')
<section class="about-section padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding wow fade-in-right" data-wow-delay="200ms" style=" visibility: visible; animation-delay: 200ms;animation-name: fade-in-right;">
                <div class="section-heading mb-20 about_phome sub_heading_response default-side-heading">
                    <span>About Our Company</span>
                    <h2> Empowering Your Digital Success with Expertise and Innovation </h2>
                </div>
                <div class="about-content">
                    <p>At Digi Rush Solutions, we are dedicated to providing outstanding web and digital solutions tailored to your unique business needs. As the best digital marketing agency based in the US, our team combines creativity and technical expertise to deliver exceptional results. We specialize in web development, SEO, and digital marketing, offering innovative strategies that enhance your online presence and drive growth.
                    </p>
                    <p>Our commitment to quality and customer satisfaction ensures that we meet and exceed your expectations. Whether you need a stunning website from the best web development company in the USA or a comprehensive digital marketing plan from a leading technical SEO agency, we’re here to help you achieve your goals and succeed in the digital world.
                    </p>

                    <div class="nv_tab_bout">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Vision</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Value</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="bootom_tab_txt">
                                    <p>Digi Rush Solutions will be en route to enabling businesses through innovative SEO strategies to receive as much on the internet for maximum growth in competitive digital landscapes.</p>
                                 </div>
                        </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="bootom_tab_txt">
                                    <p>Imagine a world where each small business unit can look at online platforms and breathe happily. Think of the world where each organization, no matter the size, gets through some effective and sustainable digital marketing solutions.</p>
                                 </div></div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="bootom_tab_txt">
                                    <p>So, we value integrity, creativity, and collaboration, striving for excellence in every project, because we believe that a good relationship with clients is equally important to our relationship with our team members. Your success is our highest priority.</p>
                                 </div></div>
                          </div>
                    </div>
                   </div>
            </div>
            <div class="col-lg-6 sm-padding wow fade-in-left" data-wow-delay="200ms" style=" visibility: visible;
            animation-delay: 200ms; animation-name: fade-in-left;">
               <div class="about-thumb">
                   <img src="{{ asset('assets/image/about_our_company.jpg') }}" alt="technical seo agency​">
               </div>
           </div>
        </div>
    </div>
</section>

<section class="about-section padding pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding wow fade-in-left" data-wow-delay="200ms" style=" visibility: visible;
            animation-delay: 200ms; animation-name: fade-in-left;">
               <div class="about-thumb">
                   <img src="{{ asset('assets/image/about_our_company.jpg') }}" alt="website development company in usa
                   ">
               </div>
           </div>
            <div class="col-lg-6 sm-padding wow fade-in-right" data-wow-delay="200ms" style=" visibility: visible; animation-delay: 200ms;animation-name: fade-in-right;">
                <div class="section-heading mb-20 about_phome sub_heading_response default-side-heading">
                   <span>Overview of Digi Rush Solutions:</span>
                    <h2> Leading Digital Marketing and Web Development​ Expertise</h2>
                </div>
                <div class="about-content">
                    <p>We specialized in delivering cutting edge digital marketing and website development services unique to the needs of each client at Digi Rush Solutions. Being based in the USA, our team of experts working with innovative strategies and data backed insights are here to help boost your presence and support sustainable growth online.
                    </p>
                    <p>It's based on the sense of how algorithms in a search engine work and the good understanding of user behavior, your site will rank highly, but also it will be good at providing the best user experience. Our attention ranges from full SEO audits to responsive web development and all other aspects within your digital strategy.
                    </p>
                    <p>We take pride in the quality-driven transparency of our customer satisfaction level. At Digi Rush Solutions, we will help you set the bar high with your digital journey from small businesses to established brands and just about anything in between. Let's build your success together.</p>

                  
                </div>
            </div>
      
        </div>
    </div>
</section>

 <section class="about_why_choose padding pt-0">
    <div class="container">
       <div class="heading_about_choose">
          <h2>Why Customer Choose Us</h2>
          <p>We are Producing Special Service for client</p>
       </div>
       <div class="row justify-content-center">
          <div class="col-md-4 mb-4">
             <div class="under_customer_choose">
                <div class="img_about_customer">
                   <img src="{{ asset('assets/image/why_chose_custom_1.png') }}" alt="technical seo agency&ZeroWidthSpace;">
                </div>
                <div class="txt_about_why">
                   <h2>Client Initiation and Analysis</h2>
                   <p>Initiation stage is the starting point of the task. In this stage, the thought for the task is researched and described. The focus of this stage is to examine the feasibility of the project.</p>
                </div>
             </div>
          </div>
          <div class="col-md-4 mb-4">
             <div class="under_customer_choose">
                <div class="img_about_customer">
                   <img src="{{ asset('assets/image/why_chose_custom_2.png') }}" alt="technical seo agency&ZeroWidthSpace;">
                </div>
                <div class="txt_about_why">
                   <h2>Project Strategy and Mapping</h2>
                   <p>A process map is a simple realistic representation that demonstrates a valid, conditions and logical outcome relationship between strategic objectives. It is one of the most impressive components in the good scorecard strategy since it is utilized for the rapid communication of how the organization creates value.
                   </p>
                </div>
             </div>
          </div>
          <div class="col-md-4 mb-4">
             <div class="under_customer_choose">
                <div class="img_about_customer">
                   <img src="{{ asset('assets/image/why_chose_custom_3.png') }}" alt="technical seo agency&ZeroWidthSpace;">
                </div>
                <div class="txt_about_why">
                   <h2>UI/UX Designing & Wireframing</h2>
                   <p>A wireframe is a layout of a web page, which shows what interface elements will exist on key pages. It forms part of an important process in interaction design.</p>
                </div>
             </div>
          </div>
          <div class="col-md-4 mb-4">
             <div class="under_customer_choose">
                <div class="img_about_customer">
                   <img src="{{ asset('assets/image/why_chose_custom_4.png') }}" alt="technical seo agency&ZeroWidthSpace;">
                </div>
                <div class="txt_about_why">
                   <h2>Project Development and Deployment</h2>
                   <p>Due to programming development, Planning means preparing an application for deployment. You may check if the product is flawless and bugs-free, thereby ensuring a smooth client experience.</p>
                </div>
             </div>
          </div>
          <div class="col-md-4 mb-4">
             <div class="under_customer_choose">
                <div class="img_about_customer">
                   <img src="{{ asset('assets/image/why_chose_custom_5.png') }}" alt="technical seo agency&ZeroWidthSpace;">
                </div>
                <div class="txt_about_why">
                   <h2>Testing and Launching</h2>
                   <p>We test the final product and satisfy all the requirements which are needed before launch. After all this, we launch the app or project to the clients.</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

<section class="counter-wrapper">
    <div class="counter-inner">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="py-5 text-center text-white">
                <div class="under_counter_border">
                    <div class="py-2 count">
                        <span id="count1">107</span>
                    </div>
                    <div>
                        Lorem Ipsum HQs
                    </div>
                </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="py-5 text-center text-white">
                        <div class="under_counter_border">
                         <div class="py-2 count">
                            <span id="count2">1000</span>+
                        </div>
                        <div>
                            Lorem Ipsum Peoples
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="py-5 text-center text-white">
                        <div class="under_counter_border">
                        <div class="py-2 count">
                            <span id="count3">21</span>
                        </div>
                        <div>
                            Lorem Ipsum Awards
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="py-5 text-center text-white">
                        <div class="under_counter_border">
                        <div class="py-2 count">
                            $<span id="count4">56</span>m
                        </div>
                        <div>
                            Lorem Ipsum Revenue
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection