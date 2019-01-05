<!-- .navbar-expand-{sm|md|lg|xl}決定在哪個斷點以上就出現漢堡式選單 -->
<!-- navbar-dark 文字顏色 .bg-dark 背景顏色 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

    <!-- .navbar-toggler 漢堡式選單按鈕 -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- .navbar-toggler-icon 漢堡式選單Icon -->
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- .navbar-brand 左上LOGO位置 -->
    <a class="navbar-brand" href="/">
        <img src="{{ URL::asset('images/shopping-cart.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="h3 mx-1">Store-Go</span>
    </a>

    <!-- .collapse.navbar-collapse 用於外層中斷點群組和隱藏導覽列內容 -->
    <!-- 選單項目&漢堡式折疊選單 -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!-- active表示當前頁面 -->
            <li class="nav-item active">
                <a class="nav-link" href="/">首頁<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/商品資訊_查詢">商品資訊查詢</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/product">特價資訊</a>
            </li>
            <li class="nav-item">
            @if(\Illuminate\Support\Facades\Auth::check())

                @else

                @endif


            </li>
            @if(!\Illuminate\Support\Facades\Auth::check())
             <li class="nav-item">
                 <a class="nav-link" href="{{ url('/auth/login') }}">登入</a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('auth/register') }}">註冊</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ '/member' }}">會員資訊</a>
            </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">購物籃</a>
                    <!-- .dropdown-menu 下拉選單內容 -->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/qrcode/reader') }}">綁定購物籃</a>
                        <a class="dropdown-item" href="{{ url('/buggy') }}">購物籃</a>
                    </div>
                </li>



            <!-- .dropdown Navbar選項使用下拉式選單 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">問題回報</a>
                <!-- .dropdown-menu 下拉選單內容 -->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/feedback') }}">意見回饋</a>
                    <a class="dropdown-item" href="{{ url('emergency') }}">及時回報</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('auth/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('登出') }}
                </a>

                <form id="logout-form" action="{{ url('auth/logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search
            </button>
        </form>
    </div>

</nav>


