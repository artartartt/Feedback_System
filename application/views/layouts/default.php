<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body style="background:url(https://raw.githubusercontent.com/artartartt/2021/main/arajadranq_dasyntaci/img/bg_img.jpg); ">
	<ul style="display: flex;justify-content: space-around;">
		<li>
			<a href="<?php echo ROOT; ?>">Leave Feedback</a>
		</li>
		<li>
			<a href="<?php echo ROOT; ?>account/comment">Comment</a>
		</li>
		<li>
			<a href="<?php echo ROOT; ?>account/login"><?php if(isset($_SESSION['admin'])) echo 'Log Out'; else echo 'Login'?></a>
		</li>

	</ul>
	<?php echo $content; ?>
</body>
</html>