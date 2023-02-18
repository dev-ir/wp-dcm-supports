<?php 
if (!empty(get_option('dcm_settings'))) {
  $options  = json_decode(get_option('dcm_settings'), true);
}
echo "
<style>
.dcm-footer-sticky-icon > .dcm-icon--call{
  background-color: ".$options['social_Phone_color']."!important;
}
.dcm-footer-sticky-icon > .dcm-icon--email{
  background-color: ".$options['social_Email_color']."!important;
}
.dcm-footer-sticky-icon > div{
  background-color: ".$options['social_whatsapp_color']."!important;
}
</style>
";
?>
<div class="dcm-footer-sticky">
  <div class="dcm-footer-sticky-icon">
    <?php if( !empty($options['phone_number']) ) : ?>
    <div class="dcm-icon--call">
      <a href="tel:<?php echo $options['phone_number'];?>" alt="dcm social phone"><i class="fa fa-phone"></i></a>
    </div>
    <?php endif; ?>
    <?php if( !empty($options['email_address']) ) : ?>
    <div class="dcm-icon--email">
      <a href="mailto:<?php echo $options['email_address'];?>" alt="dcm social email"><i class="far fa-envelope"></i></a>
    </div>
    <?php endif; ?>
    <?php if( !empty($options['social_whatsapp']) ) : ?>
    <div class="dcm-icon--whatsapp">
      <a href="https://wa.me/<?php echo $options['social_whatsapp'];?>" alt="dcm social whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <?php endif; ?>
  </div>
</div>