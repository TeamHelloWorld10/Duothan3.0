

$(document).ready(function() {
    fetchMedcine()
});



function fetchMedcine(){
    $("#loadMedcine").load(
        "php/datafetch.php",
        { data: {}, selector: "loadMedcine" },
        function (data) {
             
        });
}


var drug_name=document.getElementById("drug_name");
var manufacturer=document.getElementById("manufacturer");
var supplier=document.getElementById("supplier");

var ndc=document.getElementById("ndc");
var expiration_date=document.getElementById("expiration_date");
var quantity=document.getElementById("quantity");
var unit_price=document.getElementById("unit_price");



$('#medicineSubmit').click(function () {
   
    const cars = [drug_name, manufacturer, supplier,ndc,expiration_date,quantity,unit_price];
    var arr = [];
      
    
    cars.forEach((element) => {
          arr.push(element.value);
        
      });


      $.ajax({  
        async:false,
        type:"POST",  
        url:"php/datafetch.php",  
        data:{ data:arr, selector: "addMedcine" },
        success:function(Data){  
            window.location.href ="medicine.php";
            } 
     }); 
});



$('#medicineUpdate').click(function () {

    var idPham=document.getElementById("idPham");
    
   
    const cars = [drug_name, manufacturer, supplier,ndc,expiration_date,quantity,unit_price];
    var arr = [];
      
    
    cars.forEach((element) => {
          arr.push(element.value);
        
      });
    arr.push(idPham.value);


      $.ajax({  
        async:false,
        type:"POST",  
        url:"php/datafetch.php",  
        data:{ data:arr, selector: "medicineUpdate" },
        success:function(Data){  
            // window.location.href ="medicine.php";
            alert("ok");
            } 
     }); 
});



