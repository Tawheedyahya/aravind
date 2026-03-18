<?php require __DIR__ . '/../layouts/app.php'; ?>

<style>
/* ══════════════════════════════════════
   SLS AGENCY PAGE — Clean Blue / Orange
══════════════════════════════════════ */

/* HERO */
.agency-hero {
  position: relative;
  min-height: 480px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  background: #0c1a2e;
}
.agency-hero-bg {
  position: absolute;
  inset: 0;
  overflow: hidden;
}
.agency-hero-bg video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* opacity: 0.6; */
}
.agency-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(12,26,46,0.3) 0%, rgba(12,26,46,0.8) 100%);
}
.agency-hero-content {
  position: relative;
  z-index: 2;
  padding: 90px 24px 70px;
  max-width: 700px;
}
.agency-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(251,146,60,0.45);
  color: rgba(255,255,255,0.92);
  border-radius: 999px;
  padding: 6px 18px 6px 12px;
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  margin-bottom: 22px;
}
.agency-badge-dot {
  width: 8px; height: 8px;
  background: #fb923c;
  border-radius: 50%;
  display: inline-block;
  animation: agency-pulse 2s infinite;
}
@keyframes agency-pulse {
  0%,100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.6; transform: scale(0.85); }
}
.agency-hero-content h1 {
  color: #fff;
  font-size: clamp(2.4rem, 5.5vw, 3.8rem);
  font-weight: 900;
  line-height: 1.08;
  margin: 0 0 18px;
  letter-spacing: -0.5px;
}
.agency-hero-content h1 em { color: #fdba74; font-style: normal; }
.agency-hero-content p {
  color: rgba(255,255,255,0.72);
  font-size: 1.05rem;
  line-height: 1.7;
  margin: 0 0 32px;
}
.agency-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #ea580c;
  color: #fff;
  padding: 14px 32px;
  border-radius: 999px;
  font-weight: 700;
  font-size: 0.92rem;
  text-decoration: none;
  transition: background 0.22s, transform 0.2s;
  letter-spacing: 0.03em;
}
.agency-cta-btn:hover { background: #c2410c; transform: translateY(-2px); }
.agency-cta-btn svg {
  width: 16px; height: 16px;
  stroke: #fff; fill: none;
  stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
}

/* STATS BAR */
.agency-stats {
  background: #1e3a5f;
  padding: 28px 24px;
}
.agency-stats-inner {
  max-width: 1000px;
  margin: auto;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 20px;
}
.agency-stat { text-align: center; color: #fff; }
.agency-stat strong {
  display: block;
  font-size: 2rem;
  font-weight: 900;
  color: #fb923c;
  line-height: 1;
}
.agency-stat span {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.6);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 4px;
  display: block;
}

/* ABOUT */
.agency-about {
  background: #fff;
  padding: 80px 24px;
}
.agency-about-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.agency-about-img {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(12,26,46,0.18);
}
.agency-about-img img {
  width: 100%; height: 420px;
  object-fit: cover;
  display: block;
}
.agency-about-img-badge {
  position: absolute;
  bottom: 20px; left: 20px;
  background: rgba(12,26,46,0.9);
  color: #fff;
  padding: 10px 18px;
  border-radius: 12px;
  font-size: 0.82rem;
  font-weight: 600;
}
.agency-section-label {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 12px;
}
.agency-section-label span {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #ea580c;
}
.agency-section-label svg {
  width: 14px; height: 14px;
  stroke: #ea580c; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.agency-about-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 800;
  color: #0c1a2e;
  line-height: 1.2;
  margin: 0 0 18px;
}
.agency-about-text p {
  color: #4b5563;
  line-height: 1.75;
  font-size: 0.97rem;
  margin-bottom: 20px;
}

/* SERVICES */
.agency-services {
  background: #f0f7ff;
  padding: 80px 24px;
}
.agency-section-head {
  text-align: center;
  margin-bottom: 52px;
}
.agency-section-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #0c1a2e;
  margin: 8px 0 14px;
}
.agency-section-head p {
  color: #6b7280;
  font-size: 0.95rem;
  max-width: 500px;
  margin: auto;
  line-height: 1.65;
}
.agency-services-inner { max-width: 1100px; margin: auto; }
.agency-svc-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.agency-svc-card {
  background: #fff;
  border: 1px solid #bfdbfe;
  border-radius: 18px;
  padding: 30px 26px;
  transition: box-shadow 0.25s, transform 0.25s;
}
.agency-svc-card:hover {
  box-shadow: 0 12px 36px rgba(12,26,46,0.12);
  transform: translateY(-4px);
  border-color: #fb923c;
}
.agency-svc-icon {
  width: 52px; height: 52px;
  background: #fff7ed;
  border: 1px solid #fed7aa;
  border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 18px;
}
.agency-svc-icon svg {
  width: 26px; height: 26px;
  stroke: #ea580c; fill: none;
  stroke-width: 1.75; stroke-linecap: round; stroke-linejoin: round;
}
.agency-svc-card h3 {
  font-size: 1.02rem;
  font-weight: 700;
  color: #0c1a2e;
  margin: 0 0 10px;
}
.agency-svc-card p {
  color: #6b7280;
  font-size: 0.875rem;
  line-height: 1.65;
  margin: 0;
}

