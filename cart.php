
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <link rel="manifest" href="assets/ico/manifest.json">
    <link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <meta name="msapplication-config" content="assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Espresso Express</title>

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">

    <!-- CSS Global -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
     <link rel="stylesheet" href="assets/css/styles_cart.css">


     <style >
         body{
            background-image: url('assets/img/cart_bg.jpg');
         }
         #btn_ad{
            border-radius: 20px;

         }
          #btn_ads{
            border-radius: 20px;

         }

.alert-danger {
    color: #a94442;
}
     </style>

<script type="text/javascript" src="assets/js/cartitem.php"></script>
<script type="text/javascript" src="assets/js/menuitem.php"></script>


    </head>
<body style="height: 100%;background-position: center; background-repeat: no-repeat; background-size: cover;">

 <!-- / .navbar -->

<?php 
if(isset($_POST["data"]))
echo '';
else
header("location:test.php");

?>
<?php require_once 'nav.php' ?>
     <br><br><br><br>
  <main class="site-main  main-container no-sidebar">
        <div class="container">
           <!--  <div class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin">
                        <a href="">
								<span>
									Home
								</span>
                        </a>
                    </li>
                    <li class="trail-item trail-end active">
							<span>
								Shopping Cart
							</span>
                    </li>
                </ul>
            </div> -->  
            <h3 class="custom_blog_title">
                        Shopping Cart
                    </h3>
            <div class="row main-content-cart main-content" style="background-color: rgb(255,255,255,0.5);backdrop-filter: blur(10px);">
                <div class=" col-sm-9">
                    
                    <div class="page-main-content">
                        <div class="shoppingcart-content">
<br>
       
                            <form  class="cart-form" >
                                <table class="shop_table">
                                    <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"></th>
                                        <th class="product-price"></th>
                                        <th class="product-quantity"></th>
                                        <th class="product-subtotal"></th>
                                    </tr>
                                    </thead>
                             <tbody  id='demo'>
                                        

<?php

require_once "config.php";

$arr=json_decode($_POST["data"]);

   $total=0;
   $a=array();

$sql = "SELECT * from menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

   $i=0;

    while($row = $result->fetch_assoc()) {
	
	if($i>=sizeof($arr))
	break;
	while($row["menu_id"]>$arr[$i])
	$i=$i+1;
	if($row["menu_id"]==$arr[$i])
	{
	$total+=$row["price"];
	array_push($a,$row["menu_id"]);
	echo '<tr class="cart_item" id="div'.$row["menu_id"].'"> <td class="product-remove">';	
	echo '<a class="remove" onclick="remove('. $row["menu_id"] .',' .$row["price"]. ')"></a> </td>';
	echo '<td class="product-thumbnail"><a>';
	echo '<img src="assets/img/menu/'. $row["menu_id"] . '.png" alt="img" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"> </a> </td>';
	echo '<td class="product-name" data-title="Product">';
	echo '<a  class="title" id="dish'. $row["menu_id"] .'">'. $row["name"] .'</a>';
	echo '<span class="attributes-select attributes-size">'. $row["description"] .'</span> </td>';
	echo '</td> <td class="product-quantity" data-title="Quantity"> <div class="quantity"> <div class="control">';
	echo '<a class="btn-number qtyminus quantity-minus"  class="'. $row["menu_id"] .'" onclick="decreasePrice('. $row["price"] .',' .$row["menu_id"]. ')" >-</a>';
	echo '<input type="text" data-step="1" data-min="0" value="1" id="'. $row["menu_id"] .'" title="Qty" class="input-qty qty" size="4">';
	echo '<a   class="btn-number qtyplus quantity-plus" price="'. $row["menu_id"] .'" onclick="increasePrice('. $row["price"] .',' .$row["menu_id"]. ')">+</a>';
	echo '</div> </div> </td> <td class="product-price" data-title="Price">';
	echo '<span class="woocommerce-Price-amount amount"> <span class="woocommerce-Price-currencySymbol"> $</span> <span id="pricy'. $row["menu_id"] .'">'.$row["price"].'</span></span> </td> </tr>';
	$i=$i+1;
	}
	
    }
	$arr=$a;
} else {
    echo "0 results";
}

$conn->close();


