<aside class="sidebar" id="sidebar">

    <div class="sidebar-header">
        <a href="{{ url('/dashboard') }}" class="sidebar-logo">
            <img src="{{ asset('logo.png') }}" alt="VLE" style="height: 70px;margin-left:60px">
        </a>
    </div>

    <div class="sidebar-body" data-simplebar>

        <nav class="sidebar-nav">

            <ul class="sidebar-menu">
                @if (session('role_id') == 1)
                    @include('layouts.sidebar_AD')
                @elseif (session('role_id') == 2)
                    @include('layouts.sidebar_VLE')
                @elseif (session('role_id') == 3)
                    @include('layouts.sidebar')
                @endif
            </ul>
        </nav>
    </div>

</aside>
