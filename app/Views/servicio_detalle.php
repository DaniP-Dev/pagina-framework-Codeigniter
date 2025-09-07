<?php
// app/Views/servicio_detalle.php
// Vista mínima para mostrar un servicio y sus metadatos SEO

// Prepara los meta valores tomando la prioridad: variables pasadas desde el controlador -> datos del JSON -> valores por defecto
$headData = [
    'meta_title' => isset($meta_title) ? $meta_title : (isset($servicio['seo']['titulo']) ? $servicio['seo']['titulo'] : (isset($servicio['nombre']) ? $servicio['nombre'] : 'Servicio')),
    'meta_description' => isset($meta_description) ? $meta_description : (isset($servicio['seo']['meta_description']) ? $servicio['seo']['meta_description'] : ''),
    'meta_keywords' => isset($meta_keywords) ? $meta_keywords : (isset($servicio['seo']['keywords']) ? (is_array($servicio['seo']['keywords']) ? implode(', ', $servicio['seo']['keywords']) : $servicio['seo']['keywords']) : ''),
];

echo view('partials/header', $headData);
?>

<!-- breadcrumb -->
<style>
    /* View-scoped: control breadcrumb hero height and vertical centering */
    .servicio-page .breadcrumb-bg-about {
        min-height: 340px; /* override default: adjust as needed */
        padding-top: 3.5rem;
        padding-bottom: 3.5rem;
        background-size: cover !important;
        background-position: center center !important;
        display: flex; /* ensure we can center children vertically */
        align-items: center; /* vertical centering (Y axis) */
        justify-content: center; /* horizontal centering (X axis) */
    }
    /* keep container full-width but let flex parent handle vertical alignment */
    .servicio-page .breadcrumb-bg-about .container { width: 100%; }
    /* Center content vertically and horizontally */
    .servicio-page .w3breadcrumb-gids { height: 100%; display: flex; align-items: center; justify-content: center; }
    .servicio-page .w3breadcrumb-right { width: 100%; text-align: center; }
    .servicio-page .breadcrumbs-custom-path { display: inline-block; margin: 0 auto; }
    .servicio-page .breadcrumbs-custom-path li { display: inline-block; vertical-align: middle; }

    /* Slightly reduce vertical padding on narrow screens so centering looks better */
    @media (max-width: 767.98px) {
        .servicio-page .breadcrumb-bg-about { padding-top: 2rem; padding-bottom: 2rem; }
    }
</style>
<section class="w3l-about-breadcrumb servicio-page">
    <div class="breadcrumb-bg breadcrumb-bg-about py-4">
        <div class="container py-lg-3 py-md-2">
            <div class="w3breadcrumb-gids text-start">
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="<?= site_url('/') ?>">Inicio</a></li>
                        <li><a href="<?= site_url('servicios') ?>">Servicios</a></li>
                        <li class="active"><span class="fas fa-angle-double-right mx-2"></span> <?= esc($servicio['nombre'] ?? ($servicio['seo']['titulo'] ?? 'Servicio')) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero + summary -->
<style>
    /* Responsive styles for servicio detalle */
    .service-hero { padding-top: 0; }
    .service-hero .service-image {
        width:100%;
        height:220px;
        background-color:#f5f5f5;
        background-size:cover;
        background-position:center;
        border-radius:8px;
    }

    /* Desktop: align items at top so title and summary align visually */
    @media (min-width: 992px) {
        .service-hero .row { align-items:flex-start; }
        .service-hero .col-lg-8 { display:block; }
        .service-hero .col-lg-4 { display:block; text-align:right; padding-left:30px; }
        .service-hero .card { max-width:320px; margin-left:auto; }
    }

    /* Tablet: moderate image height */
    @media (min-width: 768px) and (max-width: 991.98px) {
        .service-hero .service-image { height:200px; }
        .service-hero .col-lg-4 { text-align:left; margin-top:1rem; }
        .service-hero .card { max-width:360px; margin-left:0; }
    }

    /* Mobile: stack columns, make image responsive and cards full width */
    @media (max-width: 767.98px) {
        .service-hero .row { display:block; }
        .service-hero .col-lg-8, .service-hero .col-lg-4 { width:100%; display:block; }
        .service-hero .service-image { height: calc(40vw); max-height: 260px; }
        .service-hero .card { max-width:100% !important; margin-left:0 !important; }
        .service-hero .col-lg-4 { margin-top:1rem; }
    }

    .service-content p { text-align:justify; line-height:1.6; }
    /* Remove box-shadow so summary blends with hero area */
    .service-hero .card { box-shadow: 0 1px 6px rgba(0,0,0,0.06); }
