@extends('include.front.app')
@section('content')
<section class="about_banner_sec" style="background-image: url('{{ asset('assets/image/about_banner_img.png') }}');">
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
                    <form action="#" method="post" class="contact-form">
                        <label for="name">Name</label>
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

<div class="case_single">
    <div class="container">
        <h1>eCommerce website built for advanced steel products manufacturer – Channel and Tray</h1>
        <div class="project_img">
            <a href="#"><img src="{{ asset('assets/image/1726754715_banner.jpg') }}" alt="best seo services in india"></a>
        </div>
        <div class="project_content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione assumenda minima quam quae quasi itaque modi quia, laborum possimus. Dignissimos facere maiores fugit illo qui ea expedita natus deleniti doloribus et, voluptatum quaerat quod necessitatibus laudantium corporis reprehenderit ratione unde in, quis est nostrum, non ipsum ad exercitationem. Nemo eius quia rem nobis delectus, architecto, sed voluptatibus ratione excepturi odio magnam, illum aspernatur quod? Tempore hic nulla dolorum, ut voluptatum alias accusamus perferendis dolorem ad. Impedit iure a iste eveniet nisi, veniam voluptas officiis blanditiis consectetur praesentium unde odio debitis, ipsum voluptatem delectus accusamus quis maiores quo. Dolorum incidunt labore eos unde consectetur odit odio id amet, totam, libero ullam, tempore et modi provident voluptas nihil! Amet, in dolorem! Repudiandae recusandae voluptatibus, a voluptate voluptatem aperiam neque velit modi debitis sunt repellendus inventore sequi mollitia quidem esse temporibus numquam laudantium. Fugiat voluptas cupiditate laboriosam sapiente veniam quidem incidunt eligendi, distinctio mollitia, obcaecati nobis dignissimos ipsum error soluta, ullam ex suscipit eaque itaque provident exercitationem quam molestias animi necessitatibus ea! Illo, quaerat cumque ratione, adipisci pariatur vel possimus ea consequatur perferendis nisi omnis culpa dolor laboriosam, laudantium sed! Sint ipsa dolore eos iure enim dolor, libero distinctio ab dignissimos magnam soluta atque hic nemo, voluptas amet, minima architecto harum. Ullam nobis nulla ipsa cupiditate aut saepe quidem facere voluptate laboriosam iste corrupti ut sunt vel, voluptatem dolor, maiores sint esse impedit architecto. Ab nam, rerum impedit maxime veritatis ducimus laboriosam nemo voluptate, odit eveniet aliquam beatae repellat officiis obcaecati qui excepturi dolore voluptatem aperiam laudantium ex blanditiis molestiae rem? Quo reprehenderit consequuntur in voluptatum.
        </div>



    </div>

</div>
@endsection