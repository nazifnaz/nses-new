<footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 logo-footer">
                            <img src="assets/images/nses_logo.png" alt="New Super Express">
                        </div>
                        <div class="col-md-5">
                            <img class="logo-footer" src="assets/images/nses_details.png"
                                 alt="New Super Express">
                        </div>
                        <div class="col-md-3 logo-footer">
                            <h2 class="footer-heading mb-4">Follow Us</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/scripts.js"></script>

<script>
 $.ajax({
            type: "POST",
            data: {data:the_id},
            url: "contact-logic.php",
            success: function(data){
               //data will contain the vote count echoed by the controller i.e.
                 "yourVoteCount"
              //then append the result where ever you want like
              $("span#votes_number").html(data); //data will be containing the vote count which you have echoed from the controller

                }
            });
</script>
</body>


</html>
