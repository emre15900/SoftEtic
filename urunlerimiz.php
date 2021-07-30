<?php
include "partial/header/header.php";
include "partial/header/header_sticky.php";
include "partial/header/header_mobil.php";
include "partial/header/header_end.php";
?>
	
	<!-- Page Title Section -->
	<?php include "partial/bread_crump/bread_crump.php"; ?>
	<!-- End Page Title Section -->
    
<div class="container fiyatTablosu">
  <div class="row">
    <div class="col-md-12">
      <article>

        <ul>
          <li class="bg-lvl-1">
            <button>BRONZ &nbsp;<i class="fa fa-user" aria-hidden="true"></i></button>
          </li>
          <li class="bg-lvl-2">
            <button>SILVER &nbsp;<i class="fa fa-briefcase" aria-hidden="true"></i></button>
          </li>
          <li class="bg-lvl-3 active">
            <button>GOLD &nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></button>
		  </li>
          <li class="bg-lvl-4">
            <button>MASTER &nbsp;<i class="fa fa-globe" aria-hidden="true"></i></button>
          </li>
        </ul>  
        
        <table>
          <thead>
            <tr>
              <th class="hide"></th>
              <th class="bg-lvl-1">BRONZ &nbsp;<i class="fa fa-user" aria-hidden="true"></th>
              <th class="bg-lvl-2">SILVER &nbsp;<i class="fa fa-briefcase" aria-hidden="true"></i></th>
			        <th class="bg-lvl-3 default">GOLD &nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></th>
              <th class="bg-lvl-4">MASTER&nbsp;<i class="fa fa-globe" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Yıllık Kiralama Bedeli</td>
              <td>
                <del><span class="">7500 </span></del><br>
                <span class="txt-l" style="font-size: 26px;">5900 <small><sup>₺/yıl</sup></small></span><br>
                <span class='taksitSecenekleri'>Ayda 655,55 TL x 9 Taksit</span>
              </td>
              <td>
                <del><span class="">10500</span></del><br>
                <span class="txt-l" style="font-size: 26px;">8900  <small><sup>₺/yıl</sup></small></span><br>
                <span class='taksitSecenekleri'>Ayda 988,88 TL x 9 Taksit</span>
              </td>
              <td class="default">
                <del><span class="">13900 </span></del><br>
                <span class="txt-l" style="font-size: 26px;">11900 <small><sup>₺/yıl</sup></small></span><br>
                <span class='taksitSecenekleri'>Ayda 1322,22 TL x 9 Taksit</span>
		      	  </td>
              <td>
                <span class="">HEMEN</span><br>
                <span class="txt-l" style="font-size: 23px;">TEKLİF AL</span>
              </td>
            </tr>
            <tr>
              <td colspan="5" class="sep"><marquee behavior="" direction="">Kampanyalı Fiyatlar! %50'ye Varan İndirimde Son Gün 10 Şubat.</marquee></td>
            </tr>
            <tr>
			        <td>Gelişmiş ve Öne Çıkan Özellikler</td>
              <td><span class="tick"></span></td>
              <td><span class="tick"></span></td>
			        <td class="default"><span class="tick"></span></td>
              <td><span class="tick">+2 Ay Lisans Hediye</span></td>
            </tr>
            <tr>
			        <td><img src="images/icons/androidapp.webp" alt="Android-Mobil-Uygulama"> Android Mobil Uygulama</td>
              <td><span class="tick">Opsiyonel</span></td>
              <td><span class="tick">Opsiyonel</span></td>
			        <td class="default"><span class="tick">Opsiyonel</span></td>
              <td><span class="tick hediye">Hediye !!!</span></td>
            </tr>
            <tr>
			        <td><img src="images/icons/appleApp.webp"  alt="IOS-Mobil-Uygulama"> IOS Mobil Uygulama</td>
              <td><span class="tick">Opsiyonel</span></td>
              <td><span class="tick">Opsiyonel</span></td>
			        <td class="default"><span class="tick">Opsiyonel</span></td>
              <td><span class="tick hediye">Hediye !!!</span></td>
            </tr>
            <tr>
			        <td>Trafik / Bandwidth</td>
              <td><span class="tick">1500 GB / Yıl</span></td>
              <td><span class="tick">2000 GB / Yıl</span></td>
			        <td class="default"><span class="tick">3000 GB. / Yıl</span></td>
              <td><span class="tick">4000 GB / Yıl</span></td>
            </tr>
            <tr>
		      	  <td>Web Alanı & Database Alanı</td>
              <td><span class="tick">Sınırsız</span></td>
              <td><span class="tick">Sınırsız</span></td>
		      	  <td class="default"><span class="tick">Sınırsız</span></td>
              <td><span class="tick">Sınırsız</span></td>
            </tr>
            <tr>
              <td>Content Delivery Network ( CDN)</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>E-Posta Hesabı</td>
              <td><span class="tick">10 Adet</span></td>
              <td><span class="tick">80 Adet</span></td>
		      	  <td class="default"><span class="tick">100 Adet</span></td>
              <td><span class="tick">200 Adet</span></td>
            </tr>
            <tr>
              <td>Bulut (Cloud) Sunucu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			        <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Anlaşmalı Kargo Fiyatları</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
		      	  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Özel Konsept Temalar</td>
              <td><span class="tick">Opsiyonel</span></td>
              <td><span class="tick">Opsiyonel</span></td>
		      	  <td class="default"><span class="tick">Opsiyonel</span></td>
              <td><span class="tick hediye">Hediye !!!</span></td>
            </tr>
            <tr>
              <td>Tek Tuşla Anında Sanal Pos</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
		      	  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Ürün/Kategori Ekleme</td>
              <td><span class="tick">Sınırsız</span></td>
              <td><span class="tick">Sınırsız</span></td>
		      	  <td class="default"><span class="tick">Sınırsız</span></td>
              <td><span class="tick">Sınırsız</span></td>
            </tr>
            <tr>
              <td>Model (B2B + B2C)</td>
              <td><span class="tick">B2C</span></td>
              <td><span class="tick">B2C</span></td>
			        <td class="default"><span class="tick">B2B + B2C</span></td>
              <td><span class="tick">B2B + B2C</span></td>
            </tr>
            <tr>
              <td>SEO (Arama Motoru Optimizasyonu)</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Mobil Uyumlu Hazır Temalar (Responsive)</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Sanalpos Tüm Bankalar</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Ssl Sertifikası</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Fatura Yazdırma Modülü</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Hepsiburada Entegrasyonu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>GittiGidiyor Entegrasyonu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>N11 Ürün Entegrasyonu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>Trendyol Entegrasyonu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>Amazon Entegrasyonu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>Robotik Çağrı Merkezi Sistemi</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>InstagramShop Modülü</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></span></td>
            </tr>
            <tr>
              <td>Facebook Store</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Ücretsiz Yedekleme</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Yönetici Yetkilendirme</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Slide Banner Yönetimi</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Resimleri Sonradan Yükleme Sistemi</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Gelişmiş Kargo Yönetimi</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Kargo Entegrasyonu</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Kargo Takip Modülü</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>İçerik Yönetimi</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
            <tr>
              <td>Blog Yönetimi</td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>            
            <tr>
            <td>İndirimli Güven Damgası Ücreti</td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
			         <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
              <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
            </tr>
          </tbody>


  <!-- İlk Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn2" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Gelişmiş Ürün Yönetim Sistemi</span> 
                  </button>
                </span>
              </td>
            </tr>

            <tbody class='gizlenenBolum' id="p2">
            <tr>
                  <td>Varyant (Ek Seçenek) Yönetimi</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Varyantlara Farklı Fiyat Verebilme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürünleri Zoom İle Büyültme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Excel İle Ürün Yükleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürünleri Excel'e Aktarma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Gelişmiş Ürün Sıralama</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Excel ile Ürün Sıralama</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Fırsat Ürünleri Slideri</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Tavsiye Etme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Yorumlama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Karşılaştırma Modülü</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Toplu Ürün Güncelleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Dosya, Video Ekleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                  <td>Detaylı Filtreleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Teknik Detaylar İle Filtreleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Bayilere Min. Ve Max. Alım Miktarları Belirleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Müşterilere Min. Ve Max. Alım Miktarları Belirleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>İlgili Ürün Tanımlama</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Stokta Olmasa Bile Satış Yapma Modülü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Site İçi Remarketing Uygulaması</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Müşteriyle Mesajlaşma Modülü</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ticket Yönetim Sistemi</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Özelleştirilebilir Detaylı Üyelik Sayfas</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Müşteriyle Mesajlaşma Modülü</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Özelleştirilebilir Detaylı Üyelik Sayfası</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üyelerin Sepetini Görüntüleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Excel ile Üye Yükleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Tek Ekrandan Üye İşlemlerini Görüntüleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Online Üyeler Modülü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üye Birleştirme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üyelik Doğrulama & Onay</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üye Sipariş & Kapıda Ödeme Yasaklama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üye Kapıda Ödeme Otomatik Onay</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>       
            </tbody>

 
 <!-- İkinci Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn3" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; En Gelişmiş Arama Seçenekleri</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum2' id="p3">
                <tr>
                  <td>Arama Yönlendirme Sistemi</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Elastic Search Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Open Search Modülü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Rss Uygulaması (Son 50 Ürün)</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
            </tbody>
         
