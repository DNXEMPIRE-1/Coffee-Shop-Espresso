
 xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var date_data = this.responseText;
    console.log(typeof(date_data));
    date_data=JSON.parse(date_data);
    date_chart(date_data);
  }
};
xmlhttp.open("GET", "get_date.php", true);
xmlhttp.send();

function date_chart(date_data) {

var options = {
  chart: {
    height: 380,
    width: "100%",
    type: "area",
    animations: {
      initialAnimation: {
        enabled: false
      }
    }
  },
  series: [
    {
      name: "Series 1",
      data:date_data,
  }],
  xaxis: {
    type: "datetime"
  }
};

var chart = new ApexCharts(document.querySelector("#apex1"), options);
chart.render();
}


 xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var time_data = this.responseText;
    time_data=JSON.parse(time_data);
    time_chart(time_data);
  }
};
xmlhttp.open("GET", "get_time.php", true);
xmlhttp.send();

function time_chart(time_data) {

var options = {
  chart: {
    height: 380,
    width: "100%",
    type: "area",
    animations: {
      initialAnimation: {
        enabled: false
      }
    }
  },
  series: [
    {
      name: "Series 1",
      data:time_data}
  ],
  xaxis: {
    labels: {
      datetimeFormatter: {
         hour: 'HH:mm',
      }
    }
  }
};

var chart = new ApexCharts(document.querySelector("#apex2"), options);

chart.render();
}
