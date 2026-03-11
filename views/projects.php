<?php
$projects = require __DIR__ . '/../config/projects.php';
?>

<?php include 'layouts/header.php'; ?>

<style>

/* HERO */

.projects-hero{
background:#165c3f;
padding:70px 40px;
color:white;
}

.projects-hero-inner{
max-width:1200px;
margin:auto;
display:flex;
justify-content:space-between;
align-items:center;
gap:40px;
}

.projects-badge{
display:inline-block;
background:#1fa463;
color:white;
padding:5px 14px;
border-radius:20px;
font-size:12px;
margin-bottom:14px;
}

.projects-text{
max-width:600px;
}

.projects-btn{
background:#27c26b;
color:white;
padding:12px 26px;
border-radius:30px;
text-decoration:none;
white-space:nowrap;
}


/* PROJECT GRID */

.projects-section{
background:#f2f4f3;
padding:60px 40px;
}

.projects-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}


/* CARD */

.project-card{
background:white;
border-radius:16px;
overflow:hidden;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.project-image{
position:relative;
}

.project-image img{
width:100%;
height:200px;
object-fit:cover;
}


/* STATUS BADGE */

.project-status{
position:absolute;
top:12px;
left:12px;
padding:4px 10px;
border-radius:20px;
font-size:12px;
color:white;
}

.status-completed{
background:#1fb760;
}

.status-progress{
background:#ff7b2c;
}


/* CARD BODY */

.project-body{
padding:18px 20px;
}

.project-category {
    color: #2e7d5b;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.project-category svg {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
    fill: #2e7d5b;
}

.project-title{
font-size: 16px;
font-weight: 700;
margin-bottom: 12px;
color: #111;
}

.project-meta{
display: flex;
gap: 6px;
align-items: center;
color: #666;
font-size: 13px;
margin-bottom: 6px;
}

.project-meta svg {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
    stroke: #666;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
}


/* CARD FOOTER */

.project-footer{
border-top:1px solid #eee;
margin-top:12px;
padding-top:12px;
display:flex;
justify-content:space-between;
align-items:center;
font-size:13px;
color: #555;
}

.project-link{
color:#1fa463;
text-decoration:none;
font-weight: 600;
}

.project-link:hover { text-decoration: underline; }


/* CTA SECTION */

.projects-cta{
background:#165c3f;
color:white;
text-align:center;
padding:90px 20px;
}

.projects-cta-btn{
background:#27c26b;
color:white;
padding:14px 28px;
border-radius:30px;
display:inline-block;
text-decoration:none;
margin-top:20px;
}


/* RESPONSIVE */

@media (max-width:900px){

.projects-grid{
grid-template-columns:1fr;
}

.projects-hero-inner{
flex-direction:column;
align-items:flex-start;
}

}

</style>



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



<!-- PROJECTS -->

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

<img
    src="<?= htmlspecialchars($p['image']) ?>"
    alt="<?= htmlspecialchars($p['title']) ?>"
    loading="lazy"
>

<span class="project-status <?= $statusClass ?>">
<?= htmlspecialchars($p['status']) ?>
</span>

</div>

<div class="project-body">

<div class="project-category">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
    </svg>
    <?= htmlspecialchars($p['category']) ?>
</div>

<div class="project-title">
<?= htmlspecialchars($p['title']) ?>
</div>

<div class="project-meta">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
        <line x1="16" y1="2" x2="16" y2="6"/>
        <line x1="8" y1="2" x2="8" y2="6"/>
        <line x1="3" y1="10" x2="21" y2="10"/>
    </svg>
    <?= htmlspecialchars($p['date']) ?>
</div>

<div class="project-meta">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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

<h2>
Need a Specialized Engineering Partner?
</h2>

<p>
Our team is ready to bring precision and technical expertise to your next substation or electrical infrastructure project.
</p>

<a class="projects-cta-btn" href="/contact">
Partner With SLS Contracting
</a>

</section>


<?php include 'layouts/footer.php'; ?>