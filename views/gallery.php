<?php
// ── Load data sources ─────────────────────────────────────
$businesses = require __DIR__ . '/../config/businesses.php';
$projects   = require __DIR__ . '/../config/projects.php';

// ── Build unified gallery array ───────────────────────────
$gallery = [];

function galleryHasTitle(array $gallery, string $title): bool {
    foreach ($gallery as $g) {
        if ($g['title'] === $title) return true;
    }
    return false;
}

// Businesses
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

// Projects
foreach ($projects as $p) {
    if (!galleryHasTitle($gallery, $p['title'])) {
        $gallery[] = [
            'title'       => $p['title'],
            'category'    => $p['category'],
            'image'       => $p['image'],
            'description' => 'Client: '.$p['client'].' · '.$p['location'],
            'source'      => 'project',
        ];
    }
}

// Categories
$categories = array_values(array_unique(array_column($gallery,'category')));

// ── Use same layout loader as businesses.php ──────────────
require __DIR__ . '/../layouts/app.php';
?>

<style>

/* ================= GALLERY WRAP ================= */

.gal-wrap{
font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
}

/* ================= HERO ================= */

.gal-hero{
position:relative;
overflow:hidden;
text-align:center;
padding:72px 24px 88px;
min-height:360px;
display:flex;
align-items:center;
justify-content:center;
background-size:cover;
background-position:center;
}

.gal-hero__content{
position:relative;
z-index:2;
max-width:860px;
}

.gal-hero__badge{
display:inline-flex;
align-items:center;
gap:6px;
background:#27ae60;
color:#fff;
font-size:12px;
font-weight:600;
padding:5px 14px;
border-radius:100px;
margin-bottom:18px;
}

.gal-hero h1{
font-size:clamp(2rem,5vw,3rem);
font-weight:800;
color:#fff;
margin-bottom:14px;
}

.gal-hero p{
font-size:15px;
color:rgba(255,255,255,0.8);
max-width:420px;
margin:auto;
}

/* ================= FILTERS ================= */

.gal-filters{
background:#fff;
padding:20px;
display:flex;
gap:10px;
overflow-x:auto;
border-bottom:1px solid #eee;
}

.gal-filter-btn{
border:1px solid #d8e6df;
background:none;
padding:7px 18px;
border-radius:100px;
font-size:13px;
cursor:pointer;
white-space:nowrap;
}

.gal-filter-btn.active{
background:#1e5e3e;
color:#fff;
border-color:#1e5e3e;
}

/* ================= GRID ================= */

.gal-section{
padding:48px 24px 72px;
background:#fff;
}

.gal-grid{
max-width:1180px;
margin:auto;
columns:3;
column-gap:18px;
}

.gal-item{
break-inside:avoid;
margin-bottom:18px;
border-radius:16px;
overflow:hidden;
position:relative;
cursor:pointer;
display:block;
}

.gal-item img{
width:100%;
display:block;
object-fit:cover;
}

/* Masonry heights */

.gal-item:nth-child(3n+1) img{height:280px}
.gal-item:nth-child(3n+2) img{height:210px}
.gal-item:nth-child(3n) img{height:240px}

.gal-item__overlay{
position:absolute;
inset:0;
background:linear-gradient(to top,rgba(10,40,25,0.8),transparent);
opacity:0;
display:flex;
flex-direction:column;
justify-content:flex-end;
padding:20px;
transition:.3s;
}

.gal-item:hover .gal-item__overlay{
opacity:1;
}

.gal-item__cat{
background:#27ae60;
color:#fff;
font-size:10px;
padding:3px 10px;
border-radius:100px;
margin-bottom:6px;
width:fit-content;
}

.gal-item__title{
color:#fff;
font-weight:700;
font-size:15px;
}

.gal-item__desc{
color:rgba(255,255,255,0.8);
font-size:12px;
}

/* ================= LIGHTBOX ================= */

.gal-lightbox{
position:fixed;
inset:0;
background:rgba(0,0,0,0.9);
z-index:9999;
display:none;
align-items:center;
justify-content:center;
padding:20px;
}

.gal-lightbox.open{
display:flex;
}

.gal-lightbox img{
max-width:90%;
max-height:80vh;
}

.gal-lightbox__close{
position:absolute;
top:20px;
right:20px;
background:none;
border:none;
font-size:30px;
color:#fff;
cursor:pointer;
}

/* ================= MOBILE ================= */

@media (max-width:900px){

.gal-grid{
columns:2;
}

.gal-item img{
height:220px !important;
}

}

@media (max-width:560px){

.gal-hero{
padding:40px 20px;
min-height:280px;
}

.gal-grid{
columns:1;
}

.gal-item img{
height:240px !important;
}

}

</style>


<div class="gal-wrap">

<section class="gal-hero" id="galHero">

<div class="gal-hero__content">

<div class="gal-hero__badge">Our Gallery</div>

<h1>Visual Gallery</h1>

<p>A window into our facilities, operations, and successful project outcomes.</p>

</div>

</section>


<section class="gal-section">

<div class="gal-grid">

<?php foreach($gallery as $i=>$item): ?>

<div class="gal-item" onclick="openLightbox(<?= $i ?>)">

<img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>">

<div class="gal-item__overlay">

<span class="gal-item__cat"><?= htmlspecialchars($item['category']) ?></span>

<div class="gal-item__title"><?= htmlspecialchars($item['title']) ?></div>

<div class="gal-item__desc"><?= htmlspecialchars($item['description']) ?></div>

</div>

</div>

<?php endforeach; ?>

</div>

</section>

</div>


<div class="gal-lightbox" id="galLightbox">

<button class="gal-lightbox__close" onclick="closeLightbox()">&times;</button>

<img id="lbImg" src="">

</div>


<script>

const GALLERY = <?php echo json_encode(array_values($gallery)); ?>;

let currentIndex=0;

function openLightbox(i){

currentIndex=i;

document.getElementById("lbImg").src=GALLERY[i].image;

document.getElementById("galLightbox").classList.add("open");

document.body.style.overflow="hidden";

}

function closeLightbox(){

document.getElementById("galLightbox").classList.remove("open");

document.body.style.overflow="";

}

/* HERO ROTATOR */

(function(){

const hero=document.getElementById("galHero");

if(!hero || !GALLERY.length) return;

let i=0;

function setHero(n){
hero.style.backgroundImage='url('+GALLERY[n].image+')';
}

setHero(i);

setInterval(function(){

i=(i+1)%GALLERY.length;

setHero(i);

},1500);

})();

</script>

<?php require __DIR__.'/../layouts/footer.php'; ?>