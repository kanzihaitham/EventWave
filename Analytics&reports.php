<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="includes/report.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css"/>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Analytics and Reports</title>
</head>
<body>
<?php include "includes/components/headeradmin.php"; ?>


    <main>
        <section class = "s-target-numbers ">
            <div>
                <p class="count-target" id="customers">0</p>
                <h3>Customers</h3>
                <p>Number of customers that interacts with the website</p>
            </div>
            <div class="active-event-c">
                <p class="count-target" id="activeEvents">0</p>
                <h3>Active Events</h3>
                <p>Number of active events</p>
            </div>
            <div>
                <p class="count-target" id="categories">0</p>
                <h3>Categories</h3>
                <p>Number of events categories</p>
            </div>
        </section>
        <section class = "ticket-chart">
            <div class = "charts-btn">
            <button onclick="threeMonth()">3 Months</button>
            <button onclick="sixMonth()">6 Months</button>
            <button onclick="oneYear()">1 Year</button>
            </div>
            
        <canvas id="myChart" height = "80"></canvas>
        </section>
        <section class = "two-charts">
          <div class = "chartt">
            <canvas width = "100%"  id="circleChart" ></canvas>
          </div>
          <div class = "chartt">
            <canvas  width = "100%" id="AChart" ></canvas>
          </div>
        </section>

    </main>
   
    <script>
        $(document).ready(function() {
            // Function to update the counter for each element
            function updateCounter(elementId, startNumber, targetNumber, updateSpeed) {
                let currentNumber = startNumber;
                let targetElement = $('#' + elementId);
    
                // Update the element's text content
                function update() {
                    targetElement.text(currentNumber);
                    if (currentNumber < targetNumber) {
                        currentNumber++;
                        setTimeout(update, updateSpeed); // Update with the specified speed
                    }
                }
    
                update(); // Call the update function
            }
    
            // Call the updateCounter function for each element with respective update speeds
            updateCounter('customers', parseInt($('#customers').text()), 1500, 1);
            updateCounter('activeEvents', parseInt($('#activeEvents').text()), 38, 50);
            updateCounter('categories', parseInt($('#categories').text()), 4, 100);
        });
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/chart.js" ></script>

    <script src="javascript/reports.js" ></script>
</body>
</html>