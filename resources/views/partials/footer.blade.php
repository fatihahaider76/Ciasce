<footer id="footer" class="footer">

  <div class="container footer-top">
    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ route('home.HMO') }}" class="footer-brand d-flex align-items-center">
          <img src="{{ asset('assets/img/person/logo.png') }}" alt="CIASCE">
          <span class="sitename">CIASCE</span>
        </a>
        <p class="footer-tagline">Canadian International Academy of Skills and Career Excellence &mdash; <em>&ldquo;We believe in nature!&rdquo;</em></p>
        <div class="footer-contact">
          <p><i class="bi bi-telephone-fill"></i> +1 647 786 6307 (Canada)</p>
          <p><i class="bi bi-envelope-fill"></i> info@ciasce.com</p>
          <p><i class="bi bi-geo-alt-fill"></i> <strong>Canadian Head Office</strong> &mdash; Toronto, Ontario, Canada 🇨🇦</p>
        </div>
        <div class="social-links d-flex">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{ route('home.HMO') }}">Home</a></li>
          <li><a href="{{ route('about.abt') }}">About Us</a></li>
          <li><a href="{{ route('faculty.fac') }}">Faculty</a></li>
          <li><a href="{{ route('programs.index') }}">Our Programs</a></li>
          <li><a href="{{ route('admin.login') }}"><i class="bi bi-box-arrow-in-right"></i> Teacher Login</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-3 col-6 footer-links">
        <h4>Our Programs</h4>
        <ul>
          <li><a href="{{ route('home.HMO') }}#programs">Management Training</a></li>
          <li><a href="{{ route('home.HMO') }}#programs">Agriculture</a></li>
          <li><a href="{{ route('home.HMO') }}#programs">Agribusiness</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container copyright">
    <p>&copy; <span>Copyright</span> <strong class="sitename">CIASCE</strong>. All Rights Reserved.</p>
  </div>

</footer>

<!-- Floating WhatsApp button -->
<a href="https://wa.me/923334123220" target="_blank" rel="noopener" class="ciasce-whatsapp" aria-label="Chat on WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<style>
  #footer.footer {
    background: linear-gradient(135deg, #1e3a2a 0%, #0f2417 100%);
    color: #b9bad6;
    padding: 60px 0 22px;
    margin-top: 0;
    font-size: 15px;
    text-align: left;
  }
  #footer.footer .footer-about,
  #footer.footer .footer-links { text-align: left; }
  #footer .footer-top { padding-bottom: 30px; }
  #footer .footer-brand { text-decoration: none; margin-bottom: 16px; }
  #footer .footer-brand img { height: 54px; width: auto; border-radius: 10px; margin-right: 12px; background: #fff; padding: 4px; }
  #footer .footer-brand .sitename { color: #fff; font-size: 1.7rem; font-weight: 800; letter-spacing: 0.5px; }
  #footer .footer-tagline { color: #9d9ec2; line-height: 1.65; margin-bottom: 20px; font-size: 0.92rem; }
  #footer .footer-contact p { margin: 0 0 9px; color: #b9bad6; }
  #footer .footer-contact i { color: #66bb6a; margin-right: 9px; }
  #footer .footer-links h4 {
    color: #fff; font-size: 1.05rem; font-weight: 700; margin-bottom: 18px;
    position: relative; padding-bottom: 10px;
  }
  #footer .footer-links h4:after {
    content: ''; position: absolute; left: 0; bottom: 0; width: 32px; height: 3px;
    background: #66bb6a; border-radius: 3px;
  }
  #footer .footer-links ul { list-style: none; padding: 0; margin: 0; }
  #footer .footer-links ul li { margin-bottom: 11px; }
  #footer .footer-links ul li a { color: #b9bad6; text-decoration: none; transition: all 0.25s ease; }
  #footer .footer-links ul li a:hover { color: #fff; padding-left: 5px; }
  #footer .social-links { gap: 10px; margin-top: 22px; }
  #footer .social-links a {
    width: 40px; height: 40px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.08); color: #cfd0e8; text-decoration: none;
    transition: all 0.3s ease;
  }
  #footer .social-links a:hover { background: #66bb6a; color: #fff; transform: translateY(-3px); }
  #footer .copyright {
    border-top: 1px solid rgba(255,255,255,0.1);
    padding-top: 20px; margin-top: 10px; text-align: center;
    color: #9d9ec2; font-size: 0.9rem;
  }
  #footer .copyright .sitename { color: #fff; }

  /* Floating WhatsApp button (sits above the scroll-top arrow) */
  .ciasce-whatsapp {
    position: fixed;
    right: 16px;
    bottom: 76px;
    z-index: 998;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #25d366;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 8px 22px rgba(37, 211, 102, 0.45);
    text-decoration: none;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    animation: ciasce-wa-pulse 2.2s infinite;
  }
  .ciasce-whatsapp:hover {
    color: #fff;
    transform: scale(1.1);
    box-shadow: 0 10px 26px rgba(37, 211, 102, 0.6);
  }
  @keyframes ciasce-wa-pulse {
    0%   { box-shadow: 0 8px 22px rgba(37,211,102,0.45), 0 0 0 0 rgba(37,211,102,0.5); }
    70%  { box-shadow: 0 8px 22px rgba(37,211,102,0.45), 0 0 0 14px rgba(37,211,102,0); }
    100% { box-shadow: 0 8px 22px rgba(37,211,102,0.45), 0 0 0 0 rgba(37,211,102,0); }
  }
  @media (max-width: 576px) {
    .ciasce-whatsapp { width: 48px; height: 48px; font-size: 25px; bottom: 70px; right: 14px; }
  }
</style>

<script>
  /* Hide the preloader as soon as the DOM is ready — do NOT wait for every
     image to finish downloading. This makes the page appear almost instantly
     while images continue loading (lazily) in the background. */
  (function () {
    function hidePreloader() {
      var p = document.getElementById('preloader');
      if (!p) return;
      p.style.transition = 'opacity 0.3s ease';
      p.style.opacity = '0';
      p.style.pointerEvents = 'none';
      setTimeout(function () { if (p && p.parentNode) p.parentNode.removeChild(p); }, 320);
    }
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', hidePreloader);
    } else {
      hidePreloader();
    }
    // Absolute fallback so the spinner can never get stuck.
    setTimeout(hidePreloader, 1500);
  })();
</script>
