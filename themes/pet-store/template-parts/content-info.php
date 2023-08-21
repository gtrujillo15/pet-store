<?php $content_heading = sanitize_text_field(get_field('content_heading'));
$content_textarea = get_field('content_textarea');
$content_img = get_field('content_img'); 
$content_link = get_field('content_link'); ?>

<!-- Content-Left Hand | Image Right Hand  -->
<?php if ($content_heading || $content_textarea || $content_link): ?>
    <section class="content-section">
        <div class="content-section-wrapper d-flex flex-column flex-lg-row">
            <div class="content-content container col-12 col-lg-6 d-flex flex-column justify-content-center align-items-end">
                <h3 class="text-right"><?php echo $content_heading; ?></h3>
                <p class="text-right"><?php echo $content_textarea; ?></p>
                <?php if ($content_link): ?>
                    <a class="content-link" href="<?php echo esc_url($content_link['url']); ?>"><?php echo sanitize_text_field($content_link['title']); ?></a>
                <?php endif; ?>
            </div>
            <div class="content-image col-12 col-lg-6 pl-0 pl-lg-2 pr-0">
                <img class="img-fluid" src="<?php echo $content_img; ?>" alt="">
            </div>
        </div>
    </section>
<?php endif; ?>