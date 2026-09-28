<aside class="sidebar" id="sidebar">

    <div class="sidebar-header">
        <a href="{{ url('/dashboard') }}" class="sidebar-logo">
            <img src="{{ asset('logo-1.png') }}" alt="JK" style="height: 75px;">
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
