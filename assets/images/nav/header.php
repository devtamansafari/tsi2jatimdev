<!doctype html>
<html lang="id">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NX36F6S');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46463921-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46463921-4');
</script>
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '910017129633657');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=910017129633657&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <link rel="alternate" hreflang="id" href="https://tamansafaribogor.com">
  <script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Taman Safari Indonesia",
  "image" : "https://tamansafaribogor.com/images/logo.png",
  "telephone" : "+621500212",
  "email" : "informasi@tamansafari.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "jl raya puncak no 601 Cisarua",
    "addressLocality" : "bogor",
    "addressRegion" : "jawa barat",
    "addressCountry" : "Indonesia",
    "postalCode" : "16750"
  }
}
</script>
  
<meta charset="utf-8">
<title>Taman Safari Indonesia - Rekreasi, Konservasi dan Edukasi</title>
<meta name="description" content="Taman Safari Indonesia (TSI) Cisarua, Bogor is a world-class zoo and titled the best conservation site by Indonesian Ministry of Forestry. ">
<meta name="keywords" content="Taman Safari Bogor">
<meta name="author" content="Taman Safari indonesia">
<meta property="og:title" content="Taman Safari Indonesia - Bogor">
<meta property="og:description" content="Taman Safari Indonesia (TSI) Cisarua, Bogor is a world-class zoo and titled the best conservation site by Indonesian Ministry of Forestry. ">
<meta property="og:type" content="place">
<meta property="og:url" content="<?=base_url('')?>">
<meta property="og:image" content="<?= base_url('')?>assets/images/logoBogor.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?= base_url('')?>assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="font-awesome.min.css?id=21391938913" rel="stylesheet">
<link href="tsibogor2.css?id=1238913891238" rel="stylesheet">
<link href="<?=base_url('')?>assets/css/home.css?id=1238913891238" rel="stylesheet">
<!-- <link href="index.css?id=1238913891238" rel="stylesheet"> -->
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wb.stickylayer.min.js"></script>
<script src="jquery.ui.effect-blast.min.js"></script>
<script src="wb.overlay.min.js"></script>
<script src="wb.drilldownmenu.min.js"></script>
<script src="wwb14.min.js"></script>
<script>
$(document).ready(function()
{
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
   $("#Layer3").stickylayer({orientation: 6, position: [0, 5], delay: 0});
   $("a[href*='#LayoutGrid2']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid2').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("#RollOver1 a").hover(function(e)
   {
      $("#RollOver1 span").stop().fadeTo(500, 0);
   }, function()
   {
      $("#RollOver1 span").stop().fadeTo(500, 1);
   });
   $("a[href*='#LayoutGrid13']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid13').offset().top }, 600, 'easeOutCirc');
   });
   $('#LayerMenu1 li').hover(function()
   {
      var top = $(this).find('.button').outerHeight();
      $(this).find('.layer').css({'top': top});
      $(this).find('.layer').stop().fadeTo('fast', 1).show();
   }, function()
   {
      $(this).find('.layer').stop().fadeTo('fast', 0, function()
      {
         $(this).hide();
      });
   });
   $('#LayerMenu1 li .layer').hide();
   var $overlaymenu = $('#OverlayMenu2-overlay');
   $overlaymenu.overlay({'hideTransition':true});
   $('.OverlayMenu2').drilldownmenu({backText: 'Back'});
   $('#OverlayMenu2').on('click', function(e)
   {
      $.overlay.show($overlaymenu);
      return false;
   });
});
</script>

<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
  analytics.load("FtGJKMVOIEVwnZFYULYaLYTDd2fAj0rQ");
  analytics.page();
  }}();
</script>

  
</head>
<body oncontextmenu="return false;">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX36F6S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
<div id="wb_Image15">
<a href="<?= base_url('')?>"><img src="<?= base_url('')?>assets/images/logo.png" id="Image15" alt=""></a>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_LayerMenu1">
   <ul role="menu" id="LayerMenu1">
      <li>
      <a role="menuitem" href="#" class="button">ANIMALS<span class="arrow-down"></span></a>
      <div class="layer" style="text-align:center;width:250px;height:525px">
<div id="RollOver19">
<a href="./animal/babyzoo.php">
<img class="hover" alt="" src="<?= base_url('')?>assets/images/nav/aBabyZoo2.jpg">
<span><img alt="" src="<?= base_url('')?>assets/images/nav/aBabyZoo1.jpg"></span>
</a>
</div>
<div id="RollOver20">
<a href="./animal/kubahburung.php">
<img class="hover" alt="" src="images/bBirdAviary2.jpg">
<span><img alt="" src="images/bBirdAviary1.jpg"></span>
</a>
</div>
<div id="RollOver21">
<a href="./animal/PKomodo.php">
<img class="hover" alt="" src="images/cKomodoIsland2.jpg">
<span><img alt="" src="images/cKomodoIsland1.jpg"></span>
</a>
</div>
<div id="RollOver22">
<a href="./animal/bahpinguin.php">
<img class="hover" alt="" src="images/dPenguinHouse2.jpg">
<span><img alt="" src="images/dPenguinHouse1.jpg"></span>
</a>
</div>
<div id="RollOver23">
<a href="./animal/PusatPrimata.php">
<img class="hover" alt="" src="images/ePrimateCenter2.jpg">
<span><img alt="" src="images/ePrimateCenter1.jpg"></span>
</a>
</div>
<div id="RollOver24">
<a href="./animal/lorongreptil.php">
<img class="hover" alt="" src="images/fReptileTunnel2.jpg">
<span><img alt="" src="images/fReptileTunnel1.jpg"></span>
</a>
</div>
      </div>
      </li>
      <li>
      <a role="menuitem" href="#" class="button">SAFARI<span class="arrow-down"></span></a>
      <div class="layer" style="text-align:center;width:250px;height:371px">
