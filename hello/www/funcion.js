function myfunction() 
{

var formData = {nomb:"Andres",apll:"Dome"};
$.ajax({
    url : "http://programacion0991.comli.com/recibir.php",
    type: "POST",
    dataType: 'json',
    data : formData,
    success: function(data, textStatus, jqXHR)
    {
        //data - response from server
             
},
    error: function (jqXHR, textStatus, errorThrown)
    {
        

    }
});}