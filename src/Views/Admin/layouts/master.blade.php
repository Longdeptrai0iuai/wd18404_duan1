    <!DOCTYPE html>
    <html lang="zxx">

    <!-- Mirrored from demo.dashboardpack.com/sales-html/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>@yield('title')</title>
        @include('layouts.partials.css')
    </head>

    <body class="crm_body_bg">
        @include('layouts.partials.nav')
        <section class="main_content dashboard_part large_header_bg">

            @include('layouts.partials.topbar')

            <div class="main_content_iner default_main_contaner_iner">
                <div class="container-fluid p-0 ">

                    @yield('content')
                </div>
            </div>

            
        </section>


        @include('layouts.components.chat')

        <div id="back-top" style="display: none;">
            <a title="Go to Top" href="#">
                <i class="ti-angle-up"></i>
            </a>
        </div>
        @include('layouts.partials.footer')
        @include('layouts.partials.js')
    </body>

    <!-- Mirrored from demo.dashboardpack.com/sales-html/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

    </html>