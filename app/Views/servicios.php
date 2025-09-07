<?= view('partials/header') ?>
<!-- breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="w3breadcrumb-gids text-center pt-5">
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="<?= site_url('/') ?>">Home</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//breadcrumb-->
<?php
// Obtener lista de servicios: preferir la variable pasada desde el controlador, si no existe, cargar el JSON
if (!isset($servicios) || !is_array($servicios)) {
    // Cargar el modelo JSON como fallback (rápido para pruebas)
    if (class_exists('\App\\Models\\ServicioJsonModel')) {
        $model = new \App\Models\ServicioJsonModel();
        $servicios = $model->findAll();
    } else {
        $servicios = [];
    }
}
?>
<!--/services-->
<section class="w3l-services2" id="services">
    <div id="cwp23-block" class="py-5">
        <div class="container py-lg-5">
            <div class="row cwp23-content mt-lg-5 mt-4">
                <div class="col-lg-6 cwp23-img">
                    <h6 class="title-subhny mb-2"><span>¿Qué hacemos?</span></h6>
                    <h3 class="title-w3l mb-4">Asesoría y representación legal especializada<br>
                        <span class="span-bold">para proteger tus derechos.</span>
                    </h3>
                    <p class="mt-4">Brindamos acompañamiento en procesos de familia, pensiones, tutela y resolución de conflictos. Actuamos con rapidez y experiencia para obtener soluciones prácticas y eficaces.</p>

                    <div class="w3l-button mt-lg-5 mt-4">
                        <a href="<?= site_url('servicios') ?>" class="btn btn-style btn-primary mt-2">Ver servicios <span class="fas fa-angle-double-right ms-2"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 cwp23-text mt-lg-0 mt-5 ps-lg-5">
                    <div class="cwp23-text-cols">
                        <div class="column">
                            <a href="#"><img src="assets/images/g2.jpg" alt="" class="radius-image img-fluid"></a>
                        </div>
                        <div class="column">
                            <a href="#"><img src="assets/images/g3.jpg" alt="" class="radius-image img-fluid"></a>
                        </div>
                        <div class="column">
                            <a href="#"><img src="assets/images/g4.jpg" alt="" class="radius-image img-fluid"></a>
                        </div>
                        <div class="column">
                            <a href="#"><img src="assets/images/g5.jpg" alt="" class="radius-image img-fluid"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--//services-->

<!--/grids-->
<section class="w3l-grids-3 py-5">
    <div class="container py-md-5 py-3">
                <div class="row bottom-ab-grids align-items-center">
            <div class="header-sec text-center">
                <h6 class="title-subhny mb-2"><span>Nuestros Servicios</span></h6>
                <h3 class="title-w3l mb-3">Servicios legales especializados en familia, pensiones y tutela<br>
                    <span class="span-bold">Protección y asesoría efectiva.</span>
                </h3>

            </div>

        </div>
        <style>
            /* Make each column a flex container so cards stretch to equal height */
            .bottom_grids .col-lg-4, .bottom_grids .col-md-6 { display: flex; }
            .bottom_grids .grid-block { flex: 1 1 auto; }
            .bottom_grids .grid-block > a { display: flex; flex-direction: column; height: 100%; }

            /* Service card teaser: clamp lines and ensure a minimum height so all cards align.
               Uses -webkit-line-clamp for broad browser support; adjust lines as needed. */
            .srv-desc {
                flex: 1 1 auto;
                min-height: 72px;
                display: -webkit-box;
                -webkit-line-clamp: 3;
                line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                margin-bottom: 0.5rem;
            }
        </style>
        <div class="row bottom_grids pt-md-3 text-left">
            <?php
            // Icon set to rotate visually similar to the original design
            $icons = ['fas fa-file-alt','fas fa-holly-berry','fas fa-american-sign-language-interpreting','fa fa-cubes','fas fa-chart-pie','fas fa-headset'];
            $i = 0;
            foreach ($servicios as $srv):
                $icon = $icons[$i % count($icons)];
                $title = $srv['nombre'] ?? ($srv['seo']['titulo'] ?? 'Servicio');
                $descRaw = $srv['descripcion'] ?? ($srv['seo']['meta_description'] ?? '');
                $descPlain = trim(strip_tags($descRaw));
                // Truncate to a fixed number of characters (uniform preview)
                $truncLen = 90;
                $shortDesc = mb_substr($descPlain, 0, $truncLen);
                $slug = $srv['seo']['url_slug'] ?? null;
            ?>
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="grid-block">
                    <a href="<?= $slug ? site_url('servicios/' . $slug) : '#'; ?>" class="d-block p-lg-4 p-3">
                        <span class="<?= esc($icon) ?>" aria-hidden="true"></span>
                        <h4 class="my-3"><?= esc($title) ?></h4>
                        <p class="srv-desc"><?= esc($shortDesc) ?></p>
                    </a>
                </div>
            </div>
            <?php $i++; endforeach; ?>
        </div>
    </div>
