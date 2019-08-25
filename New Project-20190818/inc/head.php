<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel='stylesheet' href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    html {
        overflow-y:scroll;
    }
        body {
            margin-top:70px;
            margin-bottom:70px;
        
        }
    </style>
  </head>
  <body>
    <!--HEADER-->
    <header>
        <div classs='container-fluid'>
            <div class='jumbotron text-center'>
                <h2>Shawpify</h2>
                <p>Offering electronic products</p>
            </div>
        </div>
    </header>
    <nav class='navbar navbar-inverse navbar-fixed-top'>
        <div class='container-fluid'>
            <header class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                    <span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
                    <a class='navbar-brand' href='index.htm'>Shawpify Home</a>
                    
            </header>
            <div class='collapse navbar-collapse' id='myNavbar'>
                <ul class='nav navbar-nav'>
                    <li><a href='#'>Product</a></li>
                    <li><a href='#'>Deals</a></li>
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href='#'><span class='glyphicon glyphicon-user'></span>Sign in</a></li>
                    <li><a href='#'><span class='glyphicon glyphicon-shopping-cart'></span>Cart</a></li>
                    <li>
                        <form class='navbar-form' action='#' method='post'>
                            <input type='text' class='form-control' placeholder='Search for a Product'>
                            <button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-search'></span></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>