
var userid=0;
<?php
session_start();
$x=0;
if (isset($_SESSION['login'])) 
$x=$_SESSION['login'];

?>
var userid=<?php echo $x; ?>;
console.log(userid);

var user={};
// Check browser support
if (localStorage.getItem("user") != null) {

var obj=localStorage.getItem("user");
user=JSON.parse(obj);

}

if(!(user.hasOwnProperty(userid)))
{
  if((user.hasOwnProperty(0)))
  {user[userid]=user[0];
   delete user[0];
   localStorage.setItem("user",JSON.stringify(user));
  }
  else	
  user[userid]=[];
}


function addtolocal(nid)
{
  if(user[userid].indexOf(nid)==-1)
  {
    var i;
    var n=user[userid].length;
    var key=nid;
    for (i = n - 1; (i >= 0 && user[userid][i] > key); i--)
        user[userid][i + 1] = user[userid][i];

    user[userid][i + 1] = key;




    }
    
    
    localStorage.setItem("user",JSON.stringify(user));
    

  


  
  console.log(user);
  
  

}

function deletetolocal(nid)
{
  if(user[userid].indexOf(nid)!=-1)
  {
    var index = user[userid].indexOf(nid);
    


    var i;
    var n=user[userid].length;
    for (i = index; i < n - 1; i++)
            user[userid][i] = user[userid][i + 1];
            user[userid].pop();



    
    
    localStorage.setItem("user",JSON.stringify(user));
    

  }


  
  console.log(user);

  

}