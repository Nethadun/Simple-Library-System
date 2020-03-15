<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/5/2020
 * Time: 4:11 PM
 */
?>
<?php
$issueBookId = $_POST['issueBookId'];
$memberId = $_POST['memberID'];
$bookId = $_POST['bookID'];
$issueDate = $_POST['issueDate'];
$returnDate = $_POST['returnDate'];
$returnedDate = $_POST['returnedDate'];
print $bookId;
print $issueBookId;
    include 'DbConnection.php';

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

    $getIssueBookId = "SELECT * FROM issuebook WHERE issueBookId='$issueBookId'";
    $issueBookResult = $connection->query($getIssueBookId);

    $issueBookId = "";

    if ($issueBookResult->num_rows > 0) {
        while ($issueBookRow = $issueBookResult->fetch_assoc()) {
            $issueBookId = $issueBookRow["issueBookId"];
        }
    }




    $bookSql = "UPDATE book set avalable=1 WHERE bookId='$bookId'";
    $returnSql = "UPDATE issuebook set status=0,returnedDate='$returnedDate'  WHERE issueBookId='$issueBookId'";

    print $returnSql;

    $connection->query($bookSql);
    $connection->query($returnSql);

    $connection->commit();

} catch (Exception $e) {

    $connection->rollback();
}
