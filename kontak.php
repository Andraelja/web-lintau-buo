<?php
    include_once './navbar.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .contact .info {
        width: 100%;
        background: #fff;
    }

    .contact .info i {
        font-size: 20px;
        background: #ffc451;
        color: #151515;
        float: left;
        width: 44px;
        height: 44px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
    }

    .contact .info h4 {
        padding: 0 0 0 60px;
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 5px;
        color: #151515;
    }

    .contact .info p {
        padding: 0 0 0 60px;
        margin-bottom: 0;
        font-size: 14px;
        color: #484848;
    }

    .contact .info .email,
    .contact .info .phone {
        margin-top: 40px;
    }

    .contact .php-email-form {
        width: 100%;
        background: #fff;
    }

    .contact .php-email-form .form-group {
        padding-bottom: 8px;
    }

    .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #ed3c0d;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .error-message br+br {
        margin-top: 25px;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .contact .php-email-form .loading:before {
        content: "";
        display: inline-block;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        margin: 0 10px -6px 0;
        border: 3px solid #18d26e;
        border-top-color: #eee;
        animation: animate-loading 1s linear infinite;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
        border-radius: 0;
        box-shadow: none;
        font-size: 14px;
        border-radius: 4px;
    }

    .contact .php-email-form input:focus,
    .contact .php-email-form textarea:focus {
        border-color: #ffc451;
    }

    .contact .php-email-form input {
        height: 44px;
    }

    .contact .php-email-form textarea {
        padding: 10px 12px;
    }

    .contact .php-email-form button[type=submit] {
        background: #ffc451;
        border: 0;
        padding: 10px 24px;
        color: #151515;
        transition: 0.4s;
        border-radius: 4px;
    }

    .contact .php-email-form button[type=submit]:hover {
        background: #ffcd6b;
    }

    @keyframes animate-loading {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
</head>
<body>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.44821868924!2d100.69961662060224!3d-0.49361282185426353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2ad0940ddf49bd%3A0x64874caaa1bc03c3!2sKec.%20Lintau%20Buo%2C%20Kabupaten%20Tanah%20Datar%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1703087912435!5m2!1sid!2sid"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Pangian, Lintau Buo</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>kecamatanlintaubuo@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>(0752) 777 233</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section>
<div class="footer">
        <?php
        include_once './berita.php'
            ?>
    </div>
    <div class="footer">
        <?php
        include_once './footer.php'
            ?>
    </div>
</body>
</html>