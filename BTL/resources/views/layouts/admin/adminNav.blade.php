<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Trang chủ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quản lý danh mục
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('category.create') }}">Thêm danh mục</a></li>
                  <li><a class="dropdown-item" href="{{ route('category.index') }}">Liệt kê danh mục</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quản lý sách
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('book.create') }}">Thêm sách</a></li>
                  <li><a class="dropdown-item" href="{{ route('book.index') }}">Liệt kê sách</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quản lý chương
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('chapter.create') }}">Thêm chương</a></li>
                  <li><a class="dropdown-item" href="{{ route('chapter.index') }}">Liệt kê chương</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Quản lý tài khoản
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('account.create') }}">Thêm tài khoản</a></li>
                  <li><a class="dropdown-item" href="{{ route('account.index') }}">Liệt kê tài khoản</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div>