    // Load the Visualization API and the piechart package.
    google.load("visualization", "1", {packages:["corechart"]});
                
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(pieChart);
    google.setOnLoadCallback(columnChart);
                
    /*This function is used to create and populate the table for the pie chart
    *then draws the chart using the data.*/
    function pieChart() {
                    
        // This creates the data table for the content in the pie chart.
        var data = google.visualization.arrayToDataTable([
            ['Waste Type', 'Tonnes'],
            ['Paper/Cardboard', 6],
            ['Metal', 4],
            ['Glass', 12],
            ['Plastic', 3],
            ['Organic', 5],
            ['Other non-haz', 9]
        ]);
        
        //This sets the chart options.
        var options = {
            title: 'Total Demolition Waste',
            is3D: true
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        
        var pie_link = document.getElementById('pie-link');
        
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
        title: 'Waste',
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