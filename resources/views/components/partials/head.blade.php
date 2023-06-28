<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">


<meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
<meta property="og:image"content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
<meta property="og:title" content="When Great Minds Don’t Think Alike" />
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<style>
    .dropdown:hover .dropdown-menu {
  display: block;
}
</style>
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
{{-- <liveware:styles/> --}}
<title>{{ config('title', 'EMPEC') }}</title>
<!-- Styles -->
@livewireStyles


