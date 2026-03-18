<?php require __DIR__ . '/../layouts/app.php'; ?>

<style>
/* ══════════════════════════════════════
   SLS CONTRACTING — Navy Blue / Gold
   (per PDF: Navy Blue, White, Gold)
══════════════════════════════════════ */

/* HERO */
.con-hero {
  position: relative;
  min-height: 520px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  background: #0a1628;
}
.con-hero-bg {
  position: absolute;
  inset: 0;
  overflow: hidden;
}
.con-hero-bg video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 5.6;
}
.con-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(10,22,40,0.4) 0%, rgba(10,22,40,0.85) 100%);
}
.con-hero-content {
  position: relative;
  z-index: 2;
  padding: 90px 24px 70px;
  max-width: 740px;
}
.con-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(212,175,55,0.45);
  color: rgba(255,255,255,0.92);
  border-radius: 999px;
  padding: 6px 18px 6px 12px;
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  margin-bottom: 22px;
}
.con-badge-dot {
  width: 8px; height: 8px;
  background: #d4af37;
  border-radius: 50%;
  display: inline-block;
  animation: con-pulse 2s infinite;
}
@keyframes con-pulse {
  0%,100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.6; transform: scale(0.85); }
}
.con-hero-content h1 {
  color: #fff;
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 900;
  line-height: 1.08;
  margin: 0 0 18px;
  letter-spacing: -0.5px;
}
.con-hero-content h1 em { color: #d4af37; font-style: normal; }
.con-hero-content p {
  color: rgba(255,255,255,0.72);
  font-size: 1.05rem;
  line-height: 1.7;
  margin: 0 0 32px;
}
.con-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #d4af37;
  color: #0a1628;
  padding: 14px 32px;
  border-radius: 999px;
  font-weight: 800;
  font-size: 0.92rem;
  text-decoration: none;
  transition: background 0.22s, transform 0.2s;
  letter-spacing: 0.03em;
}
.con-cta-btn:hover { background: #b8961f; transform: translateY(-2px); }
.con-cta-btn svg {
  width: 16px; height: 16px;
  stroke: #0a1628; fill: none;
  stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
}

/* STATS BAR */
.con-stats {
  background: #d4af37;
  padding: 28px 24px;
}
.con-stats-inner {
  max-width: 1000px;
  margin: auto;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 20px;
}
.con-stat { text-align: center; }
.con-stat strong {
  display: block;
  font-size: 2rem;
  font-weight: 900;
  color: #0a1628;
  line-height: 1;
}
.con-stat span {
  font-size: 0.8rem;
  color: rgba(10,22,40,0.65);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-weight: 700;
  margin-top: 4px;
  display: block;
}

/* ABOUT */
.con-about {
  background: #fff;
  padding: 80px 24px;
}
.con-about-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.con-about-img {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(10,22,40,0.22);
}
.con-about-img img {
  width: 100%; height: 420px;
  object-fit: cover;
  display: block;
}
.con-about-img-badge {
  position: absolute;
  bottom: 20px; left: 20px;
  background: rgba(10,22,40,0.92);
  color: #d4af37;
  padding: 10px 18px;
  border-radius: 12px;
  font-size: 0.82rem;
  font-weight: 700;
}
.con-section-label {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 12px;
}
.con-section-label span {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #d4af37;
}
.con-section-label svg {
  width: 14px; height: 14px;
  stroke: #d4af37; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.con-about-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 800;
  color: #0a1628;
  line-height: 1.2;
  margin: 0 0 18px;
}
.con-about-text h2 em { color: #d4af37; font-style: normal; }
.con-about-text p {
  color: #4b5563;
  line-height: 1.75;
  font-size: 0.97rem;
  margin-bottom: 20px;
}

/* SERVICES */
.con-services {
  background: #f0f4f8;
  padding: 80px 24px;
}
.con-section-head {
  text-align: center;
  margin-bottom: 52px;
}
.con-section-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #0a1628;
  margin: 8px 0 14px;
}
.con-section-head p {
  color: #6b7280;
  font-size: 0.95rem;
  max-width: 500px;
  margin: auto;
  line-height: 1.65;
}
.con-services-inner { max-width: 1100px; margin: auto; }
.con-svc-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 24px;
}
.con-svc-card {
  background: #fff;
  border: 1px solid #dbeafe;
  border-radius: 18px;
  padding: 32px 28px;
  display: flex;
  gap: 20px;
  align-items: flex-start;
  transition: box-shadow 0.25s, transform 0.25s, border-color 0.25s;
}
.con-svc-card:hover {
  box-shadow: 0 12px 36px rgba(10,22,40,0.12);
  transform: translateY(-4px);
  border-color: #d4af37;
}
.con-svc-icon {
  width: 52px; height: 52px;
  background: #eff6ff;
  border: 1px solid #bfdbfe;
  border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.con-svc-icon svg {
  width: 26px; height: 26px;
  stroke: #1d4ed8; fill: none;
  stroke-width: 1.75; stroke-linecap: round; stroke-linejoin: round;
}
.con-svc-card h3 {
  font-size: 1.02rem;
  font-weight: 700;
  color: #0a1628;
  margin: 0 0 8px;
}
.con-svc-card p {
  color: #6b7280;
  font-size: 0.875rem;
  line-height: 1.65;
  margin: 0;
}

/* PROJECTS */
.con-projects {
  background: #0a1628;
  padding: 80px 24px;
  position: relative;
  overflow: hidden;
}
.con-projects::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 80% 50% at 50% 0%, rgba(212,175,55,0.06), transparent 65%);
}
.con-projects-inner {
  max-width: 1100px;
  margin: auto;
  position: relative;
  z-index: 1;
}
.con-projects-head { text-align: center; margin-bottom: 48px; }
.con-projects-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #fff;
  margin: 8px 0 14px;
}
.con-projects-head h2 em { color: #d4af37; font-style: normal; }
.con-projects-head p { color: rgba(255,255,255,0.6); font-size: 0.95rem; }
.con-proj-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}
.con-proj-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(212,175,55,0.2);
  border-radius: 16px;
  overflow: hidden;
  transition: border-color 0.25s, transform 0.25s;
}
.con-proj-card:hover {
  border-color: rgba(212,175,55,0.5);
  transform: translateY(-4px);
}
.con-proj-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  display: block;
  opacity: 0.85;
  transition: opacity 0.25s;
}
.con-proj-card:hover img { opacity: 1; }
.con-proj-body {
  padding: 20px 22px 24px;
}
.con-proj-tag {
  display: inline-block;
  background: rgba(212,175,55,0.15);
  color: #d4af37;
  border: 1px solid rgba(212,175,55,0.3);
  border-radius: 999px;
  padding: 3px 12px;
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.con-proj-body h3 {
  color: #fff;
  font-size: 0.97rem;
  font-weight: 700;
  margin: 0 0 6px;
}
.con-proj-body p {
  color: rgba(255,255,255,0.55);
  font-size: 0.82rem;
  line-height: 1.55;
  margin: 0;
}

/* WHY CHOOSE */
.con-why {
  background: #fff;
  padding: 80px 24px;
}
.con-why-inner { max-width: 1100px; margin: auto; }
.con-why-head { text-align: center; margin-bottom: 48px; }
.con-why-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #0a1628;
  margin: 8px 0 14px;
}
.con-why-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}
.con-why-card {
  text-align: center;
  background: #f8faff;
  border: 1px solid #e0e7ff;
  border-radius: 18px;
  padding: 32px 20px;
  transition: box-shadow 0.25s, transform 0.25s;
}
.con-why-card:hover {
  box-shadow: 0 12px 36px rgba(10,22,40,0.1);
  transform: translateY(-4px);
}
.con-why-icon {
  width: 58px; height: 58px;
  background: #eff6ff;
  border: 1.5px solid #bfdbfe;
  border-radius: 16px;
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 18px;
}
.con-why-icon svg {
  width: 28px; height: 28px;
  stroke: #1d4ed8; fill: none;
  stroke-width: 1.75; stroke-linecap: round; stroke-linejoin: round;
}
.con-why-card h4 {
  color: #0a1628;
  font-size: 0.97rem;
  font-weight: 700;
  margin: 0 0 8px;
}
.con-why-card p {
  color: #6b7280;
  font-size: 0.85rem;
  line-height: 1.6;
  margin: 0;
}

