<?php
require __DIR__ . '/../layouts/app.php';
?>

<style>
  /* ════════════════════════════════
     HERO
  ════════════════════════════════ */
  .ct-hero {
    background-color: #0f3d2e;
    text-align: center;
    padding: 56px 24px 100px;
  }

  .ct-badge {
    display: inline-block;
    border: 1px solid rgba(255,255,255,0.30);
    color: rgba(255,255,255,0.90);
    border-radius: 999px;
    padding: 5px 18px;
    margin-bottom: 22px;
    letter-spacing: 0.04em;
  }

  .ct-hero h1 {
    color: #fff;
    font-weight: 800;
    margin: 0 0 18px;
    line-height: 1.12;
  }

  .ct-hero h1 em {
    color: #4ade80;
    font-style: italic;
  }

  .ct-hero p {
    color: rgba(255,255,255,0.72);
    max-width: 520px;
    margin: 0 auto;
    line-height: 1.65;
  }

  /* ════════════════════════════════
     STATS — full-width bleeding strip
  ════════════════════════════════ */
  .ct-stats-wrap {
    background-color: #0f3d2e;
    padding: 0 20px;
    overflow: visible;
  }

  .ct-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
    max-width: 100%;
    margin: 0 auto;
    transform: translateY(50%);
  }

  /* Glass card — green-to-white gradient like image 2 */
  .ct-stat-card {
    background: linear-gradient(175deg, rgba(180,230,200,0.60) 0%, rgba(245,252,248,0.98) 48%, #fff 100%);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255,255,255,0.75);
    border-radius: 20px;
    padding: 28px 24px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(15,61,46,0.10);
  }

  .ct-stat-icon {
    width: 40px;
    height: 40px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.75);
    border-radius: 10px;
    border: 1px solid rgba(22,163,74,0.12);
  }

  .ct-stat-icon svg {
    width: 18px;
    height: 18px;
    stroke: #16a34a;
    fill: none;
    stroke-width: 1.75;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .ct-stat-number {
    color: #0f3d2e;
    font-weight: 800;
    margin: 0 0 8px;
    line-height: 1;
  }

  .ct-stat-label {
    color: #4b7a60;
    text-transform: uppercase;
    letter-spacing: 0.09em;
    font-weight: 600;
    margin: 0;
  }

  /* ════════════════════════════════
     SPACER (compensates translateY)
  ════════════════════════════════ */
  .ct-spacer {
    background: #fff;
    height: 90px;
  }

  /* ════════════════════════════════
     MISSION
  ════════════════════════════════ */
  .ct-mission-wrap {
    background: #fff;
    padding: 0 24px 72px;
  }

  .ct-mission {
    max-width: 960px;
    margin: 0 auto;
    background: #f8faf9;
    border-radius: 22px;
    padding: 52px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 52px;
    align-items: center;
  }

  .ct-mission-icon {
    width: 46px;
    height: 46px;
    background: #fff;
    border: 1px solid #e2e8e5;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(15,61,46,0.06);
  }

  .ct-mission-icon svg {
    width: 20px;
    height: 20px;
    stroke: #16a34a;
    fill: none;
    stroke-width: 1.75;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .ct-mission h2 {
    color: #0f3d2e;
    font-weight: 800;
    margin: 0 0 14px;
  }

  .ct-mission-desc {
    color: #4b5563;
    line-height: 1.7;
    margin: 0 0 24px;
  }

  .ct-mission-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .ct-mission-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: #374151;
    line-height: 1.55;
  }

  .ct-mission-list li svg {
    flex-shrink: 0;
    width: 16px;
    height: 16px;
    stroke: #16a34a;
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    margin-top: 3px;
  }

  /* ── Image placeholder ── */
  .ct-img-placeholder {
    background: linear-gradient(145deg, #d1fae5 0%, #ecfdf5 100%);
    border-radius: 18px;
    aspect-ratio: 1 / 1;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .ct-img-placeholder svg {
    width: 80px;
    height: 80px;
    stroke: #6ee7b7;
    fill: none;
    stroke-width: 1.2;
    stroke-linecap: round;
    stroke-linejoin: round;
    opacity: 0.75;
  }

  /* ════════════════════════════════
     READ MORE
  ════════════════════════════════ */
  .ct-readmore-wrap {
    background: #fff;
    padding: 0 24px 72px;
    display: flex;
    justify-content: center;
  }

  .ct-readmore-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    border: 1.5px solid #d1d5db;
    background: #fff;
    color: #374151;
    border-radius: 999px;
    padding: 13px 30px;
    cursor: pointer;
    font-weight: 500;
    transition: border-color 0.2s, color 0.2s, box-shadow 0.2s;
    text-decoration: none;
  }

  .ct-readmore-btn:hover {
    border-color: #16a34a;
    color: #16a34a;
    box-shadow: 0 4px 16px rgba(22,163,74,0.12);
  }

  .ct-readmore-btn svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  /* ════════════════════════════════
     RESPONSIVE
  ════════════════════════════════ */
  @media (max-width: 900px) {
    .ct-mission {
      padding: 36px 32px;
      gap: 36px;
    }
  }

  @media (max-width: 768px) {
    .ct-hero {
      padding: 44px 20px 80px;
    }

    .ct-stats-wrap {
      padding: 0 16px;
    }

    .ct-stats {
      grid-template-columns: repeat(2, 1fr);
      transform: translateY(44%);
    }

    .ct-spacer {
      height: 140px;
    }

    .ct-mission {
      grid-template-columns: 1fr;
      padding: 32px 24px;
      gap: 28px;
    }

    .ct-img-placeholder {
      max-width: 300px;
      width: 100%;
      margin: 0 auto;
    }
  }

  @media (max-width: 480px) {
    .ct-hero {
      padding: 36px 16px 72px;
    }

    .ct-stats-wrap {
      padding: 0 12px;
    }

    .ct-stats {
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      transform: translateY(38%);
    }

    .ct-stat-card {
      padding: 20px 14px 18px;
    }

    .ct-spacer {
      height: 130px;
    }

    .ct-mission-wrap {
      padding: 0 16px 48px;
    }

    .ct-mission {
      padding: 24px 18px;
    }
  }
  /* Desktop — was translateY(50%) */
.ct-stats {
    transform: translateY(30%);
}

.ct-spacer {
    height: 60px; /* was 90px */
}

/* Tablet — was translateY(44%) */
@media (max-width: 768px) {
    .ct-stats {
        transform: translateY(30%);
    }

    .ct-spacer {
        height: 80px; /* was 140px */
    }
}

/* Mobile — was translateY(38%) */
@media (max-width: 480px) {
    .ct-stats {
        transform: translateY(25%);
    }

    .ct-spacer {
        height: 70px; /* was 130px */
    }
}
</style>

<!-- ══════════════════════════════════
     HERO
══════════════════════════════════ -->
<section class="ct-hero " aria-label="About Construction Technology">
  <span class="ct-badge" aria-label="Tagline">Building the Future</span>
  <h1>Construction <em>Technology.</em></h1>
  <p>We're a team of passionate engineers, architects, and technology experts dedicated to revolutionizing the construction industry through innovative 5D software solutions.</p>
</section>

<!-- ══════════════════════════════════
     STATS
══════════════════════════════════ -->
<div class="ct-stats-wrap" aria-hidden="true">
  <div class="ct-stats" role="list">

    <article class="ct-stat-card" role="listitem">
      <div class="ct-stat-icon" aria-hidden="truex`">
        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
      </div>
      <p class="ct-stat-number">500+</p>
      <p class="ct-stat-label">Projects Completed</p>
    </article>

    <article class="ct-stat-card" role="listitem">
      <div class="ct-stat-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 0 1 4-4h4"/><path d="M16 11l2 2 4-4"/></svg>
      </div>
      <p class="ct-stat-number">50+</p>
      <p class="ct-stat-label">Expert Developers</p>
    </article>

    <article class="ct-stat-card" role="listitem">
      <div class="ct-stat-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
      </div>
      <p class="ct-stat-number">15+</p>
      <p class="ct-stat-label">Years Experience</p>
    </article>

    <article class="ct-stat-card" role="listitem">
      <div class="ct-stat-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <p class="ct-stat-number">98%</p>
      <p class="ct-stat-label">Client Satisfaction</p>
    </article>

  </div>
</div>

<div class="ct-spacer" aria-hidden="true"></div>

<!-- ══════════════════════════════════
     MISSION
══════════════════════════════════ -->
<section class="ct-mission-wrap" aria-labelledby="ct-mission-heading">
  <div class="ct-mission">

    <div>
      <div class="ct-mission-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/></svg>
      </div>
      <h2 id="ct-mission-heading">Our Mission</h2>
      <p class="ct-mission-desc">To empower construction professionals with cutting-edge 5D software solutions that streamline workflows, reduce costs, and accelerate project delivery while maintaining the highest quality standards.</p>
      <ul class="ct-mission-list">
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Democratize access to advanced 5D construction tools
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Bridge the gap between design and construction
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Enable real-time collaboration across project teams
        </li>
        <li>
          <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
          Drive innovation in construction methodology
        </li>
      </ul>
    </div>

    <figure class="ct-img-placeholder" aria-label="Construction technology illustration">
      <svg viewBox="0 0 24 24" role="img" aria-hidden="true">
        <rect x="2" y="2" width="20" height="20" rx="3"/>
        <rect x="6" y="6" width="12" height="12" rx="1.5"/>
        <line x1="12" y1="2" x2="12" y2="6"/>
        <line x1="12" y1="18" x2="12" y2="22"/>
        <line x1="2" y1="12" x2="6" y2="12"/>
        <line x1="18" y1="12" x2="22" y2="12"/>
      </svg>
    </figure>

  </div>
</section>

<!-- ══════════════════════════════════
     READ MORE
══════════════════════════════════ -->
<div class="ct-readmore-wrap">
  <a href="https://slsbim.com/" target="__blank" class="ct-readmore-btn" aria-label="Read more about our mission and services">
    Tap to view more details
  </a>
</div>
<?php require __DIR__.'/../layouts/footer.php' ?>