<?php
$businesses = require __DIR__ . '/../config/businesses.php';
$heroImages = glob(__DIR__ . '/../assets/images/businesses/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);

/*
|--------------------------------------------------------------------------
| Convert absolute file paths to browser-friendly relative URLs
|--------------------------------------------------------------------------
*/
$heroImageUrls = array_map(function ($path) {
    return '../assets/images/businesses/' . basename($path);
}, $heroImages);

include 'layouts/header.php';
?>

<style>
/* ============================================================
   OUR BUSINESSES PAGE
   ============================================================ */

.biz-wrap * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.biz-wrap {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #222;
}

/* ── HERO ─────────────────────────────────────────────────── */
.biz-hero {
    position: relative;
    overflow: hidden;
    text-align: center;
    padding: 72px 24px 88px;
    min-height: 360px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #1e5e3e;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}

.biz-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(20, 77, 48, 0.15);
    z-index: 1;
}

.biz-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
        -45deg,
        transparent,
        transparent 40px,
        rgba(255,255,255,0.02) 40px,
        rgba(255,255,255,0.02) 41px
    );
    pointer-events: none;
    z-index: 2;
}

.biz-hero__content {
    position: relative;
    z-index: 3;
    max-width: 860px;
    width: 100%;
}

.biz-hero h1 {
    font-size: clamp(2.4rem, 5.5vw, 4.6rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.08;
    margin-bottom: 18px;
}

.biz-hero p {
    font-size: 15.5px;
    color: rgba(255,255,255,0.82);
    line-height: 1.7;
    max-width: 520px;
    margin: 0 auto;
}

/* ── BUSINESSES LIST ──────────────────────────────────────── */
.biz-list {
    background: #fff;
    padding: 64px 24px 80px;
}

.biz-list__inner {
    max-width: 1080px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 80px;
}

/* ── SINGLE BUSINESS ROW ─────────────────────────────────── */
.biz-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: center;
}

/* Even rows: image left, text right */
.biz-row--even .biz-row__img  { order: 1; }
.biz-row--even .biz-row__text { order: 2; }

/* Odd rows: text left, image right */
.biz-row--odd .biz-row__text { order: 1; }
.biz-row--odd .biz-row__img  { order: 2; }

/* ── IMAGE BLOCK ─────────────────────────────────────────── */
.biz-row__img img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    border-radius: 20px;
    display: block;
    box-shadow: 0 8px 32px rgba(0,0,0,0.10);
}

/* ── TEXT BLOCK ──────────────────────────────────────────── */
.biz-row__meta {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
}

/* Icon box */
.biz-row__icon {
    width: 44px;
    height: 44px;
    background: #e8f5ed;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.biz-row__icon svg {
    width: 22px;
    height: 22px;
    stroke: #1e5e3e;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
}

/* Category pill */
.biz-row__cat {
    background: #e8f5ed;
    color: #1e5e3e;
    font-size: 12px;
    font-weight: 700;
    padding: 4px 14px;
    border-radius: 100px;
    letter-spacing: 0.3px;
}

/* Title */
.biz-row__title {
    font-size: clamp(1.5rem, 3vw, 2rem);
    font-weight: 800;
    color: #1e5e3e;
    line-height: 1.2;
    margin-bottom: 14px;
}

/* Description */
.biz-row__desc {
    font-size: 14px;
    color: #555;
    line-height: 1.78;
    margin-bottom: 22px;
}

/* Features grid */
.biz-row__features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 24px;
    margin-bottom: 28px;
    list-style: none;
}

.biz-row__features li {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13.5px;
    font-weight: 600;
    color: #333;
}

.biz-row__features li::before {
    content: '';
    width: 8px;
    height: 8px;
    background: #27ae60;
    border-radius: 50%;
    flex-shrink: 0;
}

/* CTA button */
.biz-row__btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1e5e3e;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    padding: 13px 26px;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.2s ease, transform 0.2s ease;
    letter-spacing: 0.2px;
}

.biz-row__btn:hover {
    background: #155030;
    transform: translateY(-1px);
}

.biz-row__btn svg {
    width: 16px;
    height: 16px;
    stroke: #fff;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
    transition: transform 0.2s ease;
}

.biz-row__btn:hover svg {
    transform: translateX(3px);
}

/* Divider between rows */
.biz-divider {
    border: none;
    border-top: 1px solid #f0f0f0;
    margin: 0;
}

