<?php
include 'includes/header.php';

$category = $_GET['kategoria'] ?? "";
$category = match (strtolower($category)) {
    'kosicky-med' => 'kosicky-med',
    'kokosovy-kmen' => 'kokosovy-kmen',
    'ostatne' => 'ostatne',
    default => 'turecky-med'
};

// Define products for each category
$products = [
        'turecky-med' => [
                [
                        'image' => 'assets/images/turecky-med/trubicka.png',
                        'alt' => 'Trubička s tureckým medom',
                        'title' => '<span>Trubička s</span> tureckým medom',
                        'description' => 'Krehká trubička plnená tureckým medom.',
                        'weight' => '20g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-kornut-coko.png',
                        'alt' => 'Turecký med v kornútku',
                        'title' => '<span>Turecký med</span><br>v kornútku',
                        'description' => 'Chrumkavý kornútok s tureckým medom a čokoládovou polevou.',
                        'weight' => '30g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-kornutok-pistacia.png',
                        'alt' => 'Turecký med v kornútku',
                        'title' => '<span>Turecký med</span><br>v kornútku',
                        'description' => 'Chrumkavý kornútok s tureckým medom posypaný sekanými arašidmi.',
                        'weight' => '40g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-kornut-velky.png',
                        'alt' => 'Turecký med v kornútku',
                        'title' => '<span>Turecký med</span><br>v kornútku',
                        'description' => 'Chrumkavý kornútok s tureckým medom posypaný sekanými arašidmi.',
                        'weight' => '50g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-sekany-s-jahodami.png',
                        'alt' => 'Turecký med so sušenými jahodami',
                        'title' => '<span>Turecký med</span> so sušenými jahodami',
                        'description' => 'Pravý sekaný turecký med so sušenými jahodami.',
                        'weight' => '55g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-sekany-pistacie.png',
                        'alt' => 'Turecký med s pistáciami',
                        'title' => '<span>Turecký med</span> s pistáciami',
                        'description' => 'Pravý sekaný turecký med s pistáciami.',
                        'weight' => '65g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-pohar-maly.png',
                        'alt' => 'Turecký med v pohári',
                        'title' => '<span>Turecký med</span><br>v pohári',
                        'description' => 'Bielková pena s čokoládovou polevou alebo arašidmi. <span>Varianty</span>: jahoda, banán, karamel a pistácia.',
                        'weight' => '100g'
                ],
                [
                        'image' => 'assets/images/turecky-med/pravy-sekany-turecky.png',
                        'alt' => 'Pravý sekaný turecký med',
                        'title' => '<span>Pravý sekaný</span> turecký med',
                        'description' => 'Pravý sekaný turecký med pripravovaný tradičnou metódou.',
                        'weight' => '150g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-med-pohar.png',
                        'alt' => 'Turecký med v pohári',
                        'title' => '<span>Turecký med</span><br>v pohári',
                        'description' => 'Bielková pena s čokoládovou polevou alebo arašidmi. <span>Varianty</span>: jahoda, banán, karamel a pistácia.',
                        'weight' => '170g'
                ],
                [
                        'image' => 'assets/images/turecky-med/turecky-tanier-3-prichute.png',
                        'alt' => 'Turecký med tri príchute',
                        'title' => '<span>Turecký med</span> tri príchute',
                        'description' => 'Bielková pena v troch príchutiach.',
                        'weight' => '190g'
                ]
        ],
        'kosicky-med' => [
                [
                        'image' => 'assets/images/kosicky-med/kosicky-med-maly.png',
                        'alt' => 'Košický med malý',
                        'title' => '<span>Košický</span> med',
                        'description' => 'Ručne robený košický med vo variante s arašidmi, kávovou pastou a klasik.',
                        'weight' => '55g'
                ],
                [
                        'image' => 'assets/images/kosicky-med/skoricak.png',
                        'alt' => 'Košický med škoricový',
                        'title' => '<i>"</i><span>škoričák</span><i>"</i>',
                        'description' => 'Ručne vyrábaný košický med so sušenými jablkami.',
                        'weight' => '60g'
                ],
                [
                        'image' => 'assets/images/kosicky-med/kosicky-med-klasik.png',
                        'alt' => 'Košický med klasik',
                        'title' => '<span>Košický</span> med',
                        'description' => 'Tradičný košický med medzi chrumkavými oblátkami s arašidmi vo vnútri.',
                        'weight' => '70g'
                ],
                [
                        'image' => 'assets/images/kosicky-med/kosicky-med-marakanka.png',
                        'alt' => 'Košický med marakanka',
                        'title' => '<span>Košický med</span> marakanka',
                        'description' => 'Tradičný košický med na chrumkavej oblátke s arašidmi a čokoládovou polevou na povrchu.',
                        'weight' => '70g'
                ],
                [
                        'image' => 'assets/images/kosicky-med/kosicky-s-kandiz-ovocim.png',
                        'alt' => 'Košický med s kandizovaným ovocím',
                        'title' => '<span>Košický med</span> s kandizovaným ovocím',
                        'description' => 'Tradičný košický med na chrumkavej oblátke s kandizovaným ovocím.',
                        'weight' => '70g'
                ]
        ],
        'kokosovy-kmen' => [
                [
                        'image' => 'assets/images/kokosovy-kmen/remeselky-kakaovy-kratky.png',
                        'alt' => 'Remeselný kokosový kmeň',
                        'title' => 'Remeselný <span>kokosový kmeň</span>',
                        'description' => 'Ručne robený kokosový kmeň s kakaom.',
                        'weight' => '100g'
                ],
                [
                        'image' => 'assets/images/kokosovy-kmen/remeselny-kakaovy-dlhy.png',
                        'alt' => 'Remeselný kokosový kmeň',
                        'title' => 'Remeselný <span>kokosový kmeň</span>',
                        'description' => 'Ručne robený kokosový kmeň s kakaom (dlhý).',
                        'weight' => '100g'
                ],
                [
                        'image' => 'assets/images/kokosovy-kmen/remeselny-mliecny-kratky.png',
                        'alt' => 'Remeselný kokosový kmeň',
                        'title' => 'Remeselný <span>kokosový kmeň</span>',
                        'description' => 'Ručne robený mliečny kokosový kmeň.',
                        'weight' => '100g'
                ],
                [
                        'image' => 'assets/images/kokosovy-kmen/remeselny-mliecny-dlhy.png',
                        'alt' => 'Remeselný kokosový kmeň',
                        'title' => 'Remeselný <span>kokosový kmeň</span>',
                        'description' => 'Ručne robený mliečny kokosový kmeň (dlhý).',
                        'weight' => '100g'
                ],
                [
                        'image' => 'assets/images/kokosovy-kmen/kokosova-rolada.png',
                        'alt' => 'Kokosová roláda',
                        'title' => 'Kokosová <span>roláda</span>',
                        'description' => 'Kokosová roláda s rumovou príchuťou.',
                        'weight' => '500g'
                ],
                [
                        'image' => 'assets/images/kokosovy-kmen/kokos-rolada-v-roznych-prevedeniach.png',
                        'alt' => 'Kokosová roláda v rôznych prevedeniach',
                        'title' => 'Kokosová <span>roláda</span>',
                        'description' => 'Vyhotovenie v rôznych prevedeniach a príchutiach.',
                        'weight' => ''
                ]
        ],
        'ostatne' => [
                [
                        'image' => 'assets/images/ostatne/zele-cervene.png',
                        'alt' => 'Ovocné želé',
                        'title' => '<span>Ovocné</span> želé',
                        'description' => 'Ovocné želé z pravej želatíny.',
                        'weight' => '75g'
                ],
                [
                        'image' => 'assets/images/ostatne/zele-oranzove.png',
                        'alt' => 'Ovocné želé',
                        'title' => '<span>Ovocné</span> želé',
                        'description' => 'Ovocné želé z pravej želatíny.',
                        'weight' => '75g'
                ],
                [
                        'image' => 'assets/images/ostatne/zele-trikolora.png',
                        'alt' => 'Želé žužu',
                        'title' => '<span>Želé</span> <i>"</i>žužu<i>"</i><br><small>v troch farbách</small>',
                        'description' => 'Ovocné želé z pravej želatíny.',
                        'weight' => '75g'
                ],
                [
                        'image' => 'assets/images/ostatne/zele-zelene.png',
                        'alt' => 'Ovocné želé',
                        'title' => '<span>Ovocné</span> želé',
                        'description' => 'Ovocné želé z pravej želatíny.',
                        'weight' => '75g'
                ],
                [
                        'image' => 'assets/images/ostatne/madarske-zele.png',
                        'alt' => 'želé trikolóra',
                        'title' => '<span>želé</span> trikolóra',
                        'description' => 'Ovocné želé z pravej želatíny.',
                        'weight' => '75g'
                ],
                [
                        'image' => 'assets/images/ostatne/pistaciova-gula.png',
                        'alt' => 'pistáciová guľa',
                        'title' => '<span>pistáciová</span> guľa',
                        'description' => 'Košický med so sekanými pistáciami',
                        'weight' => '100g'
                ],
                [
                        'image' => 'assets/images/ostatne/trio-exclusive.png',
                        'alt' => 'Trio exclusive',
                        'title' => '<span>Trio</span> exclusive',
                        'description' => 'Trio košického medu s kokosom a brusnicami, slaným karamelom a pravým kakaom.',
                        'weight' => '150g'
                ],
                [
                        'image' => 'assets/images/ostatne/grilazky.png',
                        'alt' => 'grilážky',
                        'title' => '<i>"</i><span>grilážky</span><i>"</i>',
                        'description' => 'Lahodný mliečny karamel medzi chrumkavými oblátkami.',
                        'weight' => '38g, 70g'
                ],
                [
                        'image' => 'assets/images/ostatne/darcekovy-balicek.png',
                        'alt' => 'darčekové balenie',
                        'title' => '<span>darčekové</span> balenie',
                        'description' => 'Darčekové balenie na základe individuálnych požiadaviek.',
                        'weight' => ''
                ]
        ]
];

