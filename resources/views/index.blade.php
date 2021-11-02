<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Chat</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
<div class="app">
<header>
    <h1>Let's Talk!</h1>
    <input type="text" name="username" id="username" placeholder="Please enter a username..."/>
</header>
<div id="messages"></div>
<form id="message_form">
    <input type="text" name="message" id="message_input" placeholder="Write a message..."/>
    <button type="submit" id="message_send">Send Message</button>
</form>
</div>
</body>
</html>
<script src="./js/app.js"></script>
