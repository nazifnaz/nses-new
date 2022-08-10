<div class="row">
    <div class="col-md-7 mb-5">


        <form class="p-5 bg-white" id="contactForm" role="form">


            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input class="form-control" id="fname" type="text" required>
                </div>
                <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input class="form-control" id="lname" type="text">
                </div>
            </div>

            <div class="row form-group">

                <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input class="form-control" id="email" type="email" required>
                </div>
            </div>

            <div class="row form-group">

                <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label>
                    <input class="form-control" id="subject" type="subject">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="message">Message</label>
                    <textarea class="form-control" cols="30" id="message"
                              placeholder="Write your notes or questions here..." rows="7" required></textarea>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-sm-12 hidden alert alert-success alert-dismissible" id="msgSubmit">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Message sent successfully.
                </div>
                <div class="col-sm-12 hidden alert alert-danger alert-dismissible" id="msgFailed">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Message sent Failed. Please try again later.
                </div>
                <div class="col-md-12">
                    <input class="btn btn-primary py-2 px-4 text-white" id="form-submit" type="submit"
                           value="Send Message">
                </div>
            </div>


        </form>
    </div>
    <div class="col-md-5">

        <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">Manama, Kingdom of Bahrain</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="tel:+973-39646798" class="primary-color">+973 39646798</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a class="primary-color" href="mailto:sharasuper@gmail.com">sharasuper@gmail.com</a></p>

        </div>

        <div class="p-4 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">More Info</h3>
            <p>You can contact us any way that is convenient for you. We are available 24/7 via telephone or
                email and we can respond accordingly to provide our best service and support.
            </p>
            <p>
                We trust you would consider our service and give us an opportunity to work with you for your
                future logistic requirements and prove our competency.

            </p>
            <p>Please do not hesitate to contact us for any additional information you may require.</p>
        </div>

    </div>
</div>
