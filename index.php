<?php
include_once "header.php";
?>


<section class="container-fluid mt-5">
    <div class="row align-items-center gx3">


        <div class="col col-md-5 order-2 order-md-1">
            <div class="card sign-up-card">
                <div class="card-body text-center " id="signupCard">
                    <h4>SIGN UP</h4>
                    <p>Don't have an account yet? Sign up here!</p>
                    <form action="includes/signup.inc.php" method="post">
                        <div class="form-group">
                            <label for="uid">Please enter a unique Username</label>
                            <input class="form-control" type="text" name="uid" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="email">Please enter a valid password only 1 account per email</label>
                            <input class="form-control" type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Please enter a strong password</label>
                            <input class="form-control" type="password" id="passwd1" name="pwd" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="pwdrepeat">Please re-enter your password</label>
                            <input class="form-control" type="password" name="pwdrepeat" placeholder="Repeat Password">
                        </div>

                        <br>
                        <button class="btn btn-outline-light" type="submit" name="submit">SIGN UP</button>
                    </form>
                </div>

            </div>
        </div>


        <div class="col-md-5 order-1 order-md-2 ">
            <div class="card text-center sign-in-card">
                <div class="card-body row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                        <div class="text-center" id="signinCard">
                            <h4>LOGIN</h4>
                            <p>Don't have an account yet? Sign up here!</p>
                            <form action="includes/login.inc.php" method="post">
                                <div><input class="form-control" type="text" name="uid" placeholder="Username"></div><br>
                                <div><input class="form-control" type="password" name="pwd" placeholder="Password"></div>
                                <br>
                                <button class="btn btn-outline-warning" type="submit" name="submit">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="includes/pwstrength-bootstrap.min.js"></script>
<script>
    $("#passwd1").pwstrength({
        ui: {
            showVerdictsInsideProgressBar: true
        },
    });
</script>
</body>

</html>