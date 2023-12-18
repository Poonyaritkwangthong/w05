<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Category Chart</title>
</head>
<body>
    <h1 class='text-center text-5xl '>Product Type </h1>
    <center>
    <div style="width: 50%; height: 50%;">
    <canvas id="myChart" height="200px"></canvas>    
    </div></center>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labels =  {{ Js::from($labels) }};
    var datas =  {{ Js::from($data) }};
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(242, 149, 249)',
            borderColor: 'rgb(95, 243, 118)',
            data: datas,
        }]
    };
  
    const config = {
        type: 'bar',
        data: data,
        options: {}
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
  
</script>
</html>