/* CTA */
.con-cta-section {
  background: #0a1628;
  padding: 80px 24px;
  text-align: center;
}
.con-cta-section h2 {
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #fff;
  margin-bottom: 14px;
}
.con-cta-section p {
  color: rgba(255,255,255,0.65);
  font-size: 0.97rem;
  margin-bottom: 32px;
  max-width: 520px;
  margin-left: auto; margin-right: auto;
}

/* RESPONSIVE */
@media (max-width: 1000px) {
  .con-why-grid { grid-template-columns: repeat(2, 1fr); }
  .con-proj-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 900px) {
  .con-about-inner { grid-template-columns: 1fr; gap: 36px; }
  .con-svc-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .con-proj-grid { grid-template-columns: 1fr; }
  .con-why-grid { grid-template-columns: 1fr; }
  .con-stats-inner { flex-direction: column; gap: 16px; }
  .con-about-img img { height: 260px; }
}
</style>

<!-- HERO -->
<section class="con-hero" aria-label="SLS Contracting Hero">
  <div class="con-hero-bg" aria-hidden="true">
  <video autoplay muted loop playsinline preload="auto">
    <source src="../assets/images/contracting.mp4" type="video/mp4">
  </video>
</div>
  <div class="con-hero-overlay" aria-hidden="true"></div>
  <div class="con-hero-content">
    <div class="con-badge">
      <span class="con-badge-dot"></span>
      SLS Group · Engineering & Infrastructure
    </div>
    <h1>Engineering<br><em>Excellence</em> for India</h1>
    <p>SLS Contracting Pvt Ltd brings international engineering standards to India through its association with Alshams GCC — delivering high-quality electrical, mechanical and infrastructure solutions.</p>
    <a href="/contact" class="con-cta-btn">
      Partner With Us
      <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </div>
