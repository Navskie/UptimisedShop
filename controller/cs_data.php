<?php 
   include_once '../../database/connect.php';

   header('Content-Type: application/json');

   $get_country = mysqli_query($connect, "SELECT * FROM upti_country_currency");
   $countries = [];
   while ($countryData = mysqli_fetch_assoc($get_country)) {
      $countries[] = $countryData['cc_country'];
   }

   // Fetch states
   $states = [];
   foreach ($countries as $country) {
      $get_state = mysqli_query($connect, "SELECT * FROM upti_state WHERE state_country = '$country'");
      $stateList = [];
      while ($stateData = mysqli_fetch_assoc($get_state)) {
      $stateList[] = $stateData['state_name'];
      }
      $states[$country] = $stateList;
   }

   // Output JSON
   echo json_encode([
      'countries' => $countries,
      'states' => $states
   ]);
?>
