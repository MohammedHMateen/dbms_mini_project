<?php
$D_id = filter_input(INPUT_POST, 'D_id');
$Date = filter_input(INPUT_POST, 'Date');
$Donor_name = filter_input(INPUT_POST, 'Donor_name');
$Phno = filter_input(INPUT_POST, 'Phno');
$Co_loc = filter_input(INPUT_POST, 'Co_loc');
$Quantity = filter_input(INPUT_POST, 'Quantity');


$host = "localhost";
$dbusername = "root";
$dbpassword = "p";
$dbname = "mp_1";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO f_dons (D_id, Date, Donor_name, Phno, Co_loc, Quantity)
values ('$D_id', '$Date', '$Donor_name', '$Phno', '$Co_loc', '$Quantity')";

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>


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
    .formz {
        font-size: 24px;
        padding-top: 50px;
        background-color: cyan;
    }

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
                <div class="row form-group">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <h1 id="donations" class="h2">Add Food Donations Form</h1>
                        <form class="needs-validation" novalidate>
                            <div class="alert alert-danger d-none">Please review the problems below:</div>
                            <div class="form-group">
                                <label for="volid">Donor Id</label>
                                <input type="number" class="form-control" name="Vol_id" id="volid"
                                    placeholder="Unique Donor Id" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName">Donor Name</label>
                                <input type="text" class="form-control" id="exampleInputName"
                                    placeholder="Donors Full Name" required>
                                <div class="invalid-feedback">Name can't be blank</div>
                                <div class="valid-feedback">Looks good!</div>
                                <small class="form-text text-muted">It makes management and auditing easy</small>
                            </div>
                            <div class="form-group">
                                <label for="eveid">Donor Contact Info</label>
                                <input type="number" class="form-control" name="Event_id" id="eveid"
                                    placeholder="Enter 10 digit phone number" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label>Date of Donations</label>
                                <div name="Date" class="d-flex flex-row justify-content-between align-items-center">
                                    <select id="exampleInputDateYear" class="form-control mr-1" required>
                                        <option>Select Year</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>

                                    <select id="exampleInputDateMonth" class="form-control mx-1" required>
                                        <option>Select Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>

                                    <select id="exampleInputDateDay" class="form-control ml-1" required>
                                        <option>Select Date</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="eveid">Quantity of Food</label>
                                <input type="number" class="form-control" name="Event_id" id="eveid"
                                    placeholder="Enter the Quantity in kgs" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <fieldset class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="exampleCheckTerms"
                                        required>
                                    <label class="form-check-label" for="exampleCheckTerms">All values are true to
                                        the best of my knowledge</label>
                                    <div class="invalid-feedback"></div>
                                    <div class="valid-feedback">Looks good!</div>
                                    <!-- <small class="form-text text-muted">Boolean as check box example</small> -->
                                </div>
                            </fieldset>

                            <button type="submit" value="SUBMIT" class="btn btn-primary">Add Food Donations!!</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </form>

                        <!-- <div class="formz">
                            <form method="post" action="fdoadd.php">
                                Donor_id : <input type="text" name="D_id"><br><br>
                                Donor_name : <input type="text" name="Donor_name"><br><br>
                                Phone : <input type="text" name="Phno"><br><br>
                                Date : <input type="text" name="Date"><br><br>
                                Collection_Location : <input type="text" name="Co_loc"><br><br>
                                Quantity : <input type="text" name="Quantity"><br><br>
                                <input type="submit" value="SUBMIT->">
                            </form>
                        </div> -->


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
</body>