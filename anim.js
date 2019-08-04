$(document).ready(setInterval(function(){

    var title = $(".lang");
     {
    
      title.css("opacity", "1");
      
      
        title.animate({opacity: 0}, 600);
        title.animate({opacity: 1}, 600);   
      

    }
   
  }),1000);

  $(document).ready(function(){
  
      
      $(".tp").hide();
      $(".tp").show(2000); 
});
      
   