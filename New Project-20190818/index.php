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
    
    <!--MAIN-->
    <main>
        <div class='container'>
            <div class='row'>
                <div class='col-md-3'>
                    <p class='lead'>Product Range</p>
                    <p>Computers</p>
                    <div class='list-group'>
                        <a href='#' class='list-group-item'>Category 1</a>
                        <a href='#' class='list-group-item'>Category 2</a>
                        <a href='#' class='list-group-item'>Category 3</a>
                    </div>
                    <p>Cars</p>
                    <div class='list-group'>
                        <a href='#' class='list-group-item'>Category 4</a>
                        <a href='#' class='list-group-item'>Category 5</a>
                        <a href='#' class='list-group-item'>Category 6</a>
                    </div>
                </div>
                <div class='col-md-9'>
                    <div class='row carousel-holder'>
                        <div class='col-md-12'>
                            <div id='carousel' class='carousel slide' data-ride='carousel'>
                                <ol class='carousel-indicators'>
                                    <li data-target='#carousel' data-slide-to='0' class='active'></li>
                                    <li data-target='#carousel' data-slide-to='1'></li>
                                    <li data-target='#carousel' data-slide-to='2'></li>
                                </ol>
                                <div class='carousel-inner'>
                                    <div class='item active'>
                                        <img class='slide-image' src='http://www.fontplay.com/freephotos/imagesn/fpfreefoto-1296.jpg' alt=''>
                                    </div>
                                    <div class='item'>
                                        <img class='slide-image' src='http://www.fontplay.com/freephotos/imagesn/fpfreefoto-1294.jpg' alt=''>
                                    </div>
                                    <div class='item'>
                                        <img class='slide-image' src='http://www.fontplay.com/freephotos/imagesn/fpfreefoto-1299.jpg' alt=''>
                                    </div>
                                </div>
                                <a class='left carousel-control' href='#carousel' role="button" data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
                                <a class='right carousel-control' href='#carousel' role="button" data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='thumbnail'>
                                <img src='https://via.placeholder.com/320x150' alt='thumbnail image'>
                                <div class='caption'>
                                    <h4 class='pull-right'>$165,000</h4>
                                </div>
                                <h4><a href='#'>A Product</a></h4>
                                <p>This is a short description</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 review</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='thumbnail'>
                                <img src='https://via.placeholder.com/320x150' alt='thumbnail image'>
                                <div class='caption'>
                                    <h4 class='pull-right'>$35,000</h4>
                                </div>
                                <h4><a href='#'>A Product</a></h4>
                                <p>This is a short description</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>23 review</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='thumbnail'>
                                <img src='https://via.placeholder.com/320x150' alt='thumbnail image'>
                                <div class='caption'>
                                    <h4 class='pull-right'>$35,000</h4>
                                </div>
                                <h4><a href='#'>A Product</a></h4>
                                <p>This is a short description</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 review</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-4'>
                            <div class='thumbnail'>
                                <img src='https://via.placeholder.com/320x150' alt='thumbnail image'>
                                <div class='caption'>
                                    <h4 class='pull-right'>$165,000</h4>
                                </div>
                                <h4><a href='#'>A Product</a></h4>
                                <p>This is a short description</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 review</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='thumbnail'>
                                <img src='https://via.placeholder.com/320x150' alt='thumbnail image'>
                                <div class='caption'>
                                    <h4 class='pull-right'>$35,000</h4>
                                </div>
                                <h4><a href='#'>A Product</a></h4>
                                <p>This is a short description</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>23 review</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='thumbnail'>
                                <img src='https://via.placeholder.com/320x150' alt='thumbnail image'>
                                <div class='caption'>
                                    <h4 class='pull-right'>$35,000</h4>
                                </div>
                                <h4><a href='#'>A Product</a></h4>
                                <p>This is a short description</p>
                            </div>
                            <div class='ratings'>
                                <p class='pull-right'>15 review</p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    
    <!--FOOTER-->
    <footer class='text-center'>
        <nav class='navbar navbar-inverse navbar-fixed-bottom'>
            <div class='container-fluid'>
                <ul class='nav navbar-nav'>
                    <li class='navbar-text'>Copyright &copy; Shaw Academy</li>
                    <li><a href='#'><i class='fa fa-facebook'></i></a></li>
                    <li><a href='#'><i class='fa fa-google'></i></a></li>
                    <li><a href='#'><i class='fa fa-twitter'></i></a></li>
                </ul>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href='#'>Site Map</a></li>
                    <li><a href='#'>Contact us</a></li>
                    <li><a href='#'>Terms &amp; Conditions</a></li>
                </ul>
            </div>
        </nav>
        
    </footer>
    
    <!--JAVASCRIPT-->
    <script>
            $(document).ready(function() {
                $('.caption>h4>a').on('click', function(event) {
                    event.preventDefault();
                    $this = $(this);
                    
                    getData = $this.html().replace(" ", "+");
                    
                    $.getJson($this.attr("href"), {product:$this.html()}, function(json) {
                        $('#carousel').fadeOut(200, function() {
                            
                        
                            $carouselImages = $('#carousel .slide-image');
                        
                            for(i=0; i<3; i++) {
                                $($carouselImages[i]).attr("src", json[i]);
                            }
                            $('#carousel').fadeIn(200);
                        
                        });    
                    });
                });
            });
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>