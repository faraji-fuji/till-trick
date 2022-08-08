<?php
$data = [5, 10, 5, 2, 20, 30];
?>

<div>
    <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const labels = [
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
        'july'
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Sales',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [
                <?= $data[0] ?>,
                <?= $data[1] ?>,
                <?= $data[2] ?>,
                <?= $data[3] ?>,
                <?= $data[4] ?>,
                <?= $data[5] ?>,

            ],
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>