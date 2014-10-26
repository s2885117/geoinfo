    // Load the Visualization API and the piechart package.
    google.load("visualization", "1", {packages:["corechart"]});
                
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(pieChartDem);
    google.setOnLoadCallback(pieChartCon);
    google.setOnLoadCallback(pieChartOp);
    google.setOnLoadCallback(columnChart);
                
    /*This function is used to create and populate the table for the pie chart
    *then draws the chart using the data.*/
    function pieChartDem() {
                    
        // This creates the data table for the content in the pie chart.
        var data = google.visualization.arrayToDataTable([
            ['Waste Type', 'Tonnes'],
            ['Concrete', 6],
            ['Steel', 4],
            ['Aluminium', 12],
            ['Copper', 3],
            ['Timber', 5],
            ['Glass', 9],
            ['Hazardous', 12],
            ['Non-Hazardous', 3],
            ['Organic', 5],
            ['Conduit', 9],
        ]);
        
        //This sets the chart options.
        var options = {
          width: 800,
          height: 500,
            title: 'Sample Total Demolition Waste Graph',
            is3D: true
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechartDem'));
                        
        var pie_link = document.getElementById('pie-link-dem');
        
        // Wait for the chart to finish drawing before calling the getImageURI() method.
        //This creates a serialized view of the pie chart which can be used to download a png.
        google.visualization.events.addListener(chart, 'ready', function () {
            //chart_div.innerHTML = '<img src="' + chart.getImageURI() + '" />';
            pie_link.innerHTML = '<a href="' + chart.getImageURI() + '" >Download Pie Chart</a>';
            console.log(pie_link.innerHTML);
        });                                
        chart.draw(data, options);
    }
          
function pieChartCon() {
                    
        // This creates the data table for the content in the pie chart.
        var data = google.visualization.arrayToDataTable([
            ['Waste Type', 'Tonnes'],
            ['Concrete', 6],
            ['Steel', 4],
            ['Aluminium', 12],
            ['Copper', 3],
            ['Timber', 5],
            ['Glass', 9],
            ['Hazardous', 12],
            ['Non-Hazardous', 3],
            ['Organic', 5],
            ['Conduit', 9],
        ]);
        
        //This sets the chart options.
        var options = {
          width: 800,
          height: 500,
            title: 'Sample Total Construction Waste Graph',
            is3D: true
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechartCon'));
                        
        var pie_link = document.getElementById('pie-link-con');
        
        // Wait for the chart to finish drawing before calling the getImageURI() method.
        //This creates a serialized view of the pie chart which can be used to download a png.
        google.visualization.events.addListener(chart, 'ready', function () {
            //chart_div.innerHTML = '<img src="' + chart.getImageURI() + '" />';
            pie_link.innerHTML = '<a href="' + chart.getImageURI() + '" >Download Pie Chart</a>';
            console.log(pie_link.innerHTML);
        });                                
        chart.draw(data, options);
    }
    
function columnChart() {

    var data = google.visualization.arrayToDataTable([
        ['Waste', 'Landfilled', 'Salvaged/Recycled'],
        ['Construction Waste', 43, 32],
        ['Demolition Waste', 75, 32]
    ]);

    var options = {
      width: 800,
          height: 500,
        title: 'Sample Waste Graph',
        hAxis: {title: 'Waste Type', titleTextStyle: {color: 'red'}},
        vAxis: {title: 'Tonnes', titleTextStyle: {color: 'red'}}
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
    
    var column_link = document.getElementById('column-link');
        
    // Wait for the chart to finish drawing before calling the getImageURI() method.
    //This creates a serialized view of the pie chart which can be used to download a png.
    google.visualization.events.addListener(chart, 'ready', function () {
        //chart_div.innerHTML = '<img src="' + chart.getImageURI() + '" />';
        column_link.innerHTML = '<a href="' + chart.getImageURI() + '" >Download Column Chart</a>';
        console.log(column_link.innerHTML);
    });   

    chart.draw(data, options);
}

function pieChartOp() {
                    
        // This creates the data table for the content in the pie chart.
        var data = google.visualization.arrayToDataTable([
            ['Waste Type', 'Tonnes'],
            ['Paper/Cardboard', 6],
            ['Aluminium', 4],
            ['Glass', 12],
            ['Hazardous', 3],
            ['Non-Hazardous', 5],
            ['Organic', 9]
        ]);
        
        //This sets the chart options.
        var options = {
          width: 800,
          height: 500,
            title: 'Sample Total Operational Waste Graph',
            is3D: true
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechartOp'));
                        
        var pie_link = document.getElementById('pie-link-op');
        
        // Wait for the chart to finish drawing before calling the getImageURI() method.
        //This creates a serialized view of the pie chart which can be used to download a png.
        google.visualization.events.addListener(chart, 'ready', function () {
            //chart_div.innerHTML = '<img src="' + chart.getImageURI() + '" />';
            pie_link.innerHTML = '<a href="' + chart.getImageURI() + '" >Download Pie Chart</a>';
            console.log(pie_link.innerHTML);
        });                                
        chart.draw(data, options);
    }