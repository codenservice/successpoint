$(document).ready(function () { 

    $('#footer').load('footer.html'); 
    $('#header').load('header.html'); 

    $("#btnclsfoot").click(function () { 


        $("#footer").hide(1000); 
        
        $("#btnclsfoot").hide(); 
        
        $("#btnopnfoot").show(); 
        
        }); 
        
        $("#btnopnfoot").click(function () { 
        
        $("#footer").show(1000); 
        
        $("#btnclsfoot").show(); 
        
        $("#btnopnfoot").hide(); 
        
        });
        
  }); 
