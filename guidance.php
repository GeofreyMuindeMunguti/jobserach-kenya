<?php	

$db=mysqli_connect("https://db4free.net/phpMyAdmin/", "jobsearch","geofrey7543")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['field'];


if ($name == "" || $email == "" || $field == "")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'employerpage.html';</script>");
}
else
{
  $result = mysqli_query($db,"INSERT INTO `guidance`(`name`, `email`, `field`) VALUES ('$name','$email','$field'])");
    
    

    if ($result)
{
    echo("<script>alert('Data successfully inserted')</script>");
   echo("<script>window.location = 'employerpage.html';</script>");
        
         echo(" name: ". $_POST['names'] ."<br>");
    echo("email: " . $_POST['email']. "<br>");
    echo("field: " . $_POST['field']. "<br>");
    
    

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'employerpage.html';</script>");
}
}




?>