<aside>
            <div class="avatar_box d-flex flex-column align-items-center pt-4">
                <img src="{{asset('adminpanel/images/default.png')}}">
                <p class="mt-4">سارا بهرامی</p>
            </div>
            <hr class="m-0">
            <nav>
                <ul class="main_menu">
                    <li>
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fas fa-home"></i>
                            <span>خانه</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>دسته بندی ها</span>
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('admin.category.create')}}">دسته بندی جدید</a>
                            </li>
                            <li>
                                <a href="{{route('admin.category')}}">لیست دسته بندی ها</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>نوشته ها</span>
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">نوشته جدید</a>
                            </li>
                            <li>
                                <a href="#">همه نوشته ها</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span>کاربران</span>
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#">کاربر جدید</a>
                            </li>
                            <li>
                                <a href="#">حذف کاربر</a>
                            </li>
                            <li>
                                <a href="#">لیست کاربران</a>
                            </li>
                        </ul>
                    </li>
 
                </ul>
            </nav>
        </aside>