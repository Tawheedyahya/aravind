<?php
$projects = require __DIR__ . '/../config/projects.php';
$heroImages = glob("assets/images/projects/*.{jpg,jpeg,png,webp}", GLOB_BRACE);
?>

<?php include 'layouts/header.php'; ?>

<style>

/* ================= GLOBAL ================= */

.projects-wrap{
font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
}


/* ================= HERO ================= */

.projects-hero{
position:relative;
background:#165c3f;
padding:90px 40px;
color:white;
background-size:cover;
background-position:center;
min-height:360px;
display:flex;
align-items:center;
overflow:hidden;
}

.projects-hero::before{
content:'';
position:absolute;
inset:0;
background:rgba(0,0,0,0.45);
}

.projects-hero-inner{
max-width:1200px;
margin:auto;
width:100%;
display:flex;
justify-content:space-between;
align-items:center;
gap:40px;
position:relative;
z-index:2;
}

.projects-text{
max-width:650px;
}

.projects-badge{
display:inline-block;
background:#1fa463;
padding:6px 16px;
border-radius:20px;
font-size:12px;
margin-bottom:12px;
}

.projects-text h1{
font-size:clamp(2.5rem,5vw,4rem);
font-weight:800;
margin-bottom:16px;
}

.projects-text p{
font-size:16px;
line-height:1.6;
}

.projects-btn{
background:linear-gradient(135deg,#27c26b,#1fa463);
padding:12px 26px;
border-radius:30px;
text-decoration:none;
color:white;
font-weight:600;
}


/* ================= STATS ================= */

.projects-stats-section{
background:white;
padding:0px 0px;
margin: 40px 0 40px;
}

.stats-wrapper{
max-width:1000px;
margin:auto;
display:grid;
grid-template-columns:repeat(4,1fr);
text-align:center;
border-top:1px solid #e6e6e6;
border-bottom:1px solid #e6e6e6;
padding:35px 0;
}

.stat-box{
position:relative;
}

.stat-box:not(:last-child)::after{
content:'';
position:absolute;
top:10px;
right:-15px;
width:1px;
height:60px;
background:#e6e6e6;
}

.stat-box h3{
font-size:40px;
color:#165c3f;
font-weight:800;
}

.stat-box p{
font-size:12px;
letter-spacing:1px;
text-transform:uppercase;
color:#6b7280;
}


/* ================= PROJECT GRID ================= */

.projects-section{
background:#f3f4f6;
padding:70px 40px;
}

.projects-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}


/* ================= PROJECT CARD ================= */

.project-card{
background:white;
border-radius:16px;
overflow:hidden;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:all .3s;
opacity:0;
transform:translateY(40px);
}

.project-card.show{
opacity:1;
transform:translateY(0);
}

