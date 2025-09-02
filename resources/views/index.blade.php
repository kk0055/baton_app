@extends('layout.landing.app')

@section('canonical', 'https://xbatonx.com/')

@section('styles')
    <style id="current-page-style" type="text/css">
        :root {
            --primary-color: #507878;
            --primary-light: #628e8e;
            --primary-dark: #3e5c5c;
            --secondary-color: #507878;
            --accent-color: #E8F3F3;
            --text-primary: #2C3E50;
            --text-secondary: #7F8C8D;
            --background-light: #F7F9FC;
            --background-white: #FFFFFF;
            --shadow-soft: 0 4px 6px rgba(80, 120, 120, 0.1);
            --shadow-medium: 0 6px 12px rgba(80, 120, 120, 0.15);
            --radius-small: 8px;
            --radius-medium: 12px;
            --radius-large: 20px;
            --spacing-unit: 8px;
        }

        body {
            color: var(--text-primary);
            background-color: var(--background-light);
            line-height: 1.6;
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: calc(var(--spacing-unit) * 4);
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: calc(var(--spacing-unit) * 6);
            color: var(--text-primary);
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--primary-color);
            margin: calc(var(--spacing-unit) * 2) auto;
            border-radius: 2px;
        }

        .card {
            background: var(--background-white);
            border-radius: var(--radius-medium);
            box-shadow: var(--shadow-soft);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            margin-bottom: calc(var(--spacing-unit) * 3);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .card-content {
            padding: calc(var(--spacing-unit) * 3);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: calc(var(--spacing-unit) * 2);
            color: var(--text-primary);
        }

        .card-text {
            color: var(--text-secondary);
            margin-bottom: calc(var(--spacing-unit) * 2);
        }

        .button {
            display: inline-block;
            padding: calc(var(--spacing-unit) * 2) calc(var(--spacing-unit) * 4);
            background: var(--primary-color);
            color: white;
            border-radius: var(--radius-small);
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            font-weight: 500;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: calc(var(--spacing-unit) * 4);
            margin-top: calc(var(--spacing-unit) * 6);
        }

        .feature-item {
            text-align: center;
            padding: calc(var(--spacing-unit) * 3);
        }

        /* 物件検索リンクのスタイル追加 */
        a.feature-item {
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        a.feature-item:hover {
            background-color: var(--accent-color);
            border-color: var(--primary-color);
            transform: translateY(-5px);
        }

        a.feature-item:hover .feature-icon {
            transform: scale(1.1);
        }

        a.feature-item:hover .feature-title {
            color: var(--primary-color);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: calc(var(--spacing-unit) * 2);
            transition: transform 0.3s ease;
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: calc(var(--spacing-unit) * 2);
            color: var(--text-primary);
        }

        .wave-container {
            position: relative;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            background: linear-gradient(135deg,
                    rgba(80, 120, 120, 0.85),
                    rgba(98, 142, 142, 0.85));
            z-index: 1;
        }

        .wave {
            position: absolute;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 45%;
            animation: wave 20s infinite linear;
            opacity: 0.7;
        }

        .wave:nth-child(2) {
            animation-duration: 17s;
            opacity: 0.5;
            background: rgba(255, 220, 200, 0.1);
        }

        .wave:nth-child(3) {
            animation-duration: 25s;
            opacity: 0.3;
            background: rgba(255, 240, 220, 0.1);
        }

        @keyframes wave {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .hero-section {
            position: relative;
            padding: calc(var(--spacing-unit) * 15) 0;
            color: var(--text-primary);
            text-align: center;
            border-radius: 0 0 var(--radius-large) var(--radius-large);
            /* margin-top: 80px; */
            overflow: hidden;
            background: linear-gradient(rgba(80, 120, 120, 0.3), rgba(80, 120, 120, 0.5)),
                linear-gradient(rgba(255, 200, 150, 0.2), rgba(255, 200, 150, 0.3)),
                url('kyodo2.jpg');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.95);
            max-width: 900px;
            margin: 0 auto;
            padding: calc(var(--spacing-unit) * 4);
            border-radius: var(--radius-medium);
            box-shadow: var(--shadow-medium);
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: calc(var(--spacing-unit) * 3);
            line-height: 1.3;
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }

        /* .hero-title::after {
                                                        content: '';
                                                        position: absolute;
                                                        bottom: -10px;
                                                        left: 50%;
                                                        transform: translateX(-50%);
                                                        width: 100px;
                                                        height: 3px;
                                                        background: var(--primary-color);
                                                        border-radius: 2px;
                                                    } */

        .hero-subtitle {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            color: var(--text-secondary);
            margin-bottom: calc(var(--spacing-unit) * 4);
        }

        .hero-buttons {
            margin-top: calc(var(--spacing-unit) * 4);
            display: flex;
            gap: calc(var(--spacing-unit) * 3);
            justify-content: center;
        }

        .hero-button {
            display: inline-block;
            padding: calc(var(--spacing-unit) * 2) calc(var(--spacing-unit) * 4);
            border-radius: var(--radius-small);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .hero-button-primary {
            background: var(--primary-color);
            color: white;
            box-shadow: var(--shadow-medium);
        }

        .hero-button-secondary {
            background: var(--background-white);
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .hero-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .hero-button-primary:hover {
            background: var(--primary-dark);
        }

        .hero-button-secondary:hover {
            background: var(--accent-color);
        }

        @media (max-width: 768px) {
            .hero-content {
                margin: 0 var(--spacing-unit);
                padding: calc(var(--spacing-unit) * 3);
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
                padding: 0;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .hero-button {
                text-align: center;
            }
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: calc(var(--spacing-unit) * 3);
            margin-top: calc(var(--spacing-unit) * 4);
        }

        .gallery-item {
            border-radius: var(--radius-medium);
            overflow: hidden;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }

        .highlight-box {
            background-color: #507878;
            color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            width: 600px;
            max-width: 100%;
        }

        #site_loader_overlay {
            position: relative;
            overflow: hidden;
            pointer-events: none;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            height: 100vh;
            height: 100dvh;
            z-index: 99999999999;
            opacity: 1;
            background-color: #EF3D08;
            background: url('/logo.jpg') no-repeat center center;
            /* Set your image path */
            background-size: cover;
        }

        /* body.end_loading #site_loader_overlay { opacity:0; transition: opacity 0.7s ease 0.7s; } */

        #site_loader_overlay_for_catchphrase {
            position: relative;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            width: 100%;
            height: 100vh;
            height: 100dvh;
            z-index: 99998;
            background: #000000;
        }

        #site_loader_overlay_for_catchphrase.active {
            opacity: 0;
            transition: opacity 0.1s ease 1.5s;
        }

        #site_loader_overlay {
            transform: translate3d(0, -100%, 0);
            transition: transform 0.7s cubic-bezier(.83, 0, .17, 1) 0.5s;
        }

        #site_loader_overlay.active {
            transform: translate3d(0, 0%, 0);
        }

        body.end_loading #site_loader_overlay {
            opacity: 0;
            transition: opacity 0.5s ease 0.4s;
        }

        #loader_catch {
            opacity: 0;
            text-align: center;
            line-height: 1.8;
            padding: 0 100px;
            font-size: 26px;
            color: #ffffff;
        }

        #site_loader_overlay_for_catchphrase.start_loading #loader_catch {
            opacity: 1;
            transition: opacity 1.0s ease 0.5s;
        }

        @media screen and (max-width:1100px) {
            #loader_catch {
                font-size: 22px;
                padding: 0 60px;
            }
        }

        @media screen and (max-width:800px) {
            #loader_catch {
                font-size: 18px;
                padding: 0 20px;
            }
        }

        #loader_logo_image {
            opacity: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        #site_loader_overlay.active #loader_logo_image {
            opacity: 1;
            transition: opacity 1.0s ease 1.5s;
        }

        #loader_logo_image .mobile {
            display: none;
        }

        @media screen and (max-width:800px) {
            #loader_logo_image .pc {
                display: none;
            }

            #loader_logo_image .mobile {
                display: block;
            }
        }

        .main_logo_image_content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* 親要素の高さを設定 */
        }


        .philosophy2_message {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .philosophy_submessage {
            font-size: 1.7rem;
            font-weight: bold;
        }

        /* スマホ用スタイル */
        @media (max-width: 768px) {

            .title_area {
                width: 100%;
                text-align: center;
            }

            .divider {
                width: 100%;
                height: 1px;
                margin: 20px 0;
                background-color: grey;
                display: none;
            }

            .philosophy_container {
                flex-direction: column;
            }

            .good_point {
                text-align: left;
            }

            .philosophy1 {
                text-align: left;
                font-weight: bold;
            }

            .philosophy2 {
                text-align: left;
                font-weight: bold;
            }

            .property {
                text-align: left;
            }

            .property_sub_titile {
                position: relative;
                display: flex;
                align-items: center;
            }

            .property_sub_titile::after {
                content: '';
                flex-grow: 1;
                height: 1px;
                background-color: grey;
                margin-left: 10px;

            }

            .break::before {
                content: "\A";
                white-space: pre;

            }

            .philosophy_for_pc {
                display: none
            }

            .header-container {
                display: none
            }

            .property-text {
                font-size: 14px;
                line-height: 2;
                margin-bottom: 12px;
                text-align: left;
                word-break: break-word;
            }

            .top_message {
                font-size: 22px
            }

            .annex_button_container {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .annex_button {
                font-size: 17px;
            }
        }

        .annex_button {
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            transition: box-shadow 0.2s ease-in-out, transform 0.1s ease-in-out;
        }

        .annex_button:hover {
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.4);
            transform: translateY(-2px);
        }

        /* Laptop用スタイル */
        @media screen and (min-width:770px) {
            .divider {
                width: 1px;
                height: 330px;
                background-color: grey;
                margin: 0 20px;
                display: none;
            }

            #header {
                height: 100px !important;
            }

            .philosophy_container {
                display: flex;
                justify-content: center;
                align-items: flex-start
            }

            .philosophy1 {
                flex: 1;
            }

            .philosophy2 {
                margin-left: 60px;
                flex: 1;
            }

            .philosophy_for_sp {
                display: none
            }

            .top_message {
                font-size: 34px
            }

            .annex_button {
                font-size: 24px;
            }

            .annex_button2 {
                margin-left: 20px;
            }
        }

        .property-text {
            font-size: 18px;
            color: #000000;
            margin-bottom: 9px;

        }

        .top_message {
            display: none;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        /* note表示 */
        .note-feed-wrapper {
            font-family: var(--note-feed-font-family);
            background-color: var(--note-feed-bg-color);
            padding: 3rem 1rem;
            color: var(--note-text-color-primary);
        }

        .note-feed-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .note-feed-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--note-text-color-primary);
            margin-bottom: 3rem;
            text-align: center;
            letter-spacing: -0.5px;
            position: relative;
            padding-bottom: 1rem;
        }

        .note-feed-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--note-accent-color);
            margin: 0.75rem auto 0;
            border-radius: 2px;
        }

        .note-feed-message {
            text-align: center;
            color: var(--note-text-color-secondary);
            font-size: 1.125rem;
            padding: 2.5rem 1.5rem;
            background-color: var(--note-card-bg-color);
            border-radius: var(--note-card-border-radius);
            box-shadow: var(--note-card-shadow);
            margin-top: 2rem;
        }

        .note-articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(min(100%, 340px), 1fr));
            gap: 2.5rem;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .note-article-card {
            background-color: var(--note-card-bg-color);
            border: 1px solid var(--note-card-border-color);
            border-radius: var(--note-card-border-radius);
            box-shadow: var(--note-card-shadow);
            transition: transform 0.25s ease-in-out, box-shadow 0.25s ease-in-out;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .note-article-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--note-card-hover-shadow);
        }

        .note-card-link {
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .note-card-image-container {
            width: 100%;
            aspect-ratio: var(--note-image-aspect-ratio);
            overflow: hidden;
            background-color: var(--note-image-placeholder-bg);
            /* 画像がない場合や読み込み中の背景 */
            display: flex;
            /* 画像がない場合に備えてflexも使える */
            align-items: center;
            justify-content: center;
        }

        .note-card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .note-article-card:hover .note-card-image {
            transform: scale(1.05);
        }

        /* 画像がない場合の代替テキストスタイル（オプション）*/
        .note-card-image-placeholder-text {
            color: #a0a0a0;
            font-size: 0.9rem;
        }


        .note-card-content {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .note-card-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--note-text-color-primary);
            margin: 0 0 0.75rem 0;
            line-height: 1.45;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            min-height: calc(1.3rem * 1.45 * 2);
        }

        .note-card-link:hover .note-card-title {
            color: var(--note-link-color);
        }

        .note-card-date {
            font-size: 0.875rem;
            color: var(--note-text-color-secondary);
            margin-bottom: 1rem;
            display: block;
            font-weight: 500;
        }

        .note-card-excerpt {
            font-size: 0.95rem;
            color: var(--note-text-color-secondary);
            line-height: 1.65;
            margin: 0 0 auto;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            min-height: calc(0.95rem * 1.65 * 3);
        }

        @media (max-width: 768px) {
            .note-feed-title {
                font-size: 2rem;
            }

            .note-card-title {
                font-size: 1.15rem;
                min-height: calc(1.15rem * 1.45 * 2);
            }

            .note-card-excerpt {
                font-size: 0.9rem;
                min-height: calc(0.9rem * 1.65 * 3);
            }

            .note-articles-grid {
                gap: 1.5rem;
            }

            .note-card-content {
                padding: 1.25rem;
            }
        }

        /* Header styles */
        #header {
            background: var(--background-white);
            box-shadow: var(--shadow-soft);
            position: fixed;
            width: 100%;
            z-index: 100;
            transition: all 0.3s ease;
        }

        #global_menu {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
        }

        #global_menu>ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #global_menu>ul>li {
            position: relative;
        }

        #global_menu>ul>li>a {
            display: block;
            padding: 20px 15px;
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        #global_menu>ul>li>a:hover {
            color: var(--primary-color);
        }

        #header.transparent {
            background: transparent;
            box-shadow: none;
        }

        #header.transparent #global_menu>ul>li>a {
            color: white;
        }

        #header.transparent #global_menu>ul>li>a:hover {
            color: var(--accent-color);
        }

        @media (max-width: 768px) {
            #global_menu {
                display: none;
            }
        }

        /* Column styles */
        .column-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
            gap: calc(var(--spacing-unit) * 3);
            margin-top: calc(var(--spacing-unit) * 4);
        }

        .column-item {
            background: var(--background-white);
            border-radius: var(--radius-medium);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
        }

        .column-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .column-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .column-content {
            padding: calc(var(--spacing-unit) * 3);
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .column-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: calc(var(--spacing-unit) * 2);
            color: var(--text-primary);
            line-height: 1.4;
        }

        .column-excerpt {
            color: var(--text-secondary);
            margin-bottom: calc(var(--spacing-unit) * 2);
            line-height: 1.6;
            flex-grow: 1;
        }

        .column-date {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-top: auto;
        }

        .link-icon {
            display: none;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            width: 1.6em;
            height: 1.6em;
            padding: 0.3em 0.3em;
            color: #e27c39;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            font-size: 0.9em;
            /* margin-left: 0.3em; */
            font-weight: bold;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.25);
            animation: pulseArrow 1.4s infinite;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .link-icon {
                display: inline-block;
            }
        }

        /* タップ時に少し動く（スマホ用フィードバック） */
        .feature-item:active .link-icon {
            transform: scale(1.2);
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
    </style>
@endsection



@section('bodyClass',
    'home page-template-default page page-id-4549 wp-embed-responsive megamenu_dark_color
    header_slider_layout_type1 use_loading_screen loading_animation_type1 hide_sidebar normal_content_width')

@section('content')
    <div id="js-body-start"></div>

    {{-- <div id="site_loader_overlay">
        <div id="loader_logo_image">
        </div>
    </div> --}}

    @include('landing.components.landing_page_header')

    <div class="hero-section">
        <div class="wave-container">
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        <div class="section-container hero-content">
            <h1 class="hero-title">あなたの理想の住まい探しを親身にサポートします</h1>
            <p class="hero-subtitle" style="margin-bottom: calc(var(--spacing-unit) * 2);">
                株式会社BATONは世田谷区を中心としてお部屋のご紹介をメインとして活動させていただいております。地域密着型でありながら、上京される方々にとっても安心して任せていただけるような、アットホームで温かみのあるサービスを心掛けております。
            </p>

        </div>
    </div>

    <div id="container">
        {{-- <section id="property-search" class="card">
            <div class="card-content">
                <h2 class="section-title">
                    <i class="fas fa-search"></i>
                    物件検索
                </h2>
                <div class="feature-grid">
                    <a href="https://xbatonx.annex-homes.jp/bukken_display_30708.html" target="_blank" class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <h3 class="feature-title">世田谷区おすすめ物件
                            <span class="link-icon">▶</span>
                        </h3>
                        <p class="card-text">世田谷区の厳選された物件をお探しいただけます</p>
                    </a>
                    <a href="https://xbatonx.annex-homes.jp/bukken_search_20088.html#1" target="_blank"
                        class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-city"></i>
                        </div>
                        <h3 class="feature-title">首都圏物件
                            <span class="link-icon">▶</span>
                        </h3>
                        <p class="card-text">首都圏全域の物件をお探しいただけます</p>
                    </a>
                    <a href="https://xbatonx.annex-homes.jp/special_44059.html" target="_blank" class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <h3 class="feature-title">ペット可物件
                            <span class="link-icon">▶</span>
                        </h3>
                        <p class="card-text">大切な家族と一緒に暮らせる物件をご紹介</p>
                    </a>
                </div>
            </div>
        </section> --}}


        <div id="content_builder">
            {{-- 新着物件 --}}
            <section class="cb_blog_list num5" id="cb_content_5">
                <div class="design_header cb_design_header inview ">
                    <div class="title_area no_desc">

                        {{-- <h3 class="catch rich_font inview slide_up_animation property" style="margin-bottom: 20px;">|
                            物件検索</h3> --}}
                        {{-- <p class="sub_title colored property property_sub_titile"
                                style="font-size: 22px; color:#000000 ; margin-top:15px; margin-bottom: 20px;">
                                今週のオススメ物件
                            </p> --}}
                        <div class=" inview slide_up_animation" style="line-height:2;">
                            {{-- <p class="property-text" style="margin-bottom: 5px;">
                                大手不動産会社と同じデータベースを使用しておりますので、他社サイトで見つけた物件もご紹介が可能です。
                            </p>
                            <p class="property-text" style="margin-bottom: 5px;">
                                世田谷区を中心としてはおりますが、都内および首都圏の賃貸物件を幅広くご紹介可能です。
                            </p>
                            <p class="property-text" style="margin-bottom: 5px;">
                                当サイトに掲載している物件は、取り扱い物件のほんの一部です。
                            </p>
                            <p class="property-text">
                                もっと多くの選択肢から物件をご紹介できますので、気になる条件があればお気軽にお問い合わせください！
                            </p> --}}
                            {{-- <div class="annex_button_container" style="margin-top:30px;">
                                <a href="https://xbatonx.annex-homes.jp/bukken_display_30708.html" target="_blank">
                                    <span class="label annex_button "
                                        style="color: #ffffff; background-color: #63b2b2; padding: 10px 20px; border-radius: 5px;"><i
                                            class="fa-solid fa-search" style="margin-right:5px;"></i>
                                        世田谷区おすすめ物件
                                    </span>
                                </a>
                                <a href="https://xbatonx.annex-homes.jp/bukken_search_20088.html#1" target="_blank">
                                    <span class="label annex_button annex_button2"
                                        style="color: #ffffff; background-color: #63b2b2;  border-radius: 5px;  padding: 10px 20px; "><i
                                            class="fa-solid fa-search" style="margin-right:5px;"></i>首都圏物件
                                    </span>
                                </a>
                                <a href="https://xbatonx.annex-homes.jp/special_44059.html" target="_blank">
                                    <span class="label annex_button annex_button2"
                                        style="color: #ffffff; background-color: #63b2b2; padding: 10px 20px; border-radius: 5px;"><i
                                            class="fa-solid fa-search" style="margin-right:5px;"></i>
                                        ペット可物件
                                    </span>
                                </a>
                            </div> --}}

                        </div>
                        {{-- <div class="sub_title colored property "
                                style="font-size: 95%; color:#000000; padding:10px 0">
                                <form action="{{ route('landing.rent') }}" method="GET" style="">
                                    <div class=" " style="display: flex;">
                                        <select name="price" id="price"
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            style="font-weight: bold; background-color:#699999; color: white; padding:10px;margin-right:7px;">
                                            @foreach ($propertyPrices as $price)
                                                <option value="{{ $price }}" style="font-weight: bold;">
                                                    {{ $price }}
                                                </option>
                                            @endforeach
                                        </select>
    
                                        <button type="submit" class="property_search"
                                            style="padding:3px; margin-left:4px; ">
                                            <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                                    style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                                        </button>
                                    </div>
                                    <div style="margin-top: 10px; display: flex; align-items: center;">
                                        <div style="display:flex; align-items: center; margin-right:4px;">
                                            <input type="checkbox" name="is_new_building" id="is_new_building"
                                                value="1" style="margin-right:5px;"
                                                {{ request()->get('is_new_building') == '1' ? 'checked' : '' }}>
                                            <label for="is_new_building"
                                                class="block text-gray-700 text-sm font-bold mb-2 mt-4">新築</label>
                                        </div>
    
                                        <div style="display:flex; align-items: center; margin-right:4px;">
                                            <input type="checkbox" name="is_brokerage_free" id="is_brokerage_free"
                                                value="1" style="margin-right:5px;"
                                                {{ request()->get('is_brokerage_free') == '1' ? 'checked' : '' }}>
                                            <label for="is_brokerage_free"
                                                class="block text-gray-700 text-sm font-bold mb-2 mt-4">仲介手数料無料</label>
                                        </div>
                                        <button type="submit" class="catch property_search"
                                            style="padding:3px; margin-left:4px; ">
                                            <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                                    style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                    </div>
                </div>
                {{-- <div class="main_content inview">
                    <div class="blog_carousel_wrap swiper">
                        <div class="blog_carousel swiper-wrapper">
                            @foreach ($rents as $property)
                                <div class="item swiper-slide">
                                    <div class="image_wrap image_link image-link animate_background">
                                        <img class=" property-image" src="{{ asset('storage/' . $property->image_path) }}"
                                            alt="世田谷の賃貸物件" style="width: 100%; height: 100%; object-fit: contain;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="genesis_carousel_scrollbar">
                        <div class="blog_carousel_scrollbar swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="design_arrow_button cb_design_arrow_button">
                    <a href="{{ route('landing.rent') }}">
                        <span class="label"
                            style="font-size: 24px; color: #ffffff; background-color: #507878; padding: 10px 20px; border-radius: 5px;">新着物件一覧<i
                                class="fa-solid fa-arrow-right" style="margin-left:5px;"></i>
                        </span></a>
                </div> --}}
            </section>
            {{-- 業務内容 --}}
            <section class="card">
                <div class="card-content">
                    <h2 class="section-title">BATONの強み</h2>
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <h3 class="feature-title">きめ細やかな個別対応</h3>
                            <p class="card-text">小規模だからこそ実現できる、お客様のニーズに寄り添った手厚いサポート体制</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-coins"></i>
                            </div>
                            <h3 class="feature-title">圧倒的な初期費用の安さ</h3>
                            <p class="card-text">高額なコストを徹底的に抑え、透明性の高い取引を実現しています</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h3 class="feature-title">豊富な取り扱い物件数</h3>
                            <p class="card-text">大手不動産会社と同じデータベースを使用し、幅広い選択肢をご提供</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-video"></i>
                            </div>
                            <h3 class="feature-title">WEB内覧</h3>
                            <p class="card-text">お忙しい方や遠方の方にもオンラインで内覧いただけます</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <h3 class="feature-title">ライフライン一括申請</h3>
                            <p class="card-text">面倒な手続きをまとめて効率的にサポート</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <h3 class="feature-title">24時間サポート</h3>
                            <p class="card-text">急なトラブルにも24時間体制で対応いたします</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="card">
                <div class="card-content">
                    <h2 class="section-title">世田谷の魅力</h2>
                    <div class="feature-grid">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-train"></i>
                            </div>
                            <h3 class="feature-title">充実した交通アクセス</h3>
                            <p class="card-text">小田急線、京王線、田園都市線など都心へのアクセスが便利</p>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-shopping-bag"></i>
                            </div>
                            <h3 class="feature-title">洗練されたショッピング</h3>
                            <p class="card-text">二子玉川ライズや三軒茶屋など、おしゃれな商業施設が充実</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-store"></i>
                            </div>
                            <h3 class="feature-title">豊かな生活環境</h3>
                            <p class="card-text">活気のある商店街や便利な施設が充実</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <h3 class="feature-title">充実した教育環境</h3>
                            <p class="card-text">多数の有名大学や教育機関が集まる文教地区</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <h3 class="feature-title">文化・芸術の街</h3>
                            <p class="card-text">世田谷美術館や音楽大学が点在する文化的な街並み</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-tree"></i>
                            </div>
                            <h3 class="feature-title">豊かな自然</h3>
                            <p class="card-text">等々力渓谷や砧公園など、都心とは思えない緑地が点在</p>
                        </div>
                    </div>
                    <div class="image-gallery">
                        <div class="gallery-item">
                            <img loading="lazy" src="kyodo1.jpg" alt="経堂の街並み1" />
                        </div>
                        <div class="gallery-item">
                            <img loading="lazy" src="kyodo2.jpg" alt="経堂の街並み2" />
                        </div>
                    </div>
                </div>
            </section>
            @if (isset($feedItems) && !empty($feedItems))
                <section class="card">
                    <div class="card-content">
                        <h2 class="section-title">コラム</h2>
                        <div class="column-grid">
                            @foreach ($feedItems as $item)
                                <a href="{{ $item['link'] }}" target="_blank" rel="noopener noreferrer"
                                    class="column-item">
                                    @if ($item['image'])
                                        <img src="{{ $item['image'] }}" alt="{{ Str::limit($item['title'], 50) }}"
                                            class="column-image">
                                    @endif
                                    <div class="column-content">
                                        <h3 class="column-title">{{ Str::limit($item['title'], 50) }}</h3>
                                        <p class="column-excerpt">{{ Str::limit($item['description'], 120) }}</p>
                                        <time datetime="{{ $item['pubDate']->toIso8601String() }}" class="column-date">
                                            {{ $item['pubDate']->isoFormat('YYYY年MM月DD日(ddd)') }}
                                        </time>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
            {{-- 仲介手数料無料 --}}
            {{-- <section class="cb_blog_list num5" id="cb_content_5">
                <div class="design_header cb_design_header inview ">
                    <div class="title_area no_desc">
                        <h3 class="catch rich_font inview slide_up_animation property" style="margin-bottom: 20px;">|
                            仲介手数料無料</h3>
                        <div class="sub_title colored property "
                            style="font-size: 95%; color:#000000; padding:10px 0">
                            <form action="{{ route('landing.rent') }}" method="GET" style="">
                                <select name="price" id="price"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    @foreach ($propertyPrices as $price)
                                        <option value="{{ $price }}">
                                            {{ $price }}
                                        </option>
                                    @endforeach
                                </select>
                                <div style="margin-top: 10px; display: flex; align-items: center;">
                                    <div style="display:flex; align-items: center; margin-right:4px;">
                                        <input type="checkbox" name="is_new_building" id="is_new_building"
                                            value="1" style="margin-right:5px;"
                                            {{ request()->get('is_new_building') == '1' ? 'checked' : '' }}>
                                        <label for="is_new_building"
                                            class="block text-gray-700 text-sm font-bold mb-2 mt-4">新築</label>
                                    </div>
                                    <div style="display:flex; align-items: center; margin-right:4px;">
                                        <input type="checkbox" name="is_brokerage_free" id="is_brokerage_free"
                                            value="1" style="margin-right:5px;"
                                            {{ request()->get('is_brokerage_free') == '1' ? 'checked' : '' }}>
                                        <label for="is_brokerage_free"
                                            class="block text-gray-700 text-sm font-bold mb-2 mt-4">仲介手数料無料</label>
                                    </div>
                                    <button type="submit" class="catch property_search"
                                        style="padding:3px; margin-left:4px; ">
                                        <span class="label" style="font-size: 16px;"><i class="fa fa-search"
                                                style="margin-right:4px;" aria-hidden="true"></i>検索</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main_content inview">
                    <div class="blog_carousel_wrap swiper">
                        <div class="blog_carousel swiper-wrapper">
                            @foreach ($is_brokerage_free as $property)
                                <div class="item swiper-slide">
                                    <div class="image_wrap image_link image-link animate_background">
                                        <img class=" property-image"
                                            src="{{ asset('storage/' . $property->image_path) }}"
                                            alt="Property Image"
                                            style="width: 100%; height: 100%; object-fit: contain;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="genesis_carousel_scrollbar">
                        <div class="blog_carousel_scrollbar swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="design_arrow_button cb_design_arrow_button">
                    <a href="{{ route('landing.isBrokerageFree') }}"><span class="label"
                            style="font-size: 16px; color:#000000">仲介手数料無料物件一覧</span><i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </section> --}}
            <!-- 売買物件 -->
            {{-- <section class="cb_blog_list num5" id="cb_content_2">
                <div class="design_header cb_design_header inview">
                    <div class="title_area no_desc property">
                        <h3 class="catch rich_font inview slide_up_animation property">| 売買物件</h3>
                        <p class="sub_title colored property property_sub_titile"
                            style="font-size: 22px; color:#000000 ; margin-top:15px; margin-bottom: 20px;">
                            今週のオススメ物件
                        </p>
                    </div>
                </div>
                <div class="main_content inview">
                    <div class="blog_carousel_wrap blog2_carousel_wrap swiper">
                        <div class="blog2_carousel blog_carousel swiper-wrapper">
                            @foreach ($sales as $property)
                                <div class="item swiper-slide">
                                    <a class="image_link image animate_background"
                                      href="{{ asset('storage/' . $property->image_path) }}">
                                    <div class="image_wrap image_link image animate_background">
                                        <img class="property-image"
                                            src="{{ asset('storage/' . $property->image_path) }}" alt="Property Image"
                                            style="width: 100%; height: 100%; object-fit: contain;">
                                    </div>
                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- 画像をクリックしたときに表示されるモーダル -->
                    <div class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content">
                  </div>
                    <div class="genesis_carousel_scrollbar">
                        <div class="blog2_carousel_scrollbar swiper-scrollbar"></div>
                    </div>

                </div>

                <div class="design_arrow_button cb_design_arrow_button">
                    <a href="{{ route('landing.sale') }}"><span class="label"
                            style="font-size: 16px; color:#000000">売買物件一覧</span><i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </section> --}}
            <!-- END 売買物件 -->

            {{-- ブログ --}}
            {{-- @if ($latestPost)
                <section class="cb_free_space num1 " id="cb_content_1">
                    <div class="post_content clearfix">
                        <div class="design_header inview">
                            <div class="title_area">
                            </div>
                        </div>
                        <div class="post_row inview slide_up_animation">
                            <div class="post_col post_col-2 rich_font">
                                <h3 class="catch rich_font">| {{ $latestPost->title }}
                                </h3>
                            </div>
                            <div class="post_col post_col-2">
                                <p>{!! $latestPost->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif --}}

            {{-- 企業理念 --}}
            {{-- <section class="cb_design_content num4" id="cb_content_4">
                <div class="design_header cb_design_header inview philosophy_container">
                    <div class="title_area philosophy1">
                        <h3 class="catch rich_font inview slide_up_animation">| 企業理念
                        </h3>
                        <div class="post_row">
                            <div class="post_col post_col-2 inview slide_up_animation" style="margin-top:10px;">
                                <p class="philosophy_submessage philosophy_for_pc">100年後の笑顔を創る
                                </p>
                                <p class="philosophy_submessage philosophy_for_sp" style="font-size: 50px;">
                                    100年後の笑顔を創る
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="title_area philosophy2">
                        <h3 class="catch rich_font inview slide_up_animation">| 経営理念
                        </h3>
                        <div class="post_row">
                            <div class="post_col post_col-2 inview slide_up_animation"
                                style="margin-top:10px;">
                                <p>誠実にあり続けることへの努力を怠らず、
                                    多くの社会問題に対して、今やるべきことを考え行動し、
                                    100年後の笑顔を創る会社となる。</p>
                                <p class="philosophy2_message"> 三方よし＝ <span
                                        class="philosophy_submessage break">従業員の笑顔、お客様の笑顔、社会を笑顔へ</span>
                                </p>
                            </div>
                            <div class="post_col post_col-2 inview slide_up_animation philosophy_for_sp"
                                style="margin-top:10px;">
                                <div class="philosophy2_message">
                                    <p class="philosophy_submessage">三方よし＝</br></p>
                                    <p style="font-size: 50px;">従業員の笑顔</br></p>
                                    <p style="font-size: 50px;">お客様の笑顔</br></p>
                                    <p style="font-size: 50px;">社会を笑顔へ </br></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="cb_free_space num1 " id="cb_content_1">
                <div class="post_content clearfix" id="job_details">
                    <div class="design_header inview">
                        <div class="title_area">
                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 経営理念
                            </h3>
                        </div>
                        <div class="post_col post_col-2">
                            <p>誠実にあり続けることへの努力を怠らず、
                                多くの社会問題に対して、今やるべきことを考え行動し、
                                100年後の笑顔を創る会社となる。<br>
                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- 不動産仲介業の使命 --}}
            {{-- <section class="cb_free_space num1 " id="cb_content_1">

                <div class="post_content clearfix">
                    <div class="design_header inview">
                        <div class="title_area">
                            <h3 class="large_headline"><span>不動産仲介業の使命</span></h3>

                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 不動産仲介業の使命とは
                            </h3>
                            <p style="font-size: 22px; color:#000000"><span>物件選びはエンターテイメントである</span></p>
                        </div>
                        <div class="post_col post_col-2">
                            <p>株式会社BATONは、物件選びもエンターテイメントのように楽しんでいただきたいと考えております。
                                <br>
                                楽しんでいただく為、大切なのは「環境づくり」です。不動産業界は未だに「恐そう」とか「騙されそう」とういうイメージをお持ちの方も多いかと思います。<br>ここを払拭すべくコミュニケーションの取りやすい環境づくり、「笑顔」で「クリーン」な会社をモットーとして、お客様からの要望が出やすい環境づくりを徹底しております。<br>期待や不安・・・様々な想いを馳せつつも、とにかく物件選びを楽しむこと。それこそが、皆様が理想の物件に巡り合う一番の近道となります。<br>ご自身が主役となり楽しく物件を選んでいただくことを使命とし、株式会社BATONは皆様をしっかりとサポートさせていただきます!<br>

                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- 設立の目的 --}}
            {{-- <section class="cb_free_space num1 " id="cb_content_1">
                <div class="post_content clearfix" id="about_us">
                    <div class="design_header inview">
                        <div class="title_area">
                        </div>
                    </div>
                    <div class="post_row inview slide_up_animation">
                        <div class="post_col post_col-2 rich_font">
                            <h3 class="catch rich_font">| 設立の目的 </h3>
                        </div>
                        <div class="post_col post_col-2">
                            <p>株式会社BATONを設立した目的は企業理念の通り「100年後の笑顔を創る」ことです。<br>
                                昨今の社会情勢は「地球温暖化」「社会情勢の変化」「超高齢化社会」など将来へ向け多くの懸念材料が存在しております。<br>そのような現状を踏まえ大切なことは、次世代が希望を持てる将来へ向け、私たち一人一人にできること、やるべきことを常に考え、そして一つずつでも行動することだと考えております。<br>
                                社名の由来は希望に満ちた輝かしい未来へ繋ぐ「BATON」となること。出来ることには限りがあるかもしれませんが、この想いを胸に日々の業務に全力で取り組んで参ります。
                            </p>
                        </div>
                    </div>
                </div>
            </section> --}}

        </div>

        @include('landing.components.footer')


    </div><!-- #container -->

    {{-- <div id="return_top">
        <a class="no_auto_scroll" href="#body">
         </a>
    </div> --}}

    @include('landing.components.landing_page_mobile_header')
@endsection

@section('js')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?ver=10.2.0"
        id="swiper-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jquery.easing.1.4.js?ver=1.0"
        id="jquery.easing.1.4-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jquery.cookie.min.js?ver=1.0"
        id="jquery.cookie.min-js"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/assets/js/prism.js?ver=2.0.1"
        id="hcb-prism-js"></script>
    <script type="text/javascript" src="https://demo.tcd-theme.com/tcd103/wp-includes/js/clipboard.min.js?ver=2.0.11"
        id="clipboard-js"></script>


    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/themes/genesis_tcd103/js/jscript.js?ver=1.0" id="jscript-js">
    </script>

    <script type="text/javascript" id="hcb-script-js-extra"></script>
    <script type="text/javascript"
        src="https://demo.tcd-theme.com/tcd103/wp-content/plugins/highlighting-code-block/build/js/hcb_script.js?ver=2.0.1"
        id="hcb-script-js"></script>
    <script>
        (function($) {})(jQuery);
        (function($) {

            if ($('.blog_carousel_wrap').length) {
                let blog_carousel5 = new Swiper("#cb_content_5 .blog_carousel_wrap", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    grabCursor: true,
                    scrollbar: {
                        el: "#cb_content_5 .blog_carousel_scrollbar",
                        hide: false,
                        draggable: true,
                        dragSize: 120,
                    },
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                    breakpoints: {
                        800: {
                            scrollbar: {
                                dragSize: 200,
                            },
                        }
                    }
                });
            };
            if ($('.blog2_carousel_wrap').length) {
                let blog_carousel5 = new Swiper("#cb_content_2 .blog2_carousel_wrap", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    grabCursor: true,
                    scrollbar: {
                        el: "#cb_content_2 .blog2_carousel_scrollbar",
                        hide: false,
                        draggable: true,
                        dragSize: 120,
                    },
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                    breakpoints: {
                        800: {
                            scrollbar: {
                                dragSize: 200,
                            },
                        }
                    }
                });
            };

            if ($('.cb_service_category_list_carousel').length) {
                let cb_service_category_list_carousel = new Swiper(".cb_service_category_list_carousel", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    resistanceRatio: 0,
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                    navigation: {
                        nextEl: ".cb_service_category_list_button_next",
                        prevEl: ".cb_service_category_list_button_prev",
                    },
                });
            };

            $(window).on('load resize', function() {
                image_height = $('.cb_service_category_list_carousel .item').height();
                $('.cb_service_category_list_button_prev, .cb_service_category_list_button_next').css('top',
                    image_height / 2);
            });

        })(jQuery);

        (function($) {

            if ($('#footer_nav').length) {
                let footer_nav = new Swiper("#footer_nav", {
                    loop: false,
                    centeredSlides: false,
                    slidesPerView: "auto",
                    grabCursor: true,
                    freeMode: {
                        enabled: true,
                        sticky: false,
                        momentumBounce: false,
                    },
                });
            };

        })(jQuery);


        function after_load() {
            (function($) {

                $('body').addClass('end_loading');

                setTimeout(function() {
                    $('html').addClass('end_loading_show_scroll_bar');
                }, 100);

                setTimeout(function() {
                    (function($) {

                        const targets = document.querySelectorAll('.inview');
                        const options = {
                            root: null,
                            rootMargin: '-100px 0px',
                            threshold: 0
                        };
                        const observer = new IntersectionObserver(intersect, options);
                        targets.forEach(target => {
                            observer.observe(target);
                        });

                        function intersect(entries) {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    $(entry.target).addClass('animate');
                                    $(".item", entry.target).each(function(i) {
                                        $(this).delay(i * 300).queue(function(next) {
                                            $(this).addClass('animate');
                                            next();
                                        });
                                    });
                                    observer.unobserve(entry.target);
                                }
                            });
                        }
                    })(jQuery);

                    // #header_messageが存在する場合のみ処理を実行
                    if ($('#header_message').length) {
                        const headerMessageHeight = jQuery('#header_message').outerHeight();
                        // スクロール位置によって#headerのpositionとtopのスタイルを動的に変更
                        $(window).on('scroll', function() {
                            const scrollPosition = jQuery(this).scrollTop();
                            if (scrollPosition < headerMessageHeight) {
                                $('#header').css({
                                    'position': 'relative',
                                    'top': '0px'
                                });
                            } else {
                                $('#header').css({
                                    'position': 'fixed',
                                    'top': '0px'
                                });
                            }
                        });
                    }

                    setTimeout(function() {
                        $('#header').removeClass('first_animate');
                    }, 300);
                }, 10);

                setTimeout(function() {
                    $('#header_slider_wrap').addClass('start_slide');
                }, 900);
                window.dispatchEvent(new Event('initHeaderSlider'));
                // 画像の表示を設定
                $('.image').css('display', 'block');
                $('.divider').css('display', 'block');
                $('.top_message').css('display', 'block');
            })(jQuery);
        }
        (function($) {
            $('#site_loader_overlay').addClass('start_loading');
            $('#site_loader_overlay_for_catchphrase').addClass('start_loading');

            setTimeout(function() {
                $('#site_loader_overlay_for_catchphrase').addClass('active');
                $('#site_loader_overlay').addClass('active');
            }, 500);
            setTimeout(function() {
                after_load();
            }, 10);
        })(jQuery);

        // 画像リンクをクリックしたときにモーダルを表示
        // const imageLinks = document.querySelectorAll('.image-link');
        // const modal = document.querySelector('.modal');
        // const modalContent = modal.querySelector('.modal-content');
        // const closeModal = modal.querySelector('.close');
        // const scrollBar = document.querySelector('.genesis_carousel_scrollbar');
        // const header = document.querySelector('#header');

        // imageLinks.forEach(function(link) {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         modalContent.src = this.href;
        //         modal.style.display = 'block';
        //         scrollBar.style.display = 'none';
        //         header.style.display = 'none';
        //     });
        // });

        // // モーダルの閉じるボタンがクリックされたとき、モーダルを非表示にする
        // closeModal.addEventListener('click', function() {
        //     modal.style.display = 'none';
        //     header.style.display = 'block';
        //     scrollBar.style.display = 'block';
        // });
        // // モーダルの背景がクリックされたとき、モーダルを非表示にする
        // window.addEventListener('click', function(event) {
        //     if (event.target === modal) {
        //         modal.style.display = 'none';
        //         header.style.display = 'block';
        //         scrollBar.style.display = 'block';
        //     }
        // });
    </script>
@endsection
