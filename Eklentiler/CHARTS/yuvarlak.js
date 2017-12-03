 // YUVARLAK CHART START
              var kutucuk = [
	{ sales:"20", month:"Ocak", color: "#ee3639" },
	{ sales:"30", month:"Şubat", color: "#ee9e36" },
	{ sales:"50", month:"Mart", color: "#eeea36" },
	{ sales:"40", month:"Nisan", color: "#a9ee36" },
	{ sales:"70", month:"Mayıs", color: "#36d3ee" },
	{ sales:"80", month:"Haziran", color: "#367fee" },
	{ sales:"60", month:"Temmuz", color: "#9b36ee" },
        { sales:"20", month:"Ağustos", color: "#715622" },
	{ sales:"30", month:"Eylül", color: "#363636" },
	{ sales:"50", month:"Ekim", color: "#62597E" },
	{ sales:"40", month:"Kasım", color: "#FDFDFD" },
	{ sales:"70", month:"Aralık", color: "#B87B7B" }
];
		var myPieChart;
		function yuvarlakCHART() {
			myPieChart = new dhtmlXChart({
				view:"pie",
				container:"chartbox",
				value:"#sales#",
				labelOffset:-5,
				label:function(obj){
					var sum = myPieChart.sum("#sales#");
                                        var text = Math.round(parseFloat(obj.sales)/sum*100)+"%";
                                       
					return "<div class='label' style=color:black;'border:1px solid "+obj.color+"'>"+text+"</div>";
				},
				color:"#color#",
				legend:{
					width: 75,
					align:"right",
					valign:"middle",
					template:"#month#"
				}
			});
			myPieChart.parse(kutucuk,"json");
		};
                //YUVARLAK CHART END
  