<?php include 'layouts/header.php'; ?>

<style>
/* ============================================================
   ABOUT PAGE — PIXEL-PERFECT STYLES
   ============================================================ */

.about-wrap * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
.about-wrap {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #222;
}

/* ============================================================
   1. HERO
   ============================================================ */
.ab-hero {
    background: #1e5e3e;
    text-align: center;
    padding: 56px 24px 72px;
}

.ab-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #27ae60;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    padding: 6px 16px 6px 12px;
    border-radius: 100px;
    margin-bottom: 20px;
    letter-spacing: 0.2px;
}

.ab-hero__badge svg {
    width: 14px;
    height: 14px;
    fill: #fff;
    flex-shrink: 0;
}

.ab-hero h1 {
    font-size: clamp(2rem, 6vw, 3.2rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 16px;
}

.ab-hero p {
    font-size: 14.5px;
    color: rgba(255,255,255,0.78);
    line-height: 1.7;
    max-width: 480px;
    margin: 0 auto;
}

/* ============================================================
   2. JOURNEY
   ============================================================ */
.ab-journey {
    background: #fff;
    padding: 72px 24px;
}

.ab-journey__inner {
    max-width: 1080px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 56px;
}

.ab-journey__img {
    flex: 0 0 390px;
    max-width: 390px;
}

.ab-journey__img img {
    width: 100%;
    height: 360px;
    object-fit: cover;
    border-radius: 20px;
    display: block;
}

.ab-journey__text h2 {
    font-size: clamp(1.5rem, 3vw, 2.1rem);
    font-weight: 800;
    color: #1e5e3e;
    line-height: 1.22;
    margin-bottom: 20px;
}

.ab-journey__text p {
    font-size: 14px;
    color: #555;
    line-height: 1.78;
    margin-bottom: 12px;
}

.ab-journey__text p:last-child {
    margin-bottom: 0;
}

/* ============================================================
   3. MISSION & VISION
      Background: very light mint — #f0f4f1
   ============================================================ */
.ab-mv {
    background: white;
    padding: 72px 24px;
}

.ab-mv__inner {
    max-width: 980px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    align-items: stretch;
}

.ab-mv__card {
    border-radius: 20px;
    padding: 36px 30px 38px;
    display: flex;
    flex-direction: column;
}

.ab-mv__card--dark {
    background: #1e5e3e;
    box-shadow: 0 8px 32px rgba(30, 94, 62, 0.22);
}

.ab-mv__card--light {
    background: #fff;
    box-shadow: 0 4px 20px rgba(0,0,0,0.07);
}

.ab-mv__icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
    flex-shrink: 0;
}

.ab-mv__card--dark .ab-mv__icon {
    background: #27ae60;
}

.ab-mv__card--light .ab-mv__icon {
    background: #e8eeeb;
}

.ab-mv__icon svg {
    width: 26px;
    height: 26px;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
}

.ab-mv__card--dark .ab-mv__icon svg {
    stroke: #fff;
}

.ab-mv__card--light .ab-mv__icon svg {
    stroke: #1e5e3e;
}

.ab-mv__card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 14px;
    line-height: 1.3;
}

