<!DOCTYPE html>
<html>
<body>



<form id="myForm" action="cart.php" method="post">
<input type="hidden" name="data" id="data">
 
</form>
<script type="text/javascript" src="assets/js/menuitem.php"></script>
<script>
	
var  abc=JSON.stringify(user[userid]);

  document.getElementById("data").value=abc;
  document.getElementById("myForm").submit();

</script>

</body>
</html>