.project-card:hover{
transform:translateY(-8px);
box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

.project-image{
position:relative;
}

.project-image img{
width:100%;
height:200px;
object-fit:cover;
display:block;
}

/* status badge */

.project-status{
position:absolute;
top:12px;
left:12px;
padding:4px 10px;
border-radius:20px;
font-size:11px;
font-weight:600;
color:white;
}

.status-completed{
background:#2fbf71;
}

.status-progress{
background:#ff7b2c;
}


/* card body */

.project-body{
padding:18px;
}

.project-category{
display:flex;
align-items:center;
gap:6px;
font-size:11px;
font-weight:700;
letter-spacing:.5px;
color:#2e7d5b;
margin-bottom:6px;
}

.project-category svg{
width:14px;
fill:#2e7d5b;
}

.project-title{
font-size:16px;
font-weight:700;
margin-bottom:12px;
}

.project-meta{
display:flex;
align-items:center;
gap:6px;
font-size:13px;
color:#666;
margin-bottom:6px;
}

.project-meta svg{
width:14px;
stroke:#666;
fill:none;
stroke-width:2;
}


/* footer */

.project-footer{
border-top:1px solid #eee;
margin-top:12px;
padding-top:12px;
display:flex;
justify-content:space-between;
align-items:center;
font-size:12px;
}

.project-link{
color:#1fa463;
font-weight:600;
text-decoration:none;
}

.project-link:hover{
text-decoration:underline;
}


/* ================= CTA ================= */

.projects-cta{
background:#165c3f;
color:white;
text-align:center;
padding:90px 20px;
}

.projects-cta h2{
font-size:32px;
font-weight:800;
margin-bottom:12px;
}

.projects-cta p{
max-width:700px;
margin:auto;
margin-bottom:20px;
}

.projects-cta-btn{
background:#27c26b;
padding:14px 28px;
border-radius:30px;
text-decoration:none;
color:white;
font-weight:600;
}


/* ================= RESPONSIVE ================= */

@media (max-width:900px){

.projects-grid{
grid-template-columns:1fr;
}

.stats-wrapper{
grid-template-columns:repeat(2,1fr);
}

}

@media (max-width:600px){

.stats-wrapper{
grid-template-columns:1fr;
}

}

</style>



<div class="projects-wrap">

<!-- HERO -->

<section class="projects-hero">

<div class="projects-hero-inner">

<div class="projects-text">

<div class="projects-badge">
Engineering Excellence
</div>

<h1>Project Portfolio</h1>

<p>
Showcasing our precision and expertise in handling complex electrical and electromechanical infrastructure.
</p>

</div>

<a class="projects-btn" href="/contact">
Request Project Details
</a>

</div>

</section>



<!-- STATS -->

<section class="projects-stats-section">

<div class="stats-wrapper">

<div class="stat-box">
<h3>25+</h3>
<p>Engineering Heritage</p>
</div>

<div class="stat-box">
<h3>150+</h3>
<p>Infrastructure Projects</p>
</div>

<div class="stat-box">
<h3>40+</h3>
<p>Global Alliances</p>
</div>

<div class="stat-box">
<h3>500+</h3>
<p>Specialists</p>
</div>

</div>

</section>



<!-- PROJECT GRID -->

<section class="projects-section">

<div class="projects-grid">

<?php foreach($projects as $p): ?>

<?php
$statusClass = strtolower($p['status']) === 'completed'
? 'status-completed'
: 'status-progress';
?>

<div class="project-card">

<div class="project-image">

<img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">

<span class="project-status <?= $statusClass ?>">
<?= htmlspecialchars($p['status']) ?>
</span>

</div>

<div class="project-body">

<div class="project-category">

<svg viewBox="0 0 24 24">
<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
</svg>

<?= htmlspecialchars($p['category']) ?>

</div>

<div class="project-title">
<?= htmlspecialchars($p['title']) ?>
</div>

<div class="project-meta">

<svg viewBox="0 0 24 24">
<rect x="3" y="4" width="18" height="18" rx="2"/>
<line x1="16" y1="2" x2="16" y2="6"/>
<line x1="8" y1="2" x2="8" y2="6"/>
<line x1="3" y1="10" x2="21" y2="10"/>
</svg>

<?= htmlspecialchars($p['date']) ?>

</div>

<div class="project-meta">

<svg viewBox="0 0 24 24">
<path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
<circle cx="12" cy="10" r="3"/>
</svg>

<?= htmlspecialchars($p['location']) ?>

</div>

<div class="project-footer">

<div>
Client: <?= htmlspecialchars($p['client']) ?>
</div>

<a class="project-link" href="<?= htmlspecialchars($p['link']) ?>">
Enquire More →
</a>

</div>

</div>

</div>

<?php endforeach; ?>

</div>

</section>



<!-- CTA -->

<section class="projects-cta">

<h2>Need a Specialized Engineering Partner?</h2>

<p>
Our team is ready to bring precision and technical expertise to your next infrastructure project.
</p>

<a class="projects-cta-btn" href="/contact">
Partner With SLS
</a>

</section>

</div>



<script>

/* HERO SLIDESHOW */

const heroImages = <?= json_encode($heroImages) ?>;

let heroIndex = 0;

const hero = document.querySelector(".projects-hero");

function changeHero(){

if(heroImages.length === 0) return;

hero.style.backgroundImage = `url(${heroImages[heroIndex]})`;

heroIndex++;

if(heroIndex >= heroImages.length){

heroIndex = 0;

}

}

changeHero();

setInterval(changeHero,3000);


/* CARD SCROLL ANIMATION */

const cards = document.querySelectorAll('.project-card');

const observer = new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add('show');

}

});

},{threshold:0.2});

cards.forEach(card=>observer.observe(card));

</script>


<?php include 'layouts/footer.php'; ?>