<link rel="stylesheet" href=""/>
<?php include "components/sidenav.php"; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class="main">
  
<canvas id="myChart" style='max-width:600px;max: height 400px;'></canvas>
<?php 
$name = array();
$count = array();
$datas = $this->result;
if(!empty($datas)){
  foreach($datas as $data){
    array_push($name,$data[0]);
    array_push($count,$data[1]);
  }
}else{
  array_push($name,"No Tools Available" );
  array_push($count,0);
}
echo '<script>
var xValues = '.json_encode($name).';
var yValues = '.json_encode($count).';
var barColors = [
  "#26A826",
  "#292955",
  "#26A826",
  "#292955",
  "#292955"
];

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
    scales: {
      xAxes: [{
        gridLines:{display: false}
      }]
    },
    title: {
      display: true,
      text: "Inventory Count"
    }
  }
});
</script>
';

?> 

    

</div>
</div>
</body>