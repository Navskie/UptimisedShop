$(document).ready(function() {
   // Load country and state data from PHP
   $.getJSON('controller/cs_data.php', function(data) {
       const countries = data.countries;
       const states = data.states;

       // Populate country dropdown
       $.each(countries, function(index, country) {
           $('#country').append($('<option>', {
               value: country,  // Set value to country name
               text: country    // Set display text to country name
           }));
       });

       $('#country').change(function() {
           const selectedCountry = $(this).val(); // Use selected country name
           const stateOptions = states[selectedCountry] || [];

           $('#state').empty().append('<option value="" disabled selected>Select a state</option>'); // Reset states dropdown
           $.each(stateOptions, function(index, state) {
               $('#state').append($('<option>', {
                   value: state,  // Set value to state name
                   text: state    // Set display text to state name
               }));
           });
       });
   }).fail(function(jqXHR, textStatus, errorThrown) {
       console.error('Error fetching data:', textStatus, errorThrown);
   });
});
