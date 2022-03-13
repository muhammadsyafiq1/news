<div class="page-sidebar">
    <div class="page-sidebar-inner">
        <div class="page-sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="/admin/assets/images/avatars/avatar1.png">
            </div>
            <div class="sidebar-profile-info">
                    <p>{{Auth::user()->name}}</p>
                    <span>{{Auth::user()->email}}</span>
            </div>
        </div>
        <div class="page-sidebar-menu">
            <div class="sidebar-accordion-menu">
                <ul class="sidebar-menu list-unstyled">
                    <li>
                        <a href="{{route('dashboard')}}" class="waves-effect waves-grey active">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="forms.html" class="waves-effect waves-grey">
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}" class="waves-effect waves-grey">
                            Kategori berita
                        </a>
                    </li>
                    <li>
                        <a href="tables.html" class="waves-effect waves-grey">
                            Informasi Kelurahan
                        </a>
                    </li>
                    <li>
                        <a href="tables.html" class="waves-effect waves-grey">
                            Data kelurahan
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>