
<!doctype html>
<html lang="en">
    @include('_partials/page/head')
    <body>
        @include('_partials/page/top')
        <div class="container-fluid">
            <div class="row">
                @include('_partials/page/sidebar')

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('content')
                </main>
            </div>
        </div>
        @include('_partials/page/scripts')
    </body>
</html>
