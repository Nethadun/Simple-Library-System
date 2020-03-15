<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/4/2020
 * Time: 10:59 AM
 */
?>
<?php

$issueBookId = $_POST['issueBookId'];
$memberId = $_POST['memberId'];
$bookId = $_POST['bookId'];
$issueDate = $_POST['issueDate'];
$returnDate = $_POST['returnDate'];
$returnedDate = $_POST['returnedDate'];

include 'DbConnection.php';
//if(!$connection){
//    echo mysqli_connect_error();
//}else{
//    $sql="INSERT INTO issuebook (issueBookId,memberId,bookId,issueDate,returnDate,returnedDate,status) values ('$issueBookId','$memberId','$bookId','$issueDate','$returnDate','$returnedDate',1)";
//    $sqlu="update book set avaliable=0 where bookId='$bookId'";
//    $res=mysqli_query($connection,$sql,$sqlu);
//    if ($res){
//        echo " Added ";
//    }else{
//        echo " Not Add";
//        echo mysqli_error($connection);
//    }
//}
print $bookId;

try {
$connection->begin_transaction();

$getBookId = "SELECT * FROM book WHERE bookID='$bookId'";
$bookResult = $connection->query($getBookId);

$bookId = "";

if ($bookResult->num_rows > 0) {
while ($bookRow = $bookResult->fetch_assoc()) {
$bookId = $bookRow["bookId"];
}
}

$getMemberId = "SELECT * FROM member WHERE memberId='$memberId'";
$memberResult = $connection->query($getMemberId);

$memberId = "";

if ($memberResult->num_rows > 0) {
while ($memberRow = $memberResult->fetch_assoc()) {
$memberId = $memberRow["memberId"];
}
}
$bookSql = "UPDATE Book set avalable=0 WHERE bookId='$bookId'";
$issueSql = "INSERT INTO issueBook (issueBookId,memberId,bookId,issueDate,returnDate,returnedDate,status) values ('$issueBookId','$memberId','$bookId','$issueDate','$returnDate','$returnedDate',1)";

$connection->query($bookSql);
$connection->query($issueSql);
print $bookSql;
print $issueSql;

$connection->commit();
} catch (Exception $e) {

$connection->rollback();
}
?>