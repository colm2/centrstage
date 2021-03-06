<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
    	window.Laravel = {
    		csrfToken: "{{ csrf_token() }}",
    		stripeKey: "{{ config('services.stripe.key') }}"
    	}
    </script>

    @if(env('APP_ENV') == 'production')
        @include('includes.google-analytics')
    @endif

    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link href="/css/vendor.css" rel="stylesheet" type="text/css">
    <link href="/css/site.css" rel="stylesheet" type="text/css">
</head>
<body>

    {{-- @include('partials.banner') --}}
    
    <div id="site">
        @yield('content')
    </div>

    @yield('scripts')
    <script src="{{ mix('/js/site.js') }}" type="text/javascript"></script>

</body>
</html>