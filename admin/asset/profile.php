<li class="dropdown">
	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	<i class="halflings-icon white user"></i> <?php echo $_SESSION['name'];?>
	<span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		<li class="dropdown-menu-title">
 			<span>Account Settings</span>
		</li>
		<!-- <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li> -->
		<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
	</ul>
</li>