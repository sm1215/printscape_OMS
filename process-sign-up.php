<?php
//put code from external file right here before the doctype:
require_once("functions-lib.php");
require_once("db-connect.php");
//store in a var of the user's choice 
$username = sanitize($_POST['username']);
$password = sanitize($_POST['password']);
$repeatpassword = sanitize($_POST['repeatpassword']);
$first_name = sanitize($_POST['first_name']);
$last_name = sanitize($_POST['last_name']);
$company_name = sanitize($_POST['company_name']);
$email = sanitize($_POST['email']);
$address1 = sanitize($_POST['address_1']);
$address2 = sanitize($_POST['address_2']);
$city = sanitize($_POST['city']);
$state = sanitize($_POST['state']);
$zip = sanitize($_POST['zip']);
$phone_number = sanitize($_POST['phone_number']);
$submit = filter_input(INPUT_POST, 'submit');


 if ($submit)
    {
    //check for existence
       if($username&&$password&&$repeatpassword)
       {
       $password_md5 = md5($password);
       $repeatpassword_md5 = md5($repeatpassword);

    if ($password==$repeatpassword)
    {
    //check char length of username and fullname
        if (strlen($username)>25 || strlen($username)<6)
        {
        echo "Username must be between 6 and 25 characters";
        }
        else
        {
        //check password length 
            if (strlen ($password)>25 || strlen ($password)<6)
            {
            echo "Password must be between 6 and 25 characters";
            }
            else
            {
            //register user 
            }
        }
    }
    else echo "<h1>Your passwords do not match</h1>";

}
else echo "<h1>Please fill in <b>all</b> fields!</h1>";
    }
   



//////////////////////start finding the new id////////////////
//make a var to store the new id # the new record will get
$newuser_id = 0;
//run a query to get the highest id # number curently used
$result = run_my_query('SELECT * FROM users ORDER BY user_id DESC');
while($row = $result -> fetch_assoc()){
	$new_id = $row['id'];
}////closes while loop
/////add one to the highest id to get the new id
$new_id++;
/////////////////////end finding new id/////////////////////////////////
//print_r($_FILES);

run_my_query("
INSERT INTO users
    (id, user_name, password, first_name, last_name, email,)
	VALUES 
	(null, '$user_name', '$password', '$first_name', '$last_name', '$email');

INSERT INTO customer
    (id, company_name, address_1, address_2, city, state, zip, phone_number)
	VALUES 
	(null, '$customer_name', '$address_1', '$address_2', '$city', '$state' '$zip', '$phone_number');
"
);


header('Location:my-recent-orders.php');
?>