<!doctype html>
<html lang="en">

<head>
    <title>NGO Admin Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .footer {
        width: 100%;
        left: 0;
        bottom: 0;
        background-color: grey;
        color: white;
        text-align: center;
    }

    p {
        display: block;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0;
        margin-inline-end: 0;
    }

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 90px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        z-index: 99;
    }

    @media (max-width: 767.98px) {
        .sidebar {
            top: 11.5rem;
            padding: 0;
        }
    }

    .navbar {
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
    }

    @media (min-width: 767.98px) {
        .navbar {
            top: 0;
            position: sticky;
            z-index: 999;
        }
    }

    .sidebar .nav-link {
        color: #333;
    }

    .sidebar .nav-link.active {
        color: #0d6efd;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="http://localhost/Mproj/web-dashboard-ui.php">
                Non Profit Org. Admin Dashboard
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse"
                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <a class="btn btn-danger" href="http://localhost/Mproj/web-home.html" role="button">Sign out & Go to
                Home</a>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/Mproj/web-dashboard-ui.php#overview">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span class="ml-2">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Mproj/web-dashboard-ui.php#funs">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="ml-2">Transactions</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Mproj/web-dashboard-ui.php#volunteer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-2">Volunteers</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Mproj/web-dashboard-ui.php#donations">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-bar-chart-2">
                                    <line x1="18" y1="20" x2="18" y2="10"></line>
                                    <line x1="12" y1="20" x2="12" y2="4"></line>
                                    <line x1="6" y1="20" x2="6" y2="14"></line>
                                </svg>
                                <span class="ml-2">Donations</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Mproj/web-dashboard-ui.php#evens">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span class="ml-2">Events</span>
                            </a>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">

                <!-- -->
                <!-- Overview View -->
                <!-- -->

                <h1 id="overview" class="h2">Overview</h1>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Active Volunteers</h5>
                            <div class="card-body">
                                <h5 class="card-title">1001</h5>
                                <p class="card-text text-success">Volunteers World Wide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Food Drive</h5>
                            <div class="card-body">
                                <h5 class="card-title">1.28 M</h5>
                                <p class="card-text text-success">Fresh Meals Served</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Balance Fund</h5>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM b";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo "Rs." . $row["Balance"]. "";
}
echo "</h5>";
 $conn->close();
?>
                                    <p class="card-text text-success">To Spend for a Good Cause</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Events</h5>
                            <div class="card-body">
                                <h5 class="card-title">44</h5>
                                <p class="card-text text-success">Conducted World Wide</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -->
                <!-- Funs View -->
                <!-- -->
                <div class="row form-group">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <h1 id="funs" class="h2">Transactions</h1>

                        <div class="card">
                            <div class="card-header container-fluid">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3>Passbook</h3>
                                    </div>
                                    <div class="col-md-2 float-right">
                                        <a name="" id="" class="btn btn-success" href="http://localhost/Mproj/web-tradd.php" role="button">Add Entry</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Done by VolId</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Particulars</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Amount</th>

                                        </tr>
                                        <?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM fund_full";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Trans_id"]. "</td><td>" . $row["Vol_id"]. "</td><td>" . $row["Date"]. "</td><td>"
. $row["Particulars"]. "</td><td>" . $row["Trans_type"]. "</td><td>". $row["Amt"].  "</td></tr>";
}
echo "</table>";
} else { echo "Currently Empty.... Add some content and see the Magic!!"; }
$conn->close();
?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -->
                <!-- Volunteer View -->
                <!-- -->

                <div class="row form-group">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <h1 id="volunteer" class="h2">Volunteer</h1>

                        <div class="card">
                            <div class="card-header container-fluid">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3>Volunteer Details</h3>
                                    </div>
                                    <div class="col-md-2 float-right">
                                        <a name="" id="" class="btn btn-success" href="http://localhost/Mproj/web-voluadd.php" role="button">New
                                            Volunteer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Date of joins</th>
                                            <th scope="col">Active</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Skills</th>
                                            <th></th>
                                        </tr>
                                        <?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM v_full";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row["vol_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>". $row["phno"]. "</td><td>" . $row["date_join"]. "</td><td>" . $row["active"]. "</td>";
