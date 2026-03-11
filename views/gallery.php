<?php
// ── Load data sources ─────────────────────────────────────
$businesses = require __DIR__ . '/../config/businesses.php';
$projects   = require __DIR__ . '/../config/projects.php';

// ── Build unified $gallery array ──────────────────────────
$gallery = [];

// Helper: avoid duplicate titles
function galleryHasTitle(array $gallery, string $title): bool {
    foreach ($gallery as $g) {
        if ($g['title'] === $title) return true;
    }
    return false;
}

// 1) Businesses (config/businesses.php)
//    Fields: title, category, icon, image, description, features, link
foreach ($businesses as $b) {
    if (!galleryHasTitle($gallery, $b['title'])) {
        $gallery[] = [
            'title'       => $b['title'],
            'category'    => $b['category'],
            'image'       => $b['image'],
            'description' => $b['description'],
            'source'      => 'business',
        ];
    }
}

// 2) Projects (config/projects.php)
//    Fields: title, category, status, image, date, location, client, link
//    No 'description' field — generate one from client + location
foreach ($projects as $p) {
    if (!galleryHasTitle($gallery, $p['title'])) {
        $gallery[] = [
            'title'       => $p['title'],
            'category'    => $p['category'],
            'image'       => $p['image'],
            'description' => 'Client: ' . $p['client'] . ' · ' . $p['location'],
            'source'      => 'project',
        ];
    }
}

// ── Collect unique categories for filter tabs ─────────────
$categories = array_values(array_unique(array_column($gallery, 'category')));
?>
<?php include 'layouts/header.php'; ?>

<style>
/* ============================================================
   VISUAL GALLERY PAGE
   ============================================================ */

.gal-wrap * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.gal-wrap {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

/* ── HERO ─────────────────────────────────────────────────── */
.gal-hero {
    background: #1e5e3e;
    text-align: center;
    padding: 56px 24px 72px;
    position: relative;
    overflow: hidden;
}

.gal-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: repeating-linear-gradient(
        -45deg,
        transparent,
        transparent 40px,
        rgba(255,255,255,0.03) 40px,
        rgba(255,255,255,0.03) 41px
    );
    pointer-events: none;
}

.gal-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #27ae60;
    color: #fff;
    font-size: 12.5px;
    font-weight: 600;
    padding: 5px 14px 5px 10px;
    border-radius: 100px;
    margin-bottom: 18px;
    letter-spacing: 0.3px;
    position: relative;
}

.gal-hero__badge svg {
    width: 13px;
    height: 13px;
    fill: #fff;
}

.gal-hero h1 {
    font-size: clamp(2rem, 5.5vw, 3rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 14px;
    position: relative;
}

.gal-hero p {
    font-size: 14.5px;
    color: rgba(255,255,255,0.75);
    line-height: 1.7;
    max-width: 420px;
    margin: 0 auto;
    position: relative;
}

/* ── FILTER TABS ──────────────────────────────────────────── */
.gal-filters {
    background: #fff;
    padding: 20px 24px;
    display: flex;
    justify-content: flex-start;
    flex-wrap: nowrap;
    gap: 10px;
    border-bottom: 1px solid #eee;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
}

.gal-filters::-webkit-scrollbar {
    display: none;
}

.gal-filter-btn {
    background: none;
    border: 1.5px solid #d8e6df;
    color: #555;
    font-size: 13px;
    font-weight: 600;
    padding: 7px 18px;
    border-radius: 100px;
    cursor: pointer;
    transition: all 0.2s ease;
    outline: none;
    letter-spacing: 0.2px;
    white-space: nowrap;
    flex-shrink: 0;
}

.gal-filter-btn:hover {
    border-color: #1e5e3e;
    color: #1e5e3e;
    background: #f0f7f3;
}

.gal-filter-btn.active {
    background: #1e5e3e;
    border-color: #1e5e3e;
    color: #fff;
}

/* ── GALLERY GRID ─────────────────────────────────────────── */
.gal-section {
    background: #fff;
    padding: 48px 24px 72px;
}

.gal-grid {
    max-width: 1180px;
    margin: 0 auto;
    columns: 3;
    column-gap: 18px;
}

.gal-item {
    break-inside: avoid;
    margin-bottom: 18px;
    border-radius: 16px;
    overflow: hidden;
    position: relative;
    cursor: pointer;
    display: block;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gal-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.18);
}

.gal-item img {
    width: 100%;
    display: block;
    object-fit: cover;
    transition: transform 0.4s ease;
}

