
<?php

//After changing the port:
//Connecting Mysql Database with PHP:
//$conn = mysqli_connect("localhost:3307" , "root" , "", "database_name");

$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Text = $_POST['text'];

$conn = mysqli_connect("localhost:3307" , "root" , "", "learn");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($Name) && isset($Phone) && isset($Email)){
    $sql = "INSERT INTO contact (Name, Phone, Email, Text)
            VALUES ('$Name','$Phone','$Email','$Text')";
    
    if(mysqli_query($conn, $sql)){
        echo"<script> alert('Thank you for contacting us.');
          document.location='../index.html'
         </script>";
        /* other method to give response
         header("Location:../index.php?UserC=Thanks#contact");  

         put this code in index.php bellow contact us form
         <?php  if(isset($_GET['UserC'])){?> 
            <p style="color:green; text-align:center; font-size: 16px; font-family: sans-serif;">
                Thank you for contacting us.  </p>
            <?php } ?>
         */
    }
    else{
        echo "ERROR: $sql" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
