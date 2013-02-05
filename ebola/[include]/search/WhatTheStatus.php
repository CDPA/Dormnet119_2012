<!DOCTYPE HTML><html><head><title>Hey Dude!</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-16" />
<style type="text/css">
.MSGothic{font-family: "MS Gothic";}
</style>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

<script type="text/javascript">
function add100d()
{
document.getElementById('cc').innerHTML+='+100';
}
</script>

</head>

<body>

<d class="MSGothic">


        <script type="text/javascript">
	$(document).ready(function(){
		$("#Form1").validate({
			debug: false,
			rules: {
				sn: "required",
			},
			messages: {
				sn: "not valid sn.",
			},
			submitHandler: function(form) {
				$.post('WTstatusp.php', $("#Form1").serialize(), function(data) {$('#results').html(data);
				});
			}
		});
	});
	</script>
	
<!--form name="Form1" method="post" action="http://127.0.0.1:777/Dormnet119_2012/hentaisearch/whatthestatus.php"-->
<form name="Form1" id="Form1" method="post" action="">
<input type=text id="name" name="sn">
<input type=submit value="100NT$ per click" onclick='add100d();'><b id='cc'>100</b>
</form>
<div id="results"></div></d>



</body>
</html>