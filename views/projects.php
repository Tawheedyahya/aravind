<?php
$projects = require __DIR__ . '/../config/projects.php';

$heroImages = glob(__DIR__ . '/../assets/images/projects/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);

$heroImageUrls = array_map(function ($path) {
    return '../assets/images/projects/' . basename($path);
}, $heroImages);

require __DIR__ . '/../layouts/app.php';
?>

<style>

/* ================= HERO ================= */

#projectsHero{
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

#projectsHero h1{
font-size:40px;
margin-bottom:10px;
}

#projectsHero p{
max-width:500px;
margin:auto;
line-height:1.6;
}

.projects-btn{
display:inline-block;
margin-top:20px;
padding:10px 18px;
background:#1e5e3e;
color:#fff;
border-radius:6px;
text-decoration:none;
font-size:14px;
}


/* ================= STATS ================= */

.projects-stats{
padding:40px 20px;
}

.projects-stats-inner{
max-width:1100px;
margin:auto;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
text-align:center;
}

.stat-box h3{
font-size:28px;
color:#1e5e3e;
}

.stat-box p{
font-size:12px;
text-transform:uppercase;
color:#666;
}


/* ================= PROJECT GRID ================= */

.projects-section{
padding:80px 20px;
}

.projects-grid{
max-width:1100px;
margin:auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}

.project-card{
background:#fff;
border-radius:18px;
overflow:hidden;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
position:relative;
transition:.3s;
}

.project-image img{
width:100%;
border-radius:18px 18px 0 0;
}

.project-status{
position:absolute;
top:12px;
left:12px;
background:#27ae60;
color:#fff;
padding:4px 10px;
border-radius:20px;
font-size:11px;
}

.project-body{
padding:18px;
}

.project-category{
font-size:12px;
font-weight:600;
color:#1e5e3e;
margin-bottom:6px;
}

.project-title{
font-size:16px;
font-weight:700;
margin-bottom:8px;
}

.project-meta{
font-size:13px;
color:#666;
margin-bottom:6px;
}

.project-footer{
margin-top:10px;
display:flex;
justify-content:space-between;
font-size:12px;
}

.project-link{
color:#1e5e3e;
text-decoration:none;
font-weight:600;
}


/* ================= CTA ================= */

.projects-cta{
background:#1e5e3e;
color:#fff;
text-align:center;
padding:90px 20px;
}

.projects-cta h2{
font-size:28px;
margin-bottom:12px;
}

.projects-cta-btn{
display:inline-block;
margin-top:20px;
padding:10px 22px;
background:#27ae60;
color:#fff;
border-radius:6px;
text-decoration:none;
}


/* ================= RESPONSIVE (same logic as businesses.php) ================= */

@media (max-width:900px){

.projects-grid{
grid-template-columns:1fr;
}

.projects-stats-inner{
grid-template-columns:1fr;
}

#projectsHero h1{
font-size:30px;
}

}

</style>


<!-- HERO -->
<section id="projectsHero">

<div>

<h1>Project Portfolio</h1>

<p>
Showcasing our precision and expertise in handling complex electrical and electromechanical infrastructure.
</p>

<a class="projects-btn" href="/contact">
Request Project Details
</a>

</div>

</section>



<!-- STATS
<section class="projects-stats">

<div class="projects-stats-inner">

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

 -->

<!-- PROJECTS -->
<section class="projects-section">

<div class="projects-grid">

<?php foreach($projects as $p): ?>

<div class="project-card">

<div class="project-image">

<img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['title']) ?>">

<span class="project-status">
<?= htmlspecialchars($p['status']) ?>
</span>

</div>

<div class="project-body">

<div class="project-category">
<?= htmlspecialchars($p['category']) ?>
</div>

<div class="project-title">
<?= htmlspecialchars($p['title']) ?>
</div>

<div class="project-meta">
<?= htmlspecialchars($p['date']) ?>
</div>

<div class="project-meta">
<?= htmlspecialchars($p['location']) ?>
</div>

<div class="project-footer">

<div>
Client: <?= htmlspecialchars($p['client']) ?>
</div>

<a class="project-link" href="<?= htmlspecialchars($p['link']) ?>">
Enquire →
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



<script>

(function(){

const hero=document.getElementById('projectsHero');

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


<?php require '../aravind/layouts/footer.php'; ?>