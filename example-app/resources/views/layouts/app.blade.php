<!DOCTYPE html>
<html lang='nl'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - App Name</title>
    </head>
    <body>
        @section('header')
        <header>
            <!-- Dit is de standaard header, indien niets gedefineerd in de view zal deze verschijnen. -->
            <div class="brand">
              <h1>App Name</h1>
            </div>
        </header>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>