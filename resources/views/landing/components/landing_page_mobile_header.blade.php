<div id="drawer_menu">

    <div class="header">
        <div id="drawer_mneu_close_button"></div>
    </div>

    <div id="mobile_menu" class="menu-%e3%83%89%e3%83%ad%e3%83%af%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc-container">
        <ul id="menu-%e3%83%89%e3%83%ad%e3%83%af%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu">
            <li id="menu-item-6425"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-6425">
                <a href="{{ route('landing.index') }}" aria-current="page"
                    style="font-size: 1.25rem;font-weight: 600;">トップ</a>
            </li>
            {{-- <li id="menu-item-6436"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6436">
                <a href="{{ route('landing.rent') }}">新着物件</a>
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
            </li> --}}
            <li id="menu-item-6433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6433"><a
                    href="{{ route('landing.company') }}" style="font-size: 1.25rem;font-weight: 600;">会社紹介</a>
            </li>
            <li id="menu-item-6433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6433">
                <a href="{{ route('landing.message') }}" style="font-size: 1.25rem;font-weight: 600;">代表挨拶</a>
            </li>


            @auth
                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item"><a
                        href="{{ route('admin.property.index') }}" style="font-size: 1.25rem;font-weight: 600;">管理画面</a>
                </li>
            @endauth
        </ul>
    </div>
    <div class="contact-sns-container">
        <div class="contact-info">
            <div class="phone" style="margin-left:5px;">

                <a href="tel:03-6314-1254" style="color:white; pointer-events: auto;">
                    <i class="fa fa-phone catch" style="margin-right:2px;"></i>03-6314-1254
                </a>
            </div>
            <div class="email">
                <a href="mailto:company@xbatonx.com" class="email-button"
                    style="color:white; font-size: 1.25rem;font-weight: 600;" target="_blank">
                    <i class="fa fa-envelope"style="margin-right:2px;" aria-hidden="true"></i>
                    お問合わせ
                </a>
            </div>
        </div>
        <div id="mobile_sns" class="sns_button_list clearfix color_type1">
            <a href="https://www.instagram.com/baton_2024/" target="_blank">
                <img src="Instagram_icon.png" alt="" style="width: 30px; height: 30px; margin-right:8px;">
            </a>
            <a href="https://lin.ee/r7mvGMy" target="_blank">
                <img src="LINE.png" alt="" style="width: 30px; height: 30px">
            </a>
        </div>
    </div>
</div>
