<?php
 
 
  $header = '';
  $header = '';
  $header = '';

    
  // Prepare new cURL resource
  $crl = curl_init('https://example.com');
  curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($crl, CURLINFO_HEADER_OUT, true);
  curl_setopt($crl, CURLOPT_POST, true);
  curl_setopt($crl, CURLOPT_POSTFIELDS, array());
    
    
    
  // Set HTTP Header for POST request 
  curl_setopt($crl, CURLOPT_HTTPHEADER, $header);
    
    
    
  // Submit the POST request
  $result = curl_exec($crl);

