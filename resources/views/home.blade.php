@extends('layouts.main') @section('content')

<div class="hero">
    <div class="hero__wrapper">
        <div class="hero__text">
            <h1 class="hero__title">
                Sprzedaż i serwis urządzeń Konica Minolta,
                <span class="hero__title hero__title--colored"
                    >zaufaj K2System</span
                >
            </h1>
            <p class="hero__description">
                Zajmujemy się kompleksową obsługą firm w zakresie druku i
                kopiowania. Oferujemy niezawodne kserokopiarki, tonery i serwis
                dopasowany do Twoich potrzeb biznesowych. Postaw na sprawdzone
                rozwiązania i japońską jakość.
            </p>
            <div class="hero__buttons">
                <a href="#" class="hero__button"
                    >Nasza oferta
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 -960 960 960"
                        class="hero__icon"
                    >
                        <path
                            d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                        /></svg
                ></a>
                <a href="#" class="hero__button hero__button--empty"
                    >Kontakt z nami
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="hero__icon"
                        viewBox="0 -960 960 960"
                    >
                        <path
                            d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                        /></svg
                ></a>
            </div>
        </div>
        <div class="hero__image-wrapper">
            <img
                src="{{ asset('img/home/printer-hero.png') }}"
                alt=""
                class="hero__image"
            />
        </div>
        <div class="hero__logos">
            <img src="{{ asset('home/') }}" alt="" class="hero__logo" />
        </div>
    </div>
</div>

