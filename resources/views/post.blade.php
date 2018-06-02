
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
        @extend('layouts.app')
        @extend('content')
            <h1>post{{$id}} {{name}} {{password}}</h1>
            @stop
        </div>
    </body>
</html>
