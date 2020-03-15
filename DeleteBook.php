<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/3/2020
 * Time: 11:49 AM
 */
?>
<?php
$bookId = $_POST['bookId'];
include "DbConnection.php";

if(!$connection){
    echo mysqli_connect_error();
}else{
    $SQL="delete from book where bookId='$bookId'";
}
$result = mysqli_query($connection,$SQL);
if ($result){
    echo "Book deleted";
}else{
    echo "Failed";
    mysqli_error($connection);

}
?>
