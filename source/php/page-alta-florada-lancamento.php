<?php 
get_header(); 
the_post(); 
?>

<div id="carouselBaron" class="carousel slide vh-100" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner h-100">
        <div class="carousel-item active h-100">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/Banner-Principal_04-2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Fachada">
            
            <div class="carousel-caption hero-caption d-none d-md-block text-start start-0 bottom-0 pb-5 ps-5 mb-5 w-100">
                <p class="text-uppercase fw-bold mb-0 text-white badge-status">Em obras - Sorocaba</p>
                <p class="mb-2 text-white fs-4">2 dorms | 1 suíte</p>
                <h1 class="fw-bold text-uppercase text-white hero-title">
                    Alta Florada<br>Residencial
                </h1>
            </div>
        </div>
        <div class="carousel-item h-100">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/Banner-Principal_03-2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Piscina">
            
            <div class="carousel-caption hero-caption d-none d-md-block text-start start-0 bottom-0 pb-5 ps-5 mb-5 w-100">
                <p class="text-uppercase fw-bold mb-0 text-white badge-status">Em obras - Sorocaba</p>
                <p class="mb-2 text-white fs-4">2 dorms | 1 suíte</p>
                <h1 class="fw-bold text-uppercase text-white hero-title">
                    Alta Florada<br>Residencial
                </h1>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBaron" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBaron" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>

<nav class="sticky-top w-100 d-flex justify-content-center align-items-center flex-wrap py-3 navbar-custom">
    <a href="#caracteristica" class="nav-link-custom">Característica</a>
    <a href="#galeria" class="nav-link-custom">Galeria</a>
    <a href="#video" class="nav-link-custom">Vídeo</a>
    <a href="#plantas" class="nav-link-custom">Plantas</a>
    <a href="#arquitetura" class="nav-link-custom">Arquitetura</a>
    <a href="#localizacao" class="nav-link-custom">Localização</a>
    <a href="#contato" class="nav-link-custom">Contato</a>
</nav>

<section id="caracteristica" class="container py-5 my-5">
    <div class="row mb-5">
        <div class="col-md-4 mb-4 mb-md-0 text-center text-md-start">
            <p class="section-subtitle">Característica</p>
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/LOGO-ALTA-FLORADA.png" alt="Logo Alta Florada" class="img-fluid mt-2" style="max-width: 220px;">
        </div>

        <div class="col-md-8">
            <h3 class="section-title">
                Bem-vindo ao mais novo ícone da região central de Sorocaba
            </h3>
            <p class="text-secondary fw-light" style="font-size: 14px; line-height: 1.8;">
                Vista livre todos os dias na torre mais alta do bairro, com a praticidade que seu dia a dia merece. Localização privilegiada, lazer completo e qualidade de vida em um dos endereços mais tradicionais de Sorocaba. Com 20 opções de lazer, o empreendimento oferece diversão, bem-estar e tudo o que sua família precisa para viver bem e criar raízes.
            </p>
        </div>
    </div>

    <hr class="text-secondary opacity-25 mb-5">

    <div class="row gx-lg-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="<?= get_stylesheet_directory_uri(); ?>/img/Living.jpg" alt="Living Decorado" class="img-fluid w-100 shadow-sm">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center">
            
            <div class="d-flex justify-content-between align-items-center tabela-linha">
                <span class="label">Endereço:</span>
                <span class="value text-end">Rua Martins França, Nº51, Sorocaba/SP</span>
            </div>

            <div class="d-flex justify-content-between align-items-center tabela-linha">
                <span class="label">Bairro:</span>
                <span class="value text-end">Árvore Grande</span>
            </div>

            <div class="d-flex justify-content-between align-items-center tabela-linha">
                <span class="label">Metragem Tipo:</span>
                <span class="value text-end">Apartamento de 48 e 53 m²</span>
            </div>

            <div class="d-flex justify-content-between align-items-center tabela-linha">
                <span class="label">Nº de Vagas:</span>
                <span class="value text-end">1</span>
            </div>

            <div class="d-flex justify-content-between align-items-center tabela-linha">
                <span class="label">Arquitetura:</span>
                <span class="value text-end">Rodrigo Sobreiro Arquitetos</span>
            </div>

            <div class="d-flex justify-content-between align-items-center tabela-linha">
                <span class="label">Status:</span>
                <span class="value text-end">Lançamento</span>
            </div>

        </div>
    </div>
</section>

<section id="galeria" class="container pt-5">
    <div class="mb-4 text-center text-md-start">
        <p class="section-subtitle">Galeria de Imagens</p>
        <h3 class="section-title">Conheça cada detalhe</h3>
    </div>

    <div id="carouselGaleria" class="carousel slide shadow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Varanda-Grill.webp" class="d-block w-100" alt="Imagem 1"></div>
            <div class="carousel-item"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Academia-ao-ar-livre.webp" class="d-block w-100" alt="Imagem 2"></div>
            <div class="carousel-item"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Academia.webp" class="d-block w-100" alt="Imagem 3"></div>
            </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%;"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%;"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<div class="container pb-5 mb-5 swiper-container-thumbs">
    <div class="swiper mySwiperThumbnails">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Varanda-Grill.webp" alt="Thumb 1" data-bs-target="#carouselGaleria" data-bs-slide-to="0"></div>
            <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Academia-ao-ar-livre.webp" alt="Thumb 2" data-bs-target="#carouselGaleria" data-bs-slide-to="1"></div>
            <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Academia.webp" alt="Thumb 3" data-bs-target="#carouselGaleria" data-bs-slide-to="2"></div>
            </div>
    </div>
</div>

