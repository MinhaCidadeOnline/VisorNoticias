<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} - {{ $data['title'] }}</title>
        <meta name="description" content="{{ $data['subtitle'] }}"/>
        <meta name="robots" content="index, follow"/>

        <link rel="base" href="{{ config('app.url') }}"/>
        <link rel="canonical" href="{{ url($data['name']) }}"/>

        <meta itemprop="name" content="{{ config('app.name') }} - {{ $data['title'] }}"/>
        <meta itemprop="description" content="{{ ($data['subtitle'] ? $data['subtitle'] : $data['body']) }}"/>
        <meta itemprop="image" content="{{ ($data['image'] ? asset($data['image']) : asset('images/default.png'))  }}"/>
        <meta itemprop="url" content="{{ url($data['name']) }}"/>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{ config('app.name') }} - {{ $data['title'] }}" />
        <meta property="og:description" content="{{ ($data['subtitle'] ? $data['subtitle'] : $data['body']) }}" />
        <meta property="og:image" content="{{ ($data['image'] ? asset($data['image']) : asset('images/default.png'))  }}" />
        <meta property="og:url" content="{{ url($data['name']) }}" />
        <meta property="og:site_name" content="{{ config('app.name') }}" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="article:author" content="https://www.facebook.com/visornoticias" />
        <meta property="article:publisher" content="https://www.facebook.com/visornoticias" />
        <meta property="fb:pages" content="visornoticias" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="@robsonvleite" />
        <meta property="twitter:domain" content="{{ config('app.url') }}" />
        <meta property="twitter:title" content="{{ config('app.name') }} - {{ $data['title'] }}" />
        <meta property="twitter:description" content="{{ ($data['subtitle'] ? $data['subtitle'] : $data['body']) }}" />
        <meta property="twitter:image" content="{{ ($data['image'] ? asset($data['image']) : asset('images/default.png'))  }}" />
        <meta property="twitter:url" content="{{ url($data['name']) }}" />           

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/colorbox.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        @yield('theme')

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.colorbox.js') }}"></script>
        <script src="{{ asset('js/smoothscroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/fb.js') }}"></script>
    </body>
</html>