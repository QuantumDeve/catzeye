 <!-- Sidebar Content -->

 <!-- <div class="d-flex align-items-center navbar-height">
                            <form action="index.html"
                                  class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                                <input type="text"
                                       class="form-control pl-0"
                                       placeholder="Search">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                            </form>
                        </div> -->

                        <a href="index.html"
                           class="sidebar-brand ">
                            <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                            <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                                <span class="avatar-title rounded bg-primary"><img src="{{ asset('/user/images/logo.png')}}"
                                         class="img-fluid"
                                         alt="logo" /></span>

                            </span>

                            <span>CATZEYE</span>
                        </a>

                        <div class="sidebar-heading">Dashboard</div>
                        <ul class="sidebar-menu">

                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button"
                                   href="{{ route('home') }}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                    <span class="sidebar-menu-text">Home</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{ route('admin.add.employee') }}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                    <span class="sidebar-menu-text">Add Employee</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{ route('admin.add.salary') }}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                                    <span class="sidebar-menu-text">Add Salary</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{ route('admin.expence') }}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                    <span class="sidebar-menu-text">Expence</span>
                                </a>
                            </li>

                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button"
                                   href="{{ route('admin.event') }}">
                                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                    <span class="sidebar-menu-text">Events</span>
                                </a>
                            </li>
                            
                           
                       

                        
                        

                        <!-- // END Sidebar Content -->