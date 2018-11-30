<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KenMarketer - MANAGEMENT</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @include('_includes.nav.main')

    @include('_includes.nav.manage')

    <div class="management-area" id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
    @section('scripts')
      <script>
        var app = new Vue({
          el: '#app',
          data: {
            permissionType: 'crud',
            resource: '',
            crudSelected: ['create', 'read', 'update', 'delete']
          },
          methods: {
            crudName: function(item) {
              return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
            },
            crudSlug: function(item) {
              return item.toLowerCase() + "-" + app.resource.toLowerCase();
            },
            crudDescription: function(item) {
              return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
            }
          }
        });
      </script>
    @endsection
</body>
</html>
