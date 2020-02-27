<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(function(){
	tryGoogleChartInit();
});

function tryGoogleChartInit(){
	setTimeout(function(){
		if(YAPI.loadingNum == 0){
			$('*[data-chart="pie"]').each(function(){
				setPieChart(this);
			});
			$('*[data-chart="column"]').each(function(){
				setColumnChart(this);
			});
		}else{
			tryGoogleChartInit();
		}
	},100);
}

function setPieChart(elm){
	var options = {
		backgroundColor: 'transparent',
		legend: 'none',
		slices: {},
		tooltip:{
			textStyle:{fontSize:12}
		},
		pieSliceTextStyle:{color:'#fff',fontSize:20},
	};
	var chartAreaSize = $(elm).data('chart-area-size');
	if(chartAreaSize){
		options['chartArea'] = {width: chartAreaSize, height: chartAreaSize};
	}
	var pieHole = $(elm).data('chart-pie-hole');
	if(pieHole){
		options['pieHole'] = pieHole;
	}
	var pieSliceTextStyleColor = $(elm).data('chart-pie-slice-text-style');
	options['pieSliceTextStyle']['color'] = pieSliceTextStyleColor;

	var table = [['Task', 'Percentage']];
	for(var i=1; i<=5; i++){
		var title = $(elm).data('chart-title'+i);
		var percentage = $(elm).data('chart-percentage'+i);
		if(title !== undefined && percentage !== undefined){
			table.push([title, percentage]);
		}

		var sliceColor = $(elm).data('chart-slice-color'+i);
		if(sliceColor){
			options['slices'][i-1] = {};
			options['slices'][i-1]['color'] = sliceColor;
		}

		if(percentage == 100){
			//100%だったらそれ以降は処理しない
			break;
		}
	}
	var data = google.visualization.arrayToDataTable(table);
	var chart = new google.visualization.PieChart($(elm).get()[0]);
	chart.draw(data, options);
}

function setColumnChart(elm){
	var options = {
		colors:['#c6776d'],
		chartArea:{width:'80%',height:'80%'},
		backgroundColor: 'transparent',
		bar: {groupWidth: "90%"},
		legend: { position: "none" },
		vAxis: {
			format:"##'%'",
			minValue:0
		}
	};

	var table = [["Element", $(elm).data('chart-title'), { role: "style" } ]];
	for(var i=1; i<=10; i++){
		var chartData = $(elm).data('chart-data'+i);
		if(chartData){
			var title = chartData.split(',')[0].replace('"', '').replace('"', '');
			var percentage = parseFloat(chartData.split(',')[1].replace(' ', ''));
			if(title !== undefined && percentage !== undefined){
				table.push([title, percentage, '']);
			}
		}
	}
	var data = google.visualization.arrayToDataTable(table);
	var view = new google.visualization.DataView(data);
	view.setColumns([0, 1, {
		calc: "stringify",
		sourceColumn: 1,
		type: "string",
		role: "annotation"
	}, 2]);
	var chart = new google.visualization.ColumnChart($(elm).get()[0]);
	chart.draw(view, options);
}



</script>