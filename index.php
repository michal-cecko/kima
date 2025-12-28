<?php include 'includes/header.php'; ?>

    <main class="products-page">
        <img class="desktop-bg" src="assets/images/desktop-homepage-bg.png">
        <img class="mobile-bg" src="assets/images/mobile-homepage-bg.png">

        <section class="product-section hero">
            <small>Since 1989</small>
            <img class="sladka-chut desktop" src="assets/images/sladka-chut-nadpis.png" alt="Sladká chuť">
            <img class="sladka-chut mobile" src="assets/images/sladka-chut-nadpis-mobile.png" alt="Sladká chuť">
            <img class="tradicie" src="assets/images/tradicie.png" alt="Tradície">
            <p>KAŽDÝ NÁŠ KÚSOK NESIE V SEBE CHUŤ MINULOSTI A DOTYK DOMOVA.<br>UŽ CELÉ DESAŤROČIA VYRÁBAME SLADKOSTI,
                KTORÉ SPÁJAJÚ RODINY - TAK AKO KEDYSI.</p>
        </section>


        <section class="product-section turecky">
            <img class="turecky-med" src="assets/images/turecky-med-nadpis.png" alt="Turecký med">
            <p>Lahodný turecký med v rôznych prevedeniach</p>
            <a href="/produkty?kategoria=turecky-med" class="btn btn--medium btn--outline">Všetky produkty</a>
        </section>

        <section class="product-section kosicky">
            <img class="kosicky-med" src="assets/images/kosicky-med-nadpis.png" alt="Košický med">
            <p>RUČNE VYRÁBANÝ TRADIČNÝ KOŠICKÝ MED V RÔZNYCH PREVEDENIACH</p>
            <a href="/produkty?kategoria=kosicky-med" class="btn btn--medium btn--outline">Všetky produkty</a>
        </section>

        <section class="product-section grilazky">
            <img class="grilazky-img" src="assets/images/grilazky-nadpis.png" alt="Grilážky">
            <p>RUČNE VYRÁBANÁ ARAŠIDOVO KARAMELOVÁ GRILÁŽ</p>
            <a href="/produkty?kategoria=ostatne" class="btn btn--medium btn--outline">Všetky produkty</a>
        </section>

        <section class="product-section kokosovy-kmen">
            <img class="kokosovy-kmen-img" src="assets/images/kokosovy-kmen-nadpis.png" alt="Kokosový kmeň">
            <p>RUČNE ROBENÝ VÝROBOK S PRAVÝM KOKOSOM A KVALITNÝM KAKAOM</p>
            <a href="/produkty?kategoria=kokosovy-kmen" class="btn btn--medium btn--outline">Všetky produkty</a>
        </section>

        <section class="product-section zele">
            <img class="zele-img" src="assets/images/zele-nadpis.png" alt="Želé">
            <p>CHUTNÉ OVOCNÉ ŽELÉ V RÔZNYCH PREVEDENIACH</p>
            <a href="/produkty?kategoria=ostatne" class="btn btn--medium btn--outline btn--black">Všetky produkty</a>
        </section>

        <section class="product-section pravy-sekany-turecky">
            <img class="zele-img" src="assets/images/pravy-sekany-med-nadpis.png" alt="Pravý sekaný turecký med">
            <p>PRAVÝ SEKANÝ TURECKÝ MED PRIPRAVOVANÝ TRADIČNOU RECEPTÚROU</p>
            <a href="/produkty?kategoria=turecky-med" class="btn btn--medium btn--outline">Všetky produkty</a>
        </section>

        <section class="product-section o-nas" id="onas">
            <img class="o-nas-img" src="assets/images/o-nas-nadpis.png" alt="Niečo o nás">
            <p>Sme rodinná firma, ktorá už desaťročia uchováva a rozvíja receptúry staré takmer celé storočie. Vyrábame
                poctivé tradičné cukrovinky – turecké medy, košické medy či kokosový kmeň. <br><br>Naša filozofia spája
                remeselnú poctivosť minulosti s kvalitou a eleganciou dnešnej doby. Každý výrobok v sebe nesie kúsok
                histórie, rodinného odkazu a chuť, ktorá pripomína detstvo – no v modernej a prémiovej podobe. <br><br>S
                úctou, celý personál spoločnosti KIMA.</p>
        </section>

        <img class="partneri-img" src="assets/images/partneri-desktop.png" alt="Partneri">

        <form id="kontakt">
            <p>PRE PRÍPADNÚ SPOLUPRÁCU, VYHOTOVENIE CENOVEJ PONUKY ALEBO AKÝCHKOĽVEK POŽIADAVIEK NÁS NEVÁHAJTE
                KONTAKTOVAŤ.</p>
            <div class="input-group">
                <label for="name">Meno</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-group">
                <label for="message">Správa</label>
                <textarea name="message" id="message" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn--large btn--solid">Odoslať</button>
        </form>

        <footer>
            <p>Janka Kočvarová KIMA
                <br>Pod Sadom 73, 010 04 Žilina
                <br>Prevádzka: Sad SNP 14, 010 01 Žilina
                <br>IČO: 10938401
                <br>DIČ: 1020535153
                <br>IČ DPH: SK1020535153</p>
            <h3>SLADKÁ CHUŤ TRADÍCIE</h3>
            <img src="assets/images/logo-white.png" alt="Kima">
        </footer>
    </main>

<?php include 'includes/footer.php'; ?>