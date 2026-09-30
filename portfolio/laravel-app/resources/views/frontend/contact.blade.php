<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#07111f">
  <title>Md Rabbi Hasan | Contact</title>
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
<link rel="canonical" href="https://rabbihasan.site/contact" />
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
    <section class="section contact-section" id="contact">
      <div class="container contact-grid">
        <div class="contact-copy reveal">
          <p class="eyebrow">Get in touch</p>
          <h1>Md Rabbi Hasan</h1>
          <p style="font-size:1.125rem; font-weight:600;">Senior Laravel & PHP Developer</p>
          <p style="margin-bottom: 2rem; color: var(--text-muted);">
            Specializing in Laravel Development, PHP Development, React Development, REST API Development, SaaS Development, API Integration, and Business Automation.
          </p>
          <div class="contact-methods">
            <a href="mailto:mdrabbihasan610@gmail.com" class="method-card" style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem;">
              <i class="fa-solid fa-envelope"></i>
              <div>
                <span>Email me</span>
                <br><strong>mdrabbihasan610@gmail.com</strong>
              </div>
            </a>
            <a href="{{ \App\Models\Setting::where('key', 'linkedin')->value('value') ?? 'https://www.linkedin.com/in/rabbihasan610/' }}" target="_blank" class="method-card" style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem;">
              <i class="fa-brands fa-linkedin"></i>
              <div>
                <span>Connect on</span>
                <br><strong>LinkedIn</strong>
              </div>
            </a>
            <a href="{{ \App\Models\Setting::where('key', 'github')->value('value') ?? 'https://github.com/rabbihasan610' }}" target="_blank" class="method-card" style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem;">
              <i class="fa-brands fa-github"></i>
              <div>
                <span>View code on</span>
                <br><strong>GitHub</strong>
              </div>
            </a>
            <a href="{{ \App\Models\Setting::where('key', 'facebook')->value('value') ?? 'https://www.facebook.com/rabbihasan610' }}" target="_blank" class="method-card" style="display: flex; gap: 1rem; align-items: center;">
              <i class="fa-brands fa-facebook"></i>
              <div>
                <span>Follow on</span>
                <br><strong>Facebook</strong>
              </div>
            </a>
          </div>
          <div class="social-links">
            <a href="{{ \App\Models\Setting::where('key', 'github')->value('value') ?? '#' }}" data-social="github" aria-label="GitHub"><i class="fa-brands fa-github"></i> GitHub</a>
            <a href="{{ \App\Models\Setting::where('key', 'linkedin')->value('value') ?? '#' }}" data-social="linkedin" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i> LinkedIn</a>
          </div>
        </div>
        <form class="contact-form reveal" id="contact-form" action="{{ route('contact.submit') }}" method="POST">
          @csrf
          @if(session('success'))
            <div style="margin-bottom: 1rem; padding: 1rem; background-color: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 4px; color: #10b981;">
              <strong>Success!</strong> {{ session('success') }}
            </div>
          @endif
          <div class="form-row"><label>Full name<input type="text" name="name" placeholder="Your name" required></label><label>Work email<input type="email" name="email" placeholder="you@company.com" required></label></div>
          <label>Project type<select name="project"><option value="">Select a service</option><option>Laravel SaaS Development</option><option>AI Integration</option><option>Payment Integration</option><option>API Development</option><option>Performance Optimization</option></select></label>
          <label>Project details<textarea name="message" rows="5" placeholder="Tell me about your product, timeline, and goals..." required></textarea></label>
          <button class="button button-primary" type="submit">Send Project Brief <i class="fa-solid fa-paper-plane"></i></button>
          <p class="form-status" role="status"></p>
        </form>
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
