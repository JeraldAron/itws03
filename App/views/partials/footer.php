<style>
  /* ── Footer redesign ── */
  .js-footer {
    background: linear-gradient(180deg, #0f172a 0%, #090e1a 100%);
    border-top: 1px solid rgba(250, 204, 21, 0.18);
    font-family: var(--font-body, 'Open Sans', sans-serif);
    margin-top: 5rem;
  }

  .js-footer__main {
    max-width: 1280px;
    margin: 0 auto;
    padding: 3.5rem 2rem 2.5rem;
    display: grid;
    grid-template-columns: 1.8fr 1fr 1fr;
    gap: 3rem;
  }

  /* Brand column */
  .js-footer__brand-logo {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    text-decoration: none;
    margin-bottom: 1rem;
  }

  .js-footer__brand-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #facc15 0%, #f59e0b 100%);
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(250, 204, 21, 0.30);
    flex-shrink: 0;
  }

  .js-footer__brand-wordmark {
    display: flex;
    flex-direction: column;
    line-height: 1;
  }
  .js-footer__brand-wordmark strong {
    color: #fff !important;
    font-size: 1.2rem;
    font-weight: 800;
    font-family: var(--font-heading, 'Inter', sans-serif);
    letter-spacing: -0.3px;
  }
  .js-footer__brand-wordmark span {
    color: #facc15 !important;
    font-size: 0.58rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  .js-footer__tagline {
    color: rgba(255,255,255,0.55) !important;
    font-size: 0.83rem;
    line-height: 1.6;
    max-width: 280px;
    margin-bottom: 1.5rem;
  }

  /* Social icons */
  .js-footer__socials {
    display: flex;
    gap: 0.6rem;
  }

  .js-footer__social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: rgba(255,255,255,0.07);
    color: rgba(255,255,255,0.65) !important;
    font-size: 0.85rem;
    text-decoration: none !important;
    transition: background 0.2s, color 0.2s, transform 0.2s;
  }
  .js-footer__social-link:hover {
    background: rgba(250,204,21,0.18);
    color: #facc15 !important;
    transform: translateY(-2px);
  }

  /* Link columns */
  .js-footer__col-title {
    color: #fff !important;
    font-family: var(--font-heading, 'Inter', sans-serif);
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 1.1rem;
  }

  .js-footer__links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
  }

  .js-footer__links a {
    color: rgba(255,255,255,0.55) !important;
    font-size: 0.875rem;
    text-decoration: none !important;
    transition: color 0.18s, padding-left 0.18s;
    display: inline-block;
  }
  .js-footer__links a:hover {
    color: #facc15 !important;
    padding-left: 4px;
  }

  /* Bottom bar */
  .js-footer__bottom {
    border-top: 1px solid rgba(255,255,255,0.07);
    padding: 1.1rem 2rem;
    max-width: 1280px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .js-footer__copyright {
    color: rgba(255,255,255,0.38) !important;
    font-size: 0.78rem;
  }
  .js-footer__copyright a {
    color: rgba(250,204,21,0.7) !important;
    text-decoration: none !important;
    transition: color 0.18s;
  }
  .js-footer__copyright a:hover {
    color: #facc15 !important;
  }

  .js-footer__bottom-links {
    display: flex;
    gap: 1.25rem;
  }
  .js-footer__bottom-links a {
    color: rgba(255,255,255,0.35) !important;
    font-size: 0.78rem;
    text-decoration: none !important;
    transition: color 0.18s;
  }
  .js-footer__bottom-links a:hover {
    color: rgba(255,255,255,0.7) !important;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .js-footer__main {
      grid-template-columns: 1fr;
      gap: 2rem;
      padding: 2.5rem 1.25rem 2rem;
    }
    .js-footer__bottom {
      flex-direction: column;
      align-items: flex-start;
      padding: 1rem 1.25rem;
    }
  }
</style>

<footer class="js-footer">
  <div class="js-footer__main">

    <!-- Brand Column -->
    <div>
      <a href="/" class="js-footer__brand-logo">
        <span class="js-footer__brand-icon" aria-hidden="true">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#1a1a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12.6668 14.75V8.08333C12.6668 7.62 12.3002 7.25 11.8335 7.25H10.1668C9.70016 7.25 9.3335 7.62 9.3335 8.08333V14.75M7.66683 8.91667H14.3335C14.7937 8.91667 15.1668 9.28976 15.1668 9.75V13.9167C15.1668 14.3769 14.7937 14.75 14.3335 14.75H7.66683C7.20659 14.75 6.8335 14.3769 6.8335 13.9167V9.75C6.8335 9.28976 7.20659 8.91667 7.66683 8.91667Z" stroke="#1a1a1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <span class="js-footer__brand-wordmark">
          <strong>JobSeek</strong>
          <span>Find your next role</span>
        </span>
      </a>

      <p class="js-footer__tagline">
        Connecting talented professionals with the opportunities they deserve. Browse thousands of roles or post your opening today.
      </p>

      <div class="js-footer__socials" aria-label="Social media links">
        <a href="#" class="js-footer__social-link" aria-label="LinkedIn" title="LinkedIn">
          <i class="fab fa-linkedin-in" aria-hidden="true"></i>
        </a>
        <a href="#" class="js-footer__social-link" aria-label="Twitter / X" title="Twitter / X">
          <i class="fab fa-x-twitter" aria-hidden="true"></i>
        </a>
        <a href="#" class="js-footer__social-link" aria-label="Facebook" title="Facebook">
          <i class="fab fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a href="#" class="js-footer__social-link" aria-label="Instagram" title="Instagram">
          <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
    </div>

    <!-- Quick Links Column -->
    <div>
      <p class="js-footer__col-title">Explore</p>
      <ul class="js-footer__links">
        <li><a href="/">Home</a></li>
        <li><a href="/listings">Browse Jobs</a></li>
        <li><a href="/listings/create">Post a Job</a></li>
      </ul>
    </div>

    <!-- Account Column -->
    <div>
      <p class="js-footer__col-title">Account</p>
      <ul class="js-footer__links">
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
      </ul>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="js-footer__bottom">
    <p class="js-footer__copyright">
      &copy; <?= date('Y'); ?> <a href="/">JobSeek</a>. All rights reserved.
    </p>
    <nav class="js-footer__bottom-links" aria-label="Legal navigation">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Use</a>
      <a href="#">Cookie Policy</a>
    </nav>
  </div>
</footer>

</body>

</html>