/* Vary heights for masonry feel */
.gal-item:nth-child(3n+1) img { height: 280px; }
.gal-item:nth-child(3n+2) img { height: 210px; }
.gal-item:nth-child(3n)   img { height: 240px; }
.gal-item:nth-child(5)    img { height: 190px; }
.gal-item:nth-child(7)    img { height: 260px; }

.gal-item:hover img {
    transform: scale(1.05);
}

.gal-item__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(10, 40, 25, 0.82) 0%,
        rgba(10, 40, 25, 0.15) 55%,
        transparent 100%
    );
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 20px;
}

.gal-item:hover .gal-item__overlay {
    opacity: 1;
}

.gal-item__cat {
    display: inline-block;
    background: #27ae60;
    color: #fff;
    font-size: 10.5px;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 100px;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 7px;
    width: fit-content;
}

.gal-item__title {
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 4px;
}

.gal-item__desc {
    color: rgba(255,255,255,0.8);
    font-size: 12.5px;
    line-height: 1.5;
}

/* ── LIGHTBOX ─────────────────────────────────────────────── */
.gal-lightbox {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.92);
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 24px;
}

.gal-lightbox.open {
    display: flex;
    animation: lbFadeIn 0.2s ease;
}

@keyframes lbFadeIn {
    from { opacity: 0; }
    to   { opacity: 1; }
}

.gal-lightbox__inner {
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 32px 80px rgba(0,0,0,0.6);
    animation: lbSlideUp 0.25s ease;
}

@keyframes lbSlideUp {
    from { transform: translateY(20px); opacity: 0; }
    to   { transform: translateY(0);    opacity: 1; }
}

.gal-lightbox__inner img {
    width: 100%;
    display: block;
    max-height: 80vh;
    object-fit: contain;
    background: #111;
}

.gal-lightbox__info {
    background: #0d2e1c;
    padding: 18px 24px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.gal-lightbox__info .lb-cat {
    display: inline-block;
    background: #27ae60;
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    padding: 2px 10px;
    border-radius: 100px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}

.gal-lightbox__info .lb-title {
    color: #fff;
    font-size: 16px;
    font-weight: 700;
}

.gal-lightbox__info .lb-desc {
    color: rgba(255,255,255,0.65);
    font-size: 13px;
    margin-top: 3px;
}

.gal-lightbox__close {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 36px;
    height: 36px;
    background: rgba(0,0,0,0.55);
    border: none;
    border-radius: 50%;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
    z-index: 2;
}

.gal-lightbox__close:hover { background: rgba(0,0,0,0.85); }

.gal-lb-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 42px;
    height: 42px;
    background: rgba(255,255,255,0.12);
    border: none;
    border-radius: 50%;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
    z-index: 2;
}

.gal-lb-nav:hover  { background: rgba(255,255,255,0.25); }
.gal-lb-nav--prev  { left: 14px; }
.gal-lb-nav--next  { right: 14px; }

/* ── EMPTY STATE ─────────────────────────────────────────── */
.gal-empty {
    text-align: center;
    padding: 60px 20px;
    color: #aaa;
    font-size: 15px;
    display: none;
}

/* ── RESPONSIVE ───────────────────────────────────────────── */
@media (max-width: 900px) {
    .gal-grid { columns: 2; }
    .gal-item:nth-child(n) img  { height: 220px; }
    .gal-item:nth-child(2n) img { height: 180px; }
}

@media (max-width: 560px) {
    .gal-hero    { padding: 40px 20px 52px; }
    .gal-grid    { columns: 1; }
    .gal-item:nth-child(n) img { height: 240px; }
    .gal-filters { padding: 20px 16px 0; gap: 8px; }
    .gal-filter-btn { font-size: 12px; padding: 6px 14px; }
    .gal-section { padding: 32px 16px 56px; }
    .gal-lightbox { padding: 12px; }
    .gal-lb-nav  { display: none; }
}
</style>

