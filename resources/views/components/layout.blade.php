<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>
<body>
    <div id="app">
        <nav>
            <a href="/">Home</a>
            <a href="/product">Product</a>
        </nav>
    </div> <!-- This is where your Vue app mounts -->
    
    <!-- <php echo $slot; ?> -->
    {{ $slot}}

</body>
</html>