<!-- Üçüncü Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn4" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Dönüşümlerinizi Arttıracak Modüller</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum4' id="p4">
                <tr>
                  <td>Toplu E-Mail Gönderme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Toplu Sms Gönderme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Süreli Popup Modülü</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Özel Süreli Popup ile Otomatik Kampanya Yapma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Siteden Çıkarken Otomatik Kampanyalı Popup</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kasaönü Fırsatlar Modülü</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Favori Ürünleri Sepette Çıkartma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Stok Gelince Haber Verme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Fiyatı Düşünce Haber Verme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Sepet Hatırlatma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ödeme Hatırlatma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
            </tbody>

<!-- Beşinci Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn5" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Güçlü Sipariş Alt Yapısı</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum5' id="p5">
                <tr>
                  <td>Özel Tasarlanmış Sipariş Adımları</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Siparişlere Teslimat Gün / Saati Seçtirebilme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <tr>
                <td>Siparişe Tutar Limiti Belirleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kapıda Ödemeye Limit Belirleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kapıda Ödeme Kara Liste Modülü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Genel Kara Liste Modülü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Sipariş Tekrarlama Modülü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Siparişe Dosya Ekleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                  <td>Facebook İle Alışveriş</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Gmail İle Alışveriş</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Twitter İle Alışveriş</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Üyeliksiz Alışveriş</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Min. Sipariş Tutarı Kontrolü</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
            </tbody>

