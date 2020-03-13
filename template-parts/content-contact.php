<!-- Contacto -->
<div class="contact-container">
    <div class="col">
        <div class="content">
        <?php  if ( is_active_sidebar( 'ccolumn-1' ) ) : ?>
        <div id="ccolumn-1" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'ccolumn-1' ); ?>
        </div>
        <?php endif; ?>
        </div>
    </div>

    <div class="col">
       <?php  if ( is_active_sidebar( 'ccolumn-2' ) ) : ?>
        <div id="ccolumn-2" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'ccolumn-2' ); ?>
        </div>
        <?php endif; ?>
    </div>
</div><!-- Contacto -->
