$(document).ready(function(){
    $("#txtHint").keydown(function(){
      $("#txtHint").css("background-color", "yellow");
    });
    $("#txtHint").keyup(function(){
      $("#txtHint").css("background-color", "pink");
    });
  
});
