<?php
include("session.php");

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

    $sql="UPDATE user SET firstName='$firstName',lastName='$lastName',gender='$gender',dob='',password='$password',
    phone='$phone','postcode='$postcode',city='$city' WHERE UserId='$email'";
    $result=mysqli_query($sambungan,$sql);
    if($result)
        echo"<script>alert('Succesfully Update Information')</script>";
    else
        echo"<script>alert('Update Failed')</script>";
    echo"<script>window.location='userUpdate.html'</script>";
}
?>