/* STRENGTH SECTION */
.agency-strength {
  background: #0c1a2e;
  padding: 80px 24px;
  position: relative;
  overflow: hidden;
}
.agency-strength::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(251,146,60,0.06), transparent 65%);
}
.agency-strength-inner {
  max-width: 1100px;
  margin: auto;
  position: relative;
  z-index: 1;
}
.agency-strength-head { text-align: center; margin-bottom: 48px; }
.agency-strength-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #fff;
  margin: 8px 0 14px;
}
.agency-strength-head h2 em { color: #fdba74; font-style: normal; }
.agency-strength-head p { color: rgba(255,255,255,0.6); font-size: 0.95rem; }
.agency-strength-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}
.agency-strength-item {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(251,146,60,0.18);
  border-radius: 16px;
  padding: 24px 26px;
  display: flex;
  gap: 16px;
  align-items: flex-start;
  transition: border-color 0.25s;
}
.agency-strength-item:hover { border-color: rgba(251,146,60,0.45); }
.agency-strength-num {
  width: 36px; height: 36px;
  background: #ea580c;
  color: #fff;
  border-radius: 50%;
  font-size: 0.82rem;
  font-weight: 800;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.agency-strength-item h4 {
  color: #fdba74;
  font-size: 0.95rem;
  font-weight: 700;
  margin: 0 0 6px;
}
.agency-strength-item p {
  color: rgba(255,255,255,0.6);
  font-size: 0.875rem;
  line-height: 1.6;
  margin: 0;
}

/* CTA */
.agency-cta-section {
  background: #fff;
  padding: 72px 24px;
  text-align: center;
}
.agency-cta-section h2 {
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #0c1a2e;
  margin-bottom: 14px;
}
.agency-cta-section p {
  color: #6b7280;
  font-size: 0.97rem;
  margin-bottom: 32px;
  max-width: 500px;
  margin-left: auto; margin-right: auto;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .agency-about-inner { grid-template-columns: 1fr; gap: 36px; }
  .agency-svc-grid { grid-template-columns: repeat(2, 1fr); }
  .agency-strength-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .agency-svc-grid { grid-template-columns: 1fr; }
  .agency-stats-inner { flex-direction: column; gap: 16px; }
  .agency-about-img img { height: 260px; }
}

/* MAP SECTION */
.agency-map-section {
  background: #f0f6ff;
  padding: 80px 24px;
  border-top: 1px solid #dbeafe;
}
.agency-map-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 56px;
  align-items: start;
}
.agency-map-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #1e3a5f;
  margin: 10px 0 16px;
}
.agency-map-text > p {
  color: #6b7280;
  line-height: 1.75;
  font-size: 0.95rem;
  margin-bottom: 28px;
}
.agency-map-details { display: flex; flex-direction: column; gap: 18px; margin-bottom: 32px; }
.agency-map-detail-item {
  display: flex; align-items: flex-start; gap: 14px;
}
.agency-map-detail-item svg {
  width: 20px; height: 20px; flex-shrink: 0;
  stroke: #1d4ed8; margin-top: 2px;
}
.agency-map-detail-item strong { display: block; font-size: 0.82rem; color: #1e3a5f; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 2px; }
.agency-map-detail-item span { font-size: 0.9rem; color: #4b5563; }
.agency-map-cta {
  display: inline-flex; align-items: center; gap: 8px;
  background: #1d4ed8; color: #fff;
  padding: 13px 28px; border-radius: 999px;
  font-weight: 700; font-size: 0.9rem;
  text-decoration: none; transition: background 0.2s, transform 0.2s;
}
.agency-map-cta:hover { background: #1e3a5f; transform: translateY(-2px); color: #fff; }
.agency-map-embed { position: relative; }
.agency-map-embed iframe {
  width: 100%; height: 420px;
  border: 0; border-radius: 16px;
  box-shadow: 0 12px 40px rgba(29,78,216,0.12);
  display: block;
}
.agency-map-open-link {
  margin-top: 12px; text-align: right;
}
.agency-map-open-link a {
  display: inline-flex; align-items: center; gap: 6px;
  color: #1d4ed8; font-size: 0.82rem; font-weight: 600;
  text-decoration: none; transition: color 0.2s;
}
.agency-map-open-link a:hover { color: #1e3a5f; }

@media (max-width: 900px) {
  .agency-map-inner { grid-template-columns: 1fr; gap: 36px; }
  .agency-map-embed iframe { height: 320px; }
}
</style>

<!-- HERO -->
<section class="agency-hero" aria-label="SLS Agency Hero">
  <div class="agency-hero-bg" aria-hidden="true">
  <video autoplay muted loop playsinline preload="auto">
    <source src="../assets/images/agency.mp4" type="video/mp4">
  </video>
</div>
  <div class="agency-hero-overlay" aria-hidden="true"></div>
  <div class="agency-hero-content">
    <div class="agency-badge">
      <span class="agency-badge-dot"></span>
      SLS Group · Fuel & Energy Services
    </div>
    <h1>Fuel Your Journey<br><em>With Confidence</em></h1>
    <p>SLS Agency operates a modern fuel station committed to delivering high-quality petrol and diesel with accuracy, trust, and consistency.</p>
    <a href="/contact" class="agency-cta-btn">
      Get In Touch
      <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </div>
</section>

<!-- STATS -->
<div class="agency-stats" aria-label="Agency at a glance">
  <div class="agency-stats-inner">
    <div class="agency-stat">
      <strong>2</strong>
      <span>Fuel Types</span>
    </div>
    <div class="agency-stat">
      <strong>24/7</strong>
      <span>Reliable Service</span>
    </div>
    <div class="agency-stat">
      <strong>1</strong>
      <span>Delivery Vehicle</span>
    </div>
    <div class="agency-stat">
      <strong>100%</strong>
      <span>Accurate Dispensing</span>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section class="agency-about" aria-labelledby="agency-about-heading">
  <div class="agency-about-inner">
    <div class="agency-about-img">
      <img src="../assets/images/petrol.webp" alt="SLS Agency fuel station" loading="lazy">
      <div class="agency-about-img-badge">⛽ Trusted Fuel Station</div>
    </div>
    <div class="agency-about-text">
      <div class="agency-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 2c0 0-5.5 5-5.5 9.5a5.5 5.5 0 0 0 11 0C17.5 7 12 2 12 2z"/></svg>
        <span>About SLS Agency</span>
      </div>
      <h2 id="agency-about-heading">Quality & Trust<br>at Every Pump</h2>
      <p>SLS Agency operates a modern fuel station committed to delivering high-quality petrol and diesel with accuracy, trust, and consistency. Located in a highly accessible area, we cater to both daily commuters and commercial vehicles.</p>
      <p>Our on-site delivery vehicle extends our service reach to nearby areas, making us a complete fuel and energy partner for individuals and businesses alike.</p>
      <a href="/contact" class="agency-cta-btn">
        Enquire Now
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="agency-services" aria-labelledby="agency-svc-heading">
  <div class="agency-services-inner">
    <div class="agency-section-head">
      <div class="agency-section-label" style="justify-content:center;" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 2c0 0-5.5 5-5.5 9.5a5.5 5.5 0 0 0 11 0C17.5 7 12 2 12 2z"/></svg>
        <span>Our Services</span>
      </div>
      <h2 id="agency-svc-heading">What We Provide</h2>
      <p>Comprehensive fuel and energy services designed for efficiency, reliability and customer satisfaction.</p>
    </div>
    <div class="agency-svc-grid">

      <div class="agency-svc-card">
        <div class="agency-svc-icon">
          <svg viewBox="0 0 24 24"><path d="M3 3h7v7H3z"/><path d="M14 3h7v7h-7z"/><path d="M14 14h7v7h-7z"/><path d="M3 14h7v7H3z"/></svg>
        </div>
        <h3>High-Quality Petrol & Diesel</h3>
        <p>Premium grade fuels sourced and dispensed to maintain consistent quality for all vehicle types.</p>
      </div>

      <div class="agency-svc-card">
        <div class="agency-svc-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h3>Accurate Dispensing Systems</h3>
        <p>State-of-the-art fuel dispensers ensuring precise measurements and transparent transactions every time.</p>
      </div>

      <div class="agency-svc-card">
        <div class="agency-svc-icon">
          <svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="2"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        </div>
        <h3>On-Site Fuel Delivery</h3>
        <p>Our dedicated delivery vehicle provides on-site fuel supply to nearby areas, serving commercial clients directly.</p>
      </div>

      <div class="agency-svc-card">
        <div class="agency-svc-icon">
          <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
        </div>
        <h3>Fast & Efficient Service</h3>
        <p>Quick turnaround for all customers — minimizing wait times and keeping vehicles moving without delay.</p>
      </div>

      <div class="agency-svc-card">
        <div class="agency-svc-icon">
          <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>Clean & Safe Premises</h3>
        <p>Well-maintained station with safety standards, clean forecourts and organized vehicle access lanes.</p>
      </div>

      <div class="agency-svc-card">
        <div class="agency-svc-icon">
          <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <h3>Commercial Fleet Support</h3>
        <p>Trusted by transport operators and commercial fleet owners for consistent, bulk fuel supply needs.</p>
      </div>

    </div>
  </div>
</section>

<!-- STRENGTH -->
<section class="agency-strength" aria-labelledby="agency-strength-heading">
  <div class="agency-strength-inner">
    <div class="agency-strength-head">
      <h2 id="agency-strength-heading">Our <em>Strengths</em></h2>
      <p>Why customers trust SLS Agency for all their fuel and energy needs.</p>
    </div>
    <div class="agency-strength-grid">

      <div class="agency-strength-item">
        <div class="agency-strength-num">01</div>
        <div>
          <h4>Prime Accessible Location</h4>
          <p>Strategically situated for easy access by both daily commuters and commercial transport operators.</p>
        </div>
      </div>

      <div class="agency-strength-item">
        <div class="agency-strength-num">02</div>
        <div>
          <h4>Trusted by Regular Customers</h4>
          <p>A loyal base of daily commuters and transport operators who rely on our consistent service quality.</p>
        </div>
      </div>

      <div class="agency-strength-item">
        <div class="agency-strength-num">03</div>
        <div>
          <h4>Consistent Fuel Quality</h4>
          <p>Uncompromising standards in fuel quality ensuring optimal vehicle performance for every customer.</p>
        </div>
      </div>

      <div class="agency-strength-item">
        <div class="agency-strength-num">04</div>
        <div>
          <h4>Own Delivery Vehicle</h4>
          <p>A dedicated delivery vehicle allows us to extend our services to nearby areas and commercial sites.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LOCATION MAP -->
<!-- <section class="agency-map-section" aria-label="SLS Agency Location">
  <div class="agency-map-inner">
    <div class="agency-map-text">
      <div class="agency-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <span>Find Us</span>
      </div>
      <h2>Our Location</h2>
      <p>SLS Agency is located in a <strong>prime, highly accessible area</strong> serving daily commuters, commercial vehicles, and nearby industrial operations.</p>
      <div class="agency-map-details">
        <div class="agency-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div>
            <strong>Location</strong>
            <span>Prime accessible area, Tamil Nadu</span>
          </div>
        </div>
        <div class="agency-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div>
            <strong>Operating Hours</strong>
            <span>Open daily — morning to night</span>
          </div>
        </div>
        <div class="agency-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12"/><path d="M1.61 3.38A2 2 0 0 1 3.58 1h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29"/></svg>
          <div>
            <strong>Contact</strong>
            <span>+91 90872 02312</span>
          </div>
        </div>
      </div>
      <a href="/contact" class="agency-map-cta">Get Directions & Contact →</a>
    </div>
    <div class="agency-map-embed">
      <iframe
        src="https://maps.google.com/maps?q=SLS+Agency+Petrol+Pump+Perambalur+Tamil+Nadu&t=&z=15&ie=UTF8&iwloc=&output=embed"
        width="100%"
        height="420"
        style="border:0; border-radius:16px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="SLS Agency Fuel Station Location Map"
        aria-label="Google Maps showing SLS Agency location">
      </iframe>
      <div class="agency-map-open-link">
        <a href="https://maps.app.goo.gl/He773wQbiqCD1oFq5" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="15" height="15"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          Open in Google Maps
        </a>
      </div>
    </div>
  </div>
</section> -->

<!-- CTA -->
<section class="agency-cta-section">
  <h2>Where Quality and Trust Meet</h2>
  <p>Fuel your journey with confidence at SLS Agency — reliable fuel services for every road ahead.</p>
  <a href="/contact" class="agency-cta-btn">
    Contact Us
    <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
  </a>
</section>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