<!-- Altıncı Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn6" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Ödeme Sistemleri</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum6' id="p6">
                <tr>
                  <td>Havale İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Kapıda Ödeme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kredi Kartı İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>3D Secure İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Bkm Express İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Mail Order İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Hepsipay ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Iyzıco İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>PayU İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>GarantiPay İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ipara İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>PayTR ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                  <td>Paycell ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Paybyme ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>PayGuru ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Paytrek ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Moka ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Wirecard İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Paynet ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Telr ile Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr> 
                <tr>
                  <td>Compay İle Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Alışverişsiz Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Cari (Kredili) Hesaptan Ödeme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr> 
            </tbody>

<!-- Yedinci Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn7" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Gelişmiş Sipariş Yönetimi</span> 
                  </button>
                </span>
              </td>
            </tr>

            <tbody class='gizlenenBolum7' id="p7">
                <tr>
                  <td>Detaylı Sipariş Filtreleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Sipariş Durumu Belirleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Siparişe Özel Not Oluşturma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Toplu Sipariş Yazdırma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Siparişe Kargo Etiketi Oluşturma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Siparişi Otomatik Kargoya Gönderme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Siparişe Otomatik Kargo Barkodu Oluşturma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Siparişe Fatura Oluşturma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Toplu Fatura Yazdırma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>E-Fatura / E-Arşiv Faturası Kesme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
            </tbody>

