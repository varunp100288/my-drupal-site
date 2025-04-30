<?php

function funByRef(&$myname, &$myaddress)
{
    // foreach ($myaddress as $value) {
    //    $value = $value . "ghazipur";
    // }
    print_r($myaddress);
    // $myaddress[] = "ghazipur";
    array_push($myaddress, "ghazipur", "uttar pradesh");
    $myname = $myname. " pandey";
    // echo $myname;
}
$name = "varun";
$address = array("deva", "dullahapur");
// funByRef($name);
funByRef($name, $address);
echo $name;
print_r($address);