<h3>Send sms</h3>
<form action="<?php echo ROOT?>account/comment" method="post">
	<h1 style="color:red"><?php if(isset($error)) echo $error; ?></h1>
	<p>name</p>
	<p><input type="text" name="name" placeholder='add name' value="<?php if(isset($name)) echo $name; ?>"></p>
	<p>lastname</p>
	<p><input type="text" name="lastname" placeholder='add lastname'  value="<?php if(isset($lastname)) echo $lastname; ?>"></p>
	<p>email</p>
	<p><input type="email" name="email" placeholder='add email' value="<?php if(isset($email)) echo $email; ?>"></p>
	<p>text</p>
	<p><textarea id="text" name="text" rows="4" cols="50" placeholder='add text'  ><?php if(isset($text)) echo $text; ?></textarea></p>
	<b><button type="submit" name="Send_sms">Send</button></b>
</form>