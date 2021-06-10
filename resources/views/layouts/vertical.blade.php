<!DOCTYPE html>
    <html lang="en">
    <head>
        @include('layouts.shared/title-meta', ['title' => $title])
        @include('layouts.shared/head-css')
    </head>

    <body @yield('body-extra')>
        <div id="wrapper">
            @include('layouts.shared/topbar')

            @include('layouts.shared/left-sidebar')

            <div class="content-page">
                <div id="app" class="content">
                    @yield('content')
                </div>

                @include('layouts.shared/footer')

            </div>

        </div>
        @include('layouts.shared/right-sidebar')
        @include('layouts.shared/footer-script')
    </body>
</html>
