<html>
<head>
	<title>Students Data Administration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/104437277/original/fae240c53b89086caebe8c4a8ff5caa435aa68c6/do-projects-on-codeigniter.png" width="250" height="200" loading="lazy">
    <h1>REGISTER</h1>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="post" name="frmRegister" action="<?php echo site_url('auth/store');?>">
                <div class="form-group">
                    <label for="inputUsername">Username :</label>
                    <input type="text" class="form-control" id="inputUsername" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email :</label>
                    <input type="text" class="form-control" id="inputEmail" name="txtEmail" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password :</label>
                    <input type="password" class="form-control" id="inputPassword" minlength="8" required>
                    <small id="passwordHelp" class="form-text text-muted">Minimum 8-Character</small>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputFirstname">First Name :</label>
                            <input type="text" class="form-control" id="inputUsername" name="txtFname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputLastname">Last Name :</label>
                            <input type="text" class="form-control" id="inputUsername" name="txtLname" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address :</label>
                    <textarea class="form-control" id="inputAddress" rows="3" name="txtAddress" required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputMobile">Mobile Number :</label>
                    <input type="text" class="form-control" id="inputMobile" name="txtMobile" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a class="regis" href="/login">Already Have an Account</a>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>

<style>
    body {
        padding : 50px;
    }
    h1 {
        text-align : center;
        padding-bottom : 50px;
        font-weight : bold;
        padding-top: 50px;  
    }
    .regis {
        padding-left : 20px;
    }
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 14%; 
    }
</style>

