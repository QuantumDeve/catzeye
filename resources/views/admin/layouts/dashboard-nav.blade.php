                  
                     
                    
                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="login.html"
                               class="nav-link"
                               data-toggle="tooltip"
                               data-title="Login"
                               data-placement="bottom"
                               data-boundary="window"><i class="material-icons">lock_open</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"
                               class="btn btn-outline-dark" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                  