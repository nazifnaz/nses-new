<?php include 'layout/header.php' ?>


<div class="site-blocks-cover overlay" data-aos="fade" data-stellar-background-ratio="0.5"
     style="background-image: url('assets/images/hero_bg_1.jpg' );">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


                <h1 class="text-white font-weight-light mb-5 text-uppercase font-weight-bold">Worldwide Freight
                    Services</h1>
                <p><a class="btn btn-primary py-3 px-5 text-white" href="contact.php">Get
                    Quote</a>
                </p>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center no-gutters align-items-stretch overlap-section">
        <div class="col-md-4">
            <div class="feature-1 pricing h-100 text-center">
                <div class="icon">
                    <span class="icon-dollar"></span>
                </div>
                <h2 class="my-4 heading">Best Prices</h2>
                <p>Our motto is to provide customers with utmost satisfaction with addition of safer, economical and
                    express logistics services. </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="free-quote bg-dark h-100">
                <h2 class="my-4 heading  text-center">Get Free Quote</h2>
                <form id = "quoteForm" method="post">
                    <div class="form-group">
                        <label for="fq_name">Name</label>
                        <input type="text" class="form-control btn-block" id="fq_name" name="fq_name"
                               placeholder="Enter Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="fq_email">Email</label>
                        <input type="text" class="form-control btn-block" id="fq_email" name="fq_email"
                               placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <input id="quote-submit" type="submit" class="btn btn-primary text-white py-2 px-4 btn-block" value="Get Quote">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-3 pricing h-100 text-center">
                <div class="icon">
                    <span class="icon-phone"></span>
                </div>
                <h2 class="my-4 heading">24/7 Support</h2>
                <p>You can contact us any way that is convenient for you. We are available 24/7 via telephone or email
                    and we provide our best service and support.</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">

    <?php include 'services_template.php' ?>


    <div class="site-section border-top">
        <div class="container" id="contact-us">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Contact Us</h2>
                </div>
            </div>
            <?php include 'contact_form.php' ?>
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>
