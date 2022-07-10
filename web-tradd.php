<?php
$Trans_id = filter_input(INPUT_POST, 'Trans_id');
$Vol_id = filter_input(INPUT_POST, 'Vol_id');
#$Date = filter_input(INPUT_POST, 'Date');
$Particulars = filter_input(INPUT_POST, 'Particulars');
$Trans_type = filter_input(INPUT_POST, 'Trans_type');
$Amt = filter_input(INPUT_POST, 'Amt');
#$Bal_amt = filter_input(INPUT_POST, 'Bal_amt');

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
$sql = "INSERT INTO  fund_mgmt (Trans_id,Vol_id, Particulars, Trans_type, Amt)
values ('$Trans_id','$Vol_id', '$Particulars', '$Trans_type','$Amt')";


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
        background-color: lightgreen;
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
                        <h1 id="volunteer" class="h2">Add Transactions Form</h1>
                        <form method="post" action="http://localhost/Mproj/web-tradd.php" class="needs-validation" novalidate>
                            <div class="alert alert-danger d-none">Please review the problems below:</div>
                            <div class="form-group">
                                <label for="eveid">Transactions Id</label>
                                <input type="number" class="form-control" name="Trans_id" id="eveid"
                                    placeholder="Unique Transactions Id" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="volid">Volunteer Id</label>
                                <input type="number" class="form-control" name="Vol_id" id="volid"
                                    placeholder="Unique Volunteer Id" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                            <!-- <div class="formz">
                                <form method="post" action="fuadd.php">
                                    Transaction_id : <input type="text" name="Trans_id"><br><br>
                                    Volunteer_id : <input type="text" name="Vol_id"><br><br>
                                    //this line is an extra comment Date : <input type="text" name="Date"><br><br>
                                    Particulars : <input type="text" name="Particulars"><br><br>
                                    Transaction_type (Withdrawal/Deposit): <input type="text" name="Trans_type"><br><br>
                                    Amount: <input type="text" name="Amt"><br><br>
                                    //this line is an exta comment Balance_amount : <input type="text" name="Bal_amt"><br><br>
                                    <input type="submit" value="SUBMIT">
                                </form>
                            </div> -->
                            <div class="form-group">
                                <label for="eveid">Particular</label>
                                <input type="text" class="form-control" name="Particulars" id="eveid"
                                    placeholder="From where did the money get debited or credited" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <fieldset class="form-group">
    <legend class="col-form-label pt-0">Transactions Type</legend>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="Trans_type" id="exampleRadiosPillRed" value="Deposit" required>
      <label class="form-check-label" for="exampleRadiosPillRed">
       Debit
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="exampleRadiosPill" id="exampleRadiosPillBlue" value="blue" required>
      <label class="form-check-label" for="exampleRadiosPillBlue">
        Credit
      </label>
    </div>
    <div class="invalid-feedback">Please provide a valid value.</div>
    <div class="valid-feedback">Looks good!</div>
    <small class="form-text text-muted">Deposit or Withdrawal ?</small>
    <div class="form-group">
                                <label for="volid">Amount</label>
                                <input type="number" class="form-control" name="Amt" id="volid"
                                    placeholder="Enter the total cost" required>
                                <div class="invalid-feedback">Please provide a valid value.</div>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
  </fieldset>
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
<!-- <input type="button" value="SUBMIT" class="btn btn-primary" onclick="al()" title="Add Evens!!"> -->
                            <button type="submit" value="SUBMIT" class="btn btn-primary" >Add Transactions !!</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                        </form>


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
    <script>
    function al(){
        alert("Please Check The CheckBox!!");}</script>
</body>