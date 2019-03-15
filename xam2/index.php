<!DOCTYPE html>
<html>
<head>
	<title>Chạy chương trình jquery</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	<style type="text/css">
		*{

		}
		a{
			text-decoration: none;
			height: 30px;
			width: 30px;
			background-color: #5081BC;
			padding: 10px;			
			border:solid #385E8D;
			color: white;
		}
		input{
			background-color: #5081BC;
			border-color: #385E8D;
			color: white;
			height: 30px;
			font-size: 30px;
		}
		button{
			height: 40px;
			width: 40px;
			background-color: #5081BC;
			border-color: black;
			margin: 10px;
			color: white;
		}

	</style>
</head>
<body>
	<h1>jQuery</h1>
	Số A: <input class="number1" type="number" name="" value="" >
	Phép tính <input class="cal" type="text" name="">
	Số B: <input class="number2" type="number" name="" value="" >
	Kết quả: <input class="kq" type="text" name=""><br><br>
	<button class="calculate">+</button>
	<button class="calculate">-</button>
	<button class="calculate">*</button>
	<button class="calculate">/</button><br>
	<button class="btnnum">1</button>
	<button class="btnnum">2</button>
	<button class="btnnum">3</button>
	<button class="btnnum">4</button>
	<button class="btnnum">5</button><br>
	<button class="btnnum">6</button>
	<button class="btnnum">7</button>
	<button class="btnnum">8</button>
	<button class="btnnum">9</button>
	<button class="btnnum">0</button><br>
	<button class="result">=</button>

	<script type="text/javascript">
		$(document).ready(function(){
			var current = ".number1";

			$(".number1, .number2").click(function(event){
				if($(this).hasClass('number1')){
					current = ".number1";
				}
				else{
					current = ".number2";
				}
			});
			$("button.btnnum").click(function(){
			    var text = $(this).html();
				var value = $(current).val();
		   		$(current).val( value + text);
		  	});
		  	$("button.calculate").click(function(){
		  		var calculator =".cal";
		  		var text = $(this).html();
		  		var value = $(calculator).val();
		  		$(calculator).val(value + text);
		  	});
		  	$("button.result").click(function(){
		  		var a = $("input.number1").val();
		  		var b = $("input.number2").val();
		  		var result = " ";
		  		var operate = $("input.cal").val();
		  		
		  		switch (operate) {
		    		case '+':
		    			result = parseInt(a) +  parseInt(b);
		    			break;
	    			case '-':
	    				result = parseInt(a) -  parseInt(b);
	    				break;
	    			case '*':
	    				result = parseInt(a) *  parseInt(b);
	    				break;
	    			case '/':	
	    				result = parseInt(a) /  parseInt(b);
	    				if (a==0) {
	    					alert('không thể chia cho 0 !');
	    				}		
		    	}
		    	$("input.kq").val(result);
		  	});
		});
		 
	</script>
	
</body>
</html>