</section>

<!-- STATS -->
<div class="con-stats" aria-label="Contracting at a glance">
  <div class="con-stats-inner">
    <div class="con-stat">
      <strong>25+</strong>
      <span>Years Experience</span>
    </div>
    <div class="con-stat">
      <strong>100+</strong>
      <span>Projects Executed</span>
    </div>
    <div class="con-stat">
      <strong>Multi</strong>
      <span>Sector Capability</span>
    </div>
    <div class="con-stat">
      <strong>Gov & Pvt</strong>
      <span>Trusted Clients</span>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section class="con-about" aria-labelledby="con-about-heading">
  <div class="con-about-inner">
    <div class="con-about-img">
      <img src="../assets/images/substation.webp" alt="SLS Contracting substation project" loading="lazy">
      <div class="con-about-img-badge">⚡ 110kV Substation — Tamil Nadu</div>
    </div>
    <div class="con-about-text">
      <div class="con-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        <span>About SLS Contracting</span>
      </div>
      <h2 id="con-about-heading">Global Standards,<br><em>Indian Execution</em></h2>
      <p>SLS Contracting Pvt Ltd is the Indian extension of international expertise through its association with Alshams GCC. We bring global engineering standards to India, delivering high-quality electrical, mechanical, and infrastructure solutions.</p>
      <p>With a strong focus on execution, safety, and reliability, we serve both government and private sector clients across Tamil Nadu and beyond — backed by 25+ years of industry experience.</p>
      <a href="/contact" class="con-cta-btn">
        Get In Touch
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="con-services" aria-labelledby="con-svc-heading">
  <div class="con-services-inner">
    <div class="con-section-head">
      <div class="con-section-label" style="justify-content:center;" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        <span>What We Do</span>
      </div>
      <h2 id="con-svc-heading">Our Services</h2>
      <p>End-to-end engineering solutions across electrical, mechanical and infrastructure sectors.</p>
    </div>
    <div class="con-svc-grid">

      <div class="con-svc-card">
        <div class="con-svc-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
        </div>
        <div>
          <h3>Electrical Substation Works</h3>
          <p>Design, supply and installation of high-voltage substations including 110kV and above, serving Tamil Nadu's power infrastructure needs.</p>
        </div>
      </div>

      <div class="con-svc-card">
        <div class="con-svc-icon">
          <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        </div>
        <div>
          <h3>Power Transmission & Distribution</h3>
          <p>Complete transmission line installation projects ensuring reliable power delivery across industrial and residential networks.</p>
        </div>
      </div>

      <div class="con-svc-card">
        <div class="con-svc-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </div>
        <div>
          <h3>Industrial Electrical Installations</h3>
          <p>Comprehensive electrical works for manufacturing units and industrial facilities with a focus on safety and reliability.</p>
        </div>
      </div>

      <div class="con-svc-card">
        <div class="con-svc-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93l-1.41 1.41"/><path d="M4.93 4.93l1.41 1.41"/><path d="M19.07 19.07l-1.41-1.41"/><path d="M4.93 19.07l1.41-1.41"/><path d="M12 2v2M12 20v2M2 12h2M20 12h2"/></svg>
        </div>
        <div>
          <h3>Mechanical & Electromechanical Works</h3>
          <p>Integrated mechanical and electromechanical solutions for complex infrastructure projects requiring multi-discipline expertise.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KEY PROJECTS -->
