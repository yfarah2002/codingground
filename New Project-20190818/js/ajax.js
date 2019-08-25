$(document).ready(function(){
    $("body>nav a").on("click", function(event) {
        $target = $(this);
        event.preventDefault();
        $("main").fadeOut(300,function(){
            loadMain($target);
        });
    });
    
    function loadMain($element) {
        $("main").load($element.attr("href")+" main",completeFunction); 
    }
    
    function completeFunction(responseText, textStatus, request) {
        if(textStatus == "error"){
            $("main").text("An error occured during your request: "+ request.status+" "+request.statusText);
        } else{
            $("main").fadeIn(300);
        }
        
    }
});