

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Navbar-vmnt.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container-fluid">
        
        <h3 class="text-dark mb-4">New Event</h3>
        <div class="card shadow mb-3">
           
            <div class="card-body">
                <form>
                    <div class="row" style="margin-bottom: 25px;text-align: left;">
                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 col-xxl-2" style="display: inline;text-align: center;margin-bottom: 25px;"><img class="rounded-circle mb-3 mt-4 img-fluid" src="assets/img/dogs/index.png"class="btn btn-primary btn-sm" id="photoBtn" type="button">Change Photo</button></div>
                        <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-xxl-10 align-self-center">
                            <div class="row">
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="email"><strong> Event</strong><br></label><input class="form-control" type="text" id="email" name="Event" required=""></div>
                                </div>
                                <div class="col-md-12 text-start">
                                    <div class="mb-3"><label class="form-label" for="username"><strong> Venue </strong><br></label><input class="form-control" type="text" name="username" required=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-start">
                            <div class="mb-3"><label class="form-label" for="username"><strong> Email</strong><br></label><input class="form-control" type="text" id="password"></div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" name="first_name" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" name="last_name" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="country"><strong>Country</strong></label><input type="text" class="form-select countries order-alpha limit-pop-1000000 presel-MX group-continents group-order-na" id="countryId" name="country" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="state"><strong>State</strong></label><input class="form-select states order-alpha" id="stateId" name="state" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="cityId" name="city" required=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="address"><strong>Plan Selected</strong><br></label><select><option>Basic</option><option>Ultimate</option><option>Premium</option></select></div>
                        </div>
                        <div class="col">
                            <p id="emailErrorMsg" class="text-danger" style="display:none;"></p>
                            <p id="passwordErrorMsg" class="text-danger" style="display:none;"></p>
                        </div>
                        <div class="col-md-12" style="text-align: right;margin-top: 5px;"><button class="btn btn-primary btn-sm" id="submitBtn" type="submit"><a href="../pricing/index.html" ></a>Save Settings</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://geodata.solutions/includes/countrystate.js"></script>
    <script src="assets/js/Navbar-vmnt-1.js"></script>
    <script src="assets/js/Navbar-vmnt-2.js"></script>
    <script src="assets/js/Navbar-vmnt-3.js"></script>
    <script src="assets/js/Navbar-vmnt.js"></script>
</body>

</html>