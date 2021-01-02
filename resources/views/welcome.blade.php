<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Laravel</title>
    </head>
    <body>
        <button class="button-one" onclick="helloworld()">hello world</button>
    </body>
</html>

<script>
    function helloworld() {
        $.ajax({
            url:"/broadcast",
        });
    }
</script>
