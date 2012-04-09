<?php defined( '_HOPEEX' ) or die( 'Restricted access' ); ?>
<header id="navigation">
		<nav>
		<form name="menuform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<ul class="main_nav">
				<li><input type="submit" name="menustate" value="hope" />HopeNET HELP</li>
				<li><input type="submit" name="menustate" value="inventory" />HopeNET Inventory</li>
				<li><input type="submit" name="menustate" value="resources" />HopeNET Resources</li>
				<li><input type="submit" name="menustate" value="booking" />HopeNET Booking</li>
				<li><input type="submit" name="menustate" value="transfer" />HopeNET Transfer</li>
				<li><input type="submit" name="menustate" value="access" />HopeNET Access</li>
				<li><input type="submit" name="menustate" value="apps" />HopeNET Apps</li>
				  <ul class="main_nav_sub">
				  <li><input type="submit" name="menustate" value="contacts" />HopeNET Contacts</li>
				  <li><input type="submit" name="menustate" value="calendar" />HopeNET Calendar</li>
				  <li><input type="submit" name="menustate" value="mail" />HopeNET mail</li>
				  <li><input type="submit" name="menustate" value="docs" />HopeNET docs</li>
				  </ul>
			</ul>
			</form>
		</nav>
	</header>