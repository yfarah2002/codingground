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