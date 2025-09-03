<?= view('partials/header') ?>
<!-- main-slider -->
<section class="w3l-main-slider banner-slider" id="home">
    <div class="owl-one owl-carousel owl-theme">
        <div class="item">
            <div class="slider-info banner-view banner-top1">
                <div class="container">
                    <div class="banner-info">
                        <h3>Ofrecemos soluciones <span>jurídicas</span> integrales</h3>
                        <div class="banner-info-top">
                            <p>Bufete especializado en derecho comercial, familia, laboral y penal en Colombia. </p>
                            <a href="about.html" class="btn btn-style btn-outline-light mt-sm-5 mt-4">Conoce Más <span class="fas fa-angle-double-right ms-2"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<!--/bottom-3-grids-->
<div class="w3l-3-grids" id="grids-3">
    <div class="container-fluid mx-lg-0">
        <div class="row pt-sm-0 pt-5">
            <div class="col-lg-4 col-sm-6 mt-sm-0 m px-md-0 w3-gridhny-1 position-relative">
                <div class="grids3-info">
                    <a href="#" class="d-block zoom"><img src="assets/images/g1.jpg" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info">
                        <h6><a href="#category" class="category d-block">Comercial</a></h6>
                        <h4><a href="#">Constituimos tu <span>empresa</span> S.A.S</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-sm-0 px-md-0 w3-gridhny-1 position-relative">
                <div class="grids3-info">
                    <a href="#blog" class="d-block zoom"><img src="assets/images/g2.jpg" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info second">
                        <h6><a href="#category" class="category d-block">Familia</a></h6>
                        <h4><a href="#">Divorcios y custodia para tu <span>familia</span></a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-lg-0 px-md-0 w3-gridhny-1 position-relative">
                <div class="grids3-info">
                    <a href="#blog" class="d-block zoom"><img src="assets/images/g3.jpg" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info">
                        <h6><a href="#category" class="category d-block">Laboral</a></h6>
                        <h4><a href="#">Defendemos tus derechos <span>laborales</span></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//bottom-3-grids-->
<!--/about-section-->
<section class="w3l-index2" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-md-5 py-3">
            <!--/row-1-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="w3shape position-relative">
                        <img src="assets/images/ab1.jpg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 align-self ps-lg-5">
                    <div class="title-content text-left">
                        <h6 class="title-subhny mb-2"><span>Nuestra Historia</span></h6>
                        <h3 class="title-w3l">Ayudando a empresas y familias conseguir lo que
                            <span class="span-bold">necesitan</span>
                        </h3>
                    </div>
                    <p class="mt-md-4 mt-3">Somos un bufete especializado en servicios jurídicos integrales con sede en Medellín.
                        Ofrecemos asesoría legal en derecho comercial, familiar, laboral y penal. Nos caracterizamos por
                        brindar atención personalizada y cobertura nacional. Constituimos sociedades S.A.S, manejamos divorcios,
                        revocamos fotomultas y defendemos derechos laborales con experiencia comprobada.</p>
                    <div class="w3l-two-buttons">
                        <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Conoce Más <span class="fas fa-angle-double-right ms-2"></span></a>
                        <a href="#view" class="btn btn-outline-primary btn-style mt-lg-5 mt-4 ms-2"> Contáctanos<span class="fas fa-angle-double-right ms-2"></span></a>
                    </div>
                </div>
            </div>
            <!--//row-1-->
        </div>
    </div>
</section>
<!--//about-section-->
<section class="w3l-video-sec" id="video">
        <div class="container">
                <div class="w3l-index5 py-5" id="video">
                        <div class="history-info align-self text-center py-5 my-lg-5">
                                <div class="position-relative py-5 my-lg-5">
                                        <!-- Botón de play que abre el modal -->
                                        <button type="button" class="play-view text-center position-absolute btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#videoModal" style="border:none; background:transparent;">
                                                <span class="video-play-icon">
                                                        <span class="fa fa-play"></span>
                                                </span>
                                        </button>
                                </div>
                        </div>
                </div>
                <!-- Modal Bootstrap para el video -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-transparent border-0">
                            <div class="modal-body p-0 d-flex justify-content-center align-items-center">
                                <div class="ratio ratio-16x9 w-100">
                                    <iframe id="youtubeVideo" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                // Cargar el video solo al abrir el modal y detenerlo al cerrar
                document.addEventListener('DOMContentLoaded', function() {
                    var videoModal = document.getElementById('videoModal');
                    var youtubeVideo = document.getElementById('youtubeVideo');
                    var videoSrc = 'https://www.youtube.com/embed/Cv_KG-A-tjc?si=5CyKND4oSqCaLDAS&autoplay=1';
                    videoModal.addEventListener('show.bs.modal', function () {
                        youtubeVideo.src = videoSrc;
                    });
                    videoModal.addEventListener('hidden.bs.modal', function () {
                        youtubeVideo.src = '';
                    });
                });
                </script>
