<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">hapaco<span> Yên Sơn</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse " id="ftco-nav">
        <ul class="navbar-nav ml-3">
              <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Trang chủ</a></li>
          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    Danh mục ô tô
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ asset('car') }}">Thuê xe cưới</a>
                    <a class="dropdown-item" href="{{ asset('car') }}">Thuê xe du lịch</a>
                    <a class="dropdown-item" href="{{ url('/car') }}">Thuê xe tháng</a>

                </li>
                <li class="nav-item"><a href="{{ url('/blog1') }}" class="nav-link">Blog</a></li>
          
        </ul>

      </div>
          
    </div>
 
           <ul class="navbar-nav ms-auto ">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item btn btn-success ">
                              <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item btn btn-outline-success">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">Tài khoản của tôi</a>
                            <a class="dropdown-item" href="{{ route('favorite') }}">Ô tô yêu thích</a>
                            <a class="dropdown-item" href="{{ route('rent') }}">Chuyến đi của tôi</a>
                            <a class="dropdown-item" href="{{ route('password.request') }}">Đổi mật khẩu</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
        </ul>   
          </div>
      </div>
  </nav>
  </nav>
<!-- END nav -->