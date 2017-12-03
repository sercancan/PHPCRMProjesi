   //CUBUK CHART START
   
        var myBarChart;
                     
                var kutum = [
	{ id:1, rakam:20, yil:"semih",  renk: "#ee4339"},
	{ id:2, rakam:55, yil:"sinan",  renk: "#ee9336"},
	{ id:3, rakam:40, yil:"damla",  renk: "#eed236"},
	{ id:4, rakam:78, yil:"çağlar", renk: "#d3ee36"},
	{ id:5, rakam:61, yil:"duygu",  renk: "#a7ee70"},
	{ id:6, rakam:35, yil:"sercan", renk: "#58dccd"},
	{ id:7, rakam:80, yil:"eda",    renk: "#36abee"},
	{ id:8, rakam:50, yil:"dursun", renk: "#476cee"},
	{ id:9, rakam:65, yil:"gokhan", renk: "#a244ea"},
	{ id:10,rakam:59, yil:"hakan",  renk: "#e33fc7"}
        
];

		function cubukCHART() {
			myBarChart =  new dhtmlXChart({
				view:"bar",
				container:"tke",
				value:"#rakam#",
				color:"#renk#",
				radius:2,
				width:50,
				tooltip:{
					template:"#rakam#"
				},
				 yAxis:{
					start:10,
					end:100,
					step:10,
					template:function(value){
						return value%20?"":value
					}
				},
				xAxis:{
					template:"'#yil#"
				}
			});
			myBarChart.parse(kutum,"json");
                       
		};
                //CUBUK CHART END

              
                     
