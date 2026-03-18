<?php require __DIR__ . '/../layouts/app.php'; ?>

<style>
/* ══════════════════════════════════════
   FARM PAGE — Warm Green / Earth tones
══════════════════════════════════════ */

/* HERO */
.farm-hero {
  position: relative;
  min-height: 480px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  background: #1a3d1a;
}
.farm-hero-bg {
  position: absolute;
  inset: 0;
  overflow: hidden;
}
.farm-hero-bg video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.6;
}
.farm-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(26,61,26,0.3) 0%, rgba(26,61,26,0.7) 100%);
}
.farm-hero-content {
  position: relative;
  z-index: 2;
  padding: 80px 24px 60px;
  max-width: 700px;
}
.farm-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.25);
  color: rgba(255,255,255,0.92);
  border-radius: 999px;
  padding: 6px 18px 6px 12px;
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  margin-bottom: 22px;
}
.farm-badge-dot {
  width: 8px; height: 8px;
  background: #86efac;
  border-radius: 50%;
  display: inline-block;
  animation: farm-pulse 2s infinite;
}
@keyframes farm-pulse {
  0%,100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.6; transform: scale(0.85); }
}
.farm-hero-content h1 {
  color: #fff;
  font-size: clamp(2.4rem, 5.5vw, 3.8rem);
  font-weight: 900;
  line-height: 1.08;
  margin: 0 0 18px;
  letter-spacing: -0.5px;
}
.farm-hero-content h1 em { color: #86efac; font-style: normal; }
.farm-hero-content p {
  color: rgba(255,255,255,0.72);
  font-size: 1.05rem;
  line-height: 1.7;
  margin: 0 0 32px;
}
.farm-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #22c55e;
  color: #fff;
  padding: 14px 32px;
  border-radius: 999px;
  font-weight: 700;
  font-size: 0.92rem;
  text-decoration: none;
  transition: background 0.22s, transform 0.2s;
  letter-spacing: 0.03em;
}
.farm-cta-btn:hover { background: #16a34a; transform: translateY(-2px); }
.farm-cta-btn svg {
  width: 16px; height: 16px;
  stroke: #fff; fill: none;
  stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
}

/* STATS BAR */
.farm-stats {
  background: #14532d;
  padding: 28px 24px;
}
.farm-stats-inner {
  max-width: 1000px;
  margin: auto;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 20px;
}
.farm-stat {
  text-align: center;
  color: #fff;
}
.farm-stat strong {
  display: block;
  font-size: 2rem;
  font-weight: 900;
  color: #86efac;
  line-height: 1;
}
.farm-stat span {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.65);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 4px;
  display: block;
}

/* ABOUT SECTION */
.farm-about {
  background: #fff;
  padding: 80px 24px;
}
.farm-about-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.farm-about-img {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(26,61,26,0.18);
}
.farm-about-img img {
  width: 100%; height: 420px;
  object-fit: cover;
  display: block;
}
.farm-about-img-badge {
  position: absolute;
  bottom: 20px; left: 20px;
  background: rgba(20,83,45,0.92);
  color: #fff;
  padding: 10px 18px;
  border-radius: 12px;
  font-size: 0.82rem;
  font-weight: 600;
  backdrop-filter: blur(6px);
}
.farm-section-label {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 12px;
}
.farm-section-label span {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #16a34a;
}
.farm-section-label svg {
  width: 14px; height: 14px;
  stroke: #16a34a; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.farm-about-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 800;
  color: #14532d;
  line-height: 1.2;
  margin: 0 0 18px;
}
.farm-about-text p {
  color: #4b5563;
  line-height: 1.75;
  font-size: 0.97rem;
  margin-bottom: 24px;
}

