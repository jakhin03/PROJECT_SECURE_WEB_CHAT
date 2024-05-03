<!DOCTYPE html>
<html>
<head>
	<title>talky</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<style type="text/css">
		*,
		*::before,
		*::after {
		  box-sizing: border-box;
		}
		html,
		body {
		  height: 100%;
		}
		body {
		  font-family: 'Open Sans', sans-serif;
		  font-size: 14px;
		  line-height: 1.3;
		  overflow: hidden;
		}
	</style>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div id="app">
		<chat-layout></chat-layout>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.5/socket.io.js" integrity="sha512-luMnTJZ7oEchNDZAtQhgjomP1eZefnl82ruTH/3Oj/Yu5qYtwL7+dVRccACS/Snp1lFXq188XFipHKYE75IaQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	{{-- <script src="http://localhost:6001/socket.io/socket.io.js"></script> --}}
	<script src="/js/app.js"></script>
</body>
</html>