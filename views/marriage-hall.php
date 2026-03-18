<?php require __DIR__ . '/../layouts/app.php'; ?>

<style>
/* ══════════════════════════════════════
   MARRIAGE HALL PAGE — Warm Gold / Rose
══════════════════════════════════════ */

/* HERO */
.hall-hero {
  position: relative;
  min-height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  background: #3b1a0a;
}
.hall-hero-bg {
  position: absolute;
  inset: 0;
  overflow: hidden;
}
.hall-hero-bg video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* opacity: 0.6; */
}
.hall-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(59,26,10,0.2) 0%, rgba(59,26,10,0.75) 100%);
}
.hall-hero-content {
  position: relative;
  z-index: 2;
  padding: 90px 24px 70px;
  max-width: 700px;
}
.hall-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(212,175,55,0.5);
  color: rgba(255,255,255,0.92);
  border-radius: 999px;
  padding: 6px 18px 6px 12px;
  font-size: 0.78rem;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  margin-bottom: 22px;
}
.hall-badge-dot {
  width: 8px; height: 8px;
  background: #d4af37;
  border-radius: 50%;
  display: inline-block;
  animation: hall-pulse 2s infinite;
}
@keyframes hall-pulse {
  0%,100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.6; transform: scale(0.85); }
}
.hall-hero-content h1 {
  color: #fff;
  font-size: clamp(2.4rem, 5.5vw, 3.8rem);
  font-weight: 900;
  line-height: 1.08;
  margin: 0 0 18px;
  letter-spacing: -0.5px;
}
.hall-hero-content h1 em { color: #f5c842; font-style: normal; }
.hall-hero-content p {
  color: rgba(255,255,255,0.75);
  font-size: 1.05rem;
  line-height: 1.7;
  margin: 0 0 32px;
}
.hall-cta-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #c9931a;
  color: #fff;
  padding: 14px 32px;
  border-radius: 999px;
  font-weight: 700;
  font-size: 0.92rem;
  text-decoration: none;
  transition: background 0.22s, transform 0.2s;
  letter-spacing: 0.03em;
}
.hall-cta-btn:hover { background: #a87815; transform: translateY(-2px); }
.hall-cta-btn svg {
  width: 16px; height: 16px;
  stroke: #fff; fill: none;
  stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round;
}

/* STATS BAR */
.hall-stats {
  background: #7c2d12;
  padding: 28px 24px;
}
.hall-stats-inner {
  max-width: 1000px;
  margin: auto;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  gap: 20px;
}
.hall-stat { text-align: center; color: #fff; }
.hall-stat strong {
  display: block;
  font-size: 2rem;
  font-weight: 900;
  color: #fcd34d;
  line-height: 1;
}
.hall-stat span {
  font-size: 0.8rem;
  color: rgba(255,255,255,0.65);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 4px;
  display: block;
}

/* ABOUT */
.hall-about {
  background: #fff;
  padding: 80px 24px;
}
.hall-about-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}
.hall-about-img {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 60px rgba(124,45,18,0.18);
}
.hall-about-img img {
  width: 100%; height: 420px;
  object-fit: cover;
  display: block;
}
.hall-about-img-badge {
  position: absolute;
  bottom: 20px; left: 20px;
  background: rgba(124,45,18,0.9);
  color: #fff;
  padding: 10px 18px;
  border-radius: 12px;
  font-size: 0.82rem;
  font-weight: 600;
}
.hall-section-label {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 12px;
}
.hall-section-label span {
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #c9931a;
}
.hall-section-label svg {
  width: 14px; height: 14px;
  stroke: #c9931a; fill: none;
  stroke-width: 2; stroke-linecap: round; stroke-linejoin: round;
}
.hall-about-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 800;
  color: #7c2d12;
  line-height: 1.2;
  margin: 0 0 18px;
}
.hall-about-text p {
  color: #4b5563;
  line-height: 1.75;
  font-size: 0.97rem;
  margin-bottom: 20px;
}

