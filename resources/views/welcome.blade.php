<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">Product Store</div>
        <div class="links">
          <a href="{{ config('app.url')}}/products/create">Create Product</a>
          <a href="{{ config('app.url')}}/products">View Products</a>
        </div>
      </div>
    </div>
    </body>
</html>
