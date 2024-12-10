<?php
    session_start();
    include 'includes/product.inc.php';
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/product.css">
		<link rel="icon" href="weblogo.png" type="image/x-icon">
		<title>AUTOHAVEN | product</title>
	</head>
	<style>
header {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }

        .logo {
            width: 140px; /* Adjust the size of the logo */
        }
	</style>
	<body>
		<div class="container">
			<div class="nav">
				<a href="javascript:history.back();"><i class="fas fa-angle-double-left"></i></a><h1><img src="logo.png" alt="Your Logo" class="logo"></h1>
			</div>
			<?php
				if(isset($_SESSION['message'])){
	                echo '<div class="message"><p>' . $_SESSION['message'] . '</p></div>';
	                unset($_SESSION['message']);
				}
			?>
            <?php
                if(isset($_GET['product_id'])){
                    echo '<div class="product">
        				<div class="info">
        					<div class="img">
        						<img src="assets/Product_images/'.$row['image'].'" height="400" width="420" style="display: block;">
        					</div>
        				</div>
        				<div class="image">
        					<div class="pro-info">
        						<h2>Car </h2>
        						<h3>'.$row['manufacturer'].' '.$row['model'].'</h3>
        						<h5>PHP'.$row['price'].'</h5>
        						<br>
        						<h3>Condition:</h3>
        						<p>'.$row['condition'].'</p>
        						<form action="product.php?id='.$row['id'].'" method="post">
        						   <button class="add-to-cart" type="submit" name="add-to-cart"> Add to Cart</button>
        						   <button type="button" class="call" onclick="copyPhoneNumber()"><i class="fas fa-phone"></i></button>
								   <button type="button" class="mail" onclick="copyEmail()"><i class="fas fa-envelope"></i></button>

								<script>
    								function copyPhoneNumber() { const phoneNumber = "09501449860" 
								   		navigator.clipboard.writeText(phoneNumber)
            								.then(() => {
                							alert("Phone number copied: " + phoneNumber);
            							})
            							.catch(err => {
                							alert("Failed to copy: " + err);
            							});
    								}
									
									function copyEmail() {const email = "autohavenn4@gmail.com"; 
        								navigator.clipboard.writeText(email)
            								.then(() => {
                							alert("Email address copied: " + email);
            							})
            							.catch(err => {
                							alert("Failed to copy: " + err);
            							});
    								}
								</script>
        						</form>
        					</div>
        				</div>
        			</div>
        		</div>';
                }
                else{
                    echo '<div class="product">
        				<div class="info">
        					<div class="img">
        						<img src="assets/Car_images/'.$row['image'].'" height="300" width="420" style="display: block;">
        						<i class="fas fa-tachometer-alt"> <p>'.$row['speed'].'km/h</p> </i>
        						<i class="fas fa-gas-pump"> <p>'.$row['mileage'].'km</p> </i>
        						<i class="fas fa-car-battery"> <p>'.$row['battery'].'</p> </i>
        						<i class="fas fa-oil-can"> <p>'.$row['fuel'].'</p> </i>
        						<i class="fas fa-heartbeat"> <p>'.$row['total_run'].'km</p> </i>
        						<i class="fas fa-arrows-alt"> <p>'.$row['gear'].'</p> </i>
        					</div>
        				</div>
        				<div class="image">
        					<div class="pro-info">
        						<h2>Car </h2>
        						<h3>'.$row['manufacturer'].' '.$row['model'].'</h3>
        						<h5>PHP'.$row['price'].'</h5>
        						<br>
        						<h3>Condition:</h3>
        						<p>'.$row['condition'].'</p>
        						<form action="product.php?id='.$row['id'].'" method="post">
        						   <button class="add-to-cart" type="submit" name="add-to-cart"> Add to Cart</button>
        						   <button type="button" class="call" onclick="copyPhoneNumber()"><i class="fas fa-phone"></i></button>
								   <button type="button" class="mail" onclick="copyEmail()"><i class="fas fa-envelope"></i></button>

								<script>
    								function copyPhoneNumber() { const phoneNumber = "09501449860" 
								   		navigator.clipboard.writeText(phoneNumber)
            								.then(() => {
                							alert("Phone number copied: " + phoneNumber);
            							})
            							.catch(err => {
                							alert("Failed to copy: " + err);
            							});
    								}
									
									function copyEmail() {const email = "autohavenn4@gmail.com"; 
        								navigator.clipboard.writeText(email)
            								.then(() => {
                							alert("Email address copied: " + email);
            							})
            							.catch(err => {
                							alert("Failed to copy: " + err);
            							});
    								}
								</script>
        						</form>
        					</div>
        				</div>
        			</div>
        		</div>';
                }
            ?>

		<footer>
			<div class="social">
			  <h2>FOLLOW US</h2>
			  <a href="https://www.facebook.com/profile.php?id=61569216301762&mibextid=LQQJ4d"> <i class="fab fa-facebook"> <span></span> </i> </a>
			  <a href="https://www.instagram.com/autoh_aven?igsh=MXNkcG9qcHBxNmFlcg=="> <i class="fab fa-instagram"> <span></span> </i> </a>
			  <a href="https://x.com/i/flow/login?redirect_after_login=%2Fautohaven_"> <i class="fab fa-twitter"> <span></span> </i> </a>
			  <a href="https://youtube.com/@autohaven2?si=2_nLwMXbEGli0R4k"> <i class="fab fa-youtube"> <span></span> </i> </a>
		  </div>
		  <div class="credit">
		  	<h1>AUTOHAVEN</h1>
		  </div>
		</footer>
	</body>
</html>
