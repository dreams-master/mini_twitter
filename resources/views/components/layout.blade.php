<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Twitter</title>
</head>
<body>
    <header><a href="/">Mini Twitter</a></header>
    <main>
        {{ $slot }}
    </main>
    <footer>Dummy Footer: {{date('d.m.Y')}}</footer>
</body>
</html>
