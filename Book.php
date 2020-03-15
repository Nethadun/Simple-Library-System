<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 2:46 PM
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
<?php
include 'DbConnection.php'
?>

<?php include 'DbConnection.php';
?>
<?php $SQL = "select * from book where avalable=1";
$resultset = mysqli_query($connection, $SQL);
?>

<?php
include 'DbConnection.php';
$query="select * from book where avalable=1";
$result=mysqli_query($connection,$query);
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
            <div id="customer_header">
                <b>Manage Book</b>
            </div>
            <br>
            <form id="bookForm">
                <div class="form-group">
                    <label for="bookId">Book ID :-</label>
                    <input type="text" class="form-control" id="bookId" name="bookId"  maxlength="10" required="required">
                </div>
                <div class="form-group">
                    <label for="bookName">Book Name :-</label>
                    <input type="text" class="form-control" id="bookName" name="bookName" aria-describedby="nameHelp">
                </div>
                <div class="form-group">
                    <label for="author">Author :-</label>
                    <input type="text" class="form-control" name="author" id="author">
                </div>
                <div class="form-group">
                    <label for="dateBook">Date :-</label>
                    <input type="date" class="form-control" name="dateBook" id="dateBook">
                </div>
                <br>
                <br>
                <hr>
                <button type="button" class="btn btn-primary" id="save">Submit</button>
                <button type="button" class="btn btn-success" id="update">Update</button>
                <button type="button" class="btn btn-danger" id="delete">Delete</button>
                <hr>
            </form>
            <br>
            <br>
            <div id="customer_header">
                <b>Search Books</b>
            </div>
            <br>
            <br>
            <div class="card">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label for="bookSearch">Member Name :-</label>
                        <input type="text" class="form-control" id="bookSearch" name="bookSearch" aria-describedby="nameHelp">
                    </div>
                    <a href="Book.php" class="btn btn-primary">Refresh here</a>
                </div>
            </div>
            <br>
            <br>
            <div id="customer_header">
                <b>View Books</b>
            </div>
            <br>
            <br>
            <table class="table" id="table">
                <thead>
                <tr class="bg-light">
                    <th scope="col">#</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>

                <tbody id="myTable">
                <?php
                while ($rowdata = $resultset->fetch_assoc()) :?>
                    <tr>
                        <th><?php echo $rowdata['bookId']?></th>
                        <th><?php echo $rowdata['bookName']?></th>
                        <th><?php echo $rowdata['author']?></th>
                        <th><?php echo $rowdata['dateBook']?></th>
                    </tr>
                <?php endwhile;?>
                </tbody>
            </table>
            <br>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>

    var table = document.getElementById('table');

    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
            //rIndex = this.rowIndex;
            document.getElementById("bookId").value = this.cells[0].innerHTML;
            document.getElementById("bookName").value = this.cells[1].innerHTML;
            document.getElementById("author").value = this.cells[2].innerHTML;
            document.getElementById("dateBook").value = this.cells[3].innerHTML;
        };
    }

</script>

<script>
    $(document).ready(function(){
        $("#bookSearch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<script>var rowCount = $('#myTable tr').length;
console.log(rowCount);
</script>

<script src="js/saveBook.js"></script>
<script src="js/updateBook.js"></script>
<script src="js/deleteBook.js"></script>

</body>
</html>



