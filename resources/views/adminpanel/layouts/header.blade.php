<header class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="right_side show d-flex align-items-center justify-content-between justify-content-md-around">
            <img id="logo" src="{{asset('adminpanel/images/logo.png')}}">
            <a href="#" id="sidebar_toggle"><i class="fas fa-bars"></i></a>
        </div>
        <div class="left_side d-flex align-items-center h-100 w-100 justify-content-between">
            <form action="#" class="d-flex pe-3 flex-row-reverse">
                <section class="search_input d-flex d-none pe-3">
                    <input type="text">
                    <a href="#" class="close"><i class="fas fa-times"></i></a>
                </section>
                <button id="search_btn"><i class="fas fa-search"></i></button>
            </form>
            <nav>
                <ul class="m-0">
                    <li>
                        <a href="#" class="align-items-center d-flex">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                <i class="far fa-id-badge"></i>
                                پروفایل
                                 </a>
                        </li>
                            <li><a href="#">
                                <i class="fas fa-key"></i>
                                تغییر کلمه عبور
                            </a></li>
                            <li><a href="#">
                                <i class="fas fa-sign-out-alt"></i>
                                خروج
                            </a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>