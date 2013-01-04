<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"> 
        	 <title>前置檢查</title>
     	 	 <style type="text/css">
      		 	h2 {color:red;}
       		 </style>
	</head>
	<body>
		<center>
			<h1>前置檢查</h1>
			<h2>如因超流或其他違規行為被鎖網，網推會將不提供報修服務!</h2>
			<hr>
			<h3>你看的到這張圖片嗎？看的到你就不用做以下步驟。</h3>
			<img src="http://epaper.mis.nsysu.edu.tw/v2011/260/image47.jpg" title="連線測試圖片" height="100" width="">
			<br/><br/>
			
			<!--如果使用者看的到該圖片，直接跳過以下步驟-->
			<!--以詳說用CSS隱藏他，晚一點研究-->
			<table>
				<tr>
					<th>問題：</th>
					<th>Y</th>
					<th>N</th>
				</tr>
				<tr>
					<form  method="get">
						<td>將自己的電腦連接同房的網孔後是否能連線: </td>
						<td><input type="radio" name="check1" id="y" /></td>
						<td><input type="radio" name="check1" id="n"/><br/></td>
					</form>
				</tr>
				<tr>
					<form method="get">
						<td>將別人的電腦連接自己的網孔後是否能連線: </td>
						<td><input type="radio" name="check2" id="y"  /></td>
						<td><input type="radio" name="check2" id="n"/><br/></td>
					</form>
				</tr>
			</table>
			<br/><br/><br/>
			<input type="submit" value="送出"  onclick="self.location.href='p3.php'"/>
		</center>
	</body>
</html>