/* FACILITIES */
.hall-facilities {
  background: #fffbeb;
  padding: 80px 24px;
}
.hall-section-head {
  text-align: center;
  margin-bottom: 52px;
}
.hall-section-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #7c2d12;
  margin: 8px 0 14px;
}
.hall-section-head p {
  color: #6b7280;
  font-size: 0.95rem;
  max-width: 500px;
  margin: auto;
  line-height: 1.65;
}
.hall-facilities-inner { max-width: 1100px; margin: auto; }
.hall-fac-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.hall-fac-card {
  background: #fff;
  border: 1px solid #fde68a;
  border-radius: 18px;
  padding: 30px 26px;
  transition: box-shadow 0.25s, transform 0.25s;
}
.hall-fac-card:hover {
  box-shadow: 0 12px 36px rgba(124,45,18,0.12);
  transform: translateY(-4px);
}
.hall-fac-icon {
  width: 52px; height: 52px;
  background: #fef9c3;
  border: 1px solid #fde047;
  border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  margin-bottom: 18px;
}
.hall-fac-icon svg {
  width: 26px; height: 26px;
  stroke: #a16207; fill: none;
  stroke-width: 1.75; stroke-linecap: round; stroke-linejoin: round;
}
.hall-fac-card h3 {
  font-size: 1.02rem;
  font-weight: 700;
  color: #7c2d12;
  margin: 0 0 10px;
}
.hall-fac-card p {
  color: #6b7280;
  font-size: 0.875rem;
  line-height: 1.65;
  margin: 0;
}