</section>
<!--//grids-->
<!--/w3l-services3-->
<section class="w3l-services3">
    <div class="new-block">
        <div class="container py-5">
            <div class="middle-section py-lg-5 py-4">
                <div class="section-width">
                    <h6 class="title-subhny mb-2"><span>Por qué elegirnos</span></h6>
                    <h3 class="title-w3l two mb-4">Contacta con nosotros y te apoyaremos
                        <span class="span-bold">con compromiso y resultados.</span>
                    </h3>
                </div>
                <div class="link-list-menu">
                    <p class="">Nuestro despacho ofrece experiencia probada en litigio y conciliación, atención personalizada y una trayectoria de casos exitosos. Nos enfocamos en soluciones prácticas y la defensa de tus intereses.</p>
                    <div class="w3l-two-buttons">
                        <a href="<?= site_url('about') ?>" class="btn btn-primary btn-white btn-style mt-lg-5 mt-4">Más información <span class="fas fa-angle-double-right ml-2"></span></a>
                        <a href="<?= site_url('contacto') ?>" class="btn btn-style btn-secondary mt-lg-5 mt-4 ms-sm-3">Contáctanos <span class="fas fa-angle-double-right ml-2"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-services3-->
<!--/w3l-pricing-->
<section class="w3l-pricing-sec py-5" id="pricing">
    <div class="container py-md-5 py-2">
        <div class="title-content text-center">
            <h6 class="title-subhny mb-2"><span>Comienza</span></h6>
            <h3 class="title-w3l mb-4">Planes y
                <span class="span-bold">Tarifas</span>
            </h3>
        </div>
        <div class="row pricing-main-grids mt-3">
            <div class="col-lg-4 col-md-6 pricing-main-grid mt-sm-5 mt-4">
                <div class="w3-pricing-inner-inf">
                    <div class="pricing-header">
                        <h4>Consulta inicial</h4>
                        <p>Evaluación y orientación breve</p>
                        <div class="price-wrapper mt-4">
                            <div class="price">
                                <h3 class="currency">Desde $</h3>
                                <h3 class="heading headin-h3">39</h3>
                            </div>
                        </div>

                    </div>
                    <div class="pricing-body">
                        <div class="inner">
                            <ul class="list-style">
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> 1 hora de consulta</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Revisión de documentos</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Informe con pasos a seguir</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Soporte por correo</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Presupuesto personalizado</li>
                            </ul>
                        </div>
                        <div class="pricing-get-button mt-3">
                            <a class="btn btn-secondary btn-style mt-4 d-block" href="<?= site_url('contacto') ?>">Solicitar consulta</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pricing-main-grid mt-sm-5 mt-4">
                <div class="w3-pricing-inner-inf">
                    <div class="pricing-header set-2">
                        <h4>Representación</h4>
                        <p>Trámite y acompañamiento judicial</p>
                        <div class="price-wrapper mt-4">
                            <div class="price">
                                <h3 class="currency">Desde $</h3>
                                <h3 class="heading headin-h3">69</h3>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <div class="inner">
                            <ul class="list-style">
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Presentación de demandas y recursos</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Preparación de audiencias</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Estrategia procesal</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Gestión de pruebas</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Informes periódicos al cliente</li>
                            </ul>
                        </div>
                        <div class="pricing-get-button mt-3">
                            <a class="btn btn-secondary btn-style mt-4 d-block" href="<?= site_url('contacto') ?>">Solicitar representación</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pricing-main-grid mt-sm-5 mt-4">
                <div class="w3-pricing-inner-inf">
                    <div class="pricing-header set-3">
                        <h4>Asesoría integral</h4>
                        <p>Servicio completo y seguimiento continuo</p>
                        <div class="price-wrapper mt-4">
                            <div class="price">
                                <h3 class="currency">Desde $</h3>
                                <h3 class="heading headin-h3">99</h3>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-body">
                        <div class="inner">
                            <ul class="list-style">
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Gestión integral de caso</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Representación en todas las instancias</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Redacción y revisión completa de documentos</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Atención prioritaria y reuniones periódicas</li>
                                <li><span class="fa fa-check me-2" aria-hidden="true"></span> Defensa estratégica personalizada</li>
                            </ul>
                        </div>
                        <div class="pricing-get-button mt-3">
                            <a class="btn btn-secondary btn-style mt-4 d-block" href="<?= site_url('contacto') ?>">Contratar asesoría</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //w3l-pricing-->
</body>
<?= view('partials/footer') ?>