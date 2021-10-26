<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body style="background:url(https://raw.githubusercontent.com/artartartt/2021/main/arajadranq_dasyntaci/img/bg_img.jpg); ">
	<ul style="display: flex;justify-content: space-around;">

		<li>
			<a href="<?php echo ROOT; ?>account/comment">Feedback System</a>
		</li>
		<li>
			<a href="<?php echo ROOT; ?>account/login"> LOGIN</a>
		</li>

	</ul>
	<?php echo $content; ?>
</body>
</html>