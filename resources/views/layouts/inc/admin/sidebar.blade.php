<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url("/")}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Ana Sayfa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.create') }}">
                <i class="mdi mdi-equal-box menu-icon"></i>
                <span class="menu-title">Kategori Ekle</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="mdi mdi-buffer menu-icon"></i>
                <span class="menu-title">Kategoriler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('brands.index') }}">
                <i class="mdi mdi-trophy-award menu-icon"></i>
                <span class="menu-title">Markalar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/products/create') }}">
                <i class="mdi mdi-clipboard-plus menu-icon"></i>
                <span class="menu-title">Ürün Ekle</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/products') }}">
                <i class="mdi mdi-shopping menu-icon"></i>
                <span class="menu-title">Ürünler</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/sliders') }}">
                <i class="mdi mdi-image-filter menu-icon"></i>
                <span class="menu-title">Sliderlar</span>
            </a>
        </li>
    </ul>
</nav>
