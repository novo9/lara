<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.master.partials.assets')
    </head>

    <body>
        <div id="wrapper" class="toggled">

            <!-- Sidebar -->
            @include('layouts.master.partials.sidebar')

            @include('layouts.master.partials.header')

            <!-- Page Content -->
            @yield('content')



        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        @include('layouts.master.partials.scripts')

    </body>

</html>
