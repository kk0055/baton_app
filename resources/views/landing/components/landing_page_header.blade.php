<header id="header" class="first_animate"
    style="position: fixed; top: 0; left: 0; right: 0; background: rgba(255, 255, 255, 0.98); box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); z-index: 1000;">
    <div class="header_for_pc">
        <div class="header-container"
            style="padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; max-width: 1400px; margin: 0 auto;">
            <h1 class="header_logo" style="margin: 0;">
                <a href="/">
                    <img class="logo_image pc" src="baton_logo240819.png" alt="株式会社BATON" width="146"
                        height="auto" />
                    {{-- <img class="logo_image mobile logo_mobile" src="baton_logo240819.png" alt="株式会社BATON" width="100" height="14" /> --}}
                </a>
            </h1>
            <div class="contact-info">
                <div class="phone">
                    <a href="tel:03-6865-8533" style="pointer-events: auto;"><i class="fa fa-phone"
                            style="margin-right:4px; color: #1a365d;"></i>03-6865-8533
                    </a>
                    <a href="tel:070-5366-0412" style="pointer-events: auto;"><i class="fa fa-phone"
                            style="margin-right:4px; color: #1a365d;"></i>070-5366-0412
                    </a>
                </div>
                <div class="insta">
                    <a href="https://www.instagram.com/baton_2024/" target="_blank">
                        <img src="Instagram_icon.png" alt=""
                            style="width: 30px; height: 30px; margin-right:8px">
                    </a>
                </div>
                <div class="line">
                    <a href="https://lin.ee/r7mvGMy" target="_blank">
                        <img src="LINE.png" alt="" style="width: 30px; height: 30px; margin-right:8px;">
                    </a>
                </div>
                <div class="email" style="background: #3182ce;">
                    <a href="https://bit.ly/4er2ktS" class="email-button" target="_blank">
                        <i class="fa fa-envelope"style="margin-right:4px;" aria-hidden="true"></i>
                        お問合わせ
                    </a>
                </div>
            </div>
        </div>
    </div>
    <h1 id="header_logo">
        <a href="/">
            {{-- <img class="logo_image pc" src="baton_logo240819.png" alt="株式会社BATON" width="146" height="20" /> --}}
            <img class="logo_image mobile" src="baton_logo240819.png" alt="株式会社BATON" width="100" height="14" />
        </a>
    </h1>
    <a id="drawer_menu_button" href="#"><span></span><span></span><span></span></a>
    <nav id="global_menu"
        class="menu-%e3%83%98%e3%83%83%e3%83%80%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc-container"
        style="top:35px; padding:5px;">

        <ul id="menu-%e3%83%98%e3%83%83%e3%83%80%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc" class="menu">
            <li id="menu-item-6202"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children menu-item-6202">
                <a href="{{ route('landing.index') }}"
                    style="line-height:40px;height: 30px;font-size: 1.25rem;font-weight: 600;color:#2C3E50;">トップ</a>

            </li>
            {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5934">
                <a href="{{ route('landing.rent') }}" style="line-height: 40px; height: 30px;">新着物件</a>
                <ul class="sub-menu">
                    <li id="menu-item-5982"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5982"><a
                            href="{{ route('landing.rent') }}">賃貸</a></li>
                    <li id="menu-item-5953"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5953"><a
                            href="{{ route('landing.sale') }}">売買</a></li>
                </ul>
            </li> --}}
            <li id="menu-item-5948"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-5948">
                <a href="{{ route('landing.company') }}"
                    style="line-height: 40px; height: 30px; font-size: 1.25rem;font-weight: 600;color:#2C3E50;">会社紹介</a>
            </li>
            <li id="menu-item-5948"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-5948">
                <a href="{{ route('landing.message') }}"
                    style="line-height: 40px; height: 30px; font-size: 1.25rem;font-weight: 600;color:#2C3E50;">代表挨拶</a>
            </li>
            {{-- <li id="menu-item-5948"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-5948">
                <a href="{{ route('landing.company') }}">代表挨拶</a>
            </li> --}}

            @auth
                <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-page menu-item">
                    <a href="{{ route('admin.property.index') }}"
                        style="line-height: 40px; height: 30px; font-size: 1.25rem;font-weight: 600;color:#2C3E50;">管理画面</a>
                </li>
            @endauth
        </ul>
    </nav>
    <div class="megamenu megamenu_b no_category_page" id="js-megamenu5884">
    </div>
    {{-- スマホ用 --}}
    <div class="contact-container" style="margin-top:40px;">
        <div class="contact-info">
            <div class="phone" style="margin-left:5px;">

                <a href="tel:070-5366-0412" style="pointer-events: auto;">
                    <i class="fa fa-phone catch" style="margin-right:2px;"></i>
                    070-5366-0412
                </a>
            </div>
            <div class="email">
                <a href="https://bit.ly/4er2ktS" class="email-button"
                    style="font-size: 1.25rem;font-weight: 600;color:#2C3E50;" target="_blank">
                    <i class="fa fa-envelope"style="margin-right:2px;" aria-hidden="true"></i>
                    お問合わせ
                </a>
            </div>
            <div class="insta">
                <a href="https://www.instagram.com/baton_2024/" target="_blank">
                    <img src="Instagram_icon.png" alt="" style="width: 20px; height: 20px; margin-right:8px">
                </a>
            </div>
            <div class="line">
                <a href="https://lin.ee/r7mvGMy" target="_blank">
                    <img src="LINE.png" alt="" style="width: 20px; height: 20px; ">
                </a>
            </div>
        </div>
    </div>
</header>

<style>
    /* メインコンテンツの調整（ヘッダー固定分） */
    body {
        padding-top: 80px;
    }

    /* ホバーエフェクト */
    .email-button:hover {
        background: #2c5282 !important;
        transform: translateY(-1px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    }

    .social-links a:hover {
        transform: translateY(-2px);
    }

    .phone a:hover {
        color: #4299e1 !important;
    }

    .header-container {
        padding: 5px 5px !important;
    }

    @media (max-width: 1024px) {
        .header-container {
            padding: 10px 3% !important;
        }

        /* .contact-info {
            gap: 15px !important;
        } */

        .phone {
            display: none !important;
        }
    }
</style>
