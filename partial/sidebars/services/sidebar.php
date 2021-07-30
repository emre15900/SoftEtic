<div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar sticky-top">

        <!-- Services -->
        <div class="sidebar-widget">
            <ul class="service-list">
<!--
       <ul>
                                        -<li><a href="Kurumsal-Web-Site-Tasarimi">Kurumsal Web Site Tasarımı</a></li>
                                      - <li><a href="B2B-B2C-E-Ticaret-Yazılım">B2B ve B2C E-Ticaret Yazılımları</a></li>
                                       - <li><a href="mobil-app">Mobil App</a></li>
                                        -<li><a href="e-ticaret-danismanlik">E-Ticaret Danışmanlığı</a></li>
                                        -<li><a href="e-ihracat-danismanlik">E-İhracat Danışmanlığı</a></li>
                                        -<li><a href="e-ticarette-stratejik-planlama">E-Ticarette Stratejik Planlama</a></li>
                                        -<li><a href="dijital-pazarlama-performansi">Dijital Pazarlama ve Performans</a></li>
                                        <li><a href="Dijital-Reklam-Yönetimi">Dijital Reklam Yönetimi</a></li>
                                        <li><a href="sanal-pazar-yeri-yonetimi">Sanal Pazar Yönetimi</a></li>
                                    </ul>



-->
                <?php
                $lastPartUrlArray = explode("/", $_SERVER['PHP_SELF']);
                $lastPartUrl = str_replace(".php","", end($lastPartUrlArray));

                ?>
                <li class=" <?php if ($lastPartUrl == "kurumsal-web-site-tasarimi") {
                    echo 'current';
                } ?>">
                    <a href="kurumsal-web-site-tasarimi"><span class="color-layer"></span>Kurumsal Web Site
                        Tasarım</a>
                </li>

                <li class="<?php if ($lastPartUrl == "b2b-b2c-e-ticaret-yazilim") {
                    echo 'current';
                } ?>">
                    <a href="b2b-b2c-e-ticaret-yazilim"><span class="color-layer"></span>B2B ve B2C
                        E-Ticaret Yazılımları</a>
                </li>

                <li class="<?php if ($lastPartUrl == "mobil-app") {
                    echo 'current';
                } ?>">
                    <a href="mobil-app"><span class="color-layer"></span>Mobil App</a>
                </li>

                <li class="<?php if ($lastPartUrl == "e-ticaret-danismanlik") {
                    echo 'current';
                } ?>">
                    <a href="e-ticaret-danismanlik"><span class="color-layer"></span>E-Ticaret Danışmanlığı</a>
                </li>

                <li  class="<?php if ($lastPartUrl == "e-ihracat-danismanlik") {
                    echo 'current';
                } ?>">
                    <a href="e-ihracat-danismanlik"><span class="color-layer"></span>E-İhracat Danışmanlığı</a>
                </li>

                <li class="<?php if ($lastPartUrl == "e-ticarette-stratejik-planlama") {
                    echo 'current';
                } ?>">
                    <a href="e-ticarette-stratejik-planlama"><span class="color-layer"></span>E-Ticarette Stratejik Planlama</a>
                </li>

                <li  class="<?php if ($lastPartUrl == "dijital-pazarlama-performansi") {
                    echo 'current';
                } ?>">
                    <a href="dijital-pazarlama-performansi"><span class="color-layer"></span>Dijital Pazarlama ve Performans</a>
                </li>

                <li  class="<?php if ($lastPartUrl == "dijital-reklam-yonetimi") {
                    echo 'current';
                } ?>">
                    <a href="dijital-reklam-yonetimi"><span class="color-layer"></span>Dijital Reklam Yönetimi</a>
                </li>

                <li  class="<?php if ($lastPartUrl == "sanal-pazar-yeri-yonetimi") {
                    echo 'current';
                } ?>">
                    <a href="sanal-pazar-yeri-yonetimi"><span class="color-layer"></span>Sanal Pazar Yeri Yönetimi</a>
                </li>


            </ul>
        </div>

        <!-- Broucher Widget
        <div class="broucher-widget">
            <div class="widget-content" style="background-image: url(images/background/pattern-19.jpg)">
                <h3>Broşürümüzü <br> İndirin</h3>
                <div class="icon flaticon-pdf-1"></div>
                <div class="text">İşletme, görünürlüğü artırmaya odaklanan bir pazarlama disiplinidir.
                    organik (ücretsiz) teknik gereklidir.
                </div>
                <a href="images/resource/pdf/Softetic%20Hizmet%20Bilgileri.pdf" download="" class="download">İndirmek İçin Tıklayın</a>
            </div>
        </div>
        -->

    </aside>
</div>