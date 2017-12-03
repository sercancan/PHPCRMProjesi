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
		div#sidebarObj {
			position: relative;
			margin-left: 10px;
			margin-top: 10px;
			width: 600px;
			height: 450px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.05), 0 1px 3px rgba(0,0,0,0.09);
		}
	</style>
	<script>
		var mySidebar;
		var myTree;
		function doOnLoad() {
			mySidebar = new dhtmlXSideBar({
				parent: "sidebarObj",
				icons_path: "Dosyalama-Sistemi/common/icons_material/",
				width: 160,
				json: "Dosyalama-Sistemi/common/sidebar.json",
				onload: function() {
					myTree = mySidebar.cells("recent").attachTree();
					myTree.setImagePath("Dosyalama-Sistemi/skins/web/imgs/dhxtree_web/");
					myTree.load("Dosyalama-Sistemi/common/tree.xml");
				}
			});
		}
	</script>
</head>
<body onload="doOnLoad();">
	<div id="sidebarObj"></div>
</body>
</html>