<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
        .container {
            padding: 20px;
        }

        .product {
            background-color: #9FD3FF;
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
            overflow: hidden;
            border: none;
        }

        .image-container {
            overflow: hidden;
            position: relative;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .image-container:hover .card-img-top {
            transform: scale(1.1);
        }

        .card-body {
            padding: 15px;
        }

        .card-text {
            color: #333; /* Text color */
        }
        .trending-product {
            margin-top: 12px;
        }

        .section-title {
            position: relative;
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title h2 {
            display: inline-block;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 100px; 
            height: 2px; 
            background-color: darkred; 
            transform: translateX(-50%);
        }
    </style>
</head>
<body>

<div class="container">

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smart_shop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT name, code, variant_id, img_link FROM products";
    $result = $conn->query($sql);

    $products = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    $conn->close();
    ?>
<section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                    </div>
                </div>
            </div>
    <div class="row">
        <!-- Display product divs with Bootstrap card layout -->
        <?php foreach ($products as $product): ?>
            <div class="col-md-3">
                <div class="product card">
                    <div class="image-container">
                        <img src="<?php echo $product['img_link']; ?>" alt="<?php echo $product['name']; ?>" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $product['code']; ?></p>
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text"><?php echo $product['variant_id']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
