// chart 
const monthsOfYear = [
    'January', 'February', 'March', 'April', 'May', 'June', 
    'July', 'August', 'September', 'October', 'November', 'December'
];
let currentMonth = []



    // Sample data for the chart
    const data = {
        labels: monthsOfYear,
        datasets: [{
            label: 'Tickets sold',
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            data: [3000, 2000, 1500, 2500, 3000, 3000, 2000, 1500, 2500, 3000, 5000 , 4000]
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    min: 0, // Set the minimum value on the y-axis
                    max: 5000, // Set the maximum value on the y-axis
                    ticks: {
                        stepSize: 500 // Optional: Set the step size for the y-axis ticks
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Tickets Sales for the past year',
                    font: {
                        size: 18 // Optional: Set the font size for the title
                    }
                }
            }
        }
    };

    // Create the chart
    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    function threeMonth() {
        currentMonth = monthsOfYear.slice(0, 3);
        myChart.options.plugins.title.text = 'Tickets Sales for the first 3 months';

        myChart.data.labels = currentMonth;
        myChart.update();
    }
    function sixMonth() {
        currentMonth = monthsOfYear.slice(0, 6);
    
        myChart.options.plugins.title.text = 'Tickets Sales for the First 6 months';

        myChart.data.labels = currentMonth;
        myChart.update();
    }
    function oneYear() {
        currentMonth = monthsOfYear.slice(0, 12);
        myChart.options.plugins.title.text = 'Tickets Sales for the past year';

        myChart.data.labels = currentMonth;
        myChart.update();
    }
    // secound cirlce chart 
    const datac = {
        labels: [
          'Festivals',
          'Concerts',
          'Sports',
          'Comedy'
        ],
        datasets: [{
          label: 'First Dataset',
          data: [200, 180, 100, 50],
          backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)',
            'rgb(255, 105, 86)'
          ],
          hoverOffset: 4
        }]
      };
      const configc = {
        type: 'doughnut',
        data: datac,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Events Categories Popularity', 
                    font: {
                        size: 18 
                    }
                }
            }
        }
    };
      var myChartc = new Chart(
        document.getElementById('circleChart'),
        configc
    );

    
    const dataA = {
        labels: [
            "1:00 PM", "3:00 PM", "5:00 PM", "7:00 PM", "9:00 PM", "11:00 PM",
            "1:00 AM", "3:00 AM", "5:00 AM"
        ],
        datasets: [{
            label: 'First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40, 60, 50],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    };
    
const configA = {
    type: 'line',
    data: dataA,
    options: {
        plugins: {
            title: {
                display: true,
                text: "Website's Activity", 
                font: {
                    size: 18 
                }
            }
        }
    }
  };
  var myChartA = new Chart(
    document.getElementById('AChart'),
    configA
);

$(document).ready(function () {
    $(".data-table").each(function (_, table) {
      $(table).DataTable();
    });
    $("#navDropdown").click(function (){ 
      $("#navdropdownContent").toggleClass("hide");
    });
  });
  
  $("#navDropdown").click(function (){ 
    $("#navdropdownContent").toggleClass("hide");
  });