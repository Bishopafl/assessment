<?php

$guestlist = array (  
    array (
        'guest_id' => 177,
        'guest_type' => 'crew',
        'first_name' => 'Marco',
        'middle_name' => NULL,
        'last_name' => 'Burns',
        'gender' => 'M',
        'guest_booking' => array (  
            array (
                'booking_number' => 20008683,
                'ship_code' => 'OST',
                'room_no' => 'A0073',
                'start_time' => 1438214400,
                'end_time' => 1483142400,
                'is_checked_in' => true,
            ),
        ),
        'guest_account' => array (  
            array (
                'account_id' => 20009503,
                'status_id' => 2,
                'account_limit' => 0,
                'allow_charges' => true,
            ),
        ),
    ),
    array (
        'guest_id' => 10000113,
        'guest_type' => 'crew',
        'first_name' => 'Bob Jr ',
        'middle_name' => 'Charles',
        'last_name' => 'Hemingway',
        'gender' => 'M',
        'guest_booking' => array (  
            array (
                'booking_number' => 10000013,
                'room_no' => 'B0092',
                'is_checked_in' => true,
            ),
        ),
        'guest_account' => array (  
            array (
                'account_id' => 10000522,
                'account_limit' => 300,
                'allow_charges' => true,
            ),
        ),
    ),
    array (
        'guest_id' => 10000114,
        'guest_type' => 'crew',
        'first_name' => 'Al ',
        'middle_name' => 'Bert',
        'last_name' => 'Santiago',
        'gender' => 'M',
        'guest_booking' => array (  
            array (
                'booking_number' => 10000014,
                'room_no' => 'A0018',
                'is_checked_in' => true,
            ),
        ),
        'guest_account' => array (  
            array (
                'account_id' => 10000013,
                'account_limit' => 300,
                'allow_charges' => false,
            ),
        ),
    ),
    array (
        'guest_id' => 10000115,
        'guest_type' => 'crew',
        'first_name' => 'Red ',
        'middle_name' => 'Ruby',
        'last_name' => 'Flowers ',
        'gender' => 'F',
        'guest_booking' => array (  
            array (
                'booking_number' => 10000015,
                'room_no' => 'A0051',
                'is_checked_in' => true,
            ),
        ),
        'guest_account' => array (  
            array (
                'account_id' => 10000519,
                'account_limit' => 300,
                'allow_charges' => true,
            ),
        ),
    ),
    array (
        'guest_id' => 10000116,
        'guest_type' => 'crew',
        'first_name' => 'Ismael ',
        'middle_name' => 'Jean-Vital',
        'last_name' => 'Jammes',
        'gender' => 'M',
        'guest_booking' => array (  
            array (
                'booking_number' => 10000016,
                'room_no' => 'A0023',
                'is_checked_in' => true,
            ),
        ),
        'guest_account' => array (  
            array (
                'account_id' => 10000015,
                'account_limit' => 300,
                'allow_charges' => true,
            ),
        ),
    ),
);

/* --------------------------------------------------------------------------------
 *
 *  Question 1 answer:
 *
 * */

// $results = []; // container for results
// $key = 'first_name'; // key we are looking for, in this case it is 'first_name'
// findKey($guestlist, $key, $results); // search function

// echo '<pre>';
// var_dump($results);
// echo '</pre>';

// /**
//  * @param array $arr the multidimensional array we are searching
//  * @param string $key the key we are looking for
//  * @param $results passed by reference - in case the key is found, this array 'stores' the corresponding key-value pair.
//  */

//  function findKey($arr = [], $key = '', &$results = []) {
//      foreach ( $arr as $key0 => $value0 ){
//          if( $key0 == $key && !is_array($value0) ) {
//              $results[][$key] = $value0;
//          }
//          if( is_array($value0) ) {
//             findKey($value0, $key, $results);
//          }
//      }
//      return false;
//  }

/* --------------------------------------------------------------------------------
 *
 *  Question 2 answer:
 *
 * */

$results = []; // container for results
$key = array('first_name', 'account_id'); // keys we are looking for, in this case it is 'first_name'
//$key = 'first_name'; // keys we are looking for, in this case it is 'first_name'
findKeys($guestlist, $key, $results); // search function

echo '<pre>';
var_dump($results);
echo '</pre>';

