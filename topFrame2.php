<!DOCTYPE html>


<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=10">
		<meta http-equiv="x-ua-compatible" content="IE=EmulateIE10" >
	</head>

	<script language=JavaScript>

	  function stopError() {

	  	return true;

	  }

	  window.onerror = stopError;


	</script>

	<body leftmargin="0" topmargin="0" style="width:100%">

		<!-- <script>
			setTimeout(function(){
				if(parent.frames[1].window.location.pathname != undefined)
					var htmlString = parent.frames[1].document.querySelector('html').innerHTML;
					var index = htmlString.indexOf("on line");
					var oldScreen = parent.frames[1].window.location.href;
					if (index != -1){
						parent.frames[1].window.location.href='<? echo $BASE_URL; ?>/Site/exception.php?screen=' + oldScreen;
					}
				}, 100);
			setInterval(function(){
				if(parent.frames[1].window.location.pathname != undefined)
					var htmlString = parent.frames[1].document.querySelector('html').innerHTML;
					var index = htmlString.indexOf("on line");
					var oldScreen = parent.frames[1].window.location.href;
					if (index != -1){
						parent.frames[1].window.location.href='<? echo $BASE_URL; ?>/Site/exception.php?screen=' + oldScreen;
					}
				}, 1000);
		</script> -->

	</body>
</html>
