<?php require_once '../crud_php/php_action/db_connect.php'; ?>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<title>News</title>
        <link rel="stylesheet" type="text/css" href="css/news.css">
    </head>
    <body>

	<div class="wrapper">

        <!-- Header --> <!-- Navigation Menu -->
        <?php 
            include '../inc/insideheader.php';
            include '../inc/insidenav.php';
        ?> 

        <div class="manageMember">
        <font size="5">
    <table bgcolor="#FFE4E1" border="3" cellspacing="2" cellpadding="2">
        <thead>
            <tr>
                <th>Bangladesh</th>
                <th>International</th>
            </tr>
        </thead>
        <?php
            $sql = "SELECT * FROM members WHERE tym= 'Breakfast'";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['fname']."</td>
                        <td>".$row['age']."</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </font>
    </div>

        <?php
            include '../inc/insidefooterlogo.php';
        ?>

    </div>


    </div>

        <!-- social icons -->
    <div class="fixedicon">
            <a href="http://www.facebook.com"><img src="img/facebook.png" alt="facebook"/></a>
            <a href="http://www.instagram.com"><img src="img/instagram.png" alt="instagram"/></a>
            <a href="http://www.twitter.com"><img src="img/twitter.png" alt="twitter"/></a>
            <a href="http://www.google.com"> <img src="img/google+.png" alt="google+"/></a>
    </div>

    <!-- scroll up button -->
     <script src="js/scroll.js"></script>
     <script src="js/scroll_main.js"></script>

</body>
</html>