<section class="con-projects" aria-labelledby="con-proj-heading">
  <div class="con-projects-inner">
    <div class="con-projects-head">
      <div class="con-section-label" style="justify-content:center;" aria-hidden="true">
        <svg viewBox="0 0 24 24" style="stroke:#d4af37"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        <span style="color:#d4af37;">Portfolio</span>
      </div>
      <h2 id="con-proj-heading">Key <em>Projects</em></h2>
      <p style="color:rgba(255,255,255,0.6)">A selection of landmark infrastructure projects delivered with precision and reliability.</p>
    </div>
    <div class="con-proj-grid">

      <div class="con-proj-card">
        <img src="../assets/images/substation.webp" alt="110kV Substation Tamil Nadu" loading="lazy">
        <div class="con-proj-body">
          <span class="con-proj-tag">Substation</span>
          <h3>110kV Substation – Tamil Nadu</h3>
          <p>High-voltage substation design and installation for Tamil Nadu's power grid infrastructure.</p>
        </div>
      </div>

      <div class="con-proj-card">
        <img src="../assets/images/factory.webp" alt="Industrial Electrical Works" loading="lazy">
        <div class="con-proj-body">
          <span class="con-proj-tag">Industrial</span>
          <h3>Industrial Electrical Works – Manufacturing Unit</h3>
          <p>Complete electrical installation and commissioning for a large-scale manufacturing facility.</p>
        </div>
      </div>

      <div class="con-proj-card">
        <img src="../assets/images/cable.webp" alt="Transmission Line Projects" loading="lazy">
        <div class="con-proj-body">
          <span class="con-proj-tag">Transmission</span>
          <h3>Transmission Line Installation Projects</h3>
          <p>End-to-end transmission line installation ensuring reliable and efficient power distribution.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="con-why" aria-labelledby="con-why-heading">
  <div class="con-why-inner">
    <div class="con-why-head">
      <div class="con-section-label" style="justify-content:center;" aria-hidden="true">
        <svg viewBox="0 0 24 24" style="stroke:#d4af37"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span>Why Choose Us</span>
      </div>
      <h2 id="con-why-heading">Why SLS Contracting?</h2>
    </div>
    <div class="con-why-grid">

      <div class="con-why-card">
        <div class="con-why-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <h4>International Expertise</h4>
        <p>Global engineering standards via our Alshams GCC association bring world-class quality to every Indian project.</p>
      </div>

      <div class="con-why-card">
        <div class="con-why-icon">
          <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h4>Strong Technical Team</h4>
        <p>A highly skilled team of engineers and technicians committed to delivering precision at every stage.</p>
      </div>

      <div class="con-why-card">
        <div class="con-why-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h4>Timely Execution</h4>
        <p>Proven track record of delivering complex projects on schedule without compromising quality.</p>
      </div>

      <div class="con-why-card">
        <div class="con-why-icon">
          <svg viewBox="0 0 24 24"><polyline points="22 11.08 22 12 12 22 2 12 2.35 11.08"/><path d="M12 22L12 2M2 12h20"/><path d="M7 2l5 5 5-5"/></svg>
        </div>
        <h4>End-to-End Capability</h4>
        <p>From design to commissioning — complete project management across all phases under one roof.</p>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="con-cta-section">
  <h2>Partner with SLS Contracting</h2>
  <p>Reliable, high-quality engineering and infrastructure solutions for government and private sector projects across India.</p>
  <a href="/contact" class="con-cta-btn">
    Start a Project
    <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
  </a>
</section>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
