// HTML button element with id "exercice1"
const exercice1Button = document.getElementById("exercice1");

// On click event listener for the button
exercice1Button.addEventListener("click", function() {
  // Generate random values for the chart
  const data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
      label: "Dataset",
      backgroundColor: "rgba(255,99,132,0.2)",
      borderColor: "rgba(255,99,132,1)",
      borderWidth: 1,
      hoverBackgroundColor: "rgba(255,99,132,0.4)",
      hoverBorderColor: "rgba(255,99,132,1)",
      data: [Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random(), Math.random()]
    }]
  };

  // Create a new canvas element
  const canvas = document.createElement("canvas");

  // Append the canvas to the HTML body
  document.body.appendChild(canvas);

  // Create a new Chart object with the canvas and data
  new Chart(canvas, {
    type: 'bar',
    data: data,
    options: {}
  });
});
