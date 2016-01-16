<!DOCTYPE html>
<html>
<head>
<title>Unggah Form</title>
</head>
<body>

<h3>File anda telah diunggah</h3>

<ul>
<?php foreach ($unggah_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Unggah file lain'); ?></p>

</body>
</html>
