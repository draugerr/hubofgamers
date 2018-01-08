<!DOCTYPE html>
<html>
<head>
<style>
body {
	font-family: calibri;
}

.title {
	text-align: left;
	text-decoration: none;
}

.language-link {
	color: #6aa8bf;
	font-size: 12px;
}

.language-link-item {
	text-align: right;
	float: right;
	text-decoration: none;
	color: #6aa8bf;
}

/* Dropdown Button */
.dropbtn {
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    display: inline-block;
	text-align: left;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
</head>

<body>

	<div>
		<span class="title"><a href="index.php" style="text-decoration: none">Hub Of Gamers</a></span>
		
		<span class="language-link language-link-item">
			<a href="index.php?lang=en"
				<?php if($lang == 'en'){?> style="color: #ff9900;" <?php } ?>>EN</a>
			|
			<a href="index.php?lang=tr"
				<?php if($lang == 'tr'){?> style="color: #ff9900;" <?php } ?>>TR</a>
			<span style="display:inline-block; width: 10px;"></span>
			


			<span class="language-link language-link-item dropdown">
					<a class="language-link-item dropdown dropbtn">My Account</a>
					<div class="dropdown-content">
						<a href="#">My Profile</a>
						<a href="#">Friends</a>
						<a href="#">Messages</a>
						<a href="#">Logout</a>
					</div>
			</span>
			
			
			
		</span>
		
	</div>

</body>
</html>