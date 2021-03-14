
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public/img/favicons/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS 
    <link href="/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   

    <!-- Custom styles for this template 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">-->
     <link href="{{asset('css/blog.css')}}" rel="stylesheet">
  </head>

  <body>

    @include('layouts.nav')

    <main role="main" class="container">
       <div class="row">
      @yield ('content')
      @include('layouts.sidebar')
      </div><!-- /.row -->

    </main><!-- /.container -->

    @include ('layouts.footer')
  </body>
</html>