/* WHY CHOOSE */
.hall-why {
  background: #7c2d12;
  padding: 80px 24px;
  position: relative;
  overflow: hidden;
}
.hall-why::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(252,211,77,0.07), transparent 65%);
}
.hall-why-inner {
  max-width: 1100px;
  margin: auto;
  position: relative;
  z-index: 1;
}
.hall-why-head {
  text-align: center;
  margin-bottom: 48px;
}
.hall-why-head h2 {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 800;
  color: #fff;
  margin: 8px 0 14px;
}
.hall-why-head h2 em { color: #fcd34d; font-style: normal; }
.hall-why-head p {
  color: rgba(255,255,255,0.65);
  font-size: 0.95rem;
  max-width: 480px;
  margin: auto;
}
.hall-why-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}
.hall-why-item {
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(252,211,77,0.2);
  border-radius: 16px;
  padding: 24px 26px;
  display: flex;
  gap: 16px;
  align-items: flex-start;
}
.hall-why-num {
  width: 36px; height: 36px;
  background: #c9931a;
  color: #fff;
  border-radius: 50%;
  font-size: 0.82rem;
  font-weight: 800;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.hall-why-item h4 {
  color: #fcd34d;
  font-size: 0.95rem;
  font-weight: 700;
  margin: 0 0 6px;
}
.hall-why-item p {
  color: rgba(255,255,255,0.65);
  font-size: 0.875rem;
  line-height: 1.6;
  margin: 0;
}

/* CTA */
.hall-cta-section {
  background: #fff;
  padding: 72px 24px;
  text-align: center;
}
.hall-cta-section h2 {
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #7c2d12;
  margin-bottom: 14px;
}
.hall-cta-section p {
  color: #6b7280;
  font-size: 0.97rem;
  margin-bottom: 32px;
  max-width: 500px;
  margin-left: auto; margin-right: auto;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .hall-about-inner { grid-template-columns: 1fr; gap: 36px; }
  .hall-fac-grid { grid-template-columns: repeat(2, 1fr); }
  .hall-why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .hall-fac-grid { grid-template-columns: 1fr; }
  .hall-stats-inner { flex-direction: column; gap: 16px; }
  .hall-about-img img { height: 260px; }
}

/* MAP SECTION */
.hall-map-section {
  background: #fff9f0;
  padding: 80px 24px;
  border-top: 1px solid #fde8c8;
}
.hall-map-inner {
  max-width: 1100px;
  margin: auto;
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 56px;
  align-items: start;
}
.hall-map-text h2 {
  font-size: clamp(1.8rem, 3vw, 2.4rem);
  font-weight: 800;
  color: #7c2d12;
  margin: 10px 0 16px;
}
.hall-map-text > p {
  color: #6b7280;
  line-height: 1.75;
  font-size: 0.95rem;
  margin-bottom: 28px;
}
.hall-map-details { display: flex; flex-direction: column; gap: 18px; margin-bottom: 32px; }
.hall-map-detail-item {
  display: flex; align-items: flex-start; gap: 14px;
}
.hall-map-detail-item svg {
  width: 20px; height: 20px; flex-shrink: 0;
  stroke: #c2410c; margin-top: 2px;
}
.hall-map-detail-item strong { display: block; font-size: 0.82rem; color: #7c2d12; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 2px; }
.hall-map-detail-item span { font-size: 0.9rem; color: #4b5563; }
.hall-map-cta {
  display: inline-flex; align-items: center; gap: 8px;
  background: #c2410c; color: #fff;
  padding: 13px 28px; border-radius: 999px;
  font-weight: 700; font-size: 0.9rem;
  text-decoration: none; transition: background 0.2s, transform 0.2s;
}
.hall-map-cta:hover { background: #7c2d12; transform: translateY(-2px); color: #fff; }
.hall-map-embed { position: relative; }
.hall-map-embed iframe {
  width: 100%; height: 420px;
  border: 0; border-radius: 16px;
  box-shadow: 0 12px 40px rgba(194,65,12,0.12);
  display: block;
}
.hall-map-open-link {
  margin-top: 12px; text-align: right;
}
.hall-map-open-link a {
  display: inline-flex; align-items: center; gap: 6px;
  color: #c2410c; font-size: 0.82rem; font-weight: 600;
  text-decoration: none;
  transition: color 0.2s;
}
.hall-map-open-link a:hover { color: #7c2d12; }

@media (max-width: 900px) {
  .hall-map-inner { grid-template-columns: 1fr; gap: 36px; }
  .hall-map-embed iframe { height: 320px; }
}
</style>

<!-- HERO -->
<section class="hall-hero" aria-label="SLS Marriage Hall Hero">
  <div class="hall-hero-bg" aria-hidden="true">
  <video autoplay muted loop playsinline preload="auto">
    <source src="../assets/images/marriage-video.mp4" type="video/mp4">
  </video>
</div>
  <div class="hall-hero-overlay" aria-hidden="true"></div>
  <div class="hall-hero-content">
    <div class="hall-badge">
      <span class="hall-badge-dot"></span>
      SLS Group · Events & Hospitality
    </div>
    <h1>Host Your Most<br><em>Precious Moments</em></h1>
    <p>Located on the Perambalur–Attur National Highway, SLS Marriage Hall combines excellent accessibility with all essential amenities for a seamless celebration.</p>
    <a href="/contact" class="hall-cta-btn">
      Book Your Event
      <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
  </div>
</section>

<!-- STATS -->
<div class="hall-stats" aria-label="Hall at a glance">
  <div class="hall-stats-inner">
    <div class="hall-stat">
      <strong>1000+</strong>
      <span>Guest Capacity</span>
    </div>
    <div class="hall-stat">
      <strong>NH</strong>
      <span>Highway Access</span>
    </div>
    <div class="hall-stat">
      <strong>100%</strong>
      <span>Affordable Pricing</span>
    </div>
    <div class="hall-stat">
      <strong>All</strong>
      <span>Events Welcome</span>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section class="hall-about" aria-labelledby="hall-about-heading">
  <div class="hall-about-inner">
    <div class="hall-about-img">
      <img src="../assets/images/marriage.webp" alt="SLS Marriage Hall interior" loading="lazy">
      <div class="hall-about-img-badge">✨ Premium Event Venue</div>
    </div>
    <div class="hall-about-text">
      <div class="hall-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        <span>About The Venue</span>
      </div>
      <h2 id="hall-about-heading">Where Comfort Meets Convenience</h2>
      <p>SLS Marriage Hall is a well-designed event venue located on the Perambalur–Attur National Highway, offering excellent accessibility for guests from all directions.</p>
      <p>Ideal for weddings, receptions, and large gatherings, our hall combines affordability with all essential amenities for a seamless and memorable experience.</p>
      <a href="/contact" class="hall-cta-btn">
        Make an Enquiry
        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- FACILITIES -->
<section class="hall-facilities" aria-labelledby="hall-fac-heading">
  <div class="hall-facilities-inner">
    <div class="hall-section-head">
      <div class="hall-section-label" style="justify-content:center;" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
        <span>What We Offer</span>
      </div>
      <h2 id="hall-fac-heading">Facilities & Features</h2>
      <p>Everything you need for a flawless event, all in one place.</p>
    </div>
    <div class="hall-fac-grid">

      <div class="hall-fac-card">
        <div class="hall-fac-icon">
          <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Spacious Hall & Seating</h3>
        <p>Large seating capacity designed to accommodate both intimate gatherings and grand celebrations comfortably.</p>
      </div>

      <div class="hall-fac-card">
        <div class="hall-fac-icon">
          <svg viewBox="0 0 24 24"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
        </div>
        <h3>Dedicated Dining Area</h3>
        <p>A well-organized, hygienic dining space to ensure smooth and pleasant meal experiences for all guests.</p>
      </div>

      <div class="hall-fac-card">
        <div class="hall-fac-icon">
          <svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="2"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
        </div>
        <h3>Ample Parking Space</h3>
        <p>Generous parking area to comfortably accommodate all guests' vehicles without any hassle.</p>
      </div>

      <div class="hall-fac-card">
        <div class="hall-fac-icon">
          <svg viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </div>
        <h3>Highway Accessibility</h3>
        <p>Strategically located on the Perambalur–Attur National Highway, ensuring easy reach for guests from all areas.</p>
      </div>

      <div class="hall-fac-card">
        <div class="hall-fac-icon">
          <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>Clean & Hygienic Environment</h3>
        <p>Well-maintained infrastructure with clean surroundings and efficient crowd management for a smooth event flow.</p>
      </div>

      <div class="hall-fac-card">
        <div class="hall-fac-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <h3>Reliable Event Support</h3>
        <p>Professional staff ensuring every aspect of your event runs smoothly from start to finish.</p>
      </div>

    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="hall-why" aria-labelledby="hall-why-heading">
  <div class="hall-why-inner">
    <div class="hall-why-head">
      <h2 id="hall-why-heading">Why Choose <em>SLS Marriage Hall?</em></h2>
      <p>We combine prime location, affordable pricing and modern amenities to make your event unforgettable.</p>
    </div>
    <div class="hall-why-grid">

      <div class="hall-why-item">
        <div class="hall-why-num">01</div>
        <div>
          <h4>Prime Location</h4>
          <p>Easy highway access makes it convenient for guests travelling from nearby towns and cities.</p>
        </div>
      </div>

      <div class="hall-why-item">
        <div class="hall-why-num">02</div>
        <div>
          <h4>Affordable Pricing</h4>
          <p>Premium experience at competitive rates — ensuring great value without compromising on quality.</p>
        </div>
      </div>

      <div class="hall-why-item">
        <div class="hall-why-num">03</div>
        <div>
          <h4>Suitable for All Events</h4>
          <p>From traditional weddings to modern receptions and all major social functions and gatherings.</p>
        </div>
      </div>

      <div class="hall-why-item">
        <div class="hall-why-num">04</div>
        <div>
          <h4>Organized & Comfortable</h4>
          <p>Thoughtfully designed layout for efficient movement, comfort, and a dignified experience for all guests.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LOCATION MAP -->
<section class="hall-map-section" aria-label="SLS Marriage Hall Location">
  <div class="hall-map-inner">
    <div class="hall-map-text">
      <div class="hall-section-label" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <span>Find Us</span>
      </div>
      <h2>Our Location</h2>
      <p>Conveniently situated on the <strong>Perambalur–Attur National Highway</strong>, SLS Marriage Hall is easily accessible for guests travelling from all nearby towns and cities.</p>
      <div class="hall-map-details">
        <div class="hall-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <div>
            <strong>Address</strong>
            <span>Perambalur–Attur National Highway, Tamil Nadu</span>
          </div>
        </div>
        <div class="hall-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          <div>
            <strong>Availability</strong>
            <span>Open for bookings year-round</span>
          </div>
        </div>
        <div class="hall-map-detail-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12"/><path d="M1.61 3.38A2 2 0 0 1 3.58 1h3a2 2 0 0 1 2 1.72 12.05 12.05 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L7.91 8.56a16 16 0 0 0 6.29 6.29"/></svg>
          <div>
            <strong>Contact</strong>
            <span>+91 90872 02312</span>
          </div>
        </div>
      </div>
      <a href="/contact" class="hall-map-cta">Enquire &amp; Book Now →</a>
    </div>
    <div class="hall-map-embed">
      <iframe
        src="https://maps.google.com/maps?q=SLS+Marriage+Hall+Perambalur+Attur+Highway+Tamil+Nadu&t=&z=15&ie=UTF8&iwloc=&output=embed"
        width="100%"
        height="420"
        style="border:0; border-radius:16px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="SLS Marriage Hall Location Map"
        aria-label="Google Maps showing SLS Marriage Hall location">
      </iframe>
      <div class="hall-map-open-link">
        <a href="https://maps.app.goo.gl/CJWCJGXBnQLuKheg8" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="15" height="15"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          Open in Google Maps
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="hall-cta-section">
  <h2>Ready to Host Your Special Moment?</h2>
  <p>Contact us today to check availability and get a quote for your upcoming event at SLS Marriage Hall.</p>
  <a href="/contact" class="hall-cta-btn">
    Book Now
    <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
  </a>
</section>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
