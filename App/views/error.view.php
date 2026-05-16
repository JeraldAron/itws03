<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<style>
  /* ── 404 Error Page ── */
  .err-page {
    min-height: calc(100vh - 68px);
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #0f2027 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    font-family: var(--font-heading, 'Inter', sans-serif);
    padding: 3rem 1.5rem;
  }

  /* Floating particle dots */
  .err-page__particles {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
  }
  .err-page__particle {
    position: absolute;
    border-radius: 50%;
    background: rgba(250, 204, 21, 0.12);
    animation: floatUp linear infinite;
  }

  @keyframes floatUp {
    0%   { transform: translateY(100vh) scale(0.5); opacity: 0; }
    10%  { opacity: 1; }
    90%  { opacity: 0.6; }
    100% { transform: translateY(-10vh) scale(1.1); opacity: 0; }
  }

  /* Content card */
  .err-page__card {
    position: relative;
    z-index: 10;
    text-align: center;
    max-width: 600px;
    width: 100%;
  }

  /* Big glitch number */
  .err-page__code {
    font-size: clamp(7rem, 22vw, 14rem);
    font-weight: 900;
    line-height: 1;
    letter-spacing: -4px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 50%, #fde68a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
    display: inline-block;
    animation: glitch 4s infinite;
    text-shadow: none;
    margin-bottom: 0.25rem;
  }

  @keyframes glitch {
    0%, 90%, 100% { transform: translate(0); filter: none; }
    91%  { transform: translate(-3px, 1px); filter: hue-rotate(20deg); }
    92%  { transform: translate(3px, -1px); filter: hue-rotate(-20deg); }
    93%  { transform: translate(-2px, 2px); filter: none; }
    94%  { transform: translate(2px, -2px); }
    95%  { transform: translate(0); }
  }

  .err-page__code::before,
  .err-page__code::after {
    content: attr(data-text);
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 50%, #fde68a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
  .err-page__code::before {
    animation: glitch-before 4s infinite;
    clip-path: polygon(0 30%, 100% 30%, 100% 50%, 0 50%);
  }
  .err-page__code::after {
    animation: glitch-after 4s infinite;
    clip-path: polygon(0 60%, 100% 60%, 100% 75%, 0 75%);
  }

  @keyframes glitch-before {
    0%, 89%, 100% { transform: translate(0); opacity: 0; }
    91% { transform: translate(-4px, 0); opacity: 0.6; }
    93% { transform: translate(4px, 0); opacity: 0.4; }
    95% { opacity: 0; }
  }
  @keyframes glitch-after {
    0%, 89%, 100% { transform: translate(0); opacity: 0; }
    92% { transform: translate(4px, 0); opacity: 0.5; }
    94% { transform: translate(-4px, 0); opacity: 0.3; }
    96% { opacity: 0; }
  }

  /* Divider line */
  .err-page__divider {
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, #facc15, #f59e0b);
    border-radius: 9999px;
    margin: 1rem auto 1.5rem;
  }

  /* Status badge */
  .err-page__badge {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    background: rgba(250, 204, 21, 0.1);
    border: 1px solid rgba(250, 204, 21, 0.25);
    color: #facc15 !important;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 0.3rem 0.85rem;
    border-radius: 9999px;
    margin-bottom: 1.25rem;
  }

  .err-page__title {
    color: #fff !important;
    font-size: clamp(1.4rem, 4vw, 2rem);
    font-weight: 800;
    margin-bottom: 0.75rem;
    line-height: 1.2;
  }

  .err-page__message {
    color: rgba(255, 255, 255, 0.55) !important;
    font-family: var(--font-body, 'Open Sans', sans-serif);
    font-size: 1rem;
    line-height: 1.7;
    margin-bottom: 2.25rem;
    max-width: 440px;
    margin-left: auto;
    margin-right: auto;
  }

  /* CTA buttons */
  .err-page__actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    flex-wrap: wrap;
  }

  .err-page__btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1.5rem;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    color: #1a1a1a !important;
    font-size: 0.875rem;
    font-weight: 700;
    border-radius: 9999px;
    text-decoration: none !important;
    box-shadow: 0 4px 16px rgba(250, 204, 21, 0.30);
    transition: transform 0.18s, box-shadow 0.18s, filter 0.18s;
  }
  .err-page__btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(250, 204, 21, 0.45);
    filter: brightness(1.07);
    color: #1a1a1a !important;
  }

  .err-page__btn-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.65rem 1.5rem;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.14);
    color: rgba(255, 255, 255, 0.75) !important;
    font-size: 0.875rem;
    font-weight: 600;
    border-radius: 9999px;
    text-decoration: none !important;
    transition: background 0.2s, color 0.2s, transform 0.18s;
  }
  .err-page__btn-secondary:hover {
    background: rgba(255, 255, 255, 0.12);
    color: #fff !important;
    transform: translateY(-2px);
  }

  /* Subtle glow ring behind the number */
  .err-page__glow {
    position: absolute;
    width: 420px;
    height: 420px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(250,204,21,0.08) 0%, transparent 70%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -55%);
    pointer-events: none;
    z-index: 1;
  }
</style>

<main class="err-page" role="main" aria-labelledby="err-heading">

  <!-- Glow -->
  <div class="err-page__glow" aria-hidden="true"></div>

  <!-- Particles -->
  <div class="err-page__particles" aria-hidden="true" id="err-particles"></div>

  <!-- Card -->
  <div class="err-page__card">

    <span class="err-page__badge">
      <i class="fa fa-triangle-exclamation"></i>
      Page not found
    </span>

    <div class="err-page__code" data-text="<?= htmlspecialchars($status ?? '404') ?>">
      <?= htmlspecialchars($status ?? '404') ?>
    </div>

    <div class="err-page__divider"></div>

    <h1 class="err-page__title" id="err-heading">Oops! Lost in the void.</h1>

    <p class="err-page__message">
      <?= htmlspecialchars($message ?? "The page you're looking for doesn't exist or has been moved. Let's get you back on track.") ?>
    </p>

    <div class="err-page__actions">
      <a href="/" class="err-page__btn-primary">
        <i class="fa fa-house" aria-hidden="true"></i> Go Home
      </a>
      <a href="/listings" class="err-page__btn-secondary">
        <i class="fa fa-briefcase" aria-hidden="true"></i> Browse Jobs
      </a>
    </div>

  </div>
</main>

<?= loadPartial('footer') ?>

<script>
  // Generate floating particles
  (function () {
    const container = document.getElementById('err-particles');
    if (!container) return;
    const count = 18;
    for (let i = 0; i < count; i++) {
      const dot = document.createElement('span');
      const size = Math.random() * 14 + 4;
      dot.style.cssText = [
        `width:${size}px`,
        `height:${size}px`,
        `left:${Math.random() * 100}%`,
        `bottom:-${size}px`,
        `animation-duration:${Math.random() * 12 + 8}s`,
        `animation-delay:${Math.random() * 10}s`,
        `opacity:${Math.random() * 0.5 + 0.1}`,
      ].join(';');
      dot.className = 'err-page__particle';
      container.appendChild(dot);
    }
  })();
</script>