<div class="section section--first offer">
    <div class="section__heading">
        <div class="section__title-wrapper">
            <h2 class="section__title">
                Nasza
                <span class="section__title section__title--colored"
                    >oferta</span
                >
            </h2>
        </div>
        <p class="section__subtitle">
            Kompleksowe rozwiązania dla Twojego biura – od sprzedaży po serwis.
            Dobierz sprzęt, który idealnie odpowiada na potrzeby Twojej firmy.
        </p>
    </div>
    <div class="offer__wrapper">
        <div class="offer__item">
            <div class="offer__icon-wrapper">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="offer__icon"
                >
                    <path
                        d="M856-390 570-104q-12 12-27 18t-30 6q-15 0-30-6t-27-18L103-457q-11-11-17-25.5T80-513v-287q0-33 23.5-56.5T160-880h287q16 0 31 6.5t26 17.5l352 353q12 12 17.5 27t5.5 30q0 15-5.5 29.5T856-390ZM513-160l286-286-353-354H160v286l353 354ZM260-640q25 0 42.5-17.5T320-700q0-25-17.5-42.5T260-760q-25 0-42.5 17.5T200-700q0 25 17.5 42.5T260-640Zm220 160Z"
                    />
                </svg>
            </div>
            <h3 class="offer__title">Sprzedaż detaliczna</h3>
            <p class="offer__description">
                Oferujemy szeroki wybór nowych i poleasingowych kserokopiarek
                Konica Minolta. Sprzęt dopasowany do potrzeb biura, z gwarancją
                niezawodności.
            </p>
        </div>
        <div class="offer__item">
            <div class="offer__icon-wrapper">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="offer__icon"
                >
                    <path
                        d="M640-640v-120H320v120h-80v-200h480v200h-80Zm-480 80h640-640Zm560 100q17 0 28.5-11.5T760-500q0-17-11.5-28.5T720-540q-17 0-28.5 11.5T680-500q0 17 11.5 28.5T720-460Zm-80 260v-160H320v160h320Zm80 80H240v-160H80v-240q0-51 35-85.5t85-34.5h560q51 0 85.5 34.5T880-520v240H720v160Zm80-240v-160q0-17-11.5-28.5T760-560H200q-17 0-28.5 11.5T160-520v160h80v-80h480v80h80Z"
                    />
                </svg>
            </div>
            <h3 class="offer__title">Dzierżawa kserokopiarek</h3>
            <p class="offer__description">
                Wynajmij nowoczesne urządzenia bez inwestycji początkowej. Stała
                opłata, serwis w cenie i sprzęt gotowy do pracy od pierwszego
                dnia.
            </p>
        </div>
        <div class="offer__item">
            <div class="offer__icon-wrapper">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="offer__icon"
                >
                    <path
                        d="M756-120 537-339l84-84 219 219-84 84Zm-552 0-84-84 276-276-68-68-28 28-51-51v82l-28 28-121-121 28-28h82l-50-50 142-142q20-20 43-29t47-9q24 0 47 9t43 29l-92 92 50 50-28 28 68 68 90-90q-4-11-6.5-23t-2.5-24q0-59 40.5-99.5T701-841q15 0 28.5 3t27.5 9l-99 99 72 72 99-99q7 14 9.5 27.5T841-701q0 59-40.5 99.5T701-561q-12 0-24-2t-23-7L204-120Z"
                    />
                </svg>
            </div>
            <h3 class="offer__title">Serwis, części, tonery</h3>
            <p class="offer__description">
                Zapewniamy szybki serwis, oryginalne części zamienne oraz
                wysokiej jakości tonery. Gwarantujemy niezawodność i ciągłość
                pracy urządzeń.
            </p>
        </div>
        <div class="offer__item">
            <div class="offer__icon-wrapper">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="offer__icon"
                >
                    <path
                        d="M475-160q4 0 8-2t6-4l328-328q12-12 17.5-27t5.5-30q0-16-5.5-30.5T817-607L647-777q-11-12-25.5-17.5T591-800q-15 0-30 5.5T534-777l-11 11 74 75q15 14 22 32t7 38q0 42-28.5 70.5T527-522q-20 0-38.5-7T456-550l-75-74-175 175q-3 3-4.5 6.5T200-435q0 8 6 14.5t14 6.5q4 0 8-2t6-4l136-136 56 56-135 136q-3 3-4.5 6.5T285-350q0 8 6 14t14 6q4 0 8-2t6-4l136-135 56 56-135 136q-3 2-4.5 6t-1.5 8q0 8 6 14t14 6q4 0 7.5-1.5t6.5-4.5l136-135 56 56-136 136q-3 3-4.5 6.5T454-180q0 8 6.5 14t14.5 6Zm-1 80q-37 0-65.5-24.5T375-166q-34-5-57-28t-28-57q-34-5-56.5-28.5T206-336q-38-5-62-33t-24-66q0-20 7.5-38.5T149-506l232-231 131 131q2 3 6 4.5t8 1.5q9 0 15-5.5t6-14.5q0-4-1.5-8t-4.5-6L398-777q-11-12-25.5-17.5T342-800q-15 0-30 5.5T285-777L144-635q-9 9-15 21t-8 24q-2 12 0 24.5t8 23.5l-58 58q-17-23-25-50.5T40-590q2-28 14-54.5T87-692l141-141q24-23 53.5-35t60.5-12q31 0 60.5 12t52.5 35l11 11 11-11q24-23 53.5-35t60.5-12q31 0 60.5 12t52.5 35l169 169q23 23 35 53t12 61q0 31-12 60.5T873-437L545-110q-14 14-32.5 22T474-80Zm-99-560Z"
                    />
                </svg>
            </div>
            <h3 class="offer__title">Hurtownia, współpraca z dystrybutorami</h3>
            <p class="offer__description">
                Wspieramy firmy i resellerów w zakresie hurtowej sprzedaży
                sprzętu i materiałów eksploatacyjnych. Oferujemy atrakcyjne ceny
                i stałą dostępność.
            </p>
        </div>
        <div class="offer__item">
            <div class="offer__icon-wrapper">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="offer__icon"
                >
                    <path
                        d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"
                    />
                </svg>
            </div>
            <h3 class="offer__title">Instalacja i konfiguracja na miejscu</h3>
            <p class="offer__description">
                Dostarczamy sprzęt do Twojej siedziby, instalujemy go i
                konfigurujemy do pracy w sieci. Wszystko bez stresu – od razu
                gotowe do użycia.
            </p>
        </div>
        <div class="offer__item">
            <div class="offer__icon-wrapper">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="offer__icon"
                >
                    <path
                        d="M440-120v-80h320v-284q0-117-81.5-198.5T480-764q-117 0-198.5 81.5T200-484v244h-40q-33 0-56.5-23.5T80-320v-80q0-21 10.5-39.5T120-469l3-53q8-68 39.5-126t79-101q47.5-43 109-67T480-840q68 0 129 24t109 66.5Q766-707 797-649t40 126l3 52q19 9 29.5 27t10.5 38v92q0 20-10.5 38T840-249v49q0 33-23.5 56.5T760-120H440Zm-80-280q-17 0-28.5-11.5T320-440q0-17 11.5-28.5T360-480q17 0 28.5 11.5T400-440q0 17-11.5 28.5T360-400Zm240 0q-17 0-28.5-11.5T560-440q0-17 11.5-28.5T600-480q17 0 28.5 11.5T640-440q0 17-11.5 28.5T600-400Zm-359-62q-7-106 64-182t177-76q89 0 156.5 56.5T720-519q-91-1-167.5-49T435-698q-16 80-67.5 142.5T241-462Z"
                    />
                </svg>
            </div>
            <h3 class="offer__title">Zdalna pomoc techniczna</h3>
            <p class="offer__description">
                Oferujemy szybką pomoc zdalną dla klientów. Wystarczy zgłoszenie
                – nasi technicy połączą się online i rozwiążą problem bez wizyty
                w biurze.
            </p>
        </div>
    </div>
