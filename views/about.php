<?php include 'layouts/header.php'; ?>

<style>

/* ============================================================
ABOUT PAGE
============================================================ */

.about-wrap *{
box-sizing:border-box;
margin:0;
padding:0;
}

.about-wrap{
font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;
color:#222;
width:100%;
overflow-x:hidden;
}

/* ============================================================
1 HERO WITH VIDEO
============================================================ */

.ab-hero{
position:relative;
height:400px;
display:flex;
align-items:center;
justify-content:center;
text-align:center;
overflow:hidden;
}

.hero-video{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
object-fit:cover;
z-index:1;
}

.hero-overlay{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(20,70,45,0.35);
z-index:2;
}

.hero-content{
position:relative;
z-index:3;
max-width:900px;
padding:0 20px;
}

.ab-hero__badge{
display:inline-flex;
align-items:center;
gap:2px;
background:#27ae60;
color:#fff;
font-size:13px;
font-weight:600;
padding:6px 16px 6px 12px;
border-radius:100px;
margin-bottom:20px;
}

.ab-hero__badge svg{
width:14px;
height:14px;
padding: 0;
fill:#fff;
}

.hero-content h1{
font-size:clamp(2.5rem,5vw,4rem);
font-weight:700;
color:#fff;
margin-bottom:16px;
}

.hero-content p{
font-size:18px;
color:rgba(255,255,255,0.85);
line-height:1.7;
max-width:700px;
margin:auto;
}

/* ============================================================
2 JOURNEY
============================================================ */

.ab-journey{
background:#fff;
padding:72px 24px;
}

.ab-journey__inner{
max-width:1080px;
margin:0 auto;
display:flex;
align-items:center;
gap:56px;
}

.ab-journey__img{
flex:0 0 390px;
max-width:390px;
}

.ab-journey__img img{
width:100%;
height:360px;
object-fit:cover;
border-radius:20px;
}

.ab-journey__text h2{
font-size:clamp(2.5rem,4vw,3.1rem);
font-weight:900;
color:#1e5e3e;
margin-bottom:20px;
}

.ab-journey__text p{
font-size:16px;
color:#1e5e3e;
line-height:1.8;
margin-bottom:12px;
}

/* ============================================================
3 MISSION VISION
============================================================ */

.ab-mv{
background:#fff;
padding:72px 0;
}

.ab-mv__inner{
max-width:1125px;
margin:0 auto;
padding:0 24px;
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
}

.ab-mv__card{
border-radius:20px;
padding:40px 36px;
min-height:260px;
}

.ab-mv__card--dark{
background:#1e5e3e;
box-shadow:0 8px 32px rgba(30,94,62,0.22);
}

.ab-mv__card--light{
background:#fff;
border:1px solid #e2ece6;
box-shadow:0 4px 24px rgba(0,0,0,0.09);
}

.ab-mv__icon{
width:52px;
height:52px;
border-radius:12px;
display:flex;
align-items:center;
justify-content:center;
margin-bottom:24px;
}

.ab-mv__card--dark .ab-mv__icon{
background:#27ae60;
}

.ab-mv__card--light .ab-mv__icon{
background:#eaf1ec;
}

.ab-mv__icon svg{
width:26px;
height:26px;
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
font-size:20px;
font-weight:700;
margin-bottom:16px;
}

.ab-mv__card--dark h3{
color:#fff;
}

.ab-mv__card--light h3{
color:#1a1a1a;
}

.ab-mv__card p{
font-size:15px;
line-height:1.8;
}

.ab-mv__card--dark p{
color:rgba(255,255,255,0.82);
}

.ab-mv__card--light p{
color:#666;
}

/* ============================================================
4 CORE VALUES
============================================================ */

.ab-values{
background:#fff;
padding:48px 24px 88px;
text-align:center;
}

.ab-values h2{
font-size:clamp(1.6rem,3.5vw,2.2rem);
font-weight:800;
color:#1e5e3e;
margin-bottom:56px;
}

.ab-values__grid{
max-width:1220px;
margin:0 auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:32px;
}

.ab-values__item{
display:flex;
flex-direction:column;
align-items:center;
gap:12px;
}

.ab-values__icon{
width:68px;
height:68px;
background:#e8eeeb;
border-radius:16px;
display:flex;
align-items:center;
justify-content:center;
}

.ab-values__icon svg{
width:28px;
height:28px;
stroke:#1e5e3e;
stroke-width:2;
fill:none;
}

.ab-values__item h4{
font-size:15px;
font-weight:700;
color:#1e5e3e;
}

.ab-values__item p{
font-size:14px;
color:#666;
line-height:1.6;
max-width:210px;
}

/* ============================================================
RESPONSIVE
============================================================ */

@media (max-width:900px){

.ab-journey__inner{
flex-direction:column;
}

.ab-mv__inner{
grid-template-columns:1fr;
}

.ab-values__grid{
grid-template-columns:1fr;
}

}

@media (max-width:768px){

.ab-hero{
height:260px;
}

.hero-content h1{
font-size:36px;
}

.hero-content p{
font-size:14px;
}

}

</style>

<div class="about-wrap">

<!-- HERO -->
<section class="ab-hero">

<video class="hero-video" autoplay muted loop playsinline>
<source src="assets/images/about/Realistic_Video_Generation.mp4" type="video/mp4">
</video>

<div class="hero-overlay"></div>

<div class="hero-content">

<div class="ab-hero__badge">
<svg viewBox="0 0 24 24">
<path d="M12 2l2.09 6.26L20 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l5.91-.91L12 2z"/>
</svg>
Our Legacy
</div>

<h1>About SLS Group</h1>

<p>
From humble beginnings to a diversified conglomerate, our journey is defined by engineering excellence and unwavering commitment to quality.
</p>

</div>

</section>


<!-- JOURNEY -->
<section class="ab-journey">
<div class="ab-journey__inner">

<div class="ab-journey__img">
<img src="../assets/images/about.webp">
</div>

<div class="ab-journey__text">

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

</div>
</section>


<!-- MISSION VISION -->
<section class="ab-mv">
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


<!-- CORE VALUES -->
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
<p>We never compromise on the standards of our materials or the precision of our engineering.</p>
</div>

<div class="ab-values__item">
<div class="ab-values__icon">
<svg viewBox="0 0 24 24">
<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
<polyline points="17 6 23 6 23 12"/>
</svg>
</div>
<h4>Continuous Innovation</h4>
<p>Embracing new technologies and methodologies to stay ahead in a rapidly changing world.</p>
</div>

<div class="ab-values__item">
<div class="ab-values__icon">
<svg viewBox="0 0 24 24">
<path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
<path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
</svg>
</div>
<h4>Social Responsibility</h4>
<p>Conducting our business with a deep respect for the environment and the communities we serve.</p>
</div>

</div>

</section>

</div>

<?php include 'layouts/footer.php'; ?>