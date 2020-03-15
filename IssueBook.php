<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/4/2020
 * Time: 10:11 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lib System PHP</title>
    <link rel="icon" href="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php
include 'DbConnection.php';
$query = "select * from member ";
$result = mysqli_query($connection, $query);
?>

<?php
include 'DbConnection.php';
$query="select * from book where avalable=1";
$resultB=mysqli_query($connection,$query);
?>

<?php include 'DbConnection.php';
?>
<?php $SQL = "select * from issuebook where status=1";
$resultset = mysqli_query($connection, $SQL);
?>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-danger border-right" id="sidebar-wrapper">
        <div class="sidebar-heading bg-light">Lib System</div>
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-danger text-light"><img src="img/Dashboard_24px.png">&nbsp;Dashboard</a>
            <a href="Member.php" class="list-group-item list-group-item-action bg-danger text-light"><img src="img/Member_24px.png">&nbsp;Member</a>
            <a href="Book.php" class="list-group-item list-group-item-action bg-danger text-light"><img src="img/Book_24px.png">&nbsp;Book</a>
            <a href="IssueBook.php" class="list-group-item list-group-item-action bg-danger text-light"><img src="img/Edit%20Property_24px.png">&nbsp;Issue Book</a>
            <a href="Report.php" class="list-group-item list-group-item-action bg-danger text-light"><img src="img/Report%20Card_24px.png">&nbsp;Report</a>
            <!--            <a href="#" class="list-group-item list-group-item-action bg-danger text-light">Status</a>-->
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://nethtech.000webhostapp.com/">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Help</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://nethtech.000webhostapp.com/">Copyright &copy; Nethadun</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <br>
                    <div id="customer_header">
                        <b>Manage Issues</b>
                    </div>
                    <br>
                    <br>
                    <form id="issueForm">
                        <div class="form-group" >
                            <label for="issueBookId">Issue Book ID :-</label>
                            <input type="text" class="form-control" id="issueBookId" name="issueBookId">
                        </div>
                        <div class="form-group"id="memberIdField">
                            <label for="author">Member ID :-</label>
                            <!--                            <input type="text" class="form-control" name="memberId" id="memberId">-->
                            <select class="form-control" name="memberId">
                                <?php

                                while ($rowData = mysqli_fetch_row($result)) {
                                    echo "<tr>
                                    <option>$rowData[0]</option>
                                    </tr>";
                                }
                                mysqli_close($connection);
                                ?>
                            </select>
                        </div>
                        <div class="form-group" id="memberFieldShow">
                            <label for="memberId">Member ID :-</label>
                            <input type="text" class="form-control" name="memberID" id="memberId" >
                        </div>
                        <div class="form-group" id="bookIdField">
                            <label for="bookId">Book ID :-</label>
<!--                            <input type="text" class="form-control" id="bookId" name="bookId" aria-describedby="nameHelp">-->
                            <select class="form-control" name="bookId">
                                <?php

                                while ($rowData1 = mysqli_fetch_row($resultB)) {
                                    echo "<tr>
                                    <option>$rowData1[0]</option>
                                    </tr>";
                                }
                                mysqli_close($connection);
                                ?>
                            </select>
                        </div>
                        <div class="form-group" id="bookFieldShow">
                            <label for="bookId">Book ID :-</label>
                            <input type="text" class="form-control" name="bookID" id="bookId" >
                        </div>
                        <div class="form-group">
                            <label for="issueDate">Issue Date :-</label>
                            <input type="date" class="form-control" name="issueDate" id="issueDate">
                        </div>
                        <div class="form-group">
                            <label for="returnDate">Return Date :-</label>
                            <input type="date" class="form-control" name="returnDate" id="returnDate">
                        </div>
                        <div class="form-group">
                            <label for="returnedDate">Returned Date :-</label>
                            <input type="date" class="form-control" name="returnedDate" id="returnedDate">
                        </div>
                        
                        <hr>
                        <button type="button" class="btn btn-primary" id="save">Issue</button>
                        <button type="button" class="btn btn-warning" id="update">Return</button>
                        <button type="button" class="btn btn-danger" id="delete">Delete</button>
                        <hr>
                    </form>
                </div>
                <div class="col-md-6">
                    <br>
                    <br>
                    <div id="customer_header">
                        <b>Search Issues</b>
                    </div>
                    <br>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Search</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="memSearch">Member ID :-</label>
                                <input type="text" class="form-control" id="memSearch" name="memSearch"
                                       aria-describedby="nameHelp">
                            </div>
                            <a href="IssueBook.php" class="btn btn-primary">Refresh here</a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div id="customer_header">
                        <b>View Issued</b>
                    </div>
                    <br>
                    <br>
                    <table class="table" id="table">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">#</th>
                            <th scope="col">Member ID</th>
                            <th scope="col">Book ID</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Return Date</th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php
                        while ($rowdata = $resultset->fetch_assoc()) :?>
                            <tr>
                                <th><?php echo $rowdata['issueBookId']?></th>
                                <th><?php echo $rowdata['memberId']?></th>
                                <th><?php echo $rowdata['bookId']?></th>
                                <th><?php echo $rowdata['issueDate']?></th>
                                <th><?php echo $rowdata['returnDate']?></th>
                            </tr>
                        <?php endwhile;?>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script>
    $(document).ready(function(){
        $("#memSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $("#bookIdField").show();
    $("#bookFieldShow").hide();
    $("#memberIdField").show();
    $("#memberFieldShow").hide();
    var table = document.getElementById('table');

    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
            $("#bookIdField").hide();
            $("#bookFieldShow").show();
            $("#memberIdField").hide();
            $("#memberFieldShow").show();
            //rIndex = this.rowIndex;
            document.getElementById("issueBookId").value = this.cells[0].innerHTML;
            document.getElementById("memberId").value = this.cells[1].innerHTML;
            document.getElementById("bookId").value = this.cells[2].innerHTML;
            document.getElementById("issueDate").value = this.cells[3].innerHTML;
            document.getElementById("returnDate").value = this.cells[4].innerHTML;
        };
    }

</script>
<script src="js/issueBook.js"></script>
<script src="js/returnIssueBook.js"></script>
</body>

</html>

