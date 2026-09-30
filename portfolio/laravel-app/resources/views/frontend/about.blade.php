<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#07111f">
  <title>Md Rabbi Hasan | Laravel & PHP Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Person",
      "name": "Md Rabbi Hasan",
      "jobTitle": "Senior Laravel & PHP Developer",
      "url": "https://rabbihasan.site/",
      "sameAs": [
        "{{ \App\Models\Setting::where('key', 'facebook')->value('value') ?? 'https://www.facebook.com/rabbihasan610' }}",
        "{{ \App\Models\Setting::where('key', 'linkedin')->value('value') ?? 'https://www.linkedin.com/in/rabbihasan610/' }}",
        "{{ \App\Models\Setting::where('key', 'github')->value('value') ?? 'https://github.com/rabbihasan610' }}"
      ],
      "knowsAbout": [
        "Laravel",
        "PHP",
        "React",
        "MySQL",
        "Redis",
        "REST API",
        "SaaS Development",
        "Backend Development"
      ]
    },
    {
      "@@type": "WebSite",
      "url": "https://rabbihasan.site/",
      "name": "Md Rabbi Hasan | Senior Laravel & PHP Developer"
    }
  ]
}
</script>
<link rel="canonical" href="https://rabbihasan.site/about" />
</head>
<body>
  <div class="cursor-glow" aria-hidden="true"></div>

  <header class="site-header" id="top">
    <nav class="navbar container" aria-label="Main navigation">
      <a class="logo" href="index.html" aria-label="Rabbi Hasan home">
        <span class="logo-mark">RH</span>
        <span>Md Rabbi Hasan</span>
      </a>
      <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <div class="nav-links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/experience">Experience</a>
        <a href="/#services">Services</a>
        <a href="/projects">Projects</a>
        <a href="/blog">Blog</a>
        <a href="/cv">CV</a>
        <a href="/contact">Contact</a>
        <a class="nav-cta" href="mailto:mdrabbihasan610@gmail.com">Let's Talk <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>
    </nav>
  </header>

  <main style="padding-top: 100px;">
    <section class="section about-section" id="about">
      <div class="container about-grid">
        <div class="about-visual reveal">
          <div class="terminal">
            <div class="terminal-bar"><span></span><span></span><span></span><small>rabbi@production:~</small></div>
            <div class="terminal-body">
              <p><b>$</b> php artisan about</p>
              <p class="muted">Environment ........... production</p>
              <p class="muted">Laravel ............... optimized</p>
              <p class="muted">Cache ................. redis</p>
              <p class="muted">Queue ................. running</p>
              <p><b>$</b> deploy --zero-downtime</p>
              <p class="success">✓ Deployment successful</p>
              <p><b>$</b> <span class="terminal-cursor"></span></p>
            </div>
          </div>
          <div class="experience-card"><strong>Production</strong><span>is where good architecture proves itself.</span></div>
        </div>
        <div class="about-content reveal">
          <p class="eyebrow">About me</p>
          <h1>Md Rabbi Hasan — Laravel & PHP Developer</h1>
          <p>Md Rabbi Hasan is a Senior Laravel & PHP Developer specializing in backend development, REST APIs, SaaS applications, business automation and third-party API integrations.</p>
          <p>He builds scalable web applications using Laravel, PHP, MySQL, Redis and React, with experience in payment gateway integration, authentication, role-based access control, queue systems, database optimization and Linux/VPS deployment.</p>
          
          <h2 style="margin-top:2rem; font-size:1.5rem;">Core Expertise</h2>
          <div class="about-points">
            <div><i class="fa-solid fa-circle-check"></i><span><strong>Laravel & PHP Backend Development</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>REST API Development & Integration</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>React & Full-Stack Development</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>SaaS Application Development</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>Payment Gateway & Third-Party API Integration</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>MySQL & Database Optimization</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>Redis, Queues & Background Jobs</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>Linux/VPS Deployment</strong></span></div>
            <div><i class="fa-solid fa-circle-check"></i><span><strong>Business Process Automation</strong></span></div>
          </div>
          <a class="button button-primary" href="/contact" style="margin-top:2rem;">Contact Me <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container footer-inner" style="display: flex; flex-direction: column; align-items: center; text-align: center; gap: 2rem; padding: 4rem 0;">
      
      <div style="display: flex; flex-direction: column; align-items: center; gap: 1rem;">
          <a class="logo" href="/"><span class="logo-mark">RH</span><span>Md Rabbi Hasan</span></a>
          <p style="color: var(--muted);">Senior Laravel & PHP Developer</p>
      </div>

      <div class="footer-links" style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/experience">Experience</a>
        <a href="/projects">Projects</a>
        <a href="/blog">Blog</a>
        <a href="/cv">CV</a>
        <a href="/contact">Contact</a>
      </div>
      
      <div class="footer-subscribe" style="width: 100%; max-width: 500px; padding: 2rem; background: var(--card); border: 1px solid var(--line); border-radius: 12px;">
        <h4 style="margin-bottom: 0.5rem; color: var(--primary);">Join my technical newsletter</h4>
        <p style="margin-bottom: 1.5rem; font-size: 0.9rem; color: var(--muted);">Insights on Laravel, architecture, and scalable backends.</p>
        <form action="/subscribe" method="POST" style="display: flex; gap: 0.5rem;">
          @csrf
          <input type="email" name="email" placeholder="Email address" required style="flex-grow: 1; padding: 0.75rem 1rem; border-radius: 6px; border: 1px solid var(--line); background: var(--card-solid); color: var(--text); outline: none;">
          <button type="submit" class="button button-primary" style="padding: 0.75rem 1.5rem; cursor: pointer;">Subscribe</button>
        </form>
        @if(session('success'))
            <p style="color: var(--primary); margin-top: 1rem; font-size: 0.875rem;">{{ session('success') }}</p>
        @endif
      </div>

      <div class="footer-coffee">
        <a href="{{ \App\Models\Setting::where('key', 'buy_me_a_coffee')->value('value') ?? '#' }}" target="_blank" class="button button-secondary" style="font-size: 0.875rem; padding: 0.5rem 1rem; display: inline-flex; align-items: center; gap: 0.5rem;">
          <i class="fa-solid fa-mug-hot"></i> Support my work
        </a>
      </div>
    
      <div class="footer-social" style="display: flex; gap: 1.5rem; justify-content: center; font-size: 1.25rem;">
        <a href="{{ \App\Models\Setting::where('key', 'github')->value('value') ?? 'https://github.com/rabbihasan610' }}" target="_blank" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
        <a href="{{ \App\Models\Setting::where('key', 'linkedin')->value('value') ?? 'https://www.linkedin.com/in/rabbihasan610/' }}" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
        <a href="{{ \App\Models\Setting::where('key', 'facebook')->value('value') ?? 'https://www.facebook.com/rabbihasan610' }}" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
      </div>
      
      <p style="color: var(--muted); font-size: 0.875rem;">© <span id="year">2026</span> Md Rabbi Hasan. All rights reserved.</p>
    </div>
  </footer>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
