<!-- Nav -->
<style>
  /* ── Navbar redesign ── */
  .js-navbar {
    position: sticky;
    top: 0;
    z-index: 100;
    width: 100%;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #0f2027 100%);
    box-shadow: 0 2px 24px rgba(0, 0, 0, 0.35);
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    font-family: var(--font-heading, 'Inter', sans-serif);
  }

  .js-navbar__inner {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 2rem;
    height: 68px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
  }

  /* Logo */
  .js-navbar__logo {
    display: flex;
    align-items: center;
    gap: 0.55rem;
    text-decoration: none;
    color: #fff;
    font-size: 1.45rem;
    font-weight: 800;
    letter-spacing: -0.5px;
    transition: opacity 0.2s;
  }

  .js-navbar__logo:hover {
    opacity: 0.88;
    color: #fff;
  }

  .js-navbar__logo-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(250, 204, 21, 0.35);
    flex-shrink: 0;
  }

  .js-navbar__logo-wordmark {
    display: flex;
    flex-direction: column;
    line-height: 1;
  }

  .js-navbar__logo-wordmark strong {
    color: #fff !important;
    font-size: 1.25rem;
    font-weight: 800;
    letter-spacing: -0.3px;
  }

  .js-navbar__logo-wordmark span {
    color: #facc15 !important;
    font-size: 0.6rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  /* Nav links */
  .js-navbar__nav {
    display: flex;
    align-items: center;
    gap: 0.25rem;
  }

  .js-navbar__link {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    padding: 0.45rem 1rem;
    border-radius: 9999px;
    font-size: 0.875rem;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.78) !important;
    text-decoration: none !important;
    transition: background 0.2s, color 0.2s;
  }

  .js-navbar__link:hover {
    background: rgba(255, 255, 255, 0.08);
    color: #fff !important;
  }

  .js-navbar__link--divider {
    width: 1px;
    height: 20px;
    background: rgba(255, 255, 255, 0.12);
    margin: 0 0.25rem;
  }

  /* CTA button */
  .js-navbar__cta {
    display: inline-flex;
    align-items: center;
    gap: 0.45rem;
    padding: 0.5rem 1.25rem;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    color: #1a1a1a !important;
    font-size: 0.875rem;
    font-weight: 700;
    border-radius: 9999px;
    text-decoration: none !important;
    box-shadow: 0 2px 12px rgba(250, 204, 21, 0.30);
    transition: transform 0.18s, box-shadow 0.18s, filter 0.18s;
    letter-spacing: 0.01em;
  }

  .js-navbar__cta:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(250, 204, 21, 0.45);
    filter: brightness(1.07);
    color: #1a1a1a !important;
  }

  .js-navbar__cta:active {
    transform: translateY(0);
    filter: brightness(0.95);
  }
</style>

<header class="js-navbar">
  <div class="js-navbar__inner">

    <!-- Logo -->
    <a href="/" class="js-navbar__logo">
      <span class="js-navbar__logo-icon" aria-hidden="true">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#1a1a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M12.6668 14.75V8.08333C12.6668 7.62 12.3002 7.25 11.8335 7.25H10.1668C9.70016 7.25 9.3335 7.62 9.3335 8.08333V14.75M7.66683 8.91667H14.3335C14.7937 8.91667 15.1668 9.28976 15.1668 9.75V13.9167C15.1668 14.3769 14.7937 14.75 14.3335 14.75H7.66683C7.20659 14.75 6.8335 14.3769 6.8335 13.9167V9.75C6.8335 9.28976 7.20659 8.91667 7.66683 8.91667Z" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>
      <span class="js-navbar__logo-wordmark">
        <strong>JobSeek</strong>
        <span>Find your next role</span>
      </span>
    </a>

    <!-- Navigation -->
    <nav class="js-navbar__nav" aria-label="Main navigation">
      <a href="/auth/login" class="js-navbar__link">
        <i class="fa fa-right-to-bracket" aria-hidden="true"></i> Login
      </a>
      <a href="/auth/register" class="js-navbar__link">
        <i class="fa fa-user-plus" aria-hidden="true"></i> Register
      </a>
      <div class="js-navbar__link--divider" role="separator"></div>
      <a href="/listings/create" class="js-navbar__cta" id="navbar-post-job-btn">
        <i class="fa fa-pen-to-square" aria-hidden="true"></i> Post a Job
      </a>
    </nav>

  </div>
</header>