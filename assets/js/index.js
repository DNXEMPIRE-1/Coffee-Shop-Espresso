var totalamount=135;


function increasePrice(p,id){
document.getElementById(id).value++;
totalamount+=p;

document.getElementById("total").innerHTML=totalamount;

};
function decreasePrice(p,id){

  if(document.getElementById(id).value>1)
{document.getElementById(id).value--;
totalamount-=p;}
if(totalamount<=0)
totalamount=0;

document.getElementById("total").innerHTML=totalamount;
}
