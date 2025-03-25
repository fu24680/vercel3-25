<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>翁塍富的簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Cheng Fu Weng";
		}
	</script>



</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg"width="110%"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
				
			</td>
			<td>
				<h1>翁塍富</h1>
                <h2 id="h2text">Cheng-Fu Weng</h2>
			</td>
		</tr>
	</table>

	<table width="70%" border="1">
		<tr>
			<td>

				個人網頁：<a href="https://csim.pu.edu.tw/">https://csim.pu.edu.tw/</a><br>
    			FB：<a href="https://www.facebook.com/">https://www.facebook.com/</a><br>
    			el:<a href="tel:0975010679">0975010679</a><br>
    			E-Mail:<a href="mailto:qwe11222017@gmail.com">qwe11222017@gmail.com</a><br>
			</td>
			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
				<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>
			<td>
				不要去臺灣<br>
				<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<iframe
    				allow="microphone;"
    				width="350"
    				height="430"
    				src="https://console.dialogflow.com/api-client/demo/embedded/d9496fd8-58a3-45b4-8307-7fd9847d18bc">
				</iframe>
			</td>
		</tr>
	</table>

</body>
<?php echo date("Y-m-d") ?>

</html>
