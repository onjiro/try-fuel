<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
</head>
<body>
  <div class="navbar navbar-inner">
    <a class="brand">Try fuel!!</a>
    <ul class="nav">
      <?php
      $features = array('' => 'Home', 'upload' => 'Upload');
      foreach($features as $key => $value) {
        if (Uri::segment(1) == $key) {
          echo "<li class=\"active\"><a>$value</a></li>";
        } else {
          echo "<li><a href=\"$key\">$value</a></li>";
        }
      }
      ?>
    </ul>
  </div>
	<div class="container">
		<div class="row">
			<div class="span16">
				<h1><?php echo $title; ?></h1>
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="alert-message success">
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert-message error">
					<p>
					<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
    </div>
    <div class="row">
			<div class="span16">
        <?php echo $content; ?>
			</div>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>
</body>
<script>
  var BASE_URL = '<?php echo Uri::base(true); ?>';
</script>
<?php echo Asset::js('config-require.js'); ?>
<?php echo Asset::js('require.js', array('data-main' => 'main')); ?>
</html>
