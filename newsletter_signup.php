<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Powell Fashion Clothing Shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="_css/styles.css">
	<link rel="icon" type="image/png" href="_image/favicon.png"/>
    <script src="formscript.js"></script>
	 <style>
		@import url('https://fonts.googleapis.com/css2?family=Grandstander:wght@500&display=swap');
	</style>
</head>
<body>
	<div id="base">
		<header>
			<div class="one">
				<img id="logo" src="_image/logo.png" alt="self made by Sheila Monica">
			</div>
			<div class="one">
				<!-- empty div just for spacing purpose -->
			</div>
			<div class="two">
				<nav>
					<br>
                    <a href="newsletter.html">Newsletter</a>
					<a href="special.html">Special</a>
					<a href="menu.html">Menu</a>
					<a href="about.html">About</a>
					<a href="index.html">Home</a>
				</nav>
			</div>
		</header>
		<div class="clear">
		</div>
		<div class="banner">
			<img id="special" src="_image/newsletter.png" alt="https://www.pexels.com/photo/news-typewritten-on-white-paper-4057663/">
		</div>
		<div class="clear"></div>
        <div class="four">
			<!-- empty div just for spacing purpose -->
		</div>
		<div class="four">
            <h3>Thank you for signing up for the Powell Fashion and Clothing Shop Weekly newsletter.<br>
                We have added the following information to our files regarding your interests:<br>
                <br>
                Name: <?php echo $_POST['name']; ?><br>
                Email: <?php echo $_POST['email']; ?><br>
                Product interests: <?php echo $_POST['product']; ?><br> 
                Birthday: <?php echo $_POST['birthday']; ?><br><br>
            </h3>
        </div>
        <div class="clear"></div>
        <div class="four">
			<!-- empty div just for spacing purpose -->
		</div>
        <div class="clear"></div>
        <div id="footer">
			<div class="two">
				<br>
				<a href="index.html">Home</a>
				<a href="about.html">About</a>
				<a href="menu.html">Menu</a>
				<a href="special.html">Special</a>
                <a href="newsletter.html">Newsletter</a>
			</div>
			<div class="one">
				<p>Address: 223 Powell St in
                    <br>Bowen, Queensland</p>
			</div>
			<div class="one">
                <p>Contacts: 0455 9999 555
                    <br>
                Delivery: 0433 3333 999</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>