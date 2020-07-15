<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Lifestyle Store</title>
        <!--Minified bootstrap css-->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!--Linking jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Linking minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Custom Stylesheet-->
        <link href="Styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="content">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href = "cart.html"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                            <li><a href = "settings.html"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                            <li><a href = ""><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td><td>Total</td><td>Rs </td><td><a href='success.html' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
    </body>
</html>