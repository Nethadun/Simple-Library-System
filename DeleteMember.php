<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 2:35 PM
 */
?>

<?php
$memberId = $_POST['memberId'];
include "DbConnection.php";

if(!$connection){
    echo mysqli_connect_error();
}else{
    $SQL="delete from member where memberId='$memberId'";
}
$result = mysqli_query($connection,$SQL);
if ($result){
    echo "Member deleted";
}else{
    echo "Failed";
    mysqli_error($connection);

}
?>
