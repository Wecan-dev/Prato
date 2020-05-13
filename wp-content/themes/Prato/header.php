<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title><?php bloginfo('name');?></title>

	<!-- Behavioral Meta Data -->
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#00613c">
	
	<!-- Google Meta Data -->
	<meta name='description', content='<?php bloginfo('description');?>'>
	<meta name='keywords', content='prato apartamentos, apartamentos en sabaneta, venta de apartamentos en sabaneta, apartamentos nuevos en sabaneta, apartamentos prato sabaneta, proyecto habitacional en sabaneta'>
	<meta name="robots" content="index, follow">

	<!-- Blog Meta Data -->
	<meta name="dc.language" content="es">
	<meta name="dc.source" content="<?php bloginfo('url');?>">
	<meta itemprop="url" content="<?php bloginfo('url');?>">

	<!-- Twitter Card Meta Data -->
	<meta content='summary' name='twitter:card'>
	<meta content='Paginas web' name='twitter:site'>
	<meta content='Paginas web' name='twitter:title'>
	<meta content='Paginas web' name='twitter:description'>

	<!-- Open Graph Meta Data -->
	<meta content='website' property='og:type'>
	<meta content='<?php echo get_template_directory_uri(); ?>/assets/img/logo-header.png' property='og:image'>
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta content='' property='og:description'>
	<meta property="og:type" content="">
	<meta property="og:image" content="">

	<!-- Links -->
	<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/assets/css/fonts.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/assets/css/animate/animate.css" rel='stylesheet'>
	<link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.jpg"  rel="icon" type="image/png" sizes="32x32">
	<?php wp_head(); ?>
</head>
<style>
	.fixed-30{
		top: 30px !important;
	}
</style>
<body>
	<div  class="pdd-top">
		<?php if(is_home()): ?>
			<header>
				<nav class="navbar navbar-expand-md fixed-top navbar-fixed-js  <?php if ( is_user_logged_in() ){echo 'fixed-30';}?> " id="nav">
					<div class="container">
						<div class="main-brand">
							<a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
								<img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/logo-header.png" alt="" />
							</a>
							<button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
						<div class="navbar-collapse offcanvas-collapse">
							<ul class="navbar-nav m-auto">
								<li class="nav-item ">
									<a class="nav-link  " href="#acerca">Acerca del PROYECTO</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="#zonas-comunes">ZONAS COMUNES</a>

								</li>
								<li class="nav-item">
									<a class="nav-link " href="#galeria-exterior">GALERÍA EXTERIOR</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="#planos-proyecto">PLANOS DEL PROYECTO</a>
								</li>
								<li class="nav-item">
									<a class="nav-link " href="#galeria-apartamento">galería apartamento</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#formulario">contacto</a>
								</li>

							</ul>

						</div>
					</div>
					<div class="social-icons d-none">
						<li class="nav-item ">
							<a class="nav-link" target="_blank" href="https://www.facebook.com/nivelpropiedadraiz"><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/fb_2.png" alt=""></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" target="_blank" href="https://www.instagram.com/nivelpropiedadraiz"><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/instagram_2.png" alt=""></a>
						</li>
					</div>
				</nav>
			</header>
			<?php else:?>

				<header>
					<nav class="navbar navbar-expand-md fixed-top navbar-fixed-js <?php if ( is_user_logged_in() ){echo 'fixed-30';}?>" id="nav">
						<div class="container">
							<div class="main-brand">
								<a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
									<img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/logo-header.png" alt="" />
								</a>
								<button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas" type="button">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>
							</div>
							<div class="navbar-collapse offcanvas-collapse">
								<ul class="navbar-nav m-auto">
									<li class="nav-item ">
										<a class="nav-link  " href="<?php echo bloginfo('url').'/#acerca';?>">Acerca del PROYECTO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="<?php echo bloginfo('url').'/#zonas-comunes';?>">ZONAS COMUNES</a>

									</li>
									<li class="nav-item">
										<a class="nav-link " href="<?php echo bloginfo('url').'/#galeria-exterior';?>">GALERÍA EXTERIOR</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="<?php echo bloginfo('url').'/#planos-proyecto';?>">PLANOS DEL PROYECTO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="<?php echo bloginfo('url').'/#galeria-apartamento';?>">galería apartamento</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo bloginfo('url').'/#formulario';?>">contacto</a>
									</li>

								</ul>

							</div>
						</div>
						<div class="social-icons d-none">
							<li class="nav-item ">
								<a class="nav-link" target="_blank" href="https://www.facebook.com/nivelpropiedadraiz"><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/fb_2.png" alt=""></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" target="_blank" href="https://www.instagram.com/nivelpropiedadraiz"><img src="<?php echo get_template_directory_uri();?>/assets/img/iconos/instagram_2.png" alt=""></a>
							</li>
						</div>
					</nav>
				</header>
				<?php endif; ?>