<div id="RollOver15">
<a href="./siang.php">
<img class="hover" alt="" src="images/aSafariSiang2.jpg">
<span><img alt="" src="images/aSafariSiang1.jpg"></span>
</a>
</div>
<div id="RollOver17">
<a href="./malam.php">
<img class="hover" alt="" src="images/cSafariMalam2.jpg">
<span><img alt="" src="images/cSafariMalam1.jpg"></span>
</a>
</div>
<div id="RollOver18">
<a href="./trek.php">
<img class="hover" alt="" src="images/dSafariTrek2.jpg">
<span><img alt="" src="images/dSafariTrek1.jpg"></span>
</a>
</div>
<div id="RollOver16">
<a href="./panda.php">
<img class="hover" alt="" src="images/bIstanaPanda2.jpg">
<span><img alt="" src="images/bIstanaPanda1.jpg"></span>
</a>
</div>
      </div>
      </li>
      <li>
      <a role="menuitem" href="https://news.tamansafari.com" target="_blank" title="CONSERVATION" class="button">CONSERVATION<span class=""></span></a>
      <div class="layer" style="text-align:center;width:250px;height:32px">
      </div>
      </li>
      <li>
      <a role="menuitem" href="#" class="button">SAFARI INFO<span class="arrow-down"></span></a>
      <div class="layer" style="text-align:center;width:250px;height:456px">
<div id="RollOver25">
<a href="./info/paketEdu.php">
<img class="hover" alt="" src="images/aGroupDeal2.jpg">
<span><img alt="" src="images/aGroupDeal1.jpg"></span>
</a>
</div>
<div id="RollOver26">
<a href="./info/parkmap.php">
<img class="hover" alt="" src="images/bParkMap2.jpg">
<span><img alt="" src="images/bParkMap1.jpg"></span>
</a>
</div>
<div id="RollOver27">
<a href="./info/amusArea.html">
<img class="hover" alt="" src="images/cAmusement2.jpg">
<span><img alt="" src="images/cAmusement1.jpg"></span>
</a>
</div>
<div id="RollOver28">
<a href="./info/restaurant.php">
<img class="hover" alt="" src="images/dRestaurant2.jpg">
<span><img alt="" src="images/dRestaurant1.jpg"></span>
</a>
</div>
<div id="RollOver29">
<a href="./info/specialEx.php">
<img class="hover" alt="" src="images/eSpecialExperience2.jpg">
<span><img alt="" src="images/eSpecialExperience1.jpg"></span>
</a>
</div>
      </div>
      </li>
      <li>
      <a role="menuitem" href="#" class="button">ACCOMODATION<span class="arrow-down"></span></a>
      <div class="layer" style="text-align:center;width:250px;height:219px">
<div id="RollOver34">
<a href="https://www.royalsafarigarden.com/" target="_blank">
<img class="hover" alt="" src="images/aRoyalSafari2.jpg">
<span><img alt="" src="images/aRoyalSafari1.jpg"></span>
</a>
</div>
<div id="RollOver35">
<a href="https://hotelsafarilodge.com/" target="_blank">
<img class="hover" alt="" src="images/bSafariLodge2.jpg">
<span><img alt="" src="images/bSafariLodge1.jpg"></span>
</a>
</div>
      </div>
      </li>
      <li>
      <a role="menuitem" href="./contact.php" title="CONTACT US" class="button">CONTACT US<span class="arrow-down"></span></a>
      <div class="layer" style="text-align:center;width:250px;height:146px">
<div id="RollOver36">
<a href="./career.php">
<img class="hover" alt="" src="images/aCareer.jpg">
<span><img alt="" src="images/bCareer.jpg"></span>
</a>
</div>
      </div>
      </li>
   </ul>

</div>
</div>
</div>
<div class="col-3">
<div class="col-3-padding">
<div id="RollOver1">
<a href="https://ticket.tamansafaribogor.com" target="_blank">
<img class="hover" alt="" src="images/tiket2.png">
<span><img alt="" src="images/tiket1.png"></span>
</a>
</div>
</div>
</div>
<div class="col-4">
<div class="col-4-padding">
<div id="wb_GoMenu2">
<form id="GoMenu2" role="menu">
   <select id="GoMenu2_select" name="GoMenu2">
      <option class="_self" value="#" selected>Language</option>
      <option class="_self" value="" role="menuitem">Indonesia</option>
      <option class="_self" value="" role="menuitem">English</option>
   </select>
   <input id="GoMenu2_input" type="button" value="Go" onclick="OnGoMenuFormLink(this.form.GoMenu2)">
</form>

</div>
</div>
</div>
</div>
</div>
</div>