echo "<td>" . $row["experience"] ."</td><td>" . $row["skill"] ."</td>";
echo "<td><a href='voldel.php?delid=". $row['vol_id']."' class='btn btn-sm btn-danger'>Delete</a></td>";
echo "</tr>";
 }
echo "</table>";
} else { echo "Currently Empty.... Add some content and see the Magic!!"; }
$conn->close();
?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -->
                <!-- Food Donations -->
                <!-- -->
                <div class="row form-group">
                    <div class="col-6 col-xl-6 mb-4 mb-lg-0">
                        <h1 id="donations" class="h2">Food Donations</h1>
                        <div class="card">
                            <div class="card-header container-fluid">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3>Charity Details</h3>
                                    </div>
                                    <div class="col-md-2 float-right">
                                        <a name="" id="" class="btn btn-success" href="http://localhost/Mproj/web-fdoadd.php" role="button">Add</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Donor Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Collected from</th>
                                            <th scope="col">Quantity of Food (kg)</th>
                                        </tr>
                                        <?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM f_dons";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["D_id"]. "</td><td>" . $row["Donor_name"]. "</td><td>". $row["Phno"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Co_loc"]. "</td><td>" . $row["Quantity"] . "</td></tr>";
 }
echo "</table>";
} else { echo "Currently Empty.... Add some content and see the Magic!!"; }
$conn->close();
?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- -->
                    <!-- Money Donations -->
                    <!-- -->
                    <!-- <div class="row my-4"> -->
                    <div class="col-6 col-xl-6 mb-4 mb-lg-0">
                        <h1 id="donations" class="h2">Money Donations</h1>

                        <div class="card">
                            <div class="card-header container-fluid">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3>Charity Details</h3>
                                    </div>
                                    <div class="col-md-2 float-right">
                                        <a name="" id="" class="btn btn-success" href="http://localhost/Mproj/web-mdoadd.php" role="button">Add </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Donor Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Recieved Status</th>
                                        </tr>
                                        <?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM m_dons";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["D_id"]. "</td><td>" . $row["Donor_name"]. "</td><td>". $row["Phno"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Amt"]. "</td><td>" . $row["Rcv_stats"] . "</td></tr>";
 }
echo "</table>";
} else { echo "Currently Empty.... Add some content and see the Magic!!"; }
$conn->close();
?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- -->
                <!-- Evens View -->
                <!-- -->
                <div class="row form-group">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <h1 id="evens" class="h2">Event</h1>

                        <div class="card">
                            <div class="card-header container-fluid">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3>Event Details</h3>
                                    </div>
                                    <div class="col-md-2 float-right">
                                        <a name="" id="" class="btn btn-success" href="http://localhost/Mproj/web-eveadd.php" role="button">New
                                            Event</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Held By Volunteer</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Venue</th>
                                            <th scope="col">Attendence</th>
                                            <th scope="col">Summary</th>
                                            <th scope="col">Response</th>
                                        </tr>
                                        <?php
$conn = mysqli_connect("localhost", "root", "p", "mp_1");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM event";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Event_id"]. "</td><td>" . $row["Vol_id"]. "</td><td>" . $row["Date"]. "</td><td>"
. $row["Venue"]. "</td><td>" . $row["No_vol"]. "</td><td>" . $row["Summary"]. "</td><td>" . $row["Response"] . "</td></tr>";
}
echo "</table>";
} else { echo "Currently Empty.... Add some content and see the Magic!!"; }
$conn->close();
?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="footer">
                    <p>A Web Lab Mini Project Done By
                        <b>MOHAMMED HAMMAAD MATEEN</b>
                        and
                        <b>RAHUL MONDAL</b>
                    </p>
                </div>
               
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>