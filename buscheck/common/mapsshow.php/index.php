<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title></title>
  <script type="text/javascript" src="jquery-1.7.2.js"></script>
  <style type="text/css">

  	body{
  		
  		/*background: url('http://202.119.236.249/buscheck/images/D1.jpg') no-repeat;*/
  		/*background: 'http://202.119.236.249/buscheck/images/D1.jpg';*/
  	}

  	#pic{

  		margin:0 auto 0 auto;
  	}

  </style>
	<script type="text/javascript">
	// document.body.
	 var a=window.screen.height;

	var b=window.screen.width;
	jQuery(document).ready(function($) {
		// alert(a+"ssdsfsdf"+b);
		$("body").css({

			width: b,
			height: a

		})

		$("#pic").css({

			width:b,
			height:a
			
		})

		$("#pic img").css({

			width:b,
			height:a
			
		})
	});

	</script>	
</head>
<body>
  <div id="pic">
  	<img src="http://202.119.236.249/buscheck/images/13.2.jpg" width="700" height="1200">
    
  </div>
</body>
</html>