.ab-mv__card--dark h3 { color: #fff; }
.ab-mv__card--light h3 { color: #1e5e3e; }

.ab-mv__card p {
    font-size: 14px;
    line-height: 1.75;
}

.ab-mv__card--dark p { color: rgba(255,255,255,0.82); }
.ab-mv__card--light p { color: #555; }

/* ============================================================
   4. CORE VALUES
   ============================================================ */
.ab-values {
    background: #fff;
    padding: 80px 24px 88px;
    text-align: center;
}

.ab-values h2 {
    font-size: clamp(1.6rem, 3.5vw, 2.2rem);
    font-weight: 800;
    color: #1e5e3e;
    margin-bottom: 56px;
    line-height: 1.2;
}

.ab-values__grid {
    max-width: 880px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
}

.ab-values__item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
}

.ab-values__icon {
    width: 68px;
    height: 68px;
    background: #e8eeeb;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 4px;
    flex-shrink: 0;
}

.ab-values__icon svg {
    width: 28px;
    height: 28px;
    stroke: #1e5e3e;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    fill: none;
}

.ab-values__item h4 {
    font-size: 14.5px;
    font-weight: 700;
    color: #1e5e3e;
}

.ab-values__item p {
    font-size: 13.5px;
    color: #666;
    line-height: 1.65;
    max-width: 210px;
}

/* ============================================================
   RESPONSIVE — TABLET (≤ 900px)
   ============================================================ */
@media (max-width: 900px) {
    .ab-journey__inner {
        gap: 36px;
    }
    .ab-journey__img {
        flex: 0 0 300px;
        max-width: 300px;
    }
    .ab-journey__img img {
        height: 290px;
    }
}

/* ============================================================
   RESPONSIVE — MOBILE (≤ 768px)
   ============================================================ */
@media (max-width: 768px) {

    /* Hero */
    .ab-hero {
        padding: 40px 20px 52px;
    }

    /* Journey — stack */
    .ab-journey {
        padding: 48px 20px;
    }
    .ab-journey__inner {
        flex-direction: column;
        gap: 26px;
    }
    .ab-journey__img {
        flex: unset;
        max-width: 100%;
        width: 100%;
    }
    .ab-journey__img img {
        height: 240px;
        border-radius: 16px;
    }

    /* Mission / Vision — stack */
    .ab-mv {
        padding: 48px 20px;
    }
    .ab-mv__inner {
        grid-template-columns: 1fr;
        gap: 18px;
    }
    .ab-mv__card {
        padding: 28px 22px 30px;
    }

    /* Core Values — single column */
    .ab-values {
        padding: 48px 20px 60px;
    }
    .ab-values h2 {
        margin-bottom: 36px;
    }
    .ab-values__grid {
        grid-template-columns: 1fr;
        gap: 34px;
        max-width: 320px;
    }
    .ab-values__item p {
        max-width: 100%;
    }
}

/* ============================================================
   RESPONSIVE — SMALL MOBILE (≤ 400px)
   ============================================================ */
@media (max-width: 400px) {
    .ab-hero h1 { font-size: 1.75rem; }
    .ab-journey__img img { height: 200px; }
    .ab-values__grid { max-width: 100%; }
}
</style>

<div class="about-wrap">

    <!-- ══════════════════════════════════════
         1. HERO
    ══════════════════════════════════════ -->
    <section class="ab-hero">
        <div class="ab-hero__badge">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2l2.09 6.26L20 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l5.91-.91L12 2z"/>
            </svg>
            Our Legacy
        </div>
        <h1>About SLS Group</h1>
        <p>From humble beginnings to a diversified conglomerate, our journey is defined by engineering excellence and unwavering commitment to quality.</p>
    </section>
    <br>
    <br>
    <!-- ══════════════════════════════════════
         2. JOURNEY
    ══════════════════════════════════════ -->
    <section class="ab-journey">
        <div class="ab-journey__inner">

            <div class="ab-journey__img">
                <img
                    src="https://images.unsplash.com/photo-1475274047050-1d0c0975c63e?w=800&q=80"
                    alt="Starry night sky"
                />
            </div>

            <div class="ab-journey__text">
                <h2>A Journey of Diversified Excellence</h2>
                <p>Founded decades ago with a singular vision to redefine engineering standards, SLS Group of Companies has grown into a multi-sector powerhouse.</p>
                <p>Our expansion into construction materials through SLS Blue Metals, energy retail via SLS Agency, hospitality with our Marriage Hall, and sustainable farming through SLS Farm, showcases our versatility.</p>
                <p>Today, we stand as a symbol of reliability and innovation, constantly pushing boundaries to deliver value to our stakeholders and the community.</p>
            </div>

        </div>
    </section>
    <br>
    

    <!-- ══════════════════════════════════════
         3. MISSION & VISION
    ══════════════════════════════════════ -->
    <section class="ab-mv">
        <div class="ab-mv__inner">

            <!-- Mission — dark green card -->
            <div class="ab-mv__card ab-mv__card--dark">
                <div class="ab-mv__icon">
                    <!-- Concentric circles / target -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10"/>
                        <circle cx="12" cy="12" r="6"/>
                        <circle cx="12" cy="12" r="2"/>
                    </svg>
                </div>
                <h3>Our Mission</h3>
                <p>To provide exceptional engineering solutions and diversified services that exceed client expectations through innovation, safety, and sustainable practices.</p>
            </div>

            <!-- Vision — white card -->
            <div class="ab-mv__card ab-mv__card--light">
                <div class="ab-mv__icon">
                    <!-- Eye -->
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3>Our Vision</h3>
                <p>To be the most trusted and influential multi-sector conglomerate in the region, recognized for our engineering prowess and contribution to industrial growth.</p>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════
         4. CORE VALUES
    ══════════════════════════════════════ -->
    <section class="ab-values">
        <h2>Our Core Values</h2>
        <div class="ab-values__grid">

            <!-- Quality Integrity -->
            <div class="ab-values__item">
                <div class="ab-values__icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <h4>Quality Integrity</h4>
                <p>We never compromise on the standards of our materials or the precision of our engineering.</p>
            </div>

            <!-- Continuous Innovation -->
            <div class="ab-values__item">
                <div class="ab-values__icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                        <polyline points="17 6 23 6 23 12"/>
                    </svg>
                </div>
                <h4>Continuous Innovation</h4>
                <p>Embracing new technologies and methodologies to stay ahead in a rapidly changing world.</p>
            </div>

            <!-- Social Responsibility -->
            <div class="ab-values__item">
                <div class="ab-values__icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10z"/>
                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                    </svg>
                </div>
                <h4>Social Responsibility</h4>
                <p>Conducting our business with a deep respect for the environment and the communities we serve.</p>
            </div>

        </div>
    </section>

</div><!-- /.about-wrap -->

<?php include 'layouts/footer.php'; ?>
