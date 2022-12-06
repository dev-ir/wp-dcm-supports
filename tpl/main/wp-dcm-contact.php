<?php 
if (!empty(get_option('dcm_settings'))) {
  $options  = json_decode(get_option('dcm_settings'), true);
}
?>
<div class="dcm-footer-sticky">
  <div class="dcm-footer-sticky-icon">
    <?php if( !empty($options['phone_number']) ) : ?>
    <div class="dcm-icon--call">
      <a href="tel:<?php echo $options['phone_number'];?>"><i class="fa fa-phone"></i></a>
    </div>
    <?php endif; ?>
    <?php if( !empty($options['email_address']) ) : ?>
    <div class="dcm-icon--email">
      <a href="mailto:<?php echo $options['email_address'];?>"><i class="far fa-envelope"></i></a>
    </div>
    <?php endif; ?>
  </div>
</div>