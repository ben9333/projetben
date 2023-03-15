<html>

<head>


<title>Graphe Exercice 1</title>
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
      labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre'],
      datasets: [{
        label: '# Ventes',
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
  