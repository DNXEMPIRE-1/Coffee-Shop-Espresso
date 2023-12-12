// This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..
// function deliverfunction() {
//   $("#2order").find('td:last').('div').hide();
// }
// $(document).ready(function(){
//   $("#deliver2").click(function(){
//     $("#dots2").hide();
//     $("#2badge").text("Delivered");
//     $("#2badge").removeClass("badge-warning").addClass("badge-success");
//   });
//   $("#cancel2").click(function(){
//     $("#dots2").hide();
//     $("#2badge").text("Cancelled");
//     $("#2badge").removeClass("badge-warning").addClass("badge-danger");
//   });
// });

document.getElementById("index").classList.remove("active_link");
document.getElementById("order").classList.remove("active_link");
document.getElementById("menu").classList.remove("active_link");
document.getElementById("additem").classList.remove("active_link");
if ( document.URL.includes("index_ad.php") ) {
    document.getElementById("index").classList.add("active_link");
}
else if ( document.URL.includes("order_ad.php") ) {
    document.getElementById("order").classList.add("active_link");
}
else if ( document.URL.includes("menu_ad.php") ) {
    document.getElementById("menu").classList.add("active_link");
}
else if(document.URL.includes("add_menu.php") ){
    document.getElementById("additem").classList.add("active_link");
}

function deliver(value){
  document.getElementById(value).style.display="none";
  var span=value+"span";
  document.getElementById(span).innerHTML='<span class="badge badge-pill badge-success">Delivered</span>';
  send_post(value,'delivered');
}
function cancel(value){
  document.getElementById(value).style.display="none";
  var span=value+"span";
  document.getElementById(span).innerHTML='<span class="badge badge-pill badge-danger">Cancelled</span>';
  send_post(value,'cancel');
}

// Sidebar Toggle Codes;

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById("sidebarIcon");

function toggleSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add("sidebar_responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove("sidebar_responsive");
    sidebarOpen = false;
  }
}
