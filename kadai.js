// alert(1);



$("#image2").fadeOut(1000);
$("#image2").fadeIn(5000);

$("#image4").fadeOut(4000);
$("#image4").fadeIn(6000);

$("#image1").fadeOut(4000);
$("#image1").fadeIn(6000);

$("#ln").on("click", function(){
  $("#ln").append("****","error");
  $("#ln").css("color", "blue");
  $("#ln").css("background-color", "red");    
    });