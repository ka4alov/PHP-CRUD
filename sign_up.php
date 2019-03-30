<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="scripts/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="scripts/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="scripts/css/style.css" rel="stylesheet">
</head>
<body>
<?php require_once'procced.php'; ?>
<!-- Material form register -->
<div class="row justify-content-center">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form action="procced.php" method="post" class="text-center" style="color: #757575;">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" name="FirstName" class="form-control" placeholder="FirstName" required>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" name="LastName" class="form-control" placeholder="LastName" required>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" name="Email" class="form-control" placeholder="Email" required>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="Password" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" placeholder="Password" required>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                </small>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="text" name="Phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" placeholder="Phone">
                <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                </small>
            </div>

            <!-- Newsletter -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="save" type="submit">Sign in</button>

            <!-- Social register -->
            <p>or sign up with:</p>

            <a type="button" class="btn-floating btn-fb btn-sm">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a type="button" class="btn-floating btn-tw btn-sm">
                <i class="fab fa-twitter"></i>
            </a>
            <a type="button" class="btn-floating btn-li btn-sm">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a type="button" class="btn-floating btn-git btn-sm">
                <i class="fab fa-github"></i>
            </a>

            <hr>

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>

        </form>
        <!-- Form -->

    </div>

</div>
</div>
<!-- Material form register -->

</body>
</html>