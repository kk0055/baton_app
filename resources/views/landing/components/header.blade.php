<header id="header" class="first_animate">
    <h1 id="header_logo">
        <a href="/">
            <img class="logo_image pc" src="baton_small_logo.jpg" alt="株式会社BATON" width="146" height="20" />
            <img class="logo_image mobile" src="baton_small_logo.jpg" alt="株式会社BATON" width="100" height="14" />
        </a>
    </h1>

    <a id="drawer_menu_button" href="#"><span></span><span></span><span></span></a>
    <nav id="global_menu"
        class="menu-%e3%83%98%e3%83%83%e3%83%80%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc-container">
        <ul id="menu-%e3%83%98%e3%83%83%e3%83%80%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu ">
            <li id="menu-item-6202"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-6202">
                <a href="{{ route('landing.index') }}">HOME</a>

            </li>
            {{-- <li id="menu-item-5934"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5934">
                <a href="#about_us">ABOUT</a>
            </li> --}}
            {{-- <li id="menu-item-5884"
                class="menu-item menu-item-type-post_type_archive menu-item-object-service  menu-item-5884">
                <a href="#job_details" class="megamenu_button megamenu_type2"
                    data-megamenu="js-megamenu5884">SERVICE</a>
            </li> --}}
            <li id="menu-item-5948"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-5948">
                <a href="{{ route('landing.company') }}">COMPANY</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5934">
                <a  href="{{ route('landing.rent') }}">PROPERTY</a>
                <ul class="sub-menu">
                    <li id="menu-item-5982"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5982"><a
                            href="{{ route('landing.rent') }}">賃貸</a></li>
                    <li id="menu-item-5953"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5953"><a
                            href="{{ route('landing.sale') }}">売買</a></li>
                </ul>
            </li>
            {{-- <li id="menu-item-5562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5562"><a href="https://demo.tcd-theme.com/tcd103/blog/" class="megamenu_button megamenu_type1" data-megamenu="js-megamenu5562">PROPERTY</a></li> --}}
            @auth
                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
                        href="{{ route('admin.property.index') }}">管理画面</a></li>
            @endauth
        </ul>

    </nav>

    {{-- megamenu  --}}
    <div class="megamenu megamenu_b no_category_page" id="js-megamenu5884">

        {{-- <div class="header">
<div class="title_area">
<p class="title">SERVICE</p>
<a class="sub_title arrow_link" href="https://demo.tcd-theme.com/tcd103/service/"><span class="label">わたしたちの事業について</span><span class="arrow_button_small"></span></a>
</div>
</div>


<div class="item category">
<a class="image_link animate_background" href="https://demo.tcd-theme.com/tcd103/service_category/society/">
<div class="image_wrap">
<img class="image" loading="lazy" src="https://demo.tcd-theme.com/tcd103/wp-content/uploads/2023/09/mega-menu1.jpg" width="440" height="170" />
</div>
</a>
<div class="title_area">
<p class="title">SOCIETY</p>
<a class="sub_title arrow_link" href="https://demo.tcd-theme.com/tcd103/service_category/society/"><span class="label">循環型社会事業</span><span class="arrow_button_small"></span></a>
</div>
<div class="post_list">
<a class="arrow_link" href="https://demo.tcd-theme.com/tcd103/service/solar/"><span class="label">宇宙太陽光発電システム</span><span class="arrow_button_small"></span></a>
<a class="arrow_link" href="https://demo.tcd-theme.com/tcd103/service/biogass/"><span class="label">バイオガス発電プラント</span><span class="arrow_button_small"></span></a>
</div>
</div>
<div class="item category">
<a class="image_link animate_background" href="https://demo.tcd-theme.com/tcd103/service_category/energy/">
<div class="image_wrap">
<img class="image" loading="lazy" src="https://demo.tcd-theme.com/tcd103/wp-content/uploads/2023/09/mega-menu2.jpg" width="440" height="170" />
</div>
</a>
<div class="title_area">
<p class="title">ENERGY</p>
<a class="sub_title arrow_link" href="https://demo.tcd-theme.com/tcd103/service_category/energy/"><span class="label">再生可能エネルギー事業</span><span class="arrow_button_small"></span></a>
</div>
<div class="post_list">
<a class="arrow_link" href="https://demo.tcd-theme.com/tcd103/service/wind-power/"><span class="label">還元型風力発電システム</span><span class="arrow_button_small"></span></a>
</div>
</div>
<div class="item category">
<a class="image_link animate_background" href="https://demo.tcd-theme.com/tcd103/service_category/science/">
<div class="image_wrap">
<img class="image" loading="lazy" src="https://demo.tcd-theme.com/tcd103/wp-content/uploads/2023/09/mega-menu3.jpg" width="440" height="170" />
</div>
</a>
<div class="title_area">
<p class="title">SCIENCE</p>
<a class="sub_title arrow_link" href="https://demo.tcd-theme.com/tcd103/service_category/science/"><span class="label">ライフサイエンス事業</span><span class="arrow_button_small"></span></a>
</div>
<div class="post_list">
<a class="arrow_link" href="https://demo.tcd-theme.com/tcd103/service/biotechnology/"><span class="label">持続可能型フードサプライ</span><span class="arrow_button_small"></span></a>
<a class="arrow_link" href="https://demo.tcd-theme.com/tcd103/service/biopharma/"><span class="label">バイオ医療プロジェクト</span><span class="arrow_button_small"></span></a>
</div>
</div>
--}}

    </div>
</header>