</div>

<div class="section about">
    <div class="about__wrapper">
        <div class="about__text">
            <h2 class="about__heading">
                Kim jesteśmy i
                <span class="about__heading about__heading--colored"
                    >co nas wyróżnia?</span
                >
            </h2>
            <p class="about__description">
                K2system to bezpośredni importer urządzeń Konica Minolta,
                specjalizujący się w sprzedaży, dzierżawie oraz serwisie
                kserokopiarek i drukarek dla firm. Działamy lokalnie i
                międzynarodowo, dostarczając urządzenia o japońskiej
                niezawodności i niskich kosztach eksploatacji. Obsługujemy
                klientów indywidualnych, firmy i instytucje publiczne, zawsze
                stawiając na jakość, elastyczność i profesjonalizm.
            </p>
            <p class="about__description">
                Zaufały nam dziesiątki firm z różnych branż – od biur i urzędów,
                po szkoły i sklepy. Zawsze dopasowujemy ofertę do potrzeb
                klienta, dbając o najwyższą jakość obsługi.
            </p>
            <div class="about__features">
                <div class="about__feature">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 -960 960 960"
                        class="about__icon"
                    >
                        <path
                            d="M754-81q-8 0-15-2.5T726-92L522-296q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l85-85q6-6 13-8.5t15-2.5q8 0 15 2.5t13 8.5l204 204q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13l-85 85q-6 6-13 8.5T754-81Zm0-95 29-29-147-147-29 29 147 147ZM205-80q-8 0-15.5-3T176-92l-84-84q-6-6-9-13.5T80-205q0-8 3-15t9-13l212-212h85l34-34-165-165h-57L80-765l113-113 121 121v57l165 165 116-116-43-43 56-56H495l-28-28 142-142 28 28v113l56-56 142 142q17 17 26 38.5t9 45.5q0 24-9 46t-26 39l-85-85-56 56-42-42-207 207v84L233-92q-6 6-13 9t-15 3Zm0-96 170-170v-29h-29L176-205l29 29Zm0 0-29-29 15 14 14 15Zm549 0 29-29-29 29Z"
                        />
                    </svg>
                    <span class="about__feature-name">Niezawodny serwis</span>
                </div>
                <div class="about__feature">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 -960 960 960"
                        class="about__icon"
                    >
                        <path
                            d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z"
                        />
                    </svg>
                    <span class="about__feature-name">Własny transport</span>
                </div>
                <div class="about__feature">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 -960 960 960"
                        class="about__icon"
                    >
                        <path
                            d="M120-120v-560h160v-160h400v320h160v400H520v-160h-80v160H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z"
                        />
                    </svg>
                    <span class="about__feature-name">Oferta dla firm</span>
                </div>
            </div>
        </div>
        <img
            src="{{ asset('img/home/about-image.png') }}"
            alt=""
            class="about__image"
        />
    </div>
</div>

<div class="section products">
    <div class="section__heading">
        <div class="section__title-wrapper">
            <h2 class="section__title">
                Sprawdź
                <span class="section__title section__title--colored"
                    >nasze produkty</span
                >
            </h2>
        </div>
        <p class="section__subtitle">
            Profesjonalne urządzenia biurowe Konica Minolta – gotowe do
            codziennej pracy w Twojej firmie.
        </p>
        <a href="{{ route('shop') }}" class="products__button"
            >Wszystkie produkty
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 -960 960 960"
                class="hero__icon"
            >
                <path
                    d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                /></svg
        ></a>
    </div>
    <div class="products__wrapper">
        <div class="swiper products__swiper">
            <div class="swiper-wrapper">
                @foreach($products as $product)
                <div class="swiper-slide">
                    <a
                        href="{{ route('product', $product->slug) }}"
                        class="products__item"
                    >
                        <div class="products__image-wrapper">
                            @if($product->bestseller === true)
                            <div class="products__badge">Bestseller</div>
                            @endif
                            <img
                                src="{{ asset('storage/'.$product->thumbnail) }}"
                                alt=""
                                class="products__image"
                            />
                        </div>
                        <div class="products__text">
                            <h3 class="products__name">
                                {{ $product->name }}
                            </h3>
                            <div class="products__bottom">
                                <span class="products__price">
                                    {{ $product->price }} zł</span
                                >
                                <span class="products__link"
                                    >Zobacz produkt
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="products__icon"
                                        viewBox="0 -960 960 960"
                                    >
                                        <path
                                            d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                                        /></svg
                                ></span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection @section('scripts')

<script>
    const swiper = new Swiper(".swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 4000,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
</script>

@endsection
