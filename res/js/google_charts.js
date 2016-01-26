function draw_chart(chart_obj, chart_data){
    var data = new google.visualization.DataTable();
    for (var key in chart_data['columns']){
        (function(key){
            data.addColumn(chart_data['columns'][key], key);
        })(key);
    }
    var rows = [];
    for (var key in chart_data['rows']){
        (function(key){
            rows.push([key, chart_data['rows'][key]]);
        })(key);
    }
    data.addRows(rows);
    
    chart_obj.draw(data, chart_data['options']);
}