/* CULTIVATION */
.farm-cultivation {
  background: #f0fdf4;
  padding: 80px 24px;
}
.farm-section-head {
  text-align: center;
  margin-bottom: 52px;
}
.farm-section-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #14532d;
  margin: 8px 0 14px;
}
.farm-section-head p {
  color: #6b7280;
  font-size: 0.95rem;
  max-width: 500px;
  margin: auto;
  line-height: 1.65;
}
.farm-cultivation-inner {
  max-width: 1100px;
  margin: auto;
}
.farm-cult-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.farm-cult-card {
  background: #fff;
  border: 1px solid #bbf7d0;
  border-radius: 18px;
  padding: 32px 28px;
  transition: box-shadow 0.25s, transform 0.25s;
}
.farm-cult-card:hover {
  box-shadow: 0 12px 36px rgba(20,83,45,0.13);
  transform: translateY(-4px);
}
.farm-cult-icon {
  width: 52px; height: 52px;
  background: #dcfce7;
  border: 1px solid #86efac;
  border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 18px;
}
.farm-cult-icon svg {
  width: 26px; height: 26px;
  stroke: #15803d; fill: none;
  stroke-width: 1.75; stroke-linecap: round; stroke-linejoin: round;
}
.farm-cult-card h3 {
  font-size: 1.05rem;
  font-weight: 700;
  color: #14532d;
  margin: 0 0 10px;
}
.farm-cult-card p {
  color: #6b7280;
  font-size: 0.875rem;
  line-height: 1.65;
  margin: 0;
}
.farm-cult-card ul {
  margin: 10px 0 0;
  padding-left: 16px;
  color: #4b5563;
  font-size: 0.875rem;
  line-height: 1.8;
}

