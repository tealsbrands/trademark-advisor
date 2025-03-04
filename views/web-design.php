<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- <title>Affordable E-Book Writing Services - Pro Book Publishing</title> -->
    <title>Trademar Adivsor</title>
    <meta name="description" content=" It’s time to become a published author. Pro Book Publishing offer professional book writing services – second to none. Hire our experienced writers now.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include('includes/head.php'); ?>
</head>


<body>


    <?php include('includes/header.php'); ?>

    <section id="service-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-form">
                        <div class="modal-lines">
                            <h2 class="modal-heading">Request an <span>Appointment</span></h2>
                            <p class="modal-subheading">Signup and get free consultation</p>
                        </div>
                        <form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
                            <div class="row">
                                <div class="">
                                    <fieldset>
                                        <input placeholder="Your Name" type="text" tabindex="1" name="name" required>
                                    </fieldset>
                                </div>
                                <div class="">
                                    <fieldset>
                                        <input placeholder="Email Address" type="email" tabindex="2" name="email" required>
                                    </fieldset>
                                </div>
                                <div class="">
                                    <fieldset>
                                        <input placeholder="Phone" type="tel" tabindex="3" name="phone" required>
                                    </fieldset>
                                </div>
                                <div class="">
                                    <fieldset>
                                        <textarea placeholder="Project description" tabindex="5" name="brief" required rows="4" cols="20" class="modal-text"></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <div class="modal-button-div">
                                            <button name="submit" class="amz-button" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <input type="hidden" name="route" value="form/">
                            <input type="hidden" name="brand" value="AmzInventors">
                            <input type="hidden" name="token" value="<?= $token; ?>">
                            <input type="hidden" name="tag" value="sidepanel form in landing-page">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">
                            <input type="hidden" class="jun" name="gender">
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-wrapper">
                        <h2>Safeguard Your Creative Work with<br> <span>Copyright Registration for Just $99</span></h2>
                        <ul>
                            <li>Register with USCO Today and Secure Your Rights!</li>
                            <li>Perfect for Authors, Singers, Content Creators & More</li>
                            <li>Fast & Hassle-Free Registration Process</li>
                        </ul>
                        <div class="hero-buttons">
                            <a class="amz-button quote-button" href="javascript:;"><i class="fa-solid fa-comment"></i>Get Started</a>
                            <a class="amz-button" href="#"> <i class="fa-solid fa-phone"></i>+1 222-345-6789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="trademark-service">
        <div class="container">
            <div class="section-title text-center">
                <h2>What Does <span>Copyright Protect</span>?</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Books</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Songs</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Photos</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Art</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Films</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>And Other Tangible Creative Works</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Brand Names & Slogans</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Inventions & Product Design</p>
                    </div>
                    <div class="checklist">
                        <img src="/assets/images/checked.png" alt="" class="img-fluid">
                        <p>Ideas Only (Not in Tangible Form)</p>
                    </div>
                    <div class="text-wrapper">
                        <p>Safeguard Your Brand’s Identity with Comprehensive Trademark Protection for Your Name & Logo, Ensuring Exclusive Rights and Legal Security.</p>
                        <span>See Our:</span>
                    </div>
                    <div class="btn-parent">
                        <a href="#" class="bton">Trademark service</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="why-choose-us">
        <div class="container">
            <div class="why-choose-content text-center" data-aos="fade-right" data-aos-duration="2000">
                <h3>Why Choose Us?</h3>
                <h2>Elevate Your E-commerce Game<br> with<span> Trademark Advisors</span></h2>
            </div>

            <div class=" mt-5">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="aa" data-bs-toggle="tab" data-bs-target="#aa" type="button" role="tab" aria-controls="aa" aria-selected="true">Trademark Registration</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ab" data-bs-toggle="tab" data-bs-target="#ab" type="button" role="tab" aria-controls="ab" aria-selected="false">Copyright Registration</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ac" data-bs-toggle="tab" data-bs-target="#ac" type="button" role="tab" aria-controls="ac" aria-selected="false">E-Selling Platforms</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ad" data-bs-toggle="tab" data-bs-target="#ad" type="button" role="tab" aria-controls="ad" aria-selected="false">Trademark Search</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="aa" role="tabpanel" aria-labelledby="aa">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Gold</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Platinum</h3>
                                        <h4 class="sale-rate">$149</h4>
                                        <h4 class="act-rate">$298</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Direct Hit Search</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Diamond</h3>
                                        <h4 class="sale-rate">$199</h4>
                                        <h4 class="act-rate">$398</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Direct Hit Search</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Elite</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Cease and Desist Letter</li>
                                            <li>Trademark Monitoring</li>
                                            <li>Refusal Risk Meter</li>
                                            <li>Direct Hit Search</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="ab">
                    <div class="tab-pane fade show" id="ab" role="tabpanel" aria-labelledby="ab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Gold</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Platinum</h3>
                                        <h4 class="sale-rate">$149</h4>
                                        <h4 class="act-rate">$298</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Direct Hit Search</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Diamond</h3>
                                        <h4 class="sale-rate">$199</h4>
                                        <h4 class="act-rate">$398</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Direct Hit Search</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Elite</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Cease and Desist Letter</li>
                                            <li>Trademark Monitoring</li>
                                            <li>Refusal Risk Meter</li>
                                            <li>Direct Hit Search</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="ac">
                    <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Gold</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Platinum</h3>
                                        <h4 class="sale-rate">$149</h4>
                                        <h4 class="act-rate">$298</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Direct Hit Search</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Diamond</h3>
                                        <h4 class="sale-rate">$199</h4>
                                        <h4 class="act-rate">$398</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Direct Hit Search</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Elite</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Cease and Desist Letter</li>
                                            <li>Trademark Monitoring</li>
                                            <li>Refusal Risk Meter</li>
                                            <li>Direct Hit Search</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="ad">
                    <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Gold</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Platinum</h3>
                                        <h4 class="sale-rate">$149</h4>
                                        <h4 class="act-rate">$298</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Direct Hit Search</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Diamond</h3>
                                        <h4 class="sale-rate">$199</h4>
                                        <h4 class="act-rate">$398</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Preparation</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Direct Hit Search</li>
                                            <li>Refusal Risk Meter</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="plan-parent text-center">
                                        <h3>Elite</h3>
                                        <h4 class="sale-rate">$49</h4>
                                        <h4 class="act-rate">$199</h4>
                                        <p class="text-center price-quote">+ USPTO filing fee<br>
                                            ($350)</p>
                                        <ul class="plan-list">
                                            <li>Case Review</li>
                                            <li>Case Filing</li>
                                            <li>Trademark Alert</li>
                                            <li>Trademark Secured</li>
                                            <li>100% Satisfaction Guarantee</li>
                                            <li>Cease and Desist Letter</li>
                                            <li>Trademark Monitoring</li>
                                            <li>Refusal Risk Meter</li>
                                            <li>Direct Hit Search</li>
                                        </ul>
                                        <a href="#" class="plan-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-button">
            <a href="/contactus/"><button class="amz-button quote-button">Contact Us</button></a>
        </div>
        </div>
        </div>
        </div>
    </section>



    <section id="copyright-section">
        <div class="container">
            <div class="section-title text-center">
                <h2>Copyright <span>Protection</span> Services</h2>
            </div>
            <div id="main-row" class="row">
                <div id="inner-row1" class="row">
                    <div class="col-md-6">
                        <div class="img-bg">
                            <img src="/assets/images/abc1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-wrapper">
                            <h3>Legal <span>Notice Letter</span></h3>
                            <p>We ensure that your creative works remain protected even after copyright registration. A Cease & Desist letter allows you to take action if someone infringes on your trademark, demanding remedies and assurances from the infringer.</p>
                        </div>
                    </div>
                </div>
                <div id="inner-row2" class="row">
                    <div class="col-md-6">
                        <div class="text-wrapper">
                            <h3>Transfer of <span>Copyright Ownership</span></h3>
                            <p>If you need to sell or transfer your copyright, we provide a ready-made template to streamline the process. As the assignor, you transfer rights to the assignee. This form can be customized to suit your specific requirements and business needs.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-bg">
                            <img src="/assets/images/abc2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- testimonial -->
    <?php include_once("testimonial-global.php") ?>
    <!-- testimonial -->


    <?php include('includes/footer.php'); ?>

</body>