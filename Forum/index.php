<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
<!-- ==========================================================	-->
<!--	Created by Devit Schizoper                          	-->
<!--	Created HomePages http://LoadFoo.starzonewebhost.com   	-->
<!--	Created Day 01.12.2006                              	-->
<!-- ========================================================== -->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="LoadFoO" />
	<meta name="description" content="Site description" />
	<meta name="keywords" content="key, words" />
	<title>Terrelli Forums</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" src="js/textsizer.js"></script>
	<script type="text/javascript" src="js/rel.js"></script>
</head>

<body>
<div id="wrap">
<div id="top">
<h2><a href="#" title="Back to main page">Terrelli Forums</a></h2>
<div id="menu">
<ul>
<li><a href="../index.html" class="current">home</a></li>
<li><a href="../Pages/About.html">about</a></li>
<li><a href="#">portofolio</a></li>
<li><a href="../Pages/Contact.html">contact</a></li>
</ul>
</div>
</div>
<div id="content">
<div style="float: right;"><a href="javascript:ts('body',1)">[+]</a> | <a
href="javascript:ts('body',-1)">[-]</a></div>
<div id="left">
<h2>Welcome to the Terrelli Forums!</h2>
<p>A lot of people like coffee. We wanted a space where everyone could share that enjoyment. Feel free to use our
forums to read about how other people feel about our coffee, whether it's about our products or just enjoying a cup
while reading a book. We do ask that you keep a couple things in mind.
</p>
 <ul>
 <li>No profound language.</li>
 <li>Keep the discussion coffee related.</li>
 <li>Remember that different people can enjoy different things.</li>
 </ul>
 <p>We hope you enjoy your stay as much as you enjoy coffee!
 </p>
</div>
<div id="right">
	<div class="box">
		<h2 style="margin-top:17px">Recent Entries</h2>
		<ul>
		<?php
			$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
			$result=mysql_query($sql);
			$count = min(5, mysql_num_rows($result));
			if($count==0)
				echo "<li>No topics</li>";
			else
				for($i=0; $i < $count; $i++){
					$row=mysql_fetch_array($result);
					echo '<li><a href="view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
				}
		?>
		</ul>
		<?php
			if (isLoggedIn()){
				$sql = 'SELECT login FROM members WHERE member_id = ' . $_SESSION['SESS_MEMBER_ID'];
				$result = mySQL_query($sql);
				$data = mysql_fetch_array($result, MYSQL_ASSOC);
				echo 'Welcome, ' . $data['login'] . '! <br />';
				echo '<a href="../index.html">Logout</a><br/>';
				echo '<a href="forum.php">Go to forum</a><br/>';
				echo '>><a href="add_topic_form.php">Create new topic</a>';
			} else {
				echo '<a href="login_form.php">Login</a><br/>';
				echo '<a href="register_form.php">New user?</a>';
			}
		?>
	</div>
<ul id="nav">
	<li><a href="#Home">Home</a></li>
	<li><a href="#Archive">Archive</a></li>
	<li><a href="#Link">Links</a></li>
	<li><a href="#download">Download</a></li>
	<li><a href="#support">Support</a></li>
	<li><a href="#contact">Contact</a></li>
</ul>
</div>
<div id="clear"></div></div>
<div id="footer">
<p>Copyright 2006 LoadFoO [V1]. Designed by <a href="http://loadfoo.org/" rel="external">LoadFoO</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="external">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer" rel="external">XHTML</a></p>
</div>
</div>

</body>
</html>