</section>
<!--/grids-->
<section class="w3l-grids-3 home-page-gds py-5">
    <div class="container py-md-5 py-3">
        <div class="header-sec text-center pt-lg-5 mt-lg-5">
            <h3 class="title-w3l two mb-4 mt-lg-5">Somos un bufete joven y especializado que te <br> ofrece
                <span class="span-bold">soluciones legales.</span>
            </h3>
        </div>
        <div class="row bottom_grids text-left">
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="grid-block text-center">
                    <a href="#blog" class="d-block p-lg-4 p-3">
                        <span class="fas fa-building" aria-hidden="true"></span>
                        <h4 class="my-3">Constitución S.A.S</h4>
                        <p class="">Constituimos sociedades comerciales con facilidad y rapidez legal comprobada. </p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="grid-block text-center">
                    <a href="#blog" class="d-block p-lg-4 p-3">
                        <span class="fas fa-camera" aria-hidden="true"></span>
                        <h4 class="my-3">Revocamos Fotomultas</h4>
                        <p class="">Especialistas en revocatoria de comparendos electrónicos en toda Colombia. </p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="grid-block text-center">
                    <a href="#blog" class="d-block p-lg-4 p-3">
                        <span class="fas fa-gavel" aria-hidden="true"></span>
                        <h4 class="my-3">Defensa Legal</h4>
                        <p class="">Representación en procesos penales, laborales y administrativos especializados. </p>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-5">
                <div class="grid-block text-center">
                    <a href="#blog" class="d-block p-lg-4 p-3">
                        <span class="fas fa-headset" aria-hidden="true"></span>
                        <h4 class="my-3">Atención 24/7</h4>
                        <p class="">Asesoría legal gratuita y WhatsApp disponible para consultas urgentes siempre. </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//grids-->
<!--/services-->
<section class="w3l-services2" id="services">
    <div id="cwp23-block" class="py-5">
        <div class="container py-lg-5">
            <div class="row cwp23-content mt-lg-5 mt-4">
                <div class="col-lg-6 cwp23-img">
                    <h6 class="title-subhny mb-2"><span>¿Qué Hacemos?</span></h6>
                    <h3 class="title-w3l mb-4">Los servicios que ofrecemos están diseñados específicamente para <br>
                        <span class="span-bold">tus necesidades.</span>
                    </h3>
                    <p class="mt-4">Brindamos asesoría jurídica integral en derecho comercial, familiar, laboral y penal.
                        Manejamos insolvencia económica, arrendamientos y procesos administrativos. Nuestro equipo especializado
                        garantiza atención personalizada y resultados efectivos en toda Colombia.</p>
                    <div class="w3l-button mt-lg-5 mt-4">
                        <a href="services.html" class="btn btn-style btn-primary mt-2">Ver Servicios <span class="fas fa-angle-double-right ms-2"></span></a>
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
<!--/w3l-project-->
<section class="w3l-project-main pb-5">
    <div class="container pb-md-5 py-2">
        <div class="w3l-project p-md-5 p-4 px-4">
            <div class="row py-lg-4 px-lg-2 align-items-center">
                <div class="col-lg-8 w3l-project-right">
                    <div class="bottom-info">
                        <div class="header-section pr-lg-5">
                            <h3 class="title-w3l two">Solicita Consulta Jurídica Gratuita <br>y <span class="span-bold">¡Empecemos Ya!</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 w3l-project-left mt-lg-0 mt-4">
                    <a href="#" class="btn btn-secondary btn-style"> Consultar Ahora <span class="fas fa-angle-double-right ms-2"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-project-->
<!-- /features-->
<section class="w3l-featureshny py-5" id="features">
    <div class="container py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-8 pe-lg-5 mb-lg-0 mb-5">
                <div class="w3l-header-sec text-left mb-md-5 mb-4">
                    <h6 class="title-subhny mb-2"><span>Estrategia Legal</span></h6>
                    <h5 class="">Bufete que cree en el poder de una <span class="span-bold">estrategia legal</span> efectiva</h5>
                    <p class="mt-3 pr-lg-5">Ofrecemos asesoría jurídica especializada con cobertura nacional desde Medellín.
                        Manejamos derecho comercial, familiar, laboral y penal. No damos ningún caso por perdido y garantizamos
                        atención personalizada. Utilizamos tecnología para brindar servicios en línea eficientes. </p>
                    <a href="services.html" class="btn btn-primary btn-style mt-lg-5 mt-4"> Ver Más <span class="fas fa-angle-double-right ms-2"></span></a>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-4">
                <div class="whybox-wrap mb-4">
                    <div class="whybox-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-search"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Análisis del Caso</a></h4>
                            <p class="mt-3">Estudiamos cada situación jurídica con detalle y profesionalismo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="whybox-wrap mb-4">
                    <div class="whybox-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-file-contract"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Documentos Legales</a></h4>
                            <p class="mt-3">Preparamos documentación especializada para cada proceso legal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="whybox-wrap">
                    <div class="whybox-wrap-grid">
                        <div class="icon">
                            <span class="fas fa-handshake"></span>
                        </div>
                        <div class="info">
                            <h4><a href="#url">Resultados Exitosos</a></h4>
                            <p class="mt-3">Finalizamos procesos con resultados favorables para nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features-->
<!-- testimonials -->
<section class="w3l-clients pb-5" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5 pb-0">
        <div class="container py-lg-4 py-md-3 ">
            <div class="heading text-center mx-auto">
                <h6 class="title-subhny mb-2"><span>Testimonios</span></h6>
                <h3 class="title-w3l mb-5">Clientes Satisfechos
                    <span class="span-bold">& Opiniones</span>
                </h3>
            </div>
            <!-- /grids -->
            <div class="testimonial-width">
                <div class="row">
                    <div class="col-lg-6 item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q><i class="fas fa-quote-left"></i> Excelente servicio para constituir mi S.A.S. El proceso fue rápido y
                                        profesional. Los abogados de Guerrero me asesoraron en cada paso
                                        y resolvieron todas mis dudas. Totalmente recomendados por su experiencia.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Carlos Ramírez</h3>
                                        <p class="indentity">Medellín, Antioquia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q><i class="fas fa-quote-left"></i> Me ayudaron a revocar mi fotomulta exitosamente. Tenían razón cuando
                                        dijeron que era posible tumbarla legalmente. Su conocimiento especializado
                                        en derecho de tránsito es impresionante. Agradecido por su profesionalismo.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid" alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>María Gonzales</h3>
                                        <p class="indentity">Bogotá, Cundinamarca</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->
</body>
<?= view('partials/footer') ?>