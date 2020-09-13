<html>
<head>
	<title>Students Data Administration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <img src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/104437277/original/fae240c53b89086caebe8c4a8ff5caa435aa68c6/do-projects-on-codeigniter.png" width="250" height="200" loading="lazy">
    <h1>LOGIN</h1>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form>
                <div class="form-group">
                    <label for="inputUsername">Username :</label>
                    <input type="text" class="form-control" id="inputUsername" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password :</label>
                    <input type="password" class="form-control" id="inputPassword" minlength="8" required>
                    <small id="passwordHelp" class="form-text text-muted">Minimum 8-Character</small>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a class="regis" href="/register">Create an Account</a>
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

