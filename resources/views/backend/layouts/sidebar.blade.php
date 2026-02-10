<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin Panel</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        
        @if (Auth::user()->can('roles and permissions menu.access'))
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-category'></i>
                    </div>
                    <div class="menu-title">Roles & Permissions</div>
                </a>
                <ul>
                    @if(Auth::user()->can('user group access'))
                        <li> <a href="{{route('users.index')}}"><i class="bx bx-right-arrow-alt"></i>Users</a></li>
                    @endif
                    @if(Auth::user()->can('role group access'))
                        <li> <a href="{{route('roles.index')}}"><i class="bx bx-right-arrow-alt"></i>Roles</a></li>
                    @endif
                    @can('permission group access')
                        <li> <a href="{{route('permissions.index')}}"><i class="bx bx-right-arrow-alt"></i>Permissions</a></li>
                    @endcan
                    @can('permission category.access')
                        <li> <a href="{{route('permission-group.index')}}"><i class="bx bx-right-arrow-alt"></i>Permission Groups</a></li>
                    @endcan
                </ul>
            </li>
        @endif

    </ul>
</div>