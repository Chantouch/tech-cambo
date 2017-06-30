<!--page title start-->
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Us</h2>
                <ol class="breadcrumb">
                    <li><a href="?page=home">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--page title end-->
<!-- contact-form-section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-80">
            <h2 class="section-title text-uppercase">Drop us a line</h2>
            <p class="section-sub">
                Twenty years from now you will be more disappointed by the things that you didn’t do than by the ones
                you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds in your
                sails. Explore. Dream. Discover.Mark Twain
            </p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="text" name="name" class="validate" id="name">
                                <label for="name">Name</label>
                            </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <label class="sr-only" for="email">Email</label>
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="phone" type="tel" name="phone" class="validate">
                                <label for="phone">Phone Number</label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="website" type="text" name="website" class="validate">
                                <label for="website">Your Website</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea"></textarea>
                        <label for="message">Message</label>
                    </div>

                    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">
                        Send Message
                    </button>
                </form>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4 contact-info">

                <address>
                    <i class="material-icons brand-color">&#xE55F;</i>
                    <div class="address">
                        1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103

                        <hr>

                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                            United States of America.</p>
                    </div>

                    <i class="material-icons brand-color">&#xE61C;</i>
                    <div class="phone">
                        <p>Fax: (+855) 010-590-213<br>
                            Phone: (+855) 085-500-128</p>
                    </div>

                    <i class="material-icons brand-color">&#xE0E1;</i>
                    <div class="mail">
                        <p><a href="mailto:service.techcambo@gmail.com">service.techcambo@gmail.com</a><br>
                            <a href="http://www.techcambo.com">www.techcambo.com</a></p>
                    </div>
                </address>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div>
</section>
<!-- contact-form-section End -->

<!-- map-section -->
<div id="myMap" class="height-350"></div>
<!-- /.map-section -->
