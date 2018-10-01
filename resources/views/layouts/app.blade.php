<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Gallery</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('inc.topbar')
  <main class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          @include('inc.messages')
          @yield('content')
        </div>
      </div>
    </div>
  </main>
</body>
</html>
