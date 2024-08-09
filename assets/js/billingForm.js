$(document).ready(function() {
   const states = {
      usa: [
         'California',
         'Florida',
         'New York',
         'Texas',
         // Add more US states as needed
      ],
      canada: [
         'Alberta',
         'British Columbia',
         'Ontario',
         'Quebec',
         // Add more Canadian provinces as needed
      ]
      // Add more countries and their states as needed
   };

   $('#country').change(function() {
      const selectedCountry = $(this).val();
      const stateOptions = states[selectedCountry] || [];
      
      $('#state').empty().append('<option value="" disabled selected>Select a state</option>'); // Reset states dropdown
      $.each(stateOptions, function(index, state) {
         $('#state').append($('<option>', {
            value: state.toLowerCase().replace(/\s+/g, '-'),
            text: state
         }));
      });
   });
});