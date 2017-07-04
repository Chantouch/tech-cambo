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
            <h2 class="section-title text-uppercase">ទំទាក់ទំនង មកពួកយើង</h2>
            <p class="section-sub">
                ម្ភៃឆ្នាំក្រោយពីពេលនេះអ្នកនឹងខកចិត្តនឹងអ្វីដែលអ្នកមិនធ្វើជាងអ្នកដែលអ្នកបានធ្វើ។ ដូច្នេះបោះចោលវិវឌ្ឍន៍។ ជិះទូកចេញពីកំពង់ផែដែលមានសុវត្ថិភាព។ ចាប់ពង្រួញខ្យល់នៅក្នុងទូករបស់អ្នក។ រុករក។ សុបិន្ត។ ស្វែងយល់។
            </p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="text" name="name" class="validate" id="name">
                                <label for="name">ឈ្មោះ</label>
                            </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <label class="sr-only" for="email">អ៊ីមែល</label>
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">អ៊ីមែល</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="input-field">
                        <input id="subject" type="text" name="subject" class="validate">
                        <label for="subject">គោលបំណង</label>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="phone" type="tel" name="phone" class="validate">
                                <label for="phone">លេខទូរស៍ព្ទ</label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="website" type="text" name="website" class="validate">
                                <label for="website">គេហទំព័ររបស់លោកអ្នក</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea"></textarea>
                        <label for="message">សាររៃរ៉ាប់</label>
                    </div>

                    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">
                        ផ្ញើចេញ
                    </button>
                </form>
            </div><!-- /.col-md-8 -->

            <div class="col-md-4 contact-info">

                <address>
                    <i class="material-icons brand-color">&#xE55F;</i>
                    <div class="address">
                        <p>City Mall, St 217, Phnom Penh, Cambodia</p>
                        <hr>
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
<!--<div id="myMap" class="height-350"></div>-->
<!-- /.map-section -->
