

<footer class="footer">
  <?php
  $post_id = 25;
  if ( class_exists( 'SiteOrigin_Panels' ) && get_post_meta( $post_id, 'panels_data', true ) ) {
    echo SiteOrigin_Panels::renderer()->render( $post_id );
  } else {
    echo apply_filters( 'the_content', get_post( $post_id )->post_content );
  }
  ?>
  <div class="copyright" style="padding: 10px 0px;">
      <p style="margin:0px;text-align: center;">Thiết kế website bởi <a href="https://ninjadona.com/" target="_blank" style="color: ;">ninjadona.com</a></p>
    </div>
</footer>
<div class="scroll_top">
  <i class="fa fa-angle-up" aria-hidden="true"></i> 
</div>
<?php wp_footer(); ?>
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
</body>
</html>