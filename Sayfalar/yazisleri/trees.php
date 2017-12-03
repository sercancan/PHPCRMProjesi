<!DOCTYPE html>

<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/fonts/font_roboto/roboto.css"/>
	<link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/fonts/font_awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="./Dosyalama-Sistemi/codebase/dhtmlx.css"/>
	<script src="./Dosyalama-Sistemi/codebase/dhtmlx.js"></script>
        <style>
		div.sample_info_here {
			position: relative;
			width: auto;
			margin: 20px;
			font-family: Roboto, Arial, Helvetica;
			font-size: 14px;
			color: #404040;
		}
		div.sample_info_here div.sample_info_title {
			line-height: 18px;
			font-size: 15px;
			color: #3b5e7c;
		}
		div#tree_here {
			position: relative;
			border: 1px solid #dfdfdf;
			box-shadow: 0 1px 3px rgba(0,0,0,0.05), 0 1px 3px rgba(0,0,0,0.09);
			width: 350px;
			height: 400px;
			margin-left: 20px;
			margin-bottom: 20px;
		}
	</style>
        <script>
		var myTreeView;
		function doOnLoad() {
			myTreeView = new dhtmlXTreeView({
				parent: "tree_here",
				iconset: "font_awesome",
				json: "./Dosyalama-Sistemi/common/treeview_font_awesome_custom.json",
				onload: function() {
					// change icon color with script
                                        this.setIconColor("2", "forestgreen");
					this.setIconColor("8", "crimson");
					this.setIconColor("9", "blueviolet");
				}
			});
		}
	</script>
</head>
<body onload="doOnLoad()">
	
	<div id="tree_here"></div>
</body>
</html>
