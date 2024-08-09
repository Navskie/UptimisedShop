<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Card with Skeleton Loader</title>
   <?php include_once 'include/css-link.php' ?>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar">
      <!-- Logo for larger screens and mobile -->
      <div class="navbar-logo">
         <img src="<?php echo $flagUrl ?>" width="30" height="20">
         Uptimised Shop
      </div>
      
      <!-- Navigation items -->
      <div class="navbar-items">
         <a href="../index" class="nav-item"><span class="nav-text">Home</span></a>
         <a href="index" class="nav-item"><span class="nav-text">Shop</span></a>
         <a href="" class="nav-item"><span class="nav-text" disabled>Be A Reseller (soon)</span></a>
         <a href="#" class="nav-item cart-btn"><span class="nav-text">Cart</span></a>
      </div>

   </nav>

   <!-- Main Content -->
   <div class="shop-body">
      <?php 
         $shop_sql = mysqli_query($connect, "SELECT * FROM website INNER JOIN upti_code ON code_name = item_code WHERE `status` = 'Active'");
         foreach ($shop_sql as $shopData) {
            $shopCode = $shopData['item_code'];
            $shopShortName = $shopData['short_name'];
            $shopImage = $shopData['Image'];
            $Category = $shopData['code_status'];

            // $packageData = mysqli_query($connect, "SELECT * FROM upti_pack_sett WHERE p_s_main = '$shopCode'");

            $price_sql = mysqli_query($connect, "SELECT * FROM upti_country WHERE country_name = '$customer_country' AND country_code = '$shopCode'");
            $priceData = mysqli_fetch_array($price_sql);

            $price = $priceData['country_price'];

      ?>
      <div class="card loading">
         <div class="skeleton"></div>
         <div class="card-content">
            <img src="assets/images/shop/<?php echo $shopImage ?>" alt="Default Image">
            <h2><?php echo $shopShortName ?></h2>
            <span><?php echo $shopCode ?></span>
            <hr>
            <?php //if ($Category === 'Package') { ?>
               <!-- <span>Package Included: </span>
               <ul>
                  <?php //foreach ($packageData as $packData) { ?>
                  <li><?php //echo $packData['p_s_desc'] ?> (<?php //echo $packData['p_s_qty'] ?>)</li>
                  <?php //} ?>
               </ul> -->
            <?php //} ?>
            <div class="btmContent">
               <div class="btnCart">
                  <button class="cart-btn add-to-cart" data-name="<?php echo $shopShortName ?>" data-price="<?php echo $price ?>" data-image="assets/images/shop/<?php echo $shopImage ?>">Cart</button>
               </div>
               <div class="btnPrice">
                  <span><?php echo $price_sign.$price ?></span>
               </div>
            </div>
         </div>
      </div>
      <?php 
         }
      ?>
      <!-- Repeat .card as needed -->
   </div>

   <!-- Mobile Bottom Navigation -->
   <div class="mobile-bottom-nav">
      <a href="../index" class="nav-item"><i class="bx bx-home"></i><span class="nav-text">Home</span></a>
      <a href="index" class="nav-item"><i class='bx bx-shopping-bag'></i><span class="nav-text">Shop</span></a>
      <a href="#" class="nav-item"><i class="bx bx-home"></i><span class="nav-text">Be a Reseller</span></a>
      <a href="#" class="nav-item cart-btn"><i class="bx bx-cart"></i><span class="nav-text">Cart</span></a>
   </div>

   <!-- Cart Sidebar -->
   <div class="cart-sidebar" id="cartSidebar">
      <a class="close-btn" id="closeSidebar">&times;</a>
      <h2>Shopping Cart</h2>
      <div class="cart-items">
         <!-- Example cart items -->
         <div class="cart-item">
            <span class="item-name">Item Name</span>
            <span class="item-price"></span>
         </div>
         <!-- Repeat cart-item for each item in cart -->
      </div>
      <div class="cart-total">
         <span>Total: </span><span id="cartTotal"><?php echo $price_sign ?></span>
      </div>
      <a class="checkout-btn" href="checkout">Checkout</a>
   </div>

   <?php include_once 'include/js-link.php' ?>
</body>
</html>
