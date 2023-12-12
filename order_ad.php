<?php clearstatcache(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
        <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/styles.css?v=2" />
    <title>Admin Dashboard</title>
    <style>
html{
    font-size:0.8750em;
    }
</style>
  </head>
  <body id="body">


        <div class="container-fluid">
  <?php require_once 'nav_admin.php' ?>

      <main style="height:100vh">
        <div class="main__container">


          <div class="main__title">
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>Hello Caffeteria</h1>
              <p>Welcome to your admin dashboard</p>
            </div>
        </div>
     </div>
<section class="content">
<div class="box-body">
              <div class="table-responsive rounded card-table">
                <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div>
                <div class="row" style="background-color:white;padding-top:30px">
                  <div class="col-sm-12" style="padding-bottom:30px;"><table class="table border-no dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending">Order ID</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Date: activate to sort column descending" aria-sort="ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending">Customer Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending">Location</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status Order: activate to sort column ascending">Status Order</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th></tr>
                  </thead>
                  <tbody>
                  

<?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        require_once "config.php";
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM orders";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM orders order by order_id desc LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            //here goes the data
echo '<tr class="hover-primary even" role="row">';
echo '<td class="">#' . $row['order_id'] . '</td>';	
echo '<td class="sorting_1">' . $row['date'] . '</td>';                      
echo '<td>' . $row['name'] . '</td>';                      
echo '<td>' . $row['address'] . '</td>';                      
echo '<td> $' . $row['amount'] . '</td>';                      
if($row['status']=='in_progress') {

echo '<td id="'. $row['order_id'] .'span"> <span class="badge badge-pill badge-warning">In Progress...</span> </td>';                      
echo '<td> <div id="'. $row['order_id'] .'" class="btn-group"> <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a> <div class="dropdown-menu" style="margin: 0px;">';		      
echo '<a class="dropdown-item" onclick="deliver(' . $row['order_id'] . ')">Delivered</a>';                      
echo '<a class="dropdown-item" onclick="cancel(' . $row['order_id'] . ')">Cancel</a>';                      
echo '</div></div></td>';                          
}

else if($row['status']=='delivered') 
echo '<td> <span class="badge badge-pill badge-success">Delivered</span> </td> <td></td>';

else 
echo '<td> <span class="badge badge-pill badge-danger">Cancelled</span> </td> <td></td>';
		      
echo '</tr>';
        }
        mysqli_close($conn);
    ?>
<tr>

<td>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</td>
</tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>






</section>
</main>
  <!-- <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="assets/logo.png" alt="logo" />
            <h1>Cafeteria</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
        </div>
      </div> -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
<script>
function send_post(value,status)
{

$.ajax({
type:"POST",
url:"update_status.php",
data: "order_id=" + value + "&status=" + status,
success:function(html)
{
if(html=='true')
console.log('updated');
else
console.log(html);
}
                });

}

</script>
</body>
</html>
