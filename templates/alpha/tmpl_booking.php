<?php 	defined( '_HOPEEX' ) or die( 'Restricted access' );  ?>

<article>
<header><p>Buchungen</p></header>

<div class="booking-details">
<article>
<?php 
   
// output the collected form elements 
echo $frmStr; 


?>
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
</div>
<header><p>Anfragen</p></header>
<div id="list-booking">	
<div class="list-content">
<?php include 'includes/modules/booking.php';?>
</div>
</div>
</article>