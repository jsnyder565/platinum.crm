<?php

class ValidationHelpers
{
    
function isValidDateString($dateString) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $dateString);
    return $dateTime && $dateTime->format('Y-m-d') === $dateString;
}

function validateCustomer($c) {
  if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $c['phone_number'])) return false;
  if (!preg_match('/^[a-zA-Z ]+$/', $c['name'])) return false;
  if (!filter_var($c['email'], FILTER_VALIDATE_EMAIL)) return false;
  return true;
}

function validatePurchase($c) {
  if (!isValidDateString($c['date'])) return false;
  return true;
}


}