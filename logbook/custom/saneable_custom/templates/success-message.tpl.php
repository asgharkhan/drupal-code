<div class="saneable-succes-message">
  <?php if($heading): ?>
  <h3><?php echo $heading; ?></h3>
  <?php endif;?>
    <?php if($message): ?>
  <div class="saneable-success-message-text"><?php echo $message; ?></div>
  <?php endif;?>
      <?php if($login): ?>
  <div class="saneable-success-message-login-block"><?php echo $login; ?></div>
  <?php endif;?>
</div>