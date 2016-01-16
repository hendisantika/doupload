<!DOCTYPE html>
<html>
<head>
<title>Unggah Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('unggah/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
