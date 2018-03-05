<html>
	<head>
		<title>@yield('title')</title>		
		<link href="{{URL::asset('css/app.css')}}" rel="stylesheet" media="screen,projection">

		<link href="{{URL::asset('_css/main.css')}}" rel="stylesheet" media="screen,projection">
		


	</head>
 	<body>
 		@yield('body')



    <script> type="text/javascript" src="{{URL::asset('js/app.js')}}"</script>


    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>



      <script> type="text/javascript" src="{{URL::asset('_scripts/respond.min.js')}}"</script>
      <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>


 	</body>
</html>