/**
 * @param array $arr the multidimensional array we are searching
 * @param string $key the key we are looking for
 * @param $results passed by reference - in case the key is found, this array 'stores' the corresponding key-value pair.
 */

 function findKeys($arr = [], $key = [], &$results = []) {

    foreach ( $arr as $key0 => $value0 ){

//         if( $key0 == $key && !is_array($value0) ) {
        if ( is_array($key) ) {

             echo '<pre>';
//             var_dump($results[][$key] = $value0);
             var_dump($key);
             echo '</pre>';
//             $results[][$key] = $value0;


         }
         if( is_array($value0) ) {
            findKey($value0, $key, $results);
         }
     }
     return false;
 }






 /*
  *
  * $variablesThatAreArrays = array(‘variable1′,’variable2’,’variable3”);
if(isset($variable) && in_array($variable,$variablesThatAreArrays)) {
// the current variable being set is an array
if(isset($value) && is_string($value)) {
$tmpArray = array();
if(isset($this->$variable) && is_array($this->$variable)) {
foreach($this->$variable as $key => $var){
$tmpArray[] = $var;
}
}
$tmpArray[] = $value;
$this->$variable = $tmpArray;
return true;
}
else if(isset($value) && is_array($value)){
$this->$variable = $value;
return true;
}
}

else if(is_string($variable) && strlen($variable) > 0 && isset($value) && (is_string($value) ||
is_numeric($value) || is_bool($value))){
// is a common variable
$this->$variable = $value;
return true;
}
$this->error = “Unable to set {$variable} variable.”;
return false;
}
catch(Exception $e){
$this->error = “Exception Handler Error: {$e->getMessage()}”;
return false;
}
}
  *
  *
  *
  *
  *
  *
  *
  * */



/* --------------------------------------------------------------------------------
 *
 *  Question 3 answer:
 *
 * */
//class Customer{
//    public $customer_id;
//    public $first_name;
//    public $last_name;
//    public $address = [];
//    public $price;
//
//    // Setters
//
//    public function setCustomerFirstName($first_name) {
//        $this->first_name = $first_name;
//    }
//
//    public function setCustomerLastName($last_name) {
//        $this->last_name = $last_name;
//    }
//
//    public function setCustomerAddress($quantity) {
//        $this->quantity = $item_quantity;
//    }
//
//    public function setCustomer($price) {
//        $this->price = $item_price;
//    }
//
//    // Getters
//
//    public function getCustomerFirstName($first_name) {
//        return $this->first_name;
//    }
//
//    public function getCustomerLastName($last_name) {
//        return $this->last_name;
//    }
//
//    public function getCustomerAddress($address) {
//        return $this->address;
//    }
//
//    public function getItemPrice($price) {
//        return $this->price;
//    }
//
//    public function getCustomerName($first_name, $last_name) {
//        $fn = $first_name; $ln = $last_name;
//        echo $fn . ' ' . $ln;
//    }
//
//    public function getCustomerAddressByName($first_name) {
//        $customerEx = array (
//            array (
//                'first_name' => 'Bruce',
//                'last_name' => 'Wayne',
//                'address' => array(
//                    'address1' => '123 Batcave',
//                    'address2' => 'Suite 105',
//                    'city' => 'Orlando',
//                    'state' => 'Florida',
//                    'zip' => '33612'
//                ),
//            )
//
//        );
//
//        echo 'Your address is currently set to: ' . $customerEx[0]['address']['address1'] . $customerEx[0]['address']['address2'] . '. City: ' . $customerEx[0]['address']['city']. ', State: ' . $customerEx[0]['address']['state'] . 'ZIP: ' . $customerEx[0]['address']['zip'];
//    }
//
//
//}
//
//$customer = new Customer();
//
//$customerEx = array (
//    array (
//        'first_name' => 'Bruce',
//        'last_name' => 'Wayne',
//        'address' => array(
//            'address1' => '123 Batcave',
//            'address2' => 'Suite 105',
//            'city' => 'Orlando',
//            'state' => 'Florida',
//            'zip' => '33612'
//        )
//
//    )
//);
//
//
//$customer->getCustomerName($customerEx[0]['first_name'],$customerEx[0]['last_name']);
//echo "<br><br>";
//$customer->getCustomerAddressByName($customerEx[0]['first_name']);
//echo "<br><br>";
//$customer->getItemCost($itemName);
//
//class Item{
//    public $id;
//    public $name;
//    public $quantity;
//    public $price;
//
//    // Setters
//
//    public function setItemID($id) {
//        $this->id = $item_id;
//    }
//
//    public function setItemName($name) {
//        $this->name = $item_name;
//    }
//
//    public function setItemQuantity($quantity) {
//        $this->quantity = $item_quantity;
//    }
//
//    public function setItemPrice($price) {
//        $this->price = $item_price;
//    }
//
//    // Getters
//
//    public function getItemId($id) {
//        return $this->id;
//    }
//
//    public function getItemName($name) {
//        return $this->name;
//    }
//
//    public function getItemQuantity($quantity) {
//        return $this->quantity;
//    }
//
//    public function getItemPrice($price) {
//        return $this->price;
//    }
//
//    public function addToCart($quantity, $price, $name) {
//        if ( isset($quantity) && isset($price) && $name != null ) {
//            echo 'Added to cart';
//            return true;
//        } else {
//            echo 'Item not added';
//            return false;
//        }
//    }
//
//    // Cost of item, including shipping and tax
//    public function calculate_tax ($price) {
//        $tax_rate = 70;
//        $tax = $price*$tax_rate/100;
//        $total=$price+$tax;
//        echo $total;
//    }
//
//}
//
//$item = new Item();
//
//$item_id = $item->id = '1';
//$item_name = $item->name = 'Banana';
//$item_quantity = $item->quantity = '1';
//$item_price = $item->price = '500.00';
//
//$item->calculate_tax($item_price);
