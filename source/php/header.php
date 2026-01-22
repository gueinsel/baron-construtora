<!DOCTYPE html>



<html lang="pt_BR">



<head>

	



	<meta charset="UTF-8">



	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<title>



		Baron



	</title>



	<meta name="robots" content="index, follow" />



	<meta name="msapplication-TileColor" content="#ffffff">



	<meta name="theme-color" content="#ffffff">

	



	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">

	<link rel="stylesheet" href="https://use.typekit.net/ehq0wvg.css">

	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/dist/css/lightbox.min.css">

	<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/dist/css/style.css">





	<?php wp_head(); ?>

</head>



<body>





	<header class="menu-fixo">

		    <nav class="navbar navbar-expand-lg bg-white border-bottom py-3 sticky-top">
        <div class="container position-relative">

            <a class="navbar-brand me-auto" href="#">
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/img/Asset-1baron_log_cor.png" alt="Baron Construtora"
                    style="height: 55px; max-width: 100%; object-fit: contain;">
            </a>

            <div class="d-flex align-items-center order-lg-last ms-3">
                
                <button class="navbar-toggler border-0 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#menuBaron" id="btnMenuMobile">
                    <i class="fas fa-bars fs-3" style="color: #1b365d;"></i>
                </button>

                <a class="nav-link" href="#buscaCollapse" data-bs-toggle="collapse" role="button" aria-expanded="false"
                    style="color: #1b365d;">
                    <i class="fas fa-search fs-4"></i>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="menuBaron">
                <ul class="navbar-nav ms-auto align-items-center w-100 justify-content-end gap-3 pt-4 pt-lg-0"
                    style="font-size: 0.85rem;">

                    <li class="nav-item"><a class="nav-link <?php if(is_page('a-baron')){ echo 'link-ativo'; } ?> text-uppercase fw-semibold text-nowrap" href="#" >A Baron</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(is_page('grupo-brn')){ echo 'link-ativo'; } ?> text-uppercase fw-semibold text-nowrap" href="#" >Grupo BRN</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(is_page('empreendimentos')){ echo 'link-ativo'; } ?> text-uppercase fw-semibold text-nowrap" href="#" >Empreendimentos</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-nowrap" href="#" >Portal do Cliente</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-nowrap" href="#" >Canal de Parcerias</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase fw-semibold text-nowrap" href="#" >Indique e Ganhe</a></li>
                    <li class="nav-item"><a class="nav-link <?php if(is_page('contato')){ echo 'link-ativo'; } ?> text-uppercase fw-semibold text-nowrap" href="#" >Contato</a></li>
                </ul>
            </div>

            <div class="collapse position-absolute top-100 end-0 z-3 p-3 bg-white shadow-sm" id="buscaCollapse"
                style="min-width: 300px; max-width: 90vw; border-top: 1px solid #eee;">
                <input type="text" id="inputPesquisa" class="form-control" placeholder="Pesquisar"
                    style="border: 1px solid #1b365d; border-radius: 0;">
            </div>

        </div>
    </nav>

	</header>