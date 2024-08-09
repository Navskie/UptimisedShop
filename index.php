<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Card with Skeleton Loader</title>
   <?php include_once 'inc/css-link.php' ?>
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar">
      <!-- Logo for larger screens and mobile -->
      <div class="navbar-logo">
         <!-- <img src="assets/images/logo.png" alt="Logo"> -->
          Uptimised Shop
      </div>
      
      <!-- Navigation items -->
      <div class="navbar-items">
         <a href="#" class="nav-item"><span class="nav-text">Shop</span></a>
         <a href="" class="nav-item cart-btn"><span class="nav-text" disabled>Be A Reseller</span></a>
         <a href="#" class="nav-item"><span class="nav-text">Profile</span></a>
      </div>

   </nav>

   <!-- Main Content -->
   <div class="shop-body">
      <div class="card loading">
         <div class="skeleton"></div>
         <div class="card-content">
            <h2>PCK03CD</h2>
            <hr>
            <span>Package Included: </span>
            <ul>
               <li>Basic Line (2)</li>
               <li>Deo Cream (2)</li>
            </ul>
            <button class="cart-btn add-to-cart">Add to Cart</button>
         </div>
      </div>
      <div class="card loading">
         <div class="skeleton"></div>
         <div class="card-content">
            <h2>PCK03CD</h2>
            <hr>
            <span>Package Included: </span>
            <ul>
               <li>Basic Line (2)</li>
               <li>Deo Cream (2)</li>
            </ul>
            <button class="cart-btn add-to-cart">Add to Cart</button>
         </div>
      </div>
      <!-- Repeat .card as needed -->
   </div>

   <!-- Mobile Bottom Navigation -->
   <div class="mobile-bottom-nav">
      <a href="#" class="nav-item"><i class="bx bx-home"></i><span class="nav-text">Home</span></a>
      <a href="#" class="nav-item"><i class="bx bx-search"></i><span class="nav-text">Search</span></a>
      <a href="#" class="nav-item"><i class="bx bx-search"></i><span class="nav-text">Search</span></a>
      <a href="#" class="nav-item cart-btn"><i class="bx bx-cart"></i><span class="nav-text">Cart</span></a>
      <a href="#" class="nav-item"><i class="bx bx-user"></i><span class="nav-text">Profile</span></a>
   </div>

   <!-- Cart Sidebar -->
   <div class="cart-sidebar" id="cartSidebar">
      <button class="close-btn" id="closeSidebar">&times;</button>
      <h2>Shopping Cart</h2>
      <div class="cart-items">
         <!-- Example cart items -->
         <div class="cart-item">
            <span class="item-name">Item Name</span>
            <span class="item-price">$0.00</span>
         </div>
         <!-- Repeat cart-item for each item in cart -->
      </div>
      <div class="cart-total">
         <span>Total: </span><span id="cartTotal">$0.00</span>
      </div>
      <button class="checkout-btn">Checkout</button>
   </div>

   <?php include_once 'inc/js-link.php' ?>
</body>
</html>
