
const charts = document.querySelectorAll(".chart");

charts.forEach(function (chart) {
  var ctx = chart.getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Red",  "Yellow", "Green"],
      datasets: [
        {
          label: "Number of Cards",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "rgba(255, 99, 132, 0.2)",
            "rgba(255, 206, 86, 0.2)",
            "rgba(75, 192, 192, 0.2)",
          ],
          borderWidth: 1,
        },
      ],
    },
  
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
});

$(document).ready(function () {
  $("#navDropdown").click(function (){ 
    $("#navdropdownContent").toggleClass("hide");
  });

  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
  
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
    

   
  });
  