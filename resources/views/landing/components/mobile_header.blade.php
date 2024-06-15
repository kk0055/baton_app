<div id="drawer_menu">

    <div class="header">
        <div id="drawer_mneu_close_button"></div>
    </div>

    <div id="mobile_menu" class="menu-%e3%83%89%e3%83%ad%e3%83%af%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc-container">
        <ul id="menu-%e3%83%89%e3%83%ad%e3%83%af%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu">
            <li id="menu-item-6425"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-6425">
                <a href="{{ route('landing.index') }}" aria-current="page">HOME</a>
            </li>
            <li id="menu-item-6434"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6434">
                <a href="#about_us">ABOUT</a>
            </li>
            <li id="menu-item-6440" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6440"><a
                    href="#job_details">SERVICE</a></li>
            <li id="menu-item-6433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6433"><a
                    href="https://demo.tcd-theme.com/tcd103/company/">COMPANY</a></li>

            <li id="menu-item-6436"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6436">
                <a href="{{ route('landing.rent') }}">PROPERTY</a>
                <ul class="sub-menu">
                    <li id="menu-item-6437"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6437"><a
                            href="{{ route('landing.rent') }}">賃貸</a>
                    </li>
                    <li id="menu-item-6438"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6438"><a
                            href="{{ route('landing.sale') }}">売買</a>
                    </li>
                </ul>
            </li>
             @auth
            <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
              href="{{ route('admin.property.index') }}">管理画面</a></li>
             @endauth
        </ul>
    </div>

    <ul id="mobile_sns" class="sns_button_list clearfix color_type1">
        <a href="https://www.instagram.com/baton_2024/" target="_blank">
            <img src="inst_banner.png" alt="" height="50"></a>
        {{-- <li class="twitter"><a href="https://twitter.com/tcd_jp" rel="nofollow noopener" target="_blank"
              title="X"><span>X</span></a></li>
      <li class="facebook"><a href="https://www.facebook.com/wptcd" rel="nofollow noopener" target="_blank"
              title="Facebook"><span>Facebook</span></a></li>
      <li class="youtube"><a href="https://www.youtube.com/channel/UCF2WVjA5eHLue-3cZ5UBUsw/videos"
              rel="nofollow noopener" target="_blank" title="Youtube"><span>Youtube</span></a></li> --}}
    </ul>
</div>
