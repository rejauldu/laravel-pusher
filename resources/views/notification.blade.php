<!doctype html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app"></div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script>
	Echo.channel('all-user')
    .listen('NotificationEvent', (e) => {
        console.log(e.message);
    });
</script>
</body>

</html>