$currentProducts = $products[$category];

// Split products into pages for desktop (4 per page in 2x2 grid)
$desktopPages = array_chunk($currentProducts, 4);

// Split products into pages for mobile (3 per page in 3x1 grid)
$mobilePages = array_chunk($currentProducts, 3);
?>

    <main class="products-page">
        <img class="desktop-bg" src="assets/images/desktop-products-bg.png">
        <img class="mobile-bg" src="assets/images/mobile-products-bg.png">

        <div class="categories">
            <a href="/produkty?kategoria=turecky-med"
               class="btn btn--solid btn--medium <?= $category === 'turecky-med' ? 'active' : '' ?>">Turecký med</a>
            <a href="/produkty?kategoria=kosicky-med"
               class="btn btn--solid btn--medium <?= $category === 'kosicky-med' ? 'active' : '' ?>">Košický med</a>
            <a href="/produkty?kategoria=kokosovy-kmen"
               class="btn btn--solid btn--medium <?= $category === 'kokosovy-kmen' ? 'active' : '' ?>">Kokosový kmeň</a>
            <a href="/produkty?kategoria=ostatne"
               class="btn btn--solid btn--medium <?= $category === 'ostatne' ? 'active' : '' ?>">Ostatné</a>
        </div>

        <!-- Desktop Slider -->
        <div class="products-slider-wrapper desktop">
            <div class="products-slider-desktop swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($desktopPages as $page): ?>
                        <div class="swiper-slide">
                            <div class="products-grid-desktop">
                                <?php foreach ($page as $product): ?>
                                    <div class="product">
                                        <img src="<?= $product['image'] ?>" alt="<?= $product['alt'] ?>">
                                        <div class="text-content">
                                            <h3><?= $product['title'] ?></h3>
                                            <p><?= $product['description'] ?></p>
                                            <?php if (!empty($product['weight'])): ?>
                                                <small><?= $product['weight'] ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="nav-wrapper">
                <button class="swiper-button-prev-desktop" type="button"><span>‹</span></button>
                <div class="swiper-pagination-desktop"></div>
                <button class="swiper-button-next-desktop" type="button"><span>›</span></button>
            </div>
        </div>

        <!-- Mobile Slider -->
        <div class="products-slider-wrapper mobile">
            <div class="products-slider-mobile swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($mobilePages as $page): ?>
                        <div class="swiper-slide">
                            <div class="products-grid-mobile">
                                <?php foreach ($page as $product): ?>
                                    <div class="product">
                                        <img src="<?= $product['image'] ?>" alt="<?= $product['alt'] ?>">
                                        <div class="text-content">
                                            <h3><?= $product['title'] ?></h3>
                                            <p><?= $product['description'] ?></p>
                                            <?php if (!empty($product['weight'])): ?>
                                                <small><?= $product['weight'] ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="nav-wrapper">
                <button class="swiper-button-prev-mobile" type="button"><span>‹</span></button>
                <div class="swiper-pagination-mobile"></div>
                <button class="swiper-button-next-mobile" type="button"><span>›</span></button>
            </div>
        </div>

        <div class="footer-products">
            <p>Sladká chuť tradície</p>
            <img src="assets/images/logo-black.png" alt="Kima">
        </div>
    </main>

<?php include 'includes/footer.php'; ?>