/* PHILOSOPHY */
.farm-philosophy {
  background: #14532d;
  padding: 80px 24px;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.farm-philosophy::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(134,239,172,0.08), transparent 65%);
}
.farm-philosophy-inner {
  max-width: 780px;
  margin: auto;
  position: relative;
  z-index: 1;
}
.farm-philosophy h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 800;
  color: #fff;
  margin: 8px 0 20px;
  line-height: 1.15;
}
.farm-philosophy h2 em { color: #86efac; font-style: normal; }
.farm-philosophy p {
  color: rgba(255,255,255,0.72);
  font-size: 1rem;
  line-height: 1.75;
  margin-bottom: 36px;
}
.farm-philosophy-quote {
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(134,239,172,0.25);
  border-radius: 16px;
  padding: 28px 36px;
  font-size: 1.15rem;
  font-weight: 600;
  color: #86efac;
  font-style: italic;
  letter-spacing: 0.02em;
}

/* MAP SECTION */
.farm-map-section {
  background: #f0fdf4;
  padding: 80px 24px;
  border-top: 1px solid #bbf7d0;
}
.farm-map-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 56px;
  align-items: start;
}
.farm-map-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #14532d;
  margin: 10px 0 16px;
}
.farm-map-text > p {
  color: #6b7280;
  line-height: 1.75;
  font-size: 0.95rem;
  margin-bottom: 28px;
}
.farm-map-details { display: flex; flex-direction: column; gap: 18px; margin-bottom: 32px; }
.farm-map-detail-item {
  display: flex; align-items: flex-start; gap: 14px;
}
.farm-map-detail-item svg {
  width: 20px; height: 20px; flex-shrink: 0;
  stroke: #16a34a; margin-top: 2px;
}
.farm-map-detail-item strong { display: block; font-size: 0.82rem; color: #14532d; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 2px; }
.farm-map-detail-item span { font-size: 0.9rem; color: #4b5563; }
.farm-map-cta {
  display: inline-flex; align-items: center; gap: 8px;
  background: #16a34a; color: #fff;
  padding: 13px 28px; border-radius: 999px;
  font-weight: 700; font-size: 0.9rem;
  text-decoration: none; transition: background 0.2s, transform 0.2s;
}
.farm-map-cta:hover { background: #14532d; transform: translateY(-2px); color: #fff; }
.farm-map-embed { position: relative; }
.farm-map-embed iframe {
  width: 100%; height: 420px;
  border: 0; border-radius: 16px;
  box-shadow: 0 12px 40px rgba(20,83,45,0.12);
  display: block;
}
.farm-map-open-link {
  margin-top: 12px; text-align: right;
}
.farm-map-open-link a {
  display: inline-flex; align-items: center; gap: 6px;
  color: #16a34a; font-size: 0.82rem; font-weight: 600;
  text-decoration: none; transition: color 0.2s;
}
.farm-map-open-link a:hover { color: #14532d; }

/* CTA SECTION */
.farm-cta-section {
  background: #fff;
  padding: 72px 24px;
  text-align: center;
}
.farm-cta-section h2 {
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #14532d;
  margin-bottom: 14px;
}
.farm-cta-section p {
  color: #6b7280;
  font-size: 0.97rem;
  margin-bottom: 32px;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .farm-about-inner { grid-template-columns: 1fr; gap: 36px; }
  .farm-cult-grid { grid-template-columns: repeat(2, 1fr); }
  .farm-map-inner { grid-template-columns: 1fr; gap: 36px; }
  .farm-map-embed iframe { height: 320px; }
}
@media (max-width: 600px) {
  .farm-cult-grid { grid-template-columns: 1fr; }
  .farm-stats-inner { flex-direction: column; gap: 16px; }
  .farm-hero { min-height: 380px; }
  .farm-about-img img { height: 260px; }
  .farm-philosophy-quote { padding: 20px 20px; font-size: 1rem; }
}
</style>

<!-- HERO -->
<section class="farm-hero" aria-label="SLS Farm Hero">
  <div class="farm-hero-bg" aria-hidden="true">
    <video autoplay muted loop playsinline preload="auto">
      <source src="../assets/images/farm-video.mp4" type="video/mp4">
    </video>
  </div>
  <div class="farm-hero-overlay" aria-hidden="true"></div>
  <div class="farm-hero-content">
    <div class="farm-badge">
      <span class="farm-badge-dot"></span>
      SLS Group · Agriculture Division
    </div>
    <h1>A Legacy of Land,<br><em>Tradition & Growth</em></h1>
    <p>For generations, farming has been at the heart of who we are. SLS Farm represents continuity, discipline, and deep respect for nature.</p>
    <a href="/contact" class="farm-cta-btn">
      Get In Touch
      <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </div>
</section>

<!-- STATS BAR -->
<div class="farm-stats" aria-label="Farm at a glance">
  <div class="farm-stats-inner">
    <div class="farm-stat">
      <strong>4+</strong>
      <span>Seasonal Crops</span>
    </div>
    <div class="farm-stat">
      <strong>3</strong>
      <span>Generations</span>
    </div>
    <div class="farm-stat">
      <strong>2</strong>
      <span>Plantation Types</span>
    </div>
    <div class="farm-stat">
      <strong>100%</strong>
      <span>Sustainable Farming</span>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section class="farm-about" aria-labelledby="farm-about-heading">
  <div class="farm-about-inner">
    <div class="farm-about-img">
      <img src="../assets/images/farm.webp" alt="SLS Farm plantation" loading="lazy">
      <div class="farm-about-img-badge">🌿 Generational Heritage</div>
    </div>
    <div class="farm-about-text">
      <div class="farm-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
        <span>About SLS Farm</span>
      </div>
      <h2 id="farm-about-heading">The Foundation of Our Family Legacy</h2>
      <p>SLS Farm is not just an agricultural operation — it is the foundation of our family's legacy. For generations, from our great grandfather to our father and now to the present, farming has been at the heart of who we are.</p>
      <p>Built on years of experience and deep-rooted knowledge of the land, SLS Farm represents continuity, discipline, and respect for nature. We operate extensive acres of fertile agricultural land with a diversified and sustainable approach.</p>
      <a href="/contact" class="farm-cta-btn">
        Enquire Now
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- CULTIVATION CARDS -->
<section class="farm-cultivation" aria-labelledby="farm-cult-heading">
  <div class="farm-cultivation-inner">
    <div class="farm-section-head">
      <div class="farm-section-label" style="justify-content:center;" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8"/></svg>
        <span>What We Grow</span>
      </div>
      <h2 id="farm-cult-heading">Our Land & Cultivation</h2>
      <p>A diverse, balanced ecosystem combining plantations, seasonal crops and integrated livestock farming.</p>
    </div>
    <div class="farm-cult-grid">

      <div class="farm-cult-card">
        <div class="farm-cult-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
        </div>
        <h3>Mango & Coconut Plantations</h3>
        <p>Long-standing plantations that form the backbone of our agricultural heritage, carefully maintained across generations.</p>
      </div>

      <div class="farm-cult-card">
        <div class="farm-cult-icon">
          <svg viewBox="0 0 24 24"><path d="M3 3h18v18H3z" fill="none"/><path d="M12 8v8M8 12h8"/></svg>
        </div>
        <h3>Seasonal Crop Cultivation</h3>
        <p>Year-round cultivation of high-value crops tailored to seasonal cycles and market demand.</p>
        <ul>
          <li>Onion</li>
          <li>Corn</li>
          <li>Groundnut</li>
          <li>Turmeric</li>
        </ul>
      </div>

      <div class="farm-cult-card">
        <div class="farm-cult-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2c0 0-5.5 5-5.5 9.5a5.5 5.5 0 0 0 11 0C17.5 7 12 2 12 2z"/></svg>
        </div>
        <h3>Integrated Livestock Farming</h3>
        <p>A well-balanced ecosystem combining goat rearing and poultry farming alongside crop cultivation for maximum sustainability.</p>
        <ul>
          <li>Goat Rearing Operations</li>
          <li>Poultry Farming</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- PHILOSOPHY -->
<section class="farm-philosophy" aria-labelledby="farm-philosophy-heading">
  <div class="farm-philosophy-inner">
    <div class="farm-section-label" style="justify-content:center;color:#86efac;" aria-hidden="true">
      <svg viewBox="0 0 24 24" style="stroke:#86efac"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <span style="color:#86efac;">Our Philosophy</span>
    </div>
    <h2 id="farm-philosophy-heading">Preserving Tradition,<br><em>Adapting to Tomorrow</em></h2>
    <p>We believe in preserving tradition while adapting to modern agricultural practices. Our approach focuses on long-term sustainability, consistent yield, and responsible land management that honours the generations before us.</p>
    <div class="farm-philosophy-quote">
      "Rooted in tradition. Growing for generations."
    </div>
  </div>
</section>

<!-- LOCATION MAP -->
<section class="farm-map-section" aria-label="SLS Farm Location">
  <div class="farm-map-inner">
    <div class="farm-map-text">
      <div class="farm-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <span>Find Us</span>
      </div>
      <h2>Our Location</h2>
      <p>SLS Farm is located in <strong>Palaiyur, Tamil Nadu</strong> — accessible via the Veppanthattai to Anukur Road.</p>
      <div class="farm-map-details">
        <div class="farm-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div>
            <strong>Address</strong>
            <span>Veppanthattai to Anukur Rd, Palaiyur, Tamil Nadu 621116</span>
          </div>
        </div>
        <div class="farm-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <div>
            <strong>Operations</strong>
            <span>Active year-round farming</span>
          </div>
        </div>
        <div class="farm-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12"/><path d="M1.61 3.38A2 2 0 0 1 3.58 1h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29"/></svg>
          <div>
            <strong>Contact</strong>
            <span>+91 90872 02312</span>
          </div>
        </div>
      </div>
      <a href="/contact" class="farm-map-cta">Enquire Now →</a>
    </div>
    <div class="farm-map-embed">
      <iframe
        src="https://maps.google.com/maps?q=SLS+FARM+Palaiyur+Tamil+Nadu&t=&z=15&ie=UTF8&iwloc=&output=embed"
        height="420"
        style="border:0; border-radius:16px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="SLS Farm Location Map"
        aria-label="Google Maps showing SLS Farm location">
      </iframe>
      <div class="farm-map-open-link">
        <a href="https://maps.app.goo.gl/Pr2YVUJVGXNoj3GN9" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="15" height="15"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          Open in Google Maps
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="farm-cta-section">
  <h2>Ready to Connect with SLS Farm?</h2>
  <p>Reach out to learn more about our agricultural operations and sustainable farming practices.</p>
  <a href="/contact" class="farm-cta-btn">Contact Us Today
    <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
  </a>
</section>

<?php require __DIR__ . '/../layouts/footer.php'; ?>