<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<?php include "components/sidenav.php"; ?>

<div class="main">
<div class="contents">

    <div style="margin:10px;width:550px;height:300px;border:1px solid #000;background-color:white;">
      <canvas id="myChart" style="width:100%;height:100%"></canvas>
    </div>

<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = ["red", "green","blue","orange","brown"];

    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "World Wine Production 2018"
        }
      }
    });


</script>

    <div style="margin:10px;width:550px;height:300px;border:1px solid #000;background-color:white;">
      <canvas id="myChart1" style="width:100%;height:100%"></canvas>
    </div><br>

<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("myChart1", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "World Wide Wine Production 2018"
        }
      }
    });
</script>

    <div style="margin:10px;width:550px;height:300px;border:1px solid #000;background-color:white;padding-bottom:2em;">
      <canvas id="myChart2" style="width:100%;height:100%"></canvas>
    </div>

<script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];

    new Chart("myChart2", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script>

    <div style="margin:10px;width:550px;height:300px;border:1px solid #000;background-color:white;">
      <canvas id="myChart3" style="width:100%;height:100%"></canvas>
    </div>

<script>
    var xValues = [100,200,300,400,500,600,700,800,900,1000];

    new Chart("myChart3", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
          borderColor: "red",
          fill: false
        }, {
          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          borderColor: "green",
          fill: false
        }, {
          data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
          borderColor: "blue",
          fill: false
        }]
      },
      options: {
        legend: {display: false}
      }
    });
</script>

</div>
</div>
</body>

</html>