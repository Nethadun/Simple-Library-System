<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 10:55 AM
 */
?>

<?php
$memberId =$_POST['memberId'];
$memberName =$_POST['memberName'];
$telephone =$_POST['telephone'];
$nic =$_POST['nic'];
$email =$_POST['email'];
$address =$_POST['address'];
include 'DbConnection.php';
if(!$connection){
    echo mysqli_connect_error();
}else{
    $sql="insert into member values('$memberId','$memberName','$telephone','$nic','$email','$address')";

    $res=mysqli_query($connection,$sql);
    if ($res){
        echo "Member Added ";
    }else{
        echo "Member Not Add";
        echo mysqli_error($connection);
    }
}

?>