/* ── RESPONSIVE ───────────────────────────────────────────── */
@media (max-width: 860px) {
    .biz-hero {
        min-height: 300px;
        padding: 56px 20px 64px;
    }

    .biz-hero p {
        font-size: 14px;
        max-width: 460px;
    }

    .biz-row {
        grid-template-columns: 1fr;
        gap: 28px;
    }

    /* On mobile always show image on top, text below */
    .biz-row--even .biz-row__img,
    .biz-row--odd  .biz-row__img  { order: 1; }

    .biz-row--even .biz-row__text,
    .biz-row--odd  .biz-row__text { order: 2; }

    .biz-row__img img {
        height: 240px;
    }

    .biz-list {
        padding: 44px 20px 60px;
    }

    .biz-list__inner {
        gap: 56px;
    }
}

@media (max-width: 480px) {
    .biz-hero {
        min-height: 260px;
        padding: 44px 18px 52px;
    }

    .biz-hero h1 {
        font-size: 2.1rem;
        margin-bottom: 12px;
    }

    .biz-hero p {
        font-size: 13.5px;
        max-width: 320px;
    }

    .biz-row__features {
        grid-template-columns: 1fr;
    }

    .biz-row__img img {
        height: 210px;
        border-radius: 14px;
    }

    .biz-row__title {
        font-size: 1.5rem;
    }
}
</style>

<?php
// SVG icons keyed by name
function biz_icon(string $key): string {
    $icons = [
        'bolt'     => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>',
        'building' => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>',
        'flame'    => '<path d="M12 2c0 0-5.5 5-5.5 9.5a5.5 5.5 0 0 0 11 0C17.5 7 12 2 12 2z"/><path d="M12 12c0 0-2.5 2.5-2.5 4a2.5 2.5 0 0 0 5 0C14.5 14.5 12 12 12 12z"/>',
        'leaf'     => '<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>',
    ];
    return $icons[$key] ?? $icons['building'];
}
?>

<div class="biz-wrap">

    <!-- ══════════════════════════════════════
         HERO
    ══════════════════════════════════════ -->
    <section class="biz-hero" id="bizHero">
        <div class="biz-hero__content">
            <h1>Our Businesses</h1>
            <p>Discover the diverse verticals that make SLS Group a leader in multiple sectors.</p>
        </div>
    </section>

    <!-- ══════════════════════════════════════
         BUSINESSES LIST
    ══════════════════════════════════════ -->
    <section class="biz-list">
        <div class="biz-list__inner">

            <?php foreach ($businesses as $idx => $b):
                $rowClass = ($idx % 2 === 0) ? 'biz-row--odd' : 'biz-row--even';
            ?>

            <?php if ($idx > 0): ?>
                <hr class="biz-divider" />
            <?php endif; ?>

            <div class="biz-row <?= $rowClass ?>">

                <!-- IMAGE -->
                <div class="biz-row__img">
                    <img
                        src="<?= htmlspecialchars($b['image']) ?>"
                        alt="<?= htmlspecialchars($b['title']) ?>"
                        loading="lazy"
                    />
                </div>

                <!-- TEXT -->
                <div class="biz-row__text">

                    <div class="biz-row__meta">
                        <div class="biz-row__icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <?= biz_icon($b['icon']) ?>
                            </svg>
                        </div>
                        <span class="biz-row__cat"><?= htmlspecialchars($b['category']) ?></span>
                    </div>

                    <h2 class="biz-row__title"><?= htmlspecialchars($b['title']) ?></h2>
                    <p class="biz-row__desc"><?= htmlspecialchars($b['description']) ?></p>

                    <ul class="biz-row__features">
                        <?php foreach ($b['features'] as $feat): ?>
                            <li><?= htmlspecialchars($feat) ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?= htmlspecialchars($b['link']) ?>" class="biz-row__btn">
                        Send Enquiry
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </a>

                </div><!-- /.biz-row__text -->

            </div><!-- /.biz-row -->

            <?php endforeach; ?>

        </div>
    </section>

</div><!-- /.biz-wrap -->

<script>
(function () {
    const hero = document.getElementById('bizHero');
    const heroImages = <?= json_encode(array_values($heroImageUrls), JSON_UNESCAPED_SLASHES) ?>;

    if (!hero || !heroImages.length) {
        return;
    }

    let currentIndex = 0;

    function applyHeroImage(index) {
        hero.style.backgroundImage = 'url("' + heroImages[index] + '")';
    }

    applyHeroImage(currentIndex);

    if (heroImages.length > 1) {
        setInterval(function () {
            currentIndex = (currentIndex + 1) % heroImages.length;
            applyHeroImage(currentIndex);
        }, 1000);
    }
})();
</script>

<?php include 'layouts/footer.php'; ?>