<section id="video" class="container pb-5 mb-5">
    <div class="mb-4 text-center text-md-start">
        <p class="section-subtitle">Filme Oficial</p>
        <h3 class="section-title">Alta Florada Residencial</h3>
    </div>
    <div class="ratio ratio-16x9 shadow-lg rounded overflow-hidden">
        <iframe src="https://www.youtube.com/embed/cumJ6c1YcsY?rel=0" title="Filme Oficial" allowfullscreen></iframe>
    </div>
</section>

<section id="plantas" class="container pt-5">
    <div class="mb-4 text-center text-md-start">
        <p class="section-subtitle">Plantas</p>
        <h3 class="section-title">Conheça nossas opções</h3>
    </div>

    <div id="carouselPlantas" class="carousel slide shadow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Planta-Alta-Florada.webp" class="d-block w-100" alt="Planta 1"></div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlantas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%;"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselPlantas" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true" style="background-size: 50%;"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<div class="container pb-5 mb-5 swiper-container-thumbs">
    <div class="swiper mySwiperPlantas">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= get_stylesheet_directory_uri(); ?>/img/Planta-Alta-Florada.webp" alt="Thumb 1" data-bs-target="#carouselPlantas" data-bs-slide-to="0"></div>
            </div>
    </div>
</div>

<section class="d-flex align-items-center justify-content-center text-center text-white py-5 parallax-tour" 
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/img/fundo-tour.jpg');">
    
    <div class="position-absolute top-0 start-0 w-100 h-100 overlay"></div>

    <div class="container position-relative z-1">
        <h2 class="text-uppercase fw-bold mb-3 display-5">
            Veja agora como será a<br>sua vista dos sonhos
        </h2>
        <p class="mb-5 fw-light fs-5">
            Um clique para descobrir a vista perfeita em cada andar
        </p>
        <a href="https://fd360.com.br/altaflorada/" target="_blank" class="btn btn-gold px-5 py-3 rounded-0 shadow-lg fw-bold text-uppercase">
            VER AGORA!
        </a>
    </div>
</section>

<section class="container my-5 py-5" id="arquitetura">
    <div class="row mb-4">
        <div class="col">
            <h2 class="text-uppercase fw-light" style="color: #c5a059; letter-spacing: 2px; font-size: 1.2rem;">Arquitetura</h2>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-5">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/img/003-2.jpg" class="img-fluid" alt="Rodrigo Sobreiro">
                </div>
                <div class="col-7">
                    <p class="text-muted mb-0 small">Arquiteto</p>
                    <h3 class="h5 fw-bold mb-2">Rodrigo Sobreiro</h3>
                    <p class="small text-secondary text-justify" style="font-size: 0.85rem;">
                        Rodrigo Sobreiro, arquiteto com mais de 20 anos de experiência...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-5">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/img/002-2.jpg" class="img-fluid" alt="DP Barros">
                </div>
                <div class="col-7">
                    <p class="text-muted mb-0 small">Interiores</p>
                    <h3 class="h5 fw-bold mb-2">DP Barros</h3>
                    <p class="small text-secondary text-justify" style="font-size: 0.85rem;">
                        A DP Barros Interiores, fundada há 23 anos...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-5 py-5" id="localizacao">
    <div class="row mb-4">
        <div class="col">
            <h2 class="text-uppercase fw-light" style="color: #c5a059; letter-spacing: 2px; font-size: 1.2rem;">Localização</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="ratio ratio-21x9 shadow-sm map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14636.265791303194!2d-47.43843100000001!3d-23.494116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf6019efa0014d%3A0x55aeacacc67e5f2e!2sR.%20Martins%20Fran%C3%A7a%2C%2051%20-%20Al%C3%A9m%20Ponte%2C%20Sorocaba%20-%20SP%2C%2018013-270%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1771244071336!5m2!1spt-BR!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="container my-5 py-5" id="contato">
    <div class="row mb-4">
        <div class="col">
            <h2 class="text-uppercase fw-light" style="color: #c5a059; letter-spacing: 2px; font-size: 1.2rem;">Contato</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="p-4 p-md-5 contact-box">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6"><input type="text" class="form-control form-control-custom" placeholder="NOME COMPLETO"></div>
                        <div class="col-md-6"><input type="text" class="form-control form-control-custom" placeholder="TELEFONE COM DDD"></div>
                        <div class="col-md-6"><input type="email" class="form-control form-control-custom" placeholder="E-MAIL"></div>
                        <div class="col-md-6"><input type="text" class="form-control form-control-custom" placeholder="CIDADE"></div>
                    </div>
                    <div class="row mt-4 text-white" style="font-size: 0.75rem;">
                        <div class="col-md-6 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkComunicacao">
                                <label class="form-check-label text-uppercase" for="checkComunicacao">Aceito receber comunicações...</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkPrivacidade">
                                <label class="form-check-label text-uppercase" for="checkPrivacidade">
                                    Concordo com a <a href="#" class="link-privacy">Política de Privacidade...</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-submit rounded-0 px-5 py-3 text-uppercase fw-bold">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    var swiperConfig = {
        loop: true,
        grabCursor: true,
        autoplay: { delay: 2000, disableOnInteraction: false, pauseOnMouseEnter: true },
        breakpoints: {
            320: { slidesPerView: 2, spaceBetween: 10 },
            576: { slidesPerView: 3, spaceBetween: 15 },
            768: { slidesPerView: 4, spaceBetween: 15 },
            1024: { slidesPerView: 6, spaceBetween: 20 },
        }
    };
    var swiperThumbnails = new Swiper(".mySwiperThumbnails", swiperConfig);
    var swiperPlantas = new Swiper(".mySwiperPlantas", swiperConfig);
</script>

<?php get_footer(); ?>