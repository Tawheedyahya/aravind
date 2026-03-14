<?php
require __DIR__ . '/../layouts/app.php';
$services = require __DIR__ . '/../config/alshams.php';
$visibleCount = 3;
?>

<style>
  /* ════════════════════════════════
     HERO
  ════════════════════════════════ */
  .as-hero {
    background-color: #0f3d2e;
    text-align: center;
    padding: 56px 24px 110px;
    position: relative;
    overflow: hidden;
  }

  .as-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 70% 60% at 50% 0%, rgba(74,222,128,0.08) 0%, transparent 70%);
    pointer-events: none;
  }

  .as-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    border: 1px solid rgba(255,255,255,0.25);
    color: rgba(255,255,255,0.88);
    border-radius: 999px;
    padding: 5px 16px 5px 10px;
    margin-bottom: 22px;
    letter-spacing: 0.04em;
    font-size: 0.78rem;
    font-weight: 500;
  }

  .as-badge-dot {
    width: 7px;
    height: 7px;
    background: #4ade80;
    border-radius: 50%;
    display: inline-block;
  }

  .as-hero h1 {
    color: #fff;
    font-weight: 800;
    font-size: clamp(2.2rem, 5vw, 3.6rem);
    margin: 0 0 18px;
    line-height: 1.1;
  }

  .as-hero h1 em {
    color: #4ade80;
    font-style: italic;
  }

  .as-hero p {
    color: rgba(255,255,255,0.68);
    max-width: 540px;
    margin: 0 auto;
    line-height: 1.65;
    font-size: 1rem;
  }

  /* ════════════════════════════════
     SERVICES SECTION
  ════════════════════════════════ */
  .as-services-section {
    background: #fff;
    padding: 72px 24px 80px;
  }

  .as-section-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    margin-bottom: 12px;
  }

  .as-section-label span {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #16a34a;
  }

  .as-section-label svg {
    width: 14px;
    height: 14px;
    stroke: #16a34a;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .as-section-sub {
    text-align: center;
    color: #6b7280;
    font-size: 0.9rem;
    margin: 0 0 48px;
  }

  /* ── Cards Grid ── */
  .as-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    max-width: 1100px;
    margin: 0 auto;
  }

  .as-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 20px;
    overflow: hidden;
    transition: box-shadow 0.25s, transform 0.25s, border-color 0.25s;
    cursor: pointer;
    text-decoration: none;
    display: block;
    color: inherit;
  }

  .as-card:hover {
    box-shadow: 0 12px 40px rgba(15,61,46,0.13);
    transform: translateY(-4px);
    border-color: rgba(22,163,74,0.25);
  }

  /* active / elevated card (3rd card in screenshot) */
  .as-card.as-card--active {
    border-color: rgba(22,163,74,0.20);
    box-shadow: 0 16px 48px rgba(15,61,46,0.14);
    transform: translateY(-6px);
  }

  /* ── Image wrapper ── */
  .as-card-img {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 10;
    overflow: hidden;
    background: #d1fae5;
  }

  .as-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s;
  }

  .as-card:hover .as-card-img img {
    transform: scale(1.04);
  }

  .as-card-num {
    position: absolute;
    top: 12px;
    right: 12px;
    width: 28px;
    height: 28px;
    background: #16a34a;
    color: #fff;
    border-radius: 50%;
    font-size: 0.72rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
  }

  /* ── Card body ── */
  .as-card-body {
    padding: 22px 22px 24px;
  }

  .as-card-icon {
    width: 38px;
    height: 38px;
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
  }

  .as-card-icon svg {
    width: 18px;
    height: 18px;
    stroke: #16a34a;
    fill: none;
    stroke-width: 1.75;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  /* active icon style */
  .as-card--active .as-card-icon {
    background: #16a34a;
    border-color: #16a34a;
  }

  .as-card--active .as-card-icon svg {
    stroke: #fff;
  }

  .as-card-title {
    color: #0f3d2e;
    font-weight: 700;
    font-size: 1rem;
    margin: 0 0 8px;
    line-height: 1.35;
  }

  .as-card-desc {
    color: #6b7280;
    font-size: 0.875rem;
    line-height: 1.65;
    margin: 0 0 18px;
  }

  .as-card-link {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    color: #16a34a;
    font-size: 0.875rem;
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.2s;
  }

  .as-card-link svg {
    width: 13px;
    height: 13px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform 0.2s;
  }

  .as-card:hover .as-card-link svg {
    transform: translateX(3px);
  }

  /* ── Hidden cards ── */
  .as-card--hidden {
    display: none;
  }

  /* ════════════════════════════════
     READ MORE BUTTON
  ════════════════════════════════ */
  .as-readmore-wrap {
    display: flex;
    justify-content: center;
    margin-top: 48px;
  }

  .as-readmore-btn {
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
    font-size: 0.9rem;
    transition: border-color 0.2s, color 0.2s, box-shadow 0.2s;
    text-decoration: none;
  }

  .as-readmore-btn:hover {
    border-color: #16a34a;
    color: #16a34a;
    box-shadow: 0 4px 16px rgba(22,163,74,0.12);
  }

  .as-readmore-btn svg {
    width: 14px;
    height: 14px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform 0.3s;
  }

  .as-readmore-btn.expanded svg {
    transform: rotate(180deg);
  }

  /* ════════════════════════════════
     RESPONSIVE
  ════════════════════════════════ */
  @media (max-width: 900px) {
    .as-cards-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
  }

  @media (max-width: 600px) {
    .as-hero {
      padding: 44px 16px 90px;
    }

    .as-cards-grid {
      grid-template-columns: 1fr;
      gap: 16px;
    }

    .as-services-section {
      padding: 48px 16px 56px;
    }
  }
</style>

<!-- ══════════════════════════════════
     HERO
══════════════════════════════════ -->
<section class="as-hero" aria-label="Our Services">
  <span class="as-badge">
    <span class="as-badge-dot"></span>
    Al Shams Power Group
  </span>
  <h1>Our <em>Services.</em></h1>
  <p>Comprehensive electrical solutions for power plants and industrial facilities. From installation to maintenance, we deliver excellence at every stage.</p>
</section>

<!-- ══════════════════════════════════
     SERVICES CARDS
══════════════════════════════════ -->
<section class="as-services-section" aria-labelledby="as-services-heading">

  <div class="as-section-label" aria-hidden="true">
    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
    <span>What We Offer</span>
  </div>
  <p class="as-section-sub" id="as-services-heading">Click on any service to learn more about our comprehensive solutions.</p>

  <!-- SVG icon definitions (one per service) -->
  <?php
  $icons = [
    1 => '<svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/><path d="M7 8h.01M12 8h.01M17 8h.01"/></svg>',
    2 => '<svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    3 => '<svg viewBox="0 0 24 24"><path d="M3 3h7v7H3z"/><path d="M14 3h7v7h-7z"/><path d="M14 14h7v7h-7z"/><path d="M3 14h7v7H3z"/></svg>',
    4 => '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>',
    5 => '<svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    6 => '<svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
  ];
  ?>

  <div class="as-cards-grid" id="as-cards-grid">
    <?php foreach (array_slice($services, 0, 3) as $index => $service): ?>
      <?php
        $isActive  = $index === 2;
        $cardClass = 'as-card' . ($isActive ? ' as-card--active' : '');
      ?>
      <a href="<?= htmlspecialchars($service['link']) ?>"
         class="<?= $cardClass ?>"
         data-index="<?= $index ?>">

        <div class="as-card-img">
          <img src="<?= htmlspecialchars($service['image']) ?>"
               alt="<?= htmlspecialchars($service['title']) ?>"
               loading="lazy">
          <span class="as-card-num"><?= $service['id'] ?></span>
        </div>

        <div class="as-card-body">
          <div class="as-card-icon" aria-hidden="true">
            <?= $icons[$service['id']] ?? $icons[1] ?>
          </div>
          <h3 class="as-card-title"><?= htmlspecialchars($service['title']) ?></h3>
          <p class="as-card-desc"><?= htmlspecialchars($service['description']) ?></p>
          <span class="as-card-link" aria-label="View details for <?= htmlspecialchars($service['title']) ?>">
            View Details
            <svg viewBox="0 0 24 24" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </span>
        </div>

      </a>
    <?php endforeach; ?>
  </div>

  <div class="as-readmore-wrap">
    <a href="https://www.alshamsgcc.com/" target="_blank" class="as-readmore-btn">
      Tap to view more details
      <svg viewBox="0 0 24 24" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
    </a>
  </div>

</section>