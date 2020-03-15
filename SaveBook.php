<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 3:01 PM
 */
?>
<?php
$bookId =$_POST['bookId'];
$bookName =$_POST['bookName'];
$author =$_POST['author'];
$dateBook =$_POST['dateBook'];
include 'DbConnection.php';
if(!$connection){
    echo mysqli_connect_error();
}else{
//    "INSERT INTO Book (reference_number,category_name,title,author,Availability) values ('$referenceNumber','$bookCategory','$title','$author',true )";
    $sql="insert into book (bookId,bookName,author,dateBook,avalable) values('$bookId','$bookName','$author','$dateBook',1)";

    $res=mysqli_query($connection,$sql);
    if ($res){
        echo "Book Added ";
    }else{
        echo "Book Not Add";
        echo mysqli_error($connection);
    }
}

?>
