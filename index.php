<html>
	<head>
		<title> Test PHP Apache </title>
	</head>
	<body>
		<?php $user = $_SERVER['REMOTE_USER']; ?>
		<a> Vous êtes identifiés avec le compte : <?php echo($user); ?> </a>
	</body>
</html>
