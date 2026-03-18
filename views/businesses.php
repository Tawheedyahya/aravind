<?php
$businesses = require __DIR__ . '/../config/businesses.php';

$heroImages = glob(__DIR__ . '/../assets/images/businesses/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);

$heroImageUrls = array_map(function ($path) {
    return '../assets/images/businesses/' . basename($path);
}, $heroImages);

require __DIR__ . '/../layouts/app.php';

function biz_icon(string $key): string {

$icons = [

'bolt' =>
'<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>',

'building' =>
'<rect x="3" y="3" width="7" height="7"/>
<rect x="14" y="3" width="7" height="7"/>
<rect x="14" y="14" width="7" height="7"/>
<rect x="3" y="14" width="7" height="7"/>',

'flame' =>
'<path d="M12 2c0 0-5.5 5-5.5 9.5a5.5 5.5 0 0 0 11 0C17.5 7 12 2 12 2z"/>',

'leaf' =>
'<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8"/>'

];

return $icons[$key] ?? $icons['building'];

}
?>

<style>

/* =========================
HERO
========================= */

#bizHero{
min-height:340px;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
color:#fff;
padding:90px 20px;
background-size:cover;
background-position:center;
}

#bizHero h1{
font-size:40px;
margin-bottom:10px;
}

#bizHero p{
max-width:500px;
margin:auto;
line-height:1.6;
}

/* =========================
BUSINESSES
========================= */

.biz-section{
padding:80px 20px;
}

.biz-inner{
max-width:1100px;
margin:auto;
display:grid;
gap:70px;
}

.biz-row{
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
align-items:center;
}

.biz-row img{
width:100%;
border-radius:18px;
}

/* alternate */

.biz-row:nth-child(even) .biz-img{
order:2;
}

.biz-row:nth-child(even) .biz-text{
order:1;
}

/* text */

.biz-meta{
display:flex;
align-items:center;
gap:8px;
margin-bottom:10px;
}

.biz-meta svg{
width:22px;
height:22px;
stroke:#1e5e3e;
stroke-width:2;
fill:none;
}

.biz-category{
background:#e8f5ed;
color:#1e5e3e;
padding:4px 12px;
border-radius:20px;
font-size:12px;
font-weight:600;
}

.biz-text h3{
font-size:26px;
margin-bottom:10px;
color:#1e5e3e;
}

.biz-text p{
line-height:1.7;
margin-bottom:15px;
}

.biz-text ul{
padding-left:18px;
margin-bottom:15px;
}

.biz-btn{
display:inline-block;
padding:10px 18px;
background:#1e5e3e;
color:#fff;
border-radius:6px;
text-decoration:none;
font-size:14px;
transition:background 0.2s;
}
.biz-btn:hover{background:#14532d;color:#fff;}

.biz-btn-outline{
background:transparent;
border:2px solid #1e5e3e;
color:#1e5e3e;
}
.biz-btn-outline:hover{background:#1e5e3e;color:#fff;}

/* =========================
RESPONSIVE
========================= */

@media (max-width:900px){

.biz-row{
grid-template-columns:1fr;
}

.biz-row:nth-child(even) .biz-img{
order:1;
}

.biz-row:nth-child(even) .biz-text{
order:2;
}

#bizHero h1{
font-size:30px;
}

}

</style>


<!-- HERO -->
<section id="bizHero">

<div>
<h1>Our Businesses</h1>
<p>Discover the diverse verticals that make SLS Group a leader in multiple sectors.</p>
</div>

</section>


<!-- BUSINESSES -->
<section class="biz-section">

<div class="biz-inner">

<?php foreach ($businesses as $b): ?>

<div class="biz-row">

<div class="biz-img">
<img src="<?= htmlspecialchars($b['image']) ?>" alt="<?= htmlspecialchars($b['title']) ?>">
</div>

<div class="biz-text">

<div class="biz-meta">

<svg viewBox="0 0 24 24">
<?= biz_icon($b['icon']) ?>
</svg>

<span class="biz-category">
<?= htmlspecialchars($b['category']) ?>
</span>

</div>

<h3><?= htmlspecialchars($b['title']) ?></h3>

<p><?= htmlspecialchars($b['description']) ?></p>

<ul>
<?php foreach ($b['features'] as $feat): ?>
<li><?= htmlspecialchars($feat) ?></li>
<?php endforeach; ?>
</ul>

<a href="<?= htmlspecialchars($b['link']) ?>" class="biz-btn">
View Details →
</a>
<a href="/contact" class="biz-btn biz-btn-outline" style="margin-left:10px;">
Send Enquiry
</a>

</div>

</div>

<?php endforeach; ?>

</div>

</section>


<script>

(function(){

const hero=document.getElementById('bizHero');

const heroImages=<?= json_encode(array_values($heroImageUrls), JSON_UNESCAPED_SLASHES) ?>;

if(!hero || !heroImages.length) return;

let i=0;

function setHero(n){
hero.style.backgroundImage='url('+heroImages[n]+')';
}

setHero(i);

if(heroImages.length>1){

setInterval(function(){

i=(i+1)%heroImages.length;

setHero(i);

},1000);

}

})();

</script>

<?php require __DIR__.'/../layouts/footer.php'; ?>