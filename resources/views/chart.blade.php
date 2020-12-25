<?php
 $d = json_decode($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart for the marks</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="C:\Users\HP\node_modules\chart.js\dist\Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha256-nZaxPHA2uAaquixjSDX19TmIlbRNCOrf5HO1oHl5p70=" crossorigin="anonymous"></script>
    </head>
<body>
<div class="container" style="height:300px; width:500px; margin:60px 80px;"><canvas id="chart"></canvas></div>
    <script>
    var CHART = document.getElementById('chart');
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';
        var stuChart = new Chart(CHART, {
            type: 'bar',
            data: {
                labels: ['Mark 1', 'Mark 2', 'Mark 3', 'Mark 4', 'Mark 5', 'Mark 6'],
                datasets: [{
                    data: ['{{$d->m1}}','{{$d->m2}}','{{$d->m3}}','{{$d->m4}}','{{$d->m5}}','{{$d->m6}}'],
                    backgroundColor : ['#CAD2EC','#000000','#CAD2EC','#000000','#CAD2EC','#000000'],    
                    borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'            
                }],
            },
            options: { 
                title:{
                    display: true,
                    text : 'Marks of {{$d->name}}',
                    fontSize : 25,
                },
                legend : {
                    display: false,
                    position: 'right',
                }           
                 },
        });
</script>
</body>
</html>