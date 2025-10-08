<footer class="footer">
    <div class="footer__container">
        <div class="footer__column footer__column--first">
            <img
                src="{{ asset('img/logo.jpeg') }}"
                alt="Logo K2 System Robert Białogłowicz"
                class="footer__logo"
            />
            <p class="footer__text">
                K2system – dystrybucja, serwis i wynajem urządzeń biurowych
                Konica Minolta. Profesjonalna obsługa firm i instytucji na
                terenie Polski i Unii Europejskiej.
            </p>
        </div>
        <div class="footer__column">
            <h4 class="footer__heading">Szybki dostęp</h4>
            <ul class="footer__list">
                <li class="footer__item">
                    <a href="{{ route('home') }}" class="footer__link"
                        >Strona główna</a
                    >
                </li>
                <li class="footer__item">
                    <a href="{{ route('page', 'o-nas') }}" class="footer__link"
                        >O nas</a
                    >
                </li>
                <li class="footer__item">
                    <a
                        href="{{ route('page', 'dostawa') }}"
                        class="footer__link"
                        >Dostawa</a
                    >
                </li>
                <li class="footer__item">
                    <a href="{{ route('shop') }}" class="footer__link">Sklep</a>
                </li>
                <li class="footer__item">
                    <a href="#" class="footer__link">Kontakt</a>
                </li>
            </ul>
        </div>
        <div class="footer__column">
            <h4 class="footer__heading">Informacje</h4>
            <ul class="footer__list">
                <li class="footer__item">
                    <a
                        href="{{ route('page', 'polityka-prywatnosci') }}"
                        class="footer__link"
                        >Polityka prywatności</a
                    >
                </li>
                <li class="footer__item">
                    <a
                        href="{{ route('page', 'regulamin') }}"
                        class="footer__link"
                        >Regulamin</a
                    >
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__bottom">
        <p class="footer__text footer__text--white">
            Projekt i realizacja:
            <a
                class="footer__link footer__link--white"
                href="https://lipinskijakub.pl/pl"
                target="_blank"
                >Jakub Lipiński</a
            >
        </p>
    </div>
</footer>
