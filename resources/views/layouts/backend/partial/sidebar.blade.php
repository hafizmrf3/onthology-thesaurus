<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
<!--        <img src="{{ asset('assets/backend/images/profiles/'.Auth::user()->image) }}" width="48" height="48" alt="User" /> -->
        <img src="{{ asset('assets/backend/images/hafiz.jpg') }}" width="48" height="48" alt="User" /> 
<!--     {{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}     {{ url('storage/public/profile/'.Auth::user()->image) }} -->
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.settings') : route('author.settings')}}"><i class="material-icons">settings</i>Settings</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>    
                    
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            @if(Request::is('admin*'))
                <li class="{{  Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!--
                <li class="{{  Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">label</i>
                        <span>Tag</span>
                    </a>
                </li>
                -->
                <li class="{{  Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Category</span>
                    </a>
                </li>
                
<!--                              
                <li class="{{  Request::is('admin/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Posts</span>
                    </a>
                </li>
                <li class="{{  Request::is('admin/pending/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.pending') }}">
                        <i class="material-icons">library_books</i>
                        <span>Pending Posts</span>
                    </a>
                </li>
-->



        

                <li class="{{  Request::is('admin/thesaurus*') ? 'active' : '' }}">
                    <a href="{{ route('admin.thesaurus.index') }}">
                        <i class="material-icons">import_contacts</i>
                        <span>Thesaurus</span>
                    </a>
                </li>
                <li class="{{  Request::is('admin/hierarchy*') ? 'active' : '' }}">
                    <a href="{{ route('admin.hierarchy.index') }}">
                        <i class="material-icons">device_hub</i>
                        <span>Hierarchy</span>
                    </a>
                </li>
                <li class="{{  Request::is('admin/import*') ? 'active' : '' }}">
                    <a href="{{ route('admin.import.index') }}">
                        <i class="material-icons">archive</i>
                        <span>Import File</span>
                    </a>
                </li>

                

            <!--    <li class="{{  Request::is('admin/subscriber') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber.index') }}">
                        <i class="material-icons">subscriptions</i>
                        <span>Subscribers</span>
                    </a>
                </li>
            -->   
                <li class="header">Settings</li>
                <li class="{{  Request::is('admin/settings*') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Log Out</span>
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>    
                    
                </li>
            @endif

            @if(Request::is('author*'))
                <li class="{{  Request::is('author/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
               



                <li class="{{  Request::is('author/thesaurus*') ? 'active' : '' }}">
                    <a href="{{ route('author.thesaurus.index') }}">
                        <i class="material-icons">import_contacts</i>
                        <span>Thesaurus</span>
                    </a>
                </li>


                <li class="{{  Request::is('author/hierarchy*') ? 'active' : '' }}">
                    <a href="{{ route('author.hierarchy.index') }}">
                        <i class="material-icons">device_hub</i>
                        <span>Hierarchy</span>
                    </a>
                </li>


                <li class="header">System</li>
                <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Log Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>    
                    
                </li>
            @endif




           

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2018 - 2019 
            <br>
            <a href="javascript:void(0);">RIN Team (Gunadarma University - LIPI)</a>
        </div>
        <div class="version">
            <b>Version: </b> 3.0.2
        </div>
    </div>
    <!-- #Footer -->
</aside>