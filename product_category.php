<?php
include('header_customer.php');

for ($k = 1; $k <= 4; $k++) {
    $c_id = $k;
    include("productcrsl.php");
}
include("footer.php");
