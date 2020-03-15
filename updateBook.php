<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 4:07 PM
 */
?>
<?php
$bookId =$_POST['bookId'];
$bookName =$_POST['bookName'];
$author =$_POST['author'];
$dateBook =$_POST['dateBook'];
print $bookId;
print $bookName;
print $author;
print $dateBook;

include 'DbConnection.php';
if (!$connection){
    echo mysqli_connect_error();
}else{
    $SQL = "update book set bookName='$bookName',author='$author',dateBook='$dateBook' where bookId='$bookId'";
    print $SQL;
    $result = mysqli_query($connection,$SQL);
    if ($result){
        echo "Book Updated";
    }else{
        echo "Fail To Update";
        mysqli_error($connection);
    }
}

?>
