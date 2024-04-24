<!DOCTYPE html>
<html>
    <head>
    @include('dashboard.layout.header')
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
            @include('dashboard.layout.Top-bar')
            @include('dashboard.layout.Left-sidebar')

            <main class="py-4">
                @yield('content')
            </main>

            @include('dashboard.layout.Right-sidebar')




            @include('dashboard.layout.script')



        </div>

    </body>
</html>
