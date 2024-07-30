$(document).ready(function() {
   setTimeout(function() {
      $('.card').removeClass('loading');
      $('.skeleton').hide();
      $('.card-content').show();
   }, 2000);
});
