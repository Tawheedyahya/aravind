<?php
require __DIR__ . '/../layouts/app.php';
?>
<?php
$info_categories = [
    'Substation Contracting',
    'Electrical Grid Works',
    'Electromechanical Design',
    'Turnkey Power Solutions'
];
?>
<section id="hero3d">
    <video autoplay muted loop playsinline id="bg-video">
        <source src="../assets/images/hero-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-content fade-up">
        <h1>The <span style="font-style: italic; font-weight: 700; text-shadow: 0 0 10px rgba(255,255,255,0.4);">SLS</span> Legacy</h1>
        <p>From high-voltage power grids to sustainable agriculture, we bridge technology and nature to empower future generations.</p>
        <button class="banner-btn">Our Verticals</button>
    </div>
</section>
<section id="infrastructure-services" aria-labelledby="infrastructure-heading" style="background-color: whitesmoke;">

    <div class="info-img-section fade-up">
       <img 
    src="../assets/images/photo-1767350413257-4e48b3de0ef3.jpg"
    alt="High-voltage electrical substation infrastructure installation by SLS Contracting"
    loading="lazy"
    class="img-fluid inf-img"
    style="width:100%; max-width:600px; height:auto;">
    </div>

    <div class="info-content-section fade-up fade-delay-1">
        
        <span class="section-label">Flagship Division</span>

        <h2 id="infrastructure-heading">
            Infrastructure Redefined by SLS Contracting
        </h2>

        <p>
            SLS Contracting Private Limited is our engineering division specializing in 
            high-voltage electrical infrastructure, substation contracting, and 
            precision electromechanical installations for industrial and utility sectors.
        </p>

        <ul class="info-category-list">
            <?php foreach ($info_categories as $category): ?>
                <li>
                    <a href="#" class="info-button">
                        <?= htmlspecialchars($category); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>

</section>
<?php $verticals = require '../aravind/config/verticals.php'; ?>

<section id="home-verticals">

    <div class="container" style="background-color:#F2F7F4; padding:50px; border-radius:30px;">
        <h2>Diverse Verticals.</h2>
        <p>A balanced portfolio across construction, energy, hospitality, and agriculture.</p>

        <div class="verticals-grid">

            <?php foreach ($verticals as $vertical): ?>
                
                <div class="vertical-card fade-up">

                    <div class="vertical-img">
                        <img src="<?= $vertical['image']; ?>" 
                             alt="<?= htmlspecialchars($vertical['title']); ?>"
                             loading="lazy">
                        <span class="category-badge">
                            <?= htmlspecialchars($vertical['category']); ?>
                        </span>
                    </div>

                    <div class="vertical-content">
                        <h3 style="color: #13583F;"><?= htmlspecialchars($vertical['title']); ?></h3>
                        <p style="color: #527A6B;"><?= htmlspecialchars($vertical['description']); ?></p>
                        <a href="<?= $vertical['link']; ?>" class="explore-link">
                            Explore Vertical →
                        </a>
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>

</section>
<section id="home-awards" class="container">
    <div class="awards-container">
        <div class="award-item fade-up">
            <h2 >25+</h2>
            <p >Engineering Heritage</p>
        </div>
        <div class="award-item fade-up">
            <h2 >1A50+</h2>
            <p >Infrastructure Projects</p>
        </div>
        <div class="award-item fade-up">
            <h2 >40+</h2>
            <p >Global Alliances</p>
        </div>
        <div class="award-item fade-up">
            <h2 >500+</h2>
            <p >Specialists</p>
        </div>
    </div>
</section>
<section id="home-cta">
    <div class="cta-container fade-up">
        <h2>
            Build the <br>
            <span class="cta-highlight">Future</span> with us.
        </h2>

        <p>
            Partner with a conglomerate that values integrity and innovation.
        </p>

        <a href="#" class="cta-btn">Get in Touch</a>
    </div>
</section>
<?php require '../aravind/layouts/footer.php' ?>

<script src="../public/banner.js"></script>