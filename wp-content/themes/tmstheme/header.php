<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
<meta charset="<?=bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=bloginfo('Description');?>">
<title><?=bloginfo('name');?> | <?= is_front_page()? bloginfo('description'): wp_title('');?></title>
<meta name="description" content="Gain end-to-end visibility and manage your overall logistics in a single platform.">
<!-- Priority -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<!-- jquery -->
<!-- <link rel="preload" href="<=bloginfo('url');?>/wp-content/plugins/elementor/assets/css/frontend-lite.min.css" as="style"/> -->
<!-- Priority -->
<!-- Pre-connects -->
<?php wp_head();?>
<script src="https://kit.fontawesome.com/a5b3b870d7.js" crossorigin="anonymous"></script>
</head>
<header class="container-fluid header-active ">
    <nav class="fixed-nav-bar nav-container" id="navbar">
    <ul class="menu">
      <div class="logo"><a href="<?=bloginfo('url');?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/1golog.svg" alt=""></a></div>
      <li class="toggle" ><a rel="nofollow" href="#" onClick='(false)' aria-label="toggle" id="togmenu"><i class="fas fa-bars"></i></a></li>
      <li class="item" ><a href="<?=bloginfo('url');?>/#solutions">SOLUTIONS</a>  <!--class = "item sol has-submenu2"-->
        <!-- <ul class="submenu2">
          <li class="sub-item2"><a href="#">Outsourced TMS</a></li>
          <li class="sub-item2"><a href="#">Enterprise TMS</a></li>
         </ul> -->
      </li>
      <li class="item"><a href="https://in1gotech.com/partners/"  target="_blank">PARTNERS</a></li>
      <li class="item"><a href="https://in1gotech.com/patrons/" target="_blank">CLIENTS</a></li>
      <li class="item has-submenu" id="divi"><a rel="nofollow" tabindex="0" onClick='(href="#")'  id="div1">RESOURCES</a>
        <ul class="submenu">
         <li class="sub-item"><a href="https://in1gotech.com/blogs/" target="_blank">BLOGS</a></li>
          <li class="sub-item"><a href="https://www.youtube.com/channel/UCWu79HfXHYax8e-wnLhJU3g/videos" target="_blank">VIDEOS</a></li>
        </ul>
      </li>
      <li class="item" id="contactUS"><a href="<?=bloginfo('url');?>/#contactus">CONTACT US</a></li>
    </ul>
  </nav>
</header>
<body>