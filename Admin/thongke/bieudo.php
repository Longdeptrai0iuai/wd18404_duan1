<div class="contentDM">
<div class="row">
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh Mục', 'Số lượng sản phẩm'],
<?php
    $tongdm=count($listthongke);
    $i=1;
 foreach ($listthongke as $thongke) {
    extract($thongke);
    if($i==$tongdm) $dauphay=""; else $dauphay=",";
    echo "['".$thongke['tendm']."', ".$thongke['countsp']."],";
    $i+=1;
 }
?>  

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':600, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>
</div>