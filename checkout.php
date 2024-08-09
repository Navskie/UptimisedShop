<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout - Uptimised Shop</title>
   <?php include_once 'include/css-link.php' ?>
   <link rel="stylesheet" href="assets/css/checkout.css">
</head>
<body>
   <!-- Navbar -->
   <nav class="navbar">
      <div class="navbar-logo">Uptimised Shop</div>
      <div class="navbar-items">
         <a href="../index" class="nav-item"><span class="nav-text">Home</span></a>
         <a href="index" class="nav-item"><span class="nav-text">Shop</span></a>
         <a href="#" class="nav-item"><span class="nav-text" disabled>Be A Reseller (soon)</span></a>
         <a href="#" class="nav-item cart-btn"><span class="nav-text">Cart</span></a>
      </div>
   </nav>

   <!-- Main Content -->
   <div class="container py">
      <section class="shipping-info">
         <h1>Checkout</h1>

         <!-- Cart Details -->
         <div class="cart-details">
            <h3>Cart Summary</h3>
            <div class="cart-items">
               <!-- Example Cart Item -->
               <div class="cart-item">
                  <img src="assets/images/shop/example.jpg" alt="Product Image">
                  <div class="item-details">
                     <span class="item-name">Product Name</span>
                     <span class="item-qty">Qty: 1</span>
                     <span class="item-price">$20.00</span>
                  </div>
               </div>
               <!-- Repeat for each item in cart -->
            </div>
         </div>


         <h2>Billing Address</h2>
         <form id="billingForm">
               <div class="form-grid">
                  <div class="form-group">
                     <label for="firstName">First Name</label>
                     <input type="text" id="firstName" name="firstName" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="lastName">Last Name</label>
                     <input type="text" id="lastName" name="lastName" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="phone">Phone Number</label>
                     <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]+" required>
                  </div>
                  <div class="form-group">
                     <label for="address">Address</label>
                     <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
                  </div>
                  <div class="form-group">
                     <label for="country">Country</label>
                     <select id="country" name="country" class="form-control" required>
                           <option value="" disabled selected>Select a country</option>
                           <!-- Options will be populated by jQuery -->
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="state">State</label>
                     <select id="state" name="state" class="form-control" required>
                           <!-- Options will be populated based on country selection -->
                     </select>
                  </div>
               </div>
               <button type="submit" class="checkout-btn">Proceed to Payment</button>
         </form>

      </section>

      <!-- Cart Summary -->
      <aside class="cart-summary">
         <div class="cart-summary-content">
            <h2>Cart Summary</h2>
            <div class="cart-items">
               <!-- Cart Items will be dynamically inserted here -->
            </div>
            <div class="cart-total">
               <span>Total: </span><span id="checkoutTotal">$0.00</span>
            </div>
            <button class="checkout-btn" id="confirmOrder">Confirm Order</button>
         </div>
      </aside>
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
      <button class="checkout-btn">Checkout</button>
   </div>

   <!-- Mobile Bottom Navigation -->
   <div class="mobile-bottom-nav">
      <a href="../index" class="nav-item"><i class="bx bx-home"></i><span class="nav-text">Home</span></a>
      <a href="index" class="nav-item"><i class='bx bx-shopping-bag'></i><span class="nav-text">Shop</span></a>
      <a href="#" class="nav-item"><i class="bx bx-home"></i><span class="nav-text">Be a Reseller</span></a>
      <a href="#" class="nav-item cart-btn"><i class="bx bx-cart"></i><span class="nav-text">Cart</span></a>
   </div>

   <?php include_once 'include/js-link.php' ?>
   <script src="assets/js/billingForm.js"></script>
   <script src="assets/js/country.js"></script>
</body>
</html>