<!-- Sekizinci Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn8" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Güçlü Kampanya / Promosyon Modülleri</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum8' id="p8">
                <tr>
                  <td>X Al Y Öde</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Sepette X ürün veya Ürünlere Y Tl. İndirim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Sepette X ürün veya Ürünlere %Y İndirim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Sepette X Etiketli Ürünlere Y Tl. İndirim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Sepette X Etiketli Ürünlere %Y İndirim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Alışverişini Tamamla Hediye Çeki Kazan</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Arkadaşını Davet Et Hediye Çeki Kazan!</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Belirli Tutar Üzerine Kargo Ücreti Kaldırma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>E-Mail Adresine Göre Özel İndirim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Hediye Paketi İsteme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Hediye Paketine Ücret Tanımlayabilme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>İlişkili Ürünler</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kargo Ücretsiz Ürün Tanımlayabilme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                  <td>Müşteri Bazında İndirim Tanımlama</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Oransal Hediye Çeki Oluşturma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Ödeme Bazlı Kargo Kampanyaları</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Ödeme Tiplerine Özel Kampanyalar</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Ödeme Tiplerine Özel Parapuan</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Özel Kurallı İndirim Çeki Oluşturma</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Puan Sistemi</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Sadece 1 Ürüne Özel Bile Farklı Kargo Ücreti</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Sepete Özel Kampanyalar</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Taksit Tutarlarına Limit Belirleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Tutara Göre Farklı Kargo Ücretleri Çıkartabilme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Ürün Bazında Özel İndirim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Ürün,Kategori Veya Markaya Özel Hediye Çeki</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Üründe Adet Bazında Yüzde İndirimi Sağlama</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                                <tr>
                  <td>Üye Ol İndirim Çeki Kazan</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                                <tr>
                  <td>Üyelere Ürün Bazında İndirim Sağlama</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                                <tr>
                  <td>X Üründen Alana Y Ürünü %5 İndirimli</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                                <tr>
                  <td>X Alana Y Kategorisindeki Ürünler 5 TL İndirimli</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>                 <tr>
                  <td>Tutara Göre Farklı Kargo Ücretleri Çıkartabilme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>X Alana Y Ürünü 10 TL İndirimli</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>X Ve Y Alana Z Kategorisindeki Ürünler % 10</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
                <tr>
                  <td>Banka Havalesi Ve Kredi Kartı Tek Çekim</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr> 
            </tbody>

<!-- Dokuzuncu Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn9" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; En Gelişmiş Tasarım Yönetimi</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum9' id="p9">
                <tr>
                  <td>Responsive Özel Tasarım Hizmeti</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Kendi Tasarımınızı Entegre Etme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Tasarım Yedekleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Css Erişimi</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Javascript Erişimi</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Gelişmiş Blok Yönetimi</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Html ile Sayfa İçeriği Girme (Kategori, Marka)</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Özelleştirilmiş Slider Yönetimi</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Listelemede 2. Resmi Getirebilme</td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
            </tbody>

<!-- Onuncu Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn10" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Sosyal Medya Pazarlama</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum10' id="p10">
                <tr>
                  <td>Facebook İle Bağlan</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Twitter İle Bağlan</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Google+ İle Bağlan</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Facebook Beğen</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Facebook Paylaş</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Facebook Yorum</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Twitter Paylaş</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Facebook Üzerinden Satış</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Google+ Paylaş</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Pinterest Pin</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>WhatsApp Ürün Paylaşma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Telegram Ürün Paylaşma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürünlerde Facebook Yorum</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Dinamik İçeriklere Facebook Yorum</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
            </tbody>

<!-- On Birinci Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn11" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; En Gelişmiş Seo Uygulaması</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum11' id="p11">
                <tr>
                  <td>Ürüne Özel Meta Bilgisi Tanımlama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Kategoriye Özel Meta Bilgisi Tanımlama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Markaya Özel Meta Bilgisi Tanımlama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>İçerik Sayfalarına Özel Meta Bilgisi Tanımlama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Özel Urlrewrite Uygulaması</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Dinamik Sitemap</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Yönetilebilir Robots.Txt Dosyası</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Belirli Kurallara Göre Otomatik Meta Belirleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Gelişmiş Seo Yönetim Paneli</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Resimlere Otomatik Alt Etiketi Yazdırma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Otomatik 404 Sayfası Oluşumu</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>301 Yönlendirme Paneli</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Google Anahtar Kelime Öneri Sistemi (Arama)</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Google Rich Snippets</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Tarayıcı Bazlı İçerik Ve Resim Cache</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Breadcrumb Uygulaması</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Site içi Anahtar Kelime Etiketleme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Css Ve Js Sıkıştırma</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Gzip Uygulaması</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Google Merchant Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Yandex Site Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Bing Site Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Alexa Kayıt Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>H (Heading Tags) Etiketleri</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Web 2.0 Standartlarında Kodlama</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Canonical Etiketi Kullanımı</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Css Sprite Kullanımı</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
            </tbody>

