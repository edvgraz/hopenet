#-------------------------------------------------------------------------------
# Copyright (c) 2012 Alexander Stocker.
# All rights reserved. This program and the accompanying materials
# are made available under the terms of the GNU Public License v3.0
# which accompanies this distribution, and is available at
# http://www.gnu.org/licenses/gpl.html
# 
# Contributors:
#     Alexander Stocker - initial API and implementation
#-------------------------------------------------------------------------------
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>HOPEnet Login</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
<section id="header">
Kopfzeile
</section>
	<header id="navigation">
		<nav>
			<ul class="main_nav">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				  <ul class="main_nav_sub">
				  <li></li>
				  <li></li>
				  <li></li>
				  <li></li>
				  </ul>
			</ul>
		</nav>
	</header>

	<section id="content">

		<article>
			   <form class="box login" action="home.php">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input type="text" tabindex="1" placeholder="PremiumPixel" required>
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input type="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="3">Keep me logged in</label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>
		</article>
	</section>

	<footer>
		<p>Copyright <?php echo date('Y'); ?> www.sterntalerhof.at</p>
	</footer>
</body>
</html>
