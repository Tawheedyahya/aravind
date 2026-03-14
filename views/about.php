<?php
require __DIR__ . '/../layouts/app.php';
?>

<style>

/* =========================
MISSION & VISION
========================= */

.ab-mv{
padding:80px 20px;
text-align:center;
}

.ab-mv__inner{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:40px;
max-width:900px;
margin:auto;
}

.ab-mv__card{
border-radius:22px;
padding:40px;
display:flex;
flex-direction:column;
justify-content:center;
min-height:260px;
text-align:left;
}

.ab-mv__card--dark{
background:#1e5e3e;
color:#fff;
box-shadow:0 10px 35px rgba(0,0,0,0.12);
}

.ab-mv__card--light{
background:#fff;
box-shadow:0 10px 35px rgba(0,0,0,0.08);
}

.ab-mv__icon{
width:52px;
height:52px;
border-radius:12px;
display:flex;
align-items:center;
justify-content:center;
margin-bottom:15px;
}

.ab-mv__card--dark .ab-mv__icon{
background:#27ae60;
}

.ab-mv__card--light .ab-mv__icon{
background:#eaf1ec;
}

.ab-mv__icon svg{
width:24px;
height:24px;
stroke-width:2;
fill:none;
}

.ab-mv__card--dark svg{
stroke:#fff;
}

.ab-mv__card--light svg{
stroke:#1e5e3e;
}

.ab-mv__card h3{
font-size:22px;
margin-bottom:12px;
}

.ab-mv__card p{
font-size:15px;
line-height:1.7;
max-width:420px;
}


/* =========================
CORE VALUES
========================= */

.ab-values{
padding:80px 20px;
text-align:center;
background:#f7f9f8;
}

.ab-values h2{
font-size:34px;
margin-bottom:50px;
color:#1e5e3e;
}

.ab-values__grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:40px;
max-width:1100px;
margin:auto;
}

.ab-values__item{
display:flex;
flex-direction:column;
align-items:center;
gap:12px;
}

.ab-values__icon{
width:64px;
height:64px;
background:#e7efea;
border-radius:16px;
display:flex;
align-items:center;
justify-content:center;
}

.ab-values__icon svg{
width:26px;
height:26px;
stroke:#1e5e3e;
stroke-width:2;
fill:none;
}

.ab-values__item h4{
font-size:18px;
margin-top:10px;
}

.ab-values__item p{
font-size:14px;
color:#5b6a66;
max-width:250px;
line-height:1.6;
}


/* =========================
RESPONSIVE
========================= */

@media (max-width:900px){

.ab-mv__inner{
grid-template-columns:1fr;
}

.ab-values__grid{
grid-template-columns:repeat(2,1fr);
}

}

@media (max-width:600px){

.ab-values__grid{
grid-template-columns:1fr;
}

.ab-mv__card{
padding:30px;
}

}

</style>



<section id="hero3d">

<video autoplay muted loop playsinline id="bg-video">
<source src="../assets/images/about/Realistic_Video_Generation.mp4" type="video/mp4">
</video>

<div class="hero-content fade-up">

<span class="section-label">Our Legacy</span>

<h1>About <span style="font-style: italic;">SLS</span> Group</h1>

<p>
From humble beginnings to a diversified conglomerate, our journey is defined by engineering excellence and unwavering commitment to quality.
</p>

</div>

</section>



<section id="infrastructure-services">

<div class="info-img-section fade-up">
<img src="../assets/images/about.webp" class="inf-img" alt="About SLS">
</div>

<div class="info-content-section fade-up">

<span class="section-label">Our Story</span>

<h2>A Journey of Diversified Excellence</h2>

<p>
Founded decades ago with a singular vision to redefine engineering standards, SLS Group of Companies has grown into a multi-sector powerhouse.
</p>

<p>
Our expansion into construction materials through SLS Blue Metals, energy retail via SLS Agency, hospitality with our Marriage Hall, and sustainable farming through SLS Farm showcases our versatility.
</p>

<p>
Today, we stand as a symbol of reliability and innovation, constantly pushing boundaries to deliver value to our stakeholders and the community.
</p>

</div>

</section>



<section class="ab-mv">

<h2 style="margin-bottom:40px;">Mission & Vision</h2>

<div class="ab-mv__inner">

<div class="ab-mv__card ab-mv__card--dark">

<div class="ab-mv__icon">
<svg viewBox="0 0 24 24">
<circle cx="12" cy="12" r="10"/>
<circle cx="12" cy="12" r="6"/>
<circle cx="12" cy="12" r="2"/>
</svg>
</div>

<h3>Our Mission</h3>

<p>
To provide exceptional engineering solutions and diversified services that exceed client expectations through innovation, safety, and sustainable practices.
</p>

</div>


<div class="ab-mv__card ab-mv__card--light">

<div class="ab-mv__icon">
<svg viewBox="0 0 24 24">
<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
<circle cx="12" cy="12" r="3"/>
</svg>
</div>

<h3>Our Vision</h3>

<p>
To be the most trusted and influential multi-sector conglomerate in the region, recognized for our engineering prowess and contribution to industrial growth.
</p>

</div>

</div>

</section>



<section class="ab-values">

<h2>Our Core Values</h2>

<div class="ab-values__grid">

<div class="ab-values__item">

<div class="ab-values__icon">
<svg viewBox="0 0 24 24">
<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
<polyline points="9 12 11 14 15 10"/>
</svg>
</div>

<h4>Quality Integrity</h4>

<p>
We never compromise on the standards of our materials or the precision of our engineering.
</p>

</div>



<div class="ab-values__item">

<div class="ab-values__icon">
<svg viewBox="0 0 24 24">
<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
<polyline points="17 6 23 6 23 12"/>
</svg>
</div>

<h4>Continuous Innovation</h4>

<p>
Embracing new technologies and methodologies to stay ahead in a rapidly changing world.
</p>

</div>



<div class="ab-values__item">

<div class="ab-values__icon">
<svg viewBox="0 0 24 24">
<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
<path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
</svg>
</div>

<h4>Social Responsibility</h4>

<p>
Conducting our business with a deep respect for the environment and the communities we serve.
</p>

</div>

</div>

</section>


<?php require '../aravind/layouts/footer.php' ?>