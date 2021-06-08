<?php
$data = [
        'labels' => ['甘み', 'うまみ', '苦味', '酸味', '塩味'],
        'datasets' => [
            [
                'label' => 'レーダーチャートサンプル',
                'data' => [20, 10, 4, 2],
                'backgroundColor' =>  'rgba(255, 99, 132, 0.2)',
                'pointBackgroundColor' => 'rgb(255, 99, 132)',
                'pointBorderColor' => '#fff',
                'pointHoverBackgroundColor' => '#fff',
                'pointHoverBorderColor' => 'rgb(255, 99, 132)'
            ],
        ]
       
];
?>

<canvas id="myChart" width="300" height="300"></canvas>
<script>
    var ctx = document.getElementById("myChart");
    var myRadarChart = new Chart(ctx, {
        type: 'radar',
        data: <?php echo json_encode($data); ?>,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            }
        }
    });
</script>
