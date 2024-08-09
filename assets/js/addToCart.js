$(document).ready(function() {
   // Object to keep track of cart items and their quantities
   var cart = {};

   // Function to add item to cart sidebar
   function addToCart(itemName, itemPrice, itemImage) {
       // Update quantity if item already exists in cart
       if (cart[itemName]) {
           cart[itemName].qty += 1;
       } else {
           cart[itemName] = { price: itemPrice, qty: 1, image: itemImage };
       }

       // Update the cart sidebar display
       updateCartSidebar();
       updateCartTotal();
   }

   // Function to update the cart sidebar
   function updateCartSidebar() {
       var $cartSidebar = $('#cartSidebar');
       var $cartItems = $cartSidebar.find('.cart-items');
       $cartItems.empty(); // Clear existing items

       // Iterate through cart object and display items
       $.each(cart, function(name, data) {
           var $cartItem = $('<div>', { class: 'cart-item' })
               .html('<img src="' + data.image + '" class="cart-item-image" alt="' + name + '"> ' +
                     '<span class="item-name">' + name + '</span> ' +
                     '<span class="item-qty">x' + data.qty + '</span> ' +
                     '<span class="item-price">$' + data.price.toFixed(2) + '</span>');
           $cartItems.append($cartItem);
       });
   }

   // Function to update the cart total
   function updateCartTotal() {
       var total = 0;
       var currencySign = '$'; // Ensure this matches the format used in your HTML

       $.each(cart, function(name, data) {
           total += data.price * data.qty; // Calculate total with quantity
       });

       $('#cartTotal').text(currencySign + total.toFixed(2));
   }

   // Event delegation for add-to-cart buttons
   $('body').on('click', '.add-to-cart', function() {
       var $button = $(this);
       var itemName = $button.data('name');
       var itemPrice = parseFloat($button.data('price')); // Convert to float
       var itemImage = $button.data('image'); // Get the image URL

       // Validate the price
       if (!isNaN(itemPrice)) {
           addToCart(itemName, itemPrice, itemImage);
       } else {
           console.error('Invalid item price:', $button.data('price'));
       }
   });

   // Close button functionality
   $('#closeSidebar').on('click', function() {
       $('#cartSidebar').hide();
   });
});
