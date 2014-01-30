
<?php
include '../Forum/functions.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="../main.css" rel="stylesheet" type="text/css"/>
</head>
  <header>
    <title>Terrelli Coffee</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="../index.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../header.js"></script>
  </header>
  <body>
  <div id="content1">
  <div id="content0">
  <div class="header">
    <!--Login/Register bar-->
        <div id="loginBar">
            <label>
                <p>
				<?php
			if (isLoggedIn()){
				$sql = 'SELECT login FROM members WHERE member_id = ' . $_SESSION['SESS_MEMBER_ID'];
				$result = mySQL_query($sql);
				$data = mysql_fetch_array($result, MYSQL_ASSOC);
				echo 'Welcome, ' . $data['login'] . '! <br />';
				echo '<a href="../Forum/logout.php">Logout</a><br/>';
			} else {
				echo '<div id="register">';
                echo '<a href="Register.html" id="register">Register</a>';
				echo '</div>';    
				echo '<form method="post" action="../Forum/index.php">';
                echo 'Login:<input type="text" name="login" id="login" onblur="warnLoginInvalid(' . 'login' . ')" />' . 'Password:<input type="password" name="password" id="password" onblur="warnPasswordInvalid(' . 'password' . ')" />';
                echo '<input type="submit" name="Submit" value="Log in"><br />';
                echo '<span id="loginInvalid"></span><br />';
			}
				?>
                </p> 
            </label>   
        </div>
    <!--Banner picture-->
    <div id="logo">
        <a href="../index.html"><img src="../Images/TerrellLogoSm2.jpg" alt=""/></a>
    </div>
    <!--Navigation bar-->
    <div id="navBar">
        <ul>
            <li><a href="ProductIndex.html">Products</a></li>
            <li><a href="Blog.html">Blog</a></li>
            <li><a href="About.html">About Us</a></li>
            <li><a href="Forum.html">Forum</a></li>
            <li><a href="Contact.html">Contact Us</a></li>
        </ul>
    </div>
    <!--Content-->
    <div id="content">
        <!--Left directory-->
        <div id="leftList">
			<h2>Forum Directory</h2>
			<p>Click the picture to go to our forum!</p>
			<a href="../Forum"><img src="../Images/Holder.jpg" alt="To the forum"/>
                    
        </div>        
    </div>
    <!--SiteMap-->
    <div id="siteMap">
        <!--SiteMap links-->
        <div class="footer">
        <!--External Site Links-->
            <!--<p><a href="">*A link to twitter feed or youtube*</a></p>-->
        <!--SiteMap links-->
        <div>
            <ul id="sitemap1">
                <li><a href="Form.html">Feedback</a></li>
                <li><a href="../index.html">Home</a></li>
                <li><a href="ProductIndex.html">Products</a></li>
                <li><a href="Blog.html">Blog</a></li>
            </ul>
            <ul id="sitemap2">
                <li><a href="About.html">About Us</a></li>
                <li><a href="Forum.html">Forum</a></li>
                <li><a href="Contact.html">Contact Us</a></li>
            </ul>
            <ul id="sitemap3">
                <li><a href="BlendsEspresso.html">Espresso Coffee's</a></li>
                <li><a href="Organic.html">Organic Coffee's</a></li>
                <li><a href="SingleOrigin.html">Single Origin</a></li>
            </ul>
        </div>
        <!--Our Passion Text-->
            <p>OURPASSIONTEXT.<a href="Pages/About.html">Learn more about our company</a></p>
        <!--Copyright Info-->
            <p>CopyRight Info</p>
	</div>
</div>
</div>
  </body>
</html>
