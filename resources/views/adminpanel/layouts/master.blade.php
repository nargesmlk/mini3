<!doctype html>
<html lang="en">
  <head>
    @include('adminpanel.layouts.head-tags')
    @yield('head-tag')
  </head>
  <body>
    @include('adminpanel.layouts.header')  

    <div class="main_container d-flex">

    @include('adminpanel.layouts.sidebar')

        <div class="main_content pt-3 pb-3">
            @yield('content')
        </div>

    </div>
    @include('adminpanel.layouts.scripts')
    @yield('script')
  </body>
</html>