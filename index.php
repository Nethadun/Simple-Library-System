<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nethadun PC
 * Date: 3/2/2020
 * Time: 10:21 AM
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

    <style>
        .box{
            width: 200px;
            height: 100px;
            background: linear-gradient(141deg, #dc3545 0%, #a71d2a 50%, #5a6268 100%);
            border-radius: 0 0 0 0;
        }
        .boxIn{
            position: absolute;
            left: 25px;
            top: 10px;
            width: 180px;
            height: 80px;
            background-color: white;
            border-radius:  20px 20px 20px 20px;
        }

        .boxImg{
            position: absolute;
            left: 10px;
            top: 15px;
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius:  100%;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19),0 6px 6px rgba(0,0,0,0.23);
        }
        .imgCenter{
            position: absolute;
            top: 3px;
            left: 5px;
        }
        .imgCenter1{
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .content-box{
            position: absolute;
            top: 25px;
            left: 90px;
        }
        /*.imgIcon{*/
            /*position: absolute;*/
            /*left: 23px;*/
            /*top: 29px;*/
            /*width: 40px;*/
            /*height: 40px;*/
            /*background-color: white;*/
            /*border-radius:  100%;*/
            /*box-shadow: 0 10px 20px rgba(0,0,0,0.19),0 6px 6px rgba(0,0,0,0.23);*/
        /*}*/
    </style>

</head>

<body>


<?php include 'DbConnection.php';

?>
<?php $SQL = "select * from issuebook where status=1 ";
$resultset = mysqli_query($connection, $SQL);
?>
<?php
//$sql ="select count(*) from book";
//$resultset1 = mysqli_query($connection, $sql);
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
<!--            <h1 class="mt-4">Stile Under Construction</h1>-->
<!--            <label for="" id="time">Date:-<script>Date.now()</script></label>-->
            <div class="row">
                <div class="col-md-3">
                    <div class="box">
                        <div class="boxIn">
                            <div class="boxImg"><img src="img/Book_40px.png" class="imgCenter"></div>
                            <div class="content-box">
                                <h5>Books</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="boxIn">
                            <div class="boxImg"><img src="img/Member_40px.png" class="imgCenter"></div>
                            <div class="content-box">
                                <h5>Members</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="boxIn">
                            <div class="boxImg"><img src="img/Give_30px.png" class="imgCenter1"></div>
                            <div class="content-box">
                                <h5>Issues</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box">
                        <div class="boxIn">
                            <div class="boxImg"><img src="img/Receive%20Cash_30px.png" class="imgCenter1"></div>
                            <div class="content-box">
                                <h5>Receives</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <div id="customer_header">
                        <div class="imgIcon"></div>
                        <b>Top Issue Books</b>
                    </div>
                    <br>
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
                <div class="col-md-6">
                    <br>
                    <div id="customer_header">
                        <b>View Pending Issues</b>
                    </div>
                    <br>
                    <table class="table" id="table">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">#</th>
                            <th scope="col">Member ID</th>
                            <th scope="col">Book ID</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Return Date</th>
<!--                            <th scope="col">status</th>-->
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
<!--                                <th>--><?php //echo $rowdata['status']?><!--</th>-->
                            </tr>
                        <?php endwhile;?>
                        </tbody>
                    </table>
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script>
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                // text: "Top Issue Books"
            },
            axisY: {
                title: "Total"
            },
            data: [{
                type: "column",
                showInLegend: true,
                legendMarkerColor: "grey",
                legendText: "Name",
                dataPoints: [
                    { y: 30, label: "Java Core" },
                    { y: 26,  label: "Madolduwa" },
                    { y: 16,  label: "history" },
                    { y: 19,  label: "Java Core 2" }
                ]
            }]
        });
        chart.render();

    }

</script>

<script>
    function getCount() {
        var rowCount = $('#myTable tr').length;
        document.getElementById("issueCount").value = rowCount;
        console.log(rowCount);
    }

</script>

</body>

</html>

