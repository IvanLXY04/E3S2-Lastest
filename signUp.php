<?php
include('session.php');
if(isset($_POST['email'])){
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];
    $postcode=$_POST["postcode"];
    $city=$_POST["city"];
    $highestEducation=$_POST["highestEducation"];
    //$profilePic=$_FILES["profilePic"]["name"];
	
    /*if (isset($_POST['profilePic'])) {
        // Access the 'profilePic' key from the array
        $profilePic = $_POST['profilePic'];
    } else {
        // Handle the case where 'profilePic' is not set
        $profilePic = 'default.jpg'; // or any default value
    }*/

    $sql = "INSERT INTO user (userId, password, firstName, lastName, gender, dob, city, postcode, highestEducation, phoneNum) 
            VALUES ('$email', '$password', '$firstName', '$lastName', '$gender', '$dob', '$city', '$postcode', '$highestEducation', '$phone')";
    $result=mysqli_query($session,$sql);
    if($result)
        echo"<script>alert('Succesfully SignUp')</script>";
    else
        echo"<script>alert('SignUp Failed')</script>";
    echo"<script>window.location='login.php'</script>";
}
?>