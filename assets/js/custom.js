/**
 * Custom JS
 * Use this file to add your custom scripts
 */
 

 function modalshow(value)
 {
   var orderNumber=document.getElementById("order-number-"+value).innerHTML;
   document.getElementById("modal-number").innerHTML=orderNumber;
   var orderNumber=document.getElementById("amount-"+value).innerHTML;
   document.getElementById("modal-amount").innerHTML=orderNumber;
   var orderNumber=document.getElementById("hidden-data-"+value).innerHTML;
   var res = orderNumber.split(",");
   document.getElementById("kuch").innerHTML="<ul id='modal-items'></ul>"
   for (let i = 0; i < res.length-1; i++)
   {
     var threeValues=res[i].split("-");
     var ul = document.getElementById("modal-items");
     ul.innerHTML+="<li><table><thead><tr><th colspan='2'>"+ threeValues[1] +"</th></tr></thead><tbody><tr><th scope='row'>"+ threeValues[0]+" X ₹"+ threeValues[2] +"</th><td style='padding-left:240px'>₹" + threeValues[0]*threeValues[2] + "</td></tr></tbody></table></li>";
     // var li = document.createElement("li");
     // li.appendChild(document.createTextNode(res[i]));
     // ul.appendChild(li);
   }
   console.log(res);
   res=[];
   var orderNumber=document.getElementById("ordered-"+value).innerHTML;
   document.getElementById("modal-ordered").innerHTML=orderNumber;
   var orderNumber=document.getElementById("status-"+value).innerHTML;
   document.getElementById("modal-status").innerHTML=orderNumber;
}
