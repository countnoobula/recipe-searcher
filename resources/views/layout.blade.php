<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Citadel</title>
        <link rel="stylesheet" href="/css/foundation.css" />
        <link rel="stylesheet" href="/css/citadel.css" />
        <link rel="stylesheet" href="/css/loader.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="/js/vendor/modernizr.js"></script>
        <script src="/js/vendor/jquery.js"></script>
        <script src="/js/foundation.min.js"></script>
        <script src="/js/citadel.js"></script>
    </head>
    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1><a href="{{ route('overview') }}">Citadel</a></h1>
                </li>
            </ul>
        </nav>

        <div class="loading" style="display:none">Loading&#8230;</div>

        @yield('content')

        <script>
            $(document).foundation();

            Recipes.API_KEY = "{{ env('BO_API_KEY', '') }}";
        </script>
    </body>
</html>
