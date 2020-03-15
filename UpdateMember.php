<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 12:38 PM
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
if (!$connection){
    echo mysqli_connect_error();
}else{
    $SQL = "update member set memberName='$memberName',telephone='$telephone',nic='$nic',email='$email',address='$address' where memberId='$memberId'";
}
$result = mysqli_query($connection,$SQL);
if ($result){
    echo "Member Updated";
}else{
    echo "Fail To Update";
    mysqli_error($connection);
}


?>