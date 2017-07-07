<!DOCTYPE html>
<html>
    <head>
        <title>Assessment</title>
        <meta name=“csrf-token” content=“{{csrf_token()}}” />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        
        <link href="/css/header.css" rel="stylesheet" type="text/css">
        <link href="/css/main.css" rel="stylesheet" type="text/css">
        <link href="/css/footer.css" rel="stylesheet" type="text/css">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        @yield('header')
        
        @yield('content')
        
        @yield('footer')
    </body>
</html>
