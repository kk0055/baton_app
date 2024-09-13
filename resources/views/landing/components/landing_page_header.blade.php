
<div class="header_for_pc">
    <div class="header-container">
        <h1 class="header_logo">
            <a href="/">
                <img class="logo_image pc" src="baton_logo240819.png" alt="株式会社BATON" width="146" height="20" />
                {{-- <img class="logo_image mobile" src="baton_logo240819.png" alt="株式会社BATON" width="100" height="14" /> --}}
            </a>
        </h1>
        <div class="contact-info">
            <div class="phone">
                <span>📞</span>
                <a href="tel:0363223877">03-6865-8533</a>
            </div>
            <div class="email">
                <a href="https://docs.google.com/forms/d/1OGoRCunJpDpYy6aYS-DGVoTodgmLvII9Qz4A9ipEYyc/viewform?edit_requested=true" class="email-button">📧 お問合わせ</a>
            </div>
        </div>
    </div>
</div>
<header id="header" >
    <h1 id="header_logo">
        <a href="/">
            {{-- <img class="logo_image pc" src="baton_logo240819.png" alt="株式会社BATON" width="146" height="20" /> --}}
            <img class="logo_image mobile" src="baton_logo240819.png" alt="株式会社BATON" width="100" height="14" />
        </a>
    </h1>
  
    <a id="drawer_menu_button" href="#"><span></span><span></span><span></span></a>
    <nav id="global_menu"
        class="menu-%e3%83%98%e3%83%83%e3%83%80%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc-container">
        <ul id="menu-%e3%83%98%e3%83%83%e3%83%80%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu ">
            <li id="menu-item-6202"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-6202">
                <a href="{{ route('landing.index') }}">トップ</a>

            </li>
            {{-- <li id="menu-item-5934"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5934">
                <a href="#about_us">ABOUT</a>
            </li> --}}
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5934">
                <a href="{{ route('landing.rent') }}">オススメ物件</a>
                <ul class="sub-menu">
                    <li id="menu-item-5982"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5982"><a
                            href="{{ route('landing.rent') }}">賃貸</a></li>
                    <li id="menu-item-5953"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5953"><a
                            href="{{ route('landing.sale') }}">売買</a></li>
                </ul>
            </li>
            {{-- <li id="menu-item-5884"
                class="menu-item menu-item-type-post_type_archive menu-item-object-service  menu-item-5884">
                <a href="#job_details" class="megamenu_button megamenu_type2"
                    data-megamenu="js-megamenu5884">SERVICE</a>
            </li> --}}
            <li id="menu-item-5948"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-5948">
                <a href="{{ route('landing.company') }}">会社紹介</a>
            </li>
            <li id="menu-item-5948"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-5948">
                <a href="{{ route('landing.company') }}">代表挨拶</a>
            </li>

            @auth
                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
                        href="{{ route('admin.property.index') }}">管理画面</a></li>
            @endauth
            {{-- <li id="menu-item-5562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5562"><a href="https://demo.tcd-theme.com/tcd103/blog/" class="megamenu_button megamenu_type1" data-megamenu="js-megamenu5562">PROPERTY</a></li> --}}
        </ul>
    </nav>

    {{-- megamenu  --}}
    <div class="megamenu megamenu_b no_category_page" id="js-megamenu5884">
    </div>
</header>
