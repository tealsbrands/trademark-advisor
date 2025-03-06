<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- <title>Affordable E-Book Writing Services - Pro Book Publishing</title> -->
    <title>Trademark Adivsor</title>
    <meta name="description" content=" It’s time to become a published author. Pro Book Publishing offer professional book writing services – second to none. Hire our experienced writers now.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include('includes/head.php'); ?>
</head>


<body>

    <?php include('includes/header.php'); ?>

    <section id="contact-banner">
        <div class="container">
            <div class="text-wrapper text-center">
                <h1><span>contact us</span></h1>
            </div>
        </div>
    </section>


    <section id="form-contact">
        <div class="container">
            <div id="main-row"  class="row">
                <div class="col-sm-3"></div>
                <div class="col-md-6">
                    <div class="hero-form">
                        <div class="modal-lines">
                            <h2 class="modal-heading">Request an Appointment</h2>
                            <p class="modal-subheading">Signup and get free consultation</p>
                        </div>
                        <form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
                            <div id="main-row"  class="row">
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
                            <input type="hidden" name="brand" value="Trademark Advisor">
                            <input type="hidden" name="token" value="<?= $token; ?>">
                            <input type="hidden" name="tag" value="sidepanel form in landing-page">
                            <input type="hidden" name="price" value="null">
                            <input type="hidden" name="news" value="1">
                            <input type="hidden" class="jun" name="gender">
                        </form>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php'); ?>

</body>