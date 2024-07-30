$(document).ready(function() {
   // Simulate loading of cards
   setTimeout(function() {
      $('.card').removeClass('loading');
      $('.skeleton').hide();
      $('.card-content').show();
   }, 2000);

   // Show cart sidebar
   $('.cart-btn').on('click', function() {
      $('#cartSidebar').addClass('active');
   });

   // Hide cart sidebar
   $('#closeSidebar').on('click', function() {
      $('#cartSidebar').removeClass('active');
   });

   // Close the cart sidebar when clicking outside of it
   $(document).on('click', function(event) {
      if (!$(event.target).closest('#cartSidebar, .cart-btn').length) {
         $('#cartSidebar').removeClass('active');
      }
   });

   // Navigation item click event
   $('.navbar-items .nav-item').on('click', function() {
      // Remove active class from all items
      $('.navbar-items .nav-item').removeClass('active');
      // Add active class to the clicked item
      $(this).addClass('active');
   });
});