<div class="gal-wrap">

    <!-- ══════════════════════════════════════
         HERO
    ══════════════════════════════════════ -->
    <section class="gal-hero">
        <div class="gal-hero__badge">
            <svg viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
            Our Gallery
        </div>
        <h1>Visual Gallery</h1>
        <p>A window into our facilities, operations, and successful project outcomes across all divisions.</p>
    </section>

    <!-- ══════════════════════════════════════
         FILTER TABS — auto-built from businesses + projects
    ══════════════════════════════════════ -->
    <!-- <div class="gal-filters">
        <button class="gal-filter-btn active" data-filter="all">All</button>
        <?php foreach ($categories as $cat): ?>
            <button class="gal-filter-btn" data-filter="<?= htmlspecialchars(strtolower($cat)) ?>">
                <?= htmlspecialchars($cat) ?>
            </button>
        <?php endforeach; ?>
    </div> -->

    <!-- ══════════════════════════════════════
         GALLERY GRID — merged from businesses + projects
    ══════════════════════════════════════ -->
    <section class="gal-section">
        <div class="gal-grid" id="galGrid">

            <?php foreach ($gallery as $i => $item): ?>
            <div
                class="gal-item"
                data-category="<?= htmlspecialchars(strtolower($item['category'])) ?>"
                data-index="<?= $i ?>"
                onclick="openLightbox(<?= $i ?>)"
                role="button"
                tabindex="0"
                aria-label="View <?= htmlspecialchars($item['title']) ?>"
                onkeydown="if(event.key==='Enter') openLightbox(<?= $i ?>)"
            >
                <img
                    src="<?= htmlspecialchars($item['image']) ?>"
                    alt="<?= htmlspecialchars($item['title']) ?>"
                    loading="lazy"
                />
                <div class="gal-item__overlay">
                    <span class="gal-item__cat"><?= htmlspecialchars($item['category']) ?></span>
                    <div class="gal-item__title"><?= htmlspecialchars($item['title']) ?></div>
                    <div class="gal-item__desc"><?= htmlspecialchars($item['description']) ?></div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <div class="gal-empty" id="galEmpty">No items found in this category.</div>
    </section>

</div><!-- /.gal-wrap -->

<!-- ══════════════════════════════════════
     LIGHTBOX
══════════════════════════════════════ -->
<div class="gal-lightbox" id="galLightbox" role="dialog" aria-modal="true" aria-label="Image lightbox" onclick="closeLightboxOnBackdrop(event)">
    <div class="gal-lightbox__inner">
        <button class="gal-lightbox__close" onclick="closeLightbox()" aria-label="Close">&times;</button>
        <button class="gal-lb-nav gal-lb-nav--prev" onclick="shiftLightbox(-1)" aria-label="Previous">&#8249;</button>
        <button class="gal-lb-nav gal-lb-nav--next" onclick="shiftLightbox(1)"  aria-label="Next">&#8250;</button>
        <img id="lbImg" src="" alt="" />
        <div class="gal-lightbox__info">
            <div class="gal-lightbox__info-text">
                <div class="lb-cat"   id="lbCat"></div>
                <div class="lb-title" id="lbTitle"></div>
                <div class="lb-desc"  id="lbDesc"></div>
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════
     DATA + JS
══════════════════════════════════════ -->
<script>
// Full merged gallery data injected from PHP
const GALLERY = <?php echo json_encode(array_values($gallery)); ?>;

let visibleItems = GALLERY.map((_, i) => i);
let currentLbIndex = 0;

/* ── FILTER ──────────────────────────────────────────────── */
document.querySelectorAll('.gal-filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.gal-filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.dataset.filter;
        const allItems = document.querySelectorAll('.gal-item');
        visibleItems = [];

        allItems.forEach((el, idx) => {
            const match = filter === 'all' || el.dataset.category === filter;
            el.style.display = match ? 'block' : 'none';
            if (match) visibleItems.push(idx);
        });

        document.getElementById('galEmpty').style.display =
            visibleItems.length === 0 ? 'block' : 'none';
    });
});

/* ── LIGHTBOX ─────────────────────────────────────────────── */
function openLightbox(dataIndex) {
    const pos = visibleItems.indexOf(dataIndex);
    currentLbIndex = pos !== -1 ? pos : 0;
    renderLightbox();
    document.getElementById('galLightbox').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function renderLightbox() {
    const item = GALLERY[visibleItems[currentLbIndex]];
    document.getElementById('lbImg').src            = item.image;
    document.getElementById('lbImg').alt            = item.title;
    document.getElementById('lbCat').textContent    = item.category;
    document.getElementById('lbTitle').textContent  = item.title;
    document.getElementById('lbDesc').textContent   = item.description;
}

function shiftLightbox(dir) {
    currentLbIndex = (currentLbIndex + dir + visibleItems.length) % visibleItems.length;
    renderLightbox();
}

function closeLightbox() {
    document.getElementById('galLightbox').classList.remove('open');
    document.body.style.overflow = '';
}

function closeLightboxOnBackdrop(e) {
    if (e.target === document.getElementById('galLightbox')) closeLightbox();
}

document.addEventListener('keydown', e => {
    const lb = document.getElementById('galLightbox');
    if (!lb.classList.contains('open')) return;
    if (e.key === 'Escape')     closeLightbox();
    if (e.key === 'ArrowRight') shiftLightbox(1);
    if (e.key === 'ArrowLeft')  shiftLightbox(-1);
});
</script>

<?php include 'layouts/footer.php'; ?>