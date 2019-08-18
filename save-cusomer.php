<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 7/22/2019
 * Time: 3:02 PM
 */
?>
<?php
$customerID=$_POST['customerID'];
$customerFirstName=$_POST['customerFirstName'];
$customerLastName=$_POST['customerLastName'];
$customerEmail=$_POST['customerEmail'];
$customerAddress=$_POST['customerAddress'];
$customerTelephone=$_POST['customerTelephone'];

include "db-connection.php";

if($connection){
$SQL="insert into customer values ('$customerID','$customerFirstName','$customerLastName','$customerEmail','$customerAddress','$customerTelephone')";
$result=mysqli_query($connection,$SQL);

if($result){
echo "Customer Added";
}else{
echo "Customer Not Added"."<br>".mysqli_error($connection);
}
}else{
echo mysqli_connect_error();
}

?>


