<section class="page-title" style="background-image: url(images/background/pattern-16.jpg)">
    <div class="pattern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(images/background/pattern-17.png)"></div>
    <div class="pattern-layer-three" style="background-image: url(images/background/pattern-18.png)"></div>
    <div class="pattern-layer-four" style="background-image: url(images/icons/cross-icon.png)"></div>
    <div class="auto-container">
        <h2><?php
            $lastPartUrlArray = explode("/", $_SERVER['PHP_SELF']);
            $lastPartUrl = str_replace(".php", "",end($lastPartUrlArray));
            $breadCrump = null;

            switch ($lastPartUrl) {
                case "hakkimizda":
                    $breadCrump = "Hakkımızda";
                    break;
                case "referanslarimiz":
                    $breadCrump = "Referanslarımız";
                    break;
                case "yazilarimiz":
                    $breadCrump = "Yazılarımız";
                    break;
                case "iletisim":
                    $breadCrump = "İletişim";
                    break;
                 case "account":
                    $breadCrump = "Hesap İşlemleri";
                    break;
                 case "dijital-reklam-yonetimi":
                    $breadCrump = "Dijital Reklam Yönetimi";
                    break;
                 case "kurumsal-web-site-tasarimi":
                    $breadCrump = "Kurumsal Web Site Tasarımı";
                    break;
                 case "b2b-b2c-e-ticaret-yazilim":
                    $breadCrump = "B2B ve B2C E-Ticaret Yazılımları";
                    break;
                 case "mobil-app":
                    $breadCrump = "Mobil App";
                    break;
                 case "e-ticaret-danismanlik":
                    $breadCrump = "E-Ticaret Danışmanlığı";
                    break;
                 case "e-ihracat-danismanlik":
                    $breadCrump = "E-İhracat Danışmanlığı";
                    break;
                 case "e-ticarette-stratejik-planlama":
                    $breadCrump = "E-Ticarette Stratejik Planlama";
                    break;
                 case "dijital-pazarlama-performansi":
                    $breadCrump = "Dijital Pazarlama Ve Performans";
                    break;
                 case "sanal-pazar-yeri-yonetimi":
                    $breadCrump = "Sanal Pazar Yeri Yönetimi";
                    break;
            }
            echo $breadCrump; ?> </h2>
        <ul class="page-breadcrumb">
            <li><a href="anasayfa">Anasayfa</a></li>
            <li><?php echo $breadCrump; ?> </li>
        </ul>
    </div>
</section>