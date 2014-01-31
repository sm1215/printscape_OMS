<?php

session_start();
include("header.php");
require_once("functions-lib.php");
require_once("test_functions.php");
?>

<style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse; margin-top:20px;}
.tftable th {font-size:12px;background-color:#c1d72e;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left; font-weight:bold;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}
.tftable tr:hover {background-color:#f3fcb9;}
</style>

<h1 class="h1_titles">Customer Details</h1>
<table class="tftable" border="1">
<tr><th>Customer Id</th><th>Customer Name</th><th>Phone Number</th><th>Email Address</th><th>Address</th><th>Recent Orders</th></tr>

<?php
	$users = test1();
	get_users($users, $page_number);
?>

<!--<tr><td>Cell:1</td><td>Cell:2</td><td>Cell:3</td><td>Cell:4</td><td>Cell:5</td><td>View</td></tr>-->

</table>


<?php
include("footer.php");
?>