?>




					
                                                                      <!--  <tr>
                                        <td>
                                            <label for="w3review">Address</label>
<textarea id="w3review" name="w3review" rows="4" cols="50">
  ADD ADDRESS
  </textarea>
                                        </td>
                                    </tr> -->
                                    </tbody>
                                </table>
                            </form>
                            <!-- <div class="control-cart">
                                <button class="button btn-continue-shopping">
                                    Continue Shopping
                                </button>
                                <button class="button btn-cart-to-checkout">
                                    Checkout
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                 <br>
                   <!--  <hr class="new5"> -->
                     <td class="actions">
                                            <!-- <div class="coupon">
                                                <label class="coupon_code">Coupon Code:</label>
                                                <input type="text" class="input-text" placeholder="Promotion code here">
                                                <a href="#" class="button"></a>
                                            </div> -->
                                            <br>
                                            <div class="rupee">
                                            <div class="order-total">
                                                        <span class="title">
                                                            Total Price:
                                                        </span>
                                                <span class="amount_total" >
                                                            $<span id="amount_total">135</span>
                                                        </span>
                                            </div>
                                            <br>
                                            <div class="check">
                                            <input type="checkbox" id="checkz" class="check" required>I agree to <span style="color:#e93b81"><i>terms & condition</i></span>
                                        </div>
                                        <br>
                                        <label for="message">Your Address</label>
                                        <textarea id="message" name="message" required></textarea>



                                        <br>
<div id="add_err"></div>
                                        <button type="button"  class="btn btn-dark " id="btn_ad" <?php if(sizeof($arr)==0) echo 'disabled'; ?>>checkout<span class="glyphicon glyphicon-lock"></span></button>
                                        <br><br>
                                        <a href="menu.php"><button type="button" class="btn btn-info" id="btn_ads">Continue Shopping</button></a>  
                                        </div>
                                        </td>



                    
                </div>
            </div>
        </div>
<div id="det"></div>
    </main>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

totalamount= <?php echo $total; ?>;

document.getElementById("amount_total").innerHTML=totalamount;

$(document).ready(function(){
  $("#btn_ad").click(function(){
<?php if(isset($_SESSION['name'])) 
{
?>
var addr=document.getElementById('message').value;
var checky=document.getElementById('checkz').checked;
if(checky==""||checky==null)
{
$("#add_err").html('<div class="alert-danger"> <strong>Terms & Condition!</strong> field required </div> <br>');
console.log('dd');
return ;}
else if(addr==null || addr=="")
{
$("#add_err").html('<div class="alert-danger"> <strong>Address!</strong> Address is required </div> <br>');
console.log('dd');
return ;}
else
$("#add_err").html('');


var arry=user[userid];
var i=0;
var desc="";
<?php for($i=0;$i<sizeof($arr);$i+=1) 
{
?>
var idy=<?php echo $arr[$i]; ?>;
var quantity = document.getElementById(idy).value;

if(arry.indexOf(idy)!=-1)
{
var dish_name=document.getElementById("dish"+idy).innerHTML;
var dish_price=document.getElementById("pricy"+idy).innerHTML;
desc+=quantity+"-"+dish_name+"-"+dish_price+",";

$.ajax({
type:"POST",
url:"try.php",
data: "id=" + idy + "&quan=" + quantity,
success:function(html)
{
if(html=='true')
console.log('done');
else
console.log(html);
}
                });
}
<?php } ?>

var name='<?php echo $_SESSION['name']; ?>';
console.log(name);
var totaly=document.getElementById("amount_total").innerHTML;
var id=<?php echo $_SESSION['login']; ?>;



$.ajax({
type:"POST",
url:"add_order.php",
data: "name=" + name + "&description=" + desc+ "&addr=" + addr+ "&amount=" + totaly+ "&id=" + id,
success:function(html)
{
if(html=='true')
{
delete user[userid];
delete user[0];
localStorage.setItem("user",JSON.stringify(user));
console.log('placed');
window.location = "order_his.php";
}
else
console.log('false');
}
                });


<?php } ?>

<?php if(!isset($_SESSION['name'])) 
{
?>
window.location = "login.php";
<?php } ?>

  });
});

</script>

</body>

</html>

