<?php
include "partial/header/header.php";
include "partial/header/header_sticky.php";
include "partial/header/header_mobil.php";
include "partial/header/header_end.php";
?>
	
	<!-- Page Title Section -->
    <?php include "partial/bread_crump/bread_crump.php"; ?>
	<!-- End Page Title Section -->
	
	<section class="contact-form-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Teklif Al</div>
            <h2>Sizin İçin En Özel Teklifler İçin Formu Doldurun</h2>
            <!--            <div class="text">Our approach to SEO is uniquely built around what we know works…and what we know <br> doesn’t work. With over 200 verified factors in play.</div>-->
        </div>
        <div class="inner-container">

            <!-- Contact Form -->
            <div class="contact-form">

                <!--Contact Form-->
                <form method="post" name="ajaxMail" action="#" id="contact-form">
                    <div class="row clearfix">

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-user-2"></span>
                            <input type="text" name="username" placeholder="Adınız Soyadınız*" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-phone-call"></span>
                            <input type="text" name="phone" placeholder="Telefon Numaranız*" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <span class="icon flaticon-big-envelope"></span>
                            <input type="email" name="email" placeholder="E-mail Adresiniz*" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
							<select id="form_need" name="need"  required="required" data-error="Lütfen ihtiyacınız olan hizmeti belirtin.">
								<option value="">Lütfen Bir Hizmet Seçin </option>
								<option value="E-Ticaret">E-Ticaret Sistemleri</option>
								<option value="Web">Web Geliştirme</option>
								<option value="Mobil">Mobil Uygulama Geliştirme</option>
								<option value="Digital">Dijital Pazarlama</option>
								<option value="Grafik">Grafik Tasarım</option>
								<option value="Seo">SEO Hizmeti</option>
								<option value="SosyalM">Sosyal Medya İçerik Yönetimi</option>
								<option value="Diger">Diğer</option>
							</select>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <span class="icon flaticon-message"></span>
                            <textarea name="message" placeholder="Mesajınız"></textarea>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 text-center form-group">
                            <button class="theme-btn btn-style-eleven" type="submit" name="ajaxMailButton" onclick=""><span class="txt">Gönder</span></button>
                        </div>

                    </div>
                </form>

                <!--End Contact Form -->
            </div>

        </div>
    </div>
</section>

	<!-- Contact Info Section -->
    <?php include "partial/contact/infos/info.php"; ?>
    <!-- End Contact Info Section -->

<?php
include "partial/footer/footer_pagewrapper_end.php";
include "partial/footer/color_palette_color_switcher.php";
include "partial/footer/search_popup_end_header_search_end.php";
include "partial/footer/get_back_top.php";
include "partial/footer/body_scripts.php";
include "partial/footer/html_end_body_end.php";
?>