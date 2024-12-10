<?php
session_start();
include 'db_config.php'; // Include the database connection
include 'includes/more.inc.php'; // Assuming this file handles any other logic
include 'includes/search.inc.php'; // Assuming this handles search functionality

// Initialize the $thoughts variable
$thoughts = [];

// Fetch thoughts from the database
$query = "SELECT * FROM my_thoughts ORDER BY create_time DESC LIMIT 5"; // Limit to 5 for pagination
$result = $conn->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $thoughts[] = $row; // Add each post to the $thoughts array
    }
}

// Initialize the $cars variable and fetch car data
$cars = [];
$query_cars = "SELECT * FROM cars ORDER BY id ASC LIMIT 5"; // Limit to 5 for pagination
$result_cars = $conn->query($query_cars);

if ($result_cars) {
    while ($row = $result_cars->fetch_assoc()) {
        $cars[] = $row; // Add each car to the $cars array
    }
}

// Check if $type is set and initialize it
$type = isset($_GET['type']) ? $_GET['type'] : 'all';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/more.css">
    <link rel="icon" href="weblogo.png" type="image/x-icon">
    <title>AUTOHAVEN</title>
</head>
<body>
    <div class="nav">
        <a href="javascript:history.back();"><i class="fas fa-angle-double-left"></i></a><h1>AUTOHAVEN</h1>
    </div>

    <h1 class="headling">More</h1>
    <div class="container">
        <div class="results">
            <?php
            // Check if $type is set from the URL (car type filtering)
            if (isset($type) && $type != 'all') {
                echo '<h3>' . htmlspecialchars($type) . '</h3>';
                
                // Display cars based on type
                foreach ($cars as $row) {
                    if ($row['car_type'] == $type || $type == 'all') {
                        echo '<div class="item">
                            <img src="assets/Car_images/'.$row['image'].'" height="150px" width="195px;">
                            <h2>'.$row['manufacturer'].'</h2>
                            <p>'.$row['model'].'</p>
                            <p>$'.$row['price'].'</p>
                            <form action="product.php?id='.$row['id'].'" method="post">
                               <button type="submit" name="add-to-cart-index"> Add to Cart</button>
                            </form>
                        </div>';
                    }
                }
            } else {
                // Display thoughts (posts)
                foreach ($thoughts as $row) {
                    echo '
                    <div class="post">
                        <div class="post-mini1" style="background-image:url(assets/Thought_images/'.$row['image'].');
                                background-size: cover;
                                background-position:center;">
                        </div>
                        <div class="post-mini2">
                            <h2>'.$row['title'].'</h2>
                            <i class="far fa-user"> <p style="display: inline;"> BastaGroup</p></i>
                            <p style="display: inline; padding:0px 5px 0px 5px;"> | </p>
                            <i class="far fa-calendar-alt"> <p style="display:inline;"> '.$row['create_time'].'</p></i>
                            <p style="display: inline; padding:0px 5px 0px 5px;"> | </p>
                            <i class="fas fa-paperclip" style="display:inline;"><p style="display:inline;"> '.$row['tag'].'  </p></i>
                            <br><br>
                            <p>'.substr($row['body'], 0, min(strlen($row['body']), 300)).'</p>
                            <br>
                        </div>
                        <div class=post-mini3>
                            <a href="post.php?id='.$row['id'].'"> Read more </a>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>

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
