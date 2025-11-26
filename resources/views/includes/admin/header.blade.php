<header>
    @php date_default_timezone_set('Asia/Kolkata'); @endphp
    <div class="left_header">
        <button type="button" class="sidebar-control">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <p><span>{{ date('h:i a | l, j F Y') }}</span></p>
    </div>
    <div class="right_header">
        <div class="dropdown">
            <button class="dropdown_btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ url('assets/admin/images/side-menu-assets/admin-logo-2.jpg') }}" alt="User Image"
                    class="profile_img" />
                <img src="{{ version_url('assets/admin/images/dashboard-header-assets/arrow-icon.png') }}"
                    alt="Arrow" class="arrow_img" />
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><img
                            {{-- src="{{ version_url('admin/images/ic-log-out.svg') }}" alt="Arrow" class="arrow_img" --}} />
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
