@include('templates.header')
<div class="container-scroller">
    {{-- menu --}}
    @include('templates.menu')
    {{-- menu --}}
    <div class="container-fluid page-body-wrapper">
        {{-- nav --}}
        @include('templates.nav')
        {{-- nav --}}
        {{-- body --}}
        <div class="main-panel">
            <div class="content-wrapper">

                @yield('content')
                
            </div>
            <!-- content-wrapper ends -->
            {{-- footer --}}
            @include('templates.copyright')
            {{-- footer --}}
        </div>
          <!-- main-panel ends -->
        {{-- body --}}
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@include('templates.footer')