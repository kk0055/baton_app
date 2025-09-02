<style>
    #footer {
        background-color: #ffffff;
        padding: 60px 0 30px;
        font-family: 'Noto Sans JP', sans-serif;
    }

    #footer_inner {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    #footer_address {
        margin-bottom: 30px;
        font-size: 15px;
        line-height: 1.8;
        color: #333333;
    }

    #footer_address p {
        margin: 0;
    }

    #footer_address a {
        color: #026636;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    #footer_address a:hover {
        color: #039450;
    }

    #kurabeel {
        background-color: #f8f9fa;
        border: none;
        border-radius: 12px;
        padding: 25px;
        margin: 30px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #kurabeel:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    #kurabeel p {
        margin: 0;
        font-size: 15px;
        line-height: 1.8;
        color: #333333;
    }

    #kurabeel a {
        color: #026636;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    #kurabeel a:hover {
        color: #039450;
    }

    #footer_sns {
        list-style: none;
        padding: 0;
        margin: 30px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #footer_sns a {
        display: inline-block;
        transition: transform 0.3s ease;
    }

    #footer_sns a:hover {
        transform: translateY(-3px);
    }

    #footer_sns img {
        border-radius: 8px;
    }

    #copyright {
        text-align: center;
        font-size: 14px;
        margin: 0;
        border-top: 1px solid #eeeeee;
        justify-content: center;
    }

    @media (max-width: 767px) {
        #footer {
            padding: 40px 0 20px;
        }

        #footer_inner {
            padding: 0 15px;
        }

        #footer_address {
            font-size: 14px;
        }

        #kurabeel {
            padding: 20px;
            margin: 20px 0;
        }

        #kurabeel p {
            font-size: 14px;
        }
    }
</style>

<footer id="footer">
    <div id="footer_inner">
        {{-- <p id="footer_logo">
            <img class="logo_image pc" src="baton_baton_logo240819.png" alt="株式会社BATON" title="株式会社BATON" width="196" />
            <img class="logo_image mobile" src="baton_baton_logo240819.png" alt="株式会社BATON" title="株式会社BATON" width="155"
                height="70" />
        </p> --}}
        <div id="footer_address" class="post_content">
            <p>株式会社BATON<br>
                <span>〒156-0051
                    東京都世田谷区宮坂1-10-11</span>
            </p>
        </div>
        <div id="footer_address" class="post_content">
            <p>物件に関するお問い合わせは <a href="https://lit.link/en/xbatonx" target="_blank">こちら</a> よりお気軽にご連絡ください。</p>
        </div>
        <div id="kurabeel" class="post_content">
            <p>ご自身でお部屋を探していただき、気になる物件のURLをLINEで送るだけで、仲介手数料を大幅にお安くできるサービス、<a href="https://kurabeel.com/"
                    target="_blank">『ゼロレント』</a>を始めました。詳細が気になる方は、ぜひ<a href="https://kurabeel.com/"
                    target="_blank">こちら</a>からご確認ください。</p>
        </div>
        <div id="footer_sns">
            <a href="https://www.instagram.com/baton_2024/" target="_blank" aria-label="Instagram">
                <img src="Instagram_icon.png" alt="Instagram" style="width: 32px; height: 32px;">
            </a>
            <a href="https://lin.ee/r7mvGMy" target="_blank" aria-label="LINE">
                <img src="LINE.png" alt="LINE" style="width: 32px; height: 32px; margin-left: 20px;">
            </a>
        </div>
    </div>
    <p id="copyright">© BATON inc.</p>
</footer>