</style>

<section class="py-5 service-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <?php $imgUrl = !empty($servicio['imagen']) ? base_url($servicio['imagen']) : ''; ?>
                <div class="service-image mb-3" style="<?= $imgUrl ? 'background-image:url(' . esc($imgUrl) . ');' : '' ?>"></div>

                <h1 class="mb-3"><?= esc($servicio['nombre'] ?? ($servicio['seo']['titulo'] ?? 'Servicio')) ?></h1>
                <?php if (!empty($servicio['seo']['meta_description'])): ?>
                    <p class="lead"><?= esc($servicio['seo']['meta_description']) ?></p>
                <?php elseif (!empty($servicio['descripcion'])): ?>
                    <p class="lead"><?= esc(mb_substr(strip_tags($servicio['descripcion']), 0, 140)) ?><?= (mb_strlen(strip_tags($servicio['descripcion'])) > 140) ? '...' : '' ?></p>
                <?php endif; ?>
            </div>

            <div class="col-lg-4 text-lg-end text-start">
                <a href="<?= site_url('contacto') ?>" class="btn btn-primary mb-4">Contactar</a>

                <div class="card mb-3" style="max-width:320px; margin-left:auto;">
                    <div class="card-body">
                        <h5 class="card-title">Resumen</h5>
                        <p class="card-text small mb-1"><strong>Área:</strong> <?= esc($servicio['categoria'] ?? 'Servicios legales') ?></p>
                        <p class="card-text small mb-1"><strong>Modalidad:</strong> <?= esc($servicio['modalidad'] ?? 'Presencial / Virtual') ?></p>
                        <?php if (!empty($servicio['duracion'])): ?><p class="card-text small mb-1"><strong>Duración:</strong> <?= esc($servicio['duracion']) ?></p><?php endif; ?>
                        <div class="mt-3">
                            <a href="<?= site_url('contacto') ?>" class="btn btn-primary d-block">Solicitar información</a>
                            <a href="<?= site_url('servicios') ?>" class="btn btn-link d-block mt-2">Volver a servicios</a>
                        </div>
                    </div>
                </div>

                <?php if (!empty($servicio['seo'])): ?>
                    <div class="card" style="max-width:320px; margin-left:auto;">
                        <div class="card-body">
                            <h6 class="card-title">SEO (preview)</h6>
                            <p class="small mb-1"><strong>Título:</strong> <?= esc($headData['meta_title']) ?></p>
                            <p class="small mb-1"><strong>Meta description:</strong> <?= esc($headData['meta_description']) ?></p>
                            <p class="small"><strong>Slug:</strong> <?= esc($servicio['seo']['url_slug'] ?? '') ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<main class="container py-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="service-content mb-4">
                <?php if (!empty($servicio['descripcion'])): ?>
                    <?= nl2br(esc($servicio['descripcion'])) ?>
                <?php else: ?>
                    <p>Descripción no disponible.</p>
                <?php endif; ?>
            </div>

            <?php if (!empty($servicio['regulacion'])): ?>
                <div class="mb-4">
                    <h3>Regulación aplicable</h3>
                    <p><?= nl2br(esc($servicio['regulacion'])) ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($servicio['faq']) && is_array($servicio['faq'])): ?>
                <div class="mb-4">
                    <h3>Preguntas frecuentes</h3>
                    <?php foreach ($servicio['faq'] as $q): ?>
                        <div class="mb-2">
                            <strong><?= esc($q['q'] ?? '') ?></strong>
                            <p><?= esc($q['a'] ?? '') ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- right column removed (summary already in hero) -->
    </div>
</main>

<?= view('partials/footer') ?>