<!-- On İkinci Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn12" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; En Güçlü Entegrasyon Alt Yapısı</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum12' id="p12">
                <tr>
                  <td>Muhasebe Programları İle Entegrasyon</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                </tr>            
                <tr>
                  <td>Tedarikçi Xml Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">1 Adet Ücretsiz</span></td>
                </tr>
                <tr>
                <td>Fırsat Siteleri İle Entegrasyon</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Fiyat Karşılaştırma Siteleri İle Entegrasyon</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Dışarıya Xml Verme</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Detaylı Web Servis Kullanımı</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Kargo Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Asil Kargo Entegrasyonu</td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Analytics Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Adwords Dönüşüm İzleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Facebook Dönüşüm İzleme</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>GittiGidiyor Ürün / Sipariş Api Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>N11 Ürün / Sipariş Api Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Hepsiburada Ürün / Sipariş Api Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Trendyol Ürün / Sipariş Api Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Amazon Ürün / Sipariş Api Entegrasyonu</td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
                <tr>
                <td>Çiçek Sepeti Ürün Api Entegrasyonu</td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                  <td class="default"><span class="tick">Opsiyonel</span></td>
                  <td><span class="tick">Opsiyonel</span></td>
                </tr>
            </tbody>

<!-- On Üçüncü Ekstra Bölüm -->
            <tr>
              <td colspan="5" class="sep">
                <span class='plus-minus-toggle collapsed' >
                  <button id="btn13" class='btn2'>
                    <span class='extraSecenekler'>&nbsp;&nbsp; Güçlü Raporlama Alt Yapısı</span> 
                  </button>
                </span>
              </td>
            </tr>

             <tbody class='gizlenenBolum13' id="p13">
                <tr>
                  <td>Klasik Satış Raporları</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>            
                <tr>
                  <td>Mobil Satış Raporları</td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>İl Bazlı Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Bazlı Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <tr>
                <td>Kategori Bazlı Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Marka Bazlı Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ödeme Bazlı Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Çok Sipariş Veren Üye Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Yeni Üyelik Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üye Giriş Raporları</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Çok Puan Toplayan Üyeler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Üyelik Kaynakları Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Ürün Stok Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Aktif-Pasif Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Açıklaması Girilmemiş Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Resimsiz Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Çok Satan Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Çok Puanlanan Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Çok Yorum Yapılan Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Stok Bekleyen Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>En Çok Satan Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Fiyat Düşüşü Bekleyen Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>

                <tr>
                <td>Meta Bilgileri Girilmeyen Kategoriler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Meta Bilgileri Girilmeyen Ürünler Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Meta Bilgileri Girilmeyen Sayfalar Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Meta Bilgisi Girilmeyen Markalar Raporu</td>
                <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kampanya Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Hediye Çeki İle Tamamlanan Siparişler Modülü</td>
                <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Reklam Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
                <tr>
                <td>Kaynaktan Gelen Satış Raporları</td>
                <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/failed-icon.png" width='27' height='27' alt=""></span></td>
                  <td class="default"><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                  <td><span class="tick"><img src="images/icons/success-icon.png" width='30' height='30' alt=""></span></td>
                </tr>
            </tbody>


        </table>
      </article>
    </div>
  </div>
</div>

	
<?php
include "partial/footer/footer_pagewrapper_end.php";
include "partial/footer/color_palette_color_switcher.php";
include "partial/footer/search_popup_end_header_search_end.php";
include "partial/footer/get_back_top.php";
include "partial/footer/body_scripts.php";
include "partial/footer/html_end_body_end.php";
?>