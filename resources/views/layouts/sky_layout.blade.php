<!DOCTYPE html>
<html>
<head>
		<title>Wiwitan Baru</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link href="{{ asset('template/css/demo.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/css/sky-forms.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/css/sky-forms-blue.css') }}" rel="stylesheet" type="text/css" />
        <link rel="icon" href="{{ asset('template/main/favicon.ico') }}" type="image/png">
        <link rel="shortcut icon" href="{{ asset('template/main/favicon.ico') }}" type="img/x-icon">
        @stack('library_css')
        @stack('page_css')
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->

		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-212326876-1"></script>
		<script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-212326876-1');
        </script>
	</head>
	<body class="bg-japan">
		<div class="body">
            @yield('content')
		</div>
	</body>
    @stack('library_js')
    @stack('page_js')
</html>