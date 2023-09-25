<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, viewport-fit=cover">
<meta name="format-detection" content="telephone=no, email=no">
<title>Home</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="apple-touch-icon" sizes="180x180" href="static/images/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="static/images/favicon.png">

<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/swiper-bundle.min.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/animate.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/style.css">
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/static/css/jquery.fancybox.min.css" />

<script src="<?=get_template_directory_uri()?>/static/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=get_template_directory_uri()?>/static/js/jquery.min.js"></script>
<script src="<?=get_template_directory_uri()?>/static/js/headroom.min.js"></script>
<script src="<?=get_template_directory_uri()?>/static/js/swiper-bundle.min.js"></script>
<script src="<?=get_template_directory_uri()?>/static/js/wow.min.js"></script>
<script src="<?=get_template_directory_uri()?>/static/js/jquery.fancybox.min.js"></script>

<!---mobile menu---->
<link href="<?=get_template_directory_uri()?>/static/menu/style.css" rel="stylesheet">
<!---mobile menu---->

</head>
<body>
<header>
    <div class="header main-header py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="left ">
                    <div class="logo">
                        <a href="index.php"><img src="<?=get_template_directory_uri()?>/static/images/logo.png" alt="logo"></a>
                    </div>
                
                   
                </div>
                <div class="right nav-outer">
                   
                    
                    <div class="nav-box main-menu d-none d-md-block ">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav  navigation justify-content-end',
                                'menu_item_class' => 'nav-item dropdown',
                                'container'      => 'nav-box main-menu d-none d-md-block',
                        
                            ));
                        ?>        

                       
                    </div>
                    <div class="lang">
                        <a href="" title="en">EN</a>
                        <span>/</span>
                        <a href="" title="繁體">繁體</a>
                    </div>
                    <div class="icon-box mobile-nav-toggler d-flex d-md-none align-items-center">
                        <button class="btn collapsed d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseNav" aria-expanded="false">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
          
        </div>
              <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <!--<div class="close-btn"><span class="icon flaticon-multiply"></span></div>-->
         
            <nav class="menu-box">
				<!-- Search -->
                <div class='nav-logo'>
                    <div class="lang">
                        <a href="" class="active"  title="en">EN</a>
                        <a href="" title="繁體">繁</a>
                    </div>
                </div>
                <div class="menu-outer"></div>
				
			
            </nav>
        </div>
		<!-- End Mobile Menu -->
    
    </div>
</header>
