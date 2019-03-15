<!DOCTYPE html>
<html>
<head>
	<title>Chạy chương trình jquery</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	<style type="text/css">
		.container{
			height: 600px;
			width: 600px;
			margin: auto;
		}
		.oco{
			width: 56px;
			height: 56px;
			background-color: yellow;
			border: solid 2px black;
			float: left;
			text-align: center;
			font-size: 48px;
		}
	</style>
</head>
<body>
	<div>
		<button class="hide">hide</button>
		<button class="show">show</button>
		<button class="toggle">toggle</button>
	</div>
	<div class="container">
		
	</div>
	
</body>
<script type="text/javascript">
	var dem=0;
	$(document).ready(function(){
		$("button.hide").click(function(){
			$(".container").hide(600);
		});
		$("button.show").click(function(){
			$(".container").show(600);
		});
		$("button.toggle").click(function(){
			$(".container").toggle(600);
		});
		for (var i = 1; i <= 100; i++) {
			$(".container").append("<div class='oco'></div>");
		}
		$(".oco").click(function(){
			if ($(this).html()=="") {
				dem = dem + 1;
				if(dem%2==1)
				{
					$(this).html('O');
				}
				else{
					$(this).html('X');
				}

			}
		});
	});
</script>
</html>