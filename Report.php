<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/7/2020
 * Time: 1:49 PM
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

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php include 'DbConnection.php';
?>
<?php $SQL = "select * from issuebook";
$resultset = mysqli_query($connection, $SQL);
?>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-danger border-right" id="sidebar-wrapper">
        <div class="sidebar-heading bg-light">Lib System </div>
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

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <b>View Issues List</b>
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
                    <th scope="col">Returned Date</th>
                    <th scope="col">status</th>
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
                        <th><?php echo $rowdata['returnedDate']?></th>
                        <th><?php echo $rowdata['status']?></th>
                    </tr>
                <?php endwhile;?>
                </tbody>
            </table>
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
    $("#menu-toggle").click(function(e) {
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

</body>

</html>


