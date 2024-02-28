<!DOCTYPE html>
<html lang="en">
<head>
	<title>kalkulator</title>
	<link  href="https//font.googleapis.com/css?family=Inconsolta" rel="stylesheet" >
	<style >
		*{
			font-family: 'Inconslta',monospace;
			color: #555;
		}
		body{
			background-color: #A3aeb3;
		}
		.container{
			width: 320px;
			background-color: #2a2f33;
			margin:120px auto;
		}
		table{
			width: 100%;
			border-color: #Bed4e2;
		}
		td{
			width: 25%;
		}
		button{
			width: 100%;
			height: 70px;
			font-size: 24px;
			background-color: white;
			border-color: white;
		}
		#inputLabel{
			height: 120px;
			font-size: 40px;
			vertical-align: bottom;
			text-align: right;
			background-color: #ececec;
		}
	</style>
</head>
<body>
<div class="container">
	<table border="1" cellspacing="0">
		<tr>
			<td colspan="4" id="inputLabel">0</td>
		</tr>
		<tr>
			<td colspan="2"><button onclick="pushBtn(this);">AC</button></td>
			<td><button onclick="pushBtn(this);">D</button></td>
			<td><button onclick="pushBtn(this);">/</button></td>
		</tr>
		<tr>
			<td><button onclick="pushBtn(this);">7</button></td>
			<td><button onclick="pushBtn(this);">8</button></td>
			<td><button onclick="pushBtn(this);">9</button></td>
			<td><button onclick="pushBtn(this);">*</button></td>
		</tr>
		<tr>
			<td><button onclick="pushBtn(this);">4</button></td>
			<td><button onclick="pushBtn(this);">5</button></td>
			<td><button onclick="pushBtn(this);">6</button></td>
			<td><button onclick="pushBtn(this);">-</button></td>
		</tr>
		<tr>
			<td><button onclick="pushBtn(this);">1</button></td>
			<td><button onclick="pushBtn(this);">2</button></td>
			<td><button onclick="pushBtn(this);">3</button></td>
			<td><button onclick="pushBtn(this);">+</button></td>
		</tr>
		<tr>
			<td colspan="2"><button onclick="pushBtn(this);">0</button></td>
			<td><button onclick="pushBtn(this);">.</button></td>
			<td><button onclick="pushBtn(this);">=</button></td>
		</tr>
	</table>
</div>
<script>
	
	var inputLabel = document.getElementById('inputLabel');

	  function pushBtn(obj){

	  	var pushed = obj.innerHTML;

	  	if (pushed == '='){

	  		//Calculate
	  		inputLabel.innerHTML = eval(inputLabel.innerHTML);

	  	   }else if (pushed == 'AC'){
	  		// ALL Clear
	  		inputLabel.innerHTML = '0';

	  	   }else if (pushed == 'D'){
	  	   	//hapus angka
	  	   	inputLabel.innerHTML = inputLabel.innerHTML.slice(0,-1)||'0';

	  	   } else {
	  	   	  if (inputLabel.innerHTML == '0'){
	  	   	  	inputLabel.innerHTML = pushed;

	  	   	  }else {
	  	   	  	inputLabel.innerHTML += pushed;

	  	   	  }

	  	       }	
	  	     	}
</script>
</body>
</html>