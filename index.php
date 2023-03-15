<html>

<head>


<title>Graphe Chart JS</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>



<body>
	<div>
		<canvas id="myChart"></canvas>
    </div>


	<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>
</html>
  