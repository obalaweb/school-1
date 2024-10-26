@extends('layouts.front')

@section('content')
    <x-page-hero title="Contact Us" />

    <!-- Ihbox -->
    <section class="section-lg ihbox-section pbmit-column-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-headingicon">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-kidzieo-icon pbmit-kidzieo-icon-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Mail us 24/7</h2>
                                <div class="pbmit-heading-desc">pbminfo@gmail.com
                                    adminpbm@info.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-headingicon">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-kidzieo-icon pbmit-kidzieo-icon-maps-and-flags"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Our Location</h2>
                                <div class="pbmit-heading-desc">47 Bakery Street, London, UK fort 061019</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="pbmit-ihbox-style-2">
                        <div class="pbmit-ihbox-headingicon">
                            <div class="pbmit-ihbox-icon">
                                <div class="pbmit-ihbox-icon-wrapper">
                                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-kidzieo-icon pbmit-kidzieo-icon-call"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-contents">
                                <h2 class="pbmit-element-title">Call us 24/7</h2>
                                <div class="pbmit-heading-desc">+1 (194)-123-456-789 +1 (610)-123-456-780 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ihbox End -->

    <!-- Contact Form -->
    <section>
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 contact-col-1">
                    <div class="contact-form-leftbox">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">Get in touch</h4>
                            <h2 class="pbmit-title">If you need to message us,please fill out the form</h2>
                            <div class="pbmit-heading-desc">
                                We provide professional services to clients in a particular area of expertise. We have
                                advice on a project or problem.
                            </div>
                        </div>
                        <form method="post" class="contact-form" id="contact-form"
                            action="https://kidzieo-demo.pbminfotech.com/html-demo/send.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="number"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" cols="40" rows="10" class="form-control"
                                        placeholder="How can we help you? Feel free to get in touch!" required></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="pbmit-btn">
                                        <i
                                            class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
                                        <span>Send message</span>
                                    </button>
                                </div>
                                <div class="col-md-12 col-lg-12 message-status"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 contact-col-2">
                    <div class="contact-form-rightbox">
                        <div class="pbmit-img-animation-01 contact-pattern-02-img">
                            <img src="images/contact-pattern-02.png" alt="">
                        </div>
                        <div class="pbmit-heading">
                            <h3>School working Hours</h3>
                        </div>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Monday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <h4 class="pbmit-element-subtitle"> 09:00 am </h4>
                                            <div class="pbmit-heading-desc">19:00 pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Tuesday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <h4 class="pbmit-element-subtitle"> 09:00 am </h4>
                                            <div class="pbmit-heading-desc">19:00 pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Wednesday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <h4 class="pbmit-element-subtitle"> 09:00 am </h4>
                                            <div class="pbmit-heading-desc">19:00 pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Thursday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <h4 class="pbmit-element-subtitle"> 09:00 am </h4>
                                            <div class="pbmit-heading-desc">19:00 pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Friday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <h4 class="pbmit-element-subtitle"> 09:00 am </h4>
                                            <div class="pbmit-heading-desc">19:00 pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Saturday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <h4 class="pbmit-element-subtitle"> 09:00 am </h4>
                                            <div class="pbmit-heading-desc">19:00 pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-miconheading-style-8">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-inner">
                                        <div class="pbmit-ihbox-wrap">
                                            <h2 class="pbmit-element-title"> Sunday </h2>
                                        </div>
                                        <div class="pbmit-content-wrap">
                                            <div class="pbmit-heading-desc">Closed*</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form -->
    <!-- Iframe -->
    <section class="iframe-section">
        <iframe
            src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
            title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
    </section>
    <!-- Iframe End-->
@endsection
