<div class="menu-items-bar">
                <div>

                        <a href="{{ route('admin.home') }}" class="@if(Route::current()->getName() == 'admin.home') active-menu-item @endif">
                           <span class="icon-bar">
                               <img src="{{asset('images/4010/icons/Dashboard-icon.svg')}}" alt="Dashboard Icon" title="Dashboard">
                           </span>
                            <span class="name-bar">Dashboard</span>
                        </a>


                        <a href="{{ route('admin.clients') }}" class="@if(Route::current()->getName() == 'admin.clients') active-menu-item @endif">
                           <span class="icon-bar">
                               <img src="{{asset('images/4010/icons/Clients-icon.svg')}}" alt="Clients Icon" title="Clients">
                           </span>
                            <span class="name-bar">Clients</span>
                        </a>
                    <a href="{{route('admin.invite-client')}}" class="@if(Route::current()->getName() == 'admin.invite-client') active-menu-item @endif">
                       <span class="icon-bar">
                           <img src="{{asset('images/4010/icons/Invite-New-Clients-icon.svg')}}"
                                alt="Invite New Clients-icon Icon"
                                title="Invite-New-Clients-icon">
                       </span>
                        <span class="name-bar">invite new clients</span>
                    </a>
                    <a href="{{route('admin.my-account')}}" class="@if(Route::current()->getName() == 'admin.my-account') active-menu-item @endif">
                       <span class="icon-bar">
                           <img src="{{asset('images/4010/icons/My-Account-icon.svg')}}" alt="My Account Icon" title="My Account">
                       </span>
                        <span class="name-bar">My Account</span>
                    </a>
                    <a href="#">
                       <span class="icon-bar">
                           <img src="{{asset('images/4010/icons/Settings-icon.svg')}}" alt="Settings Icon" title="Settings">
                       </span>
                        <span class="name-bar">Settings</span>
                    </a>
                </div>
                <a href="{{ route('logout') }}" id="logoutItem" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                       <span class="icon-bar">
                           <img src="{{asset('images/4010/icons/Logout-icon.svg')}}" alt="Logout Icon" title="Logout">
                       </span>
                    <span class="name-bar">Logout</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>