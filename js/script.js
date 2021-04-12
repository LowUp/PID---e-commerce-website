<!--- Javascript for toggle menu ----->
jQuery(document).ready(function(){
  jQuery(".menu_icon").click(function(){
    if(jQuery("nav ul").css({"max-height": "200px"}))
	{jQuery("nav ul").fadeToggle();}
  });
});
