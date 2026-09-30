<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#07111f">
  <title>Md Rabbi Hasan | Resume / CV</title>
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
<link rel="canonical" href="https://rabbihasan.site/cv" />
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
    <section class="section cv-section" id="cv">
      <div class="container">
        <div class="section-heading reveal" style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
          <div><p class="eyebrow">Curriculum Vitae</p><h2>My Complete Profile</h2></div>
          <div>
            @if($activeCv)
              <a href="{{ asset($activeCv->file_path) }}" download class="button button-primary"><i class="fa-solid fa-download"></i> Download CV</a>
            @else
              <a href="#" class="button button-secondary" onclick="alert('CV not uploaded yet.')"><i class="fa-solid fa-download"></i> Download CV</a>
            @endif
          </div>
        </div>
        
        <div class="cv-grid">
            <div class="cv-column reveal">
                @if($experiences->count() > 0)
                <h3>Work Experience</h3>
                @foreach($experiences as $exp)
                <div class="cv-item">
                    <h4>{{ $exp->title }}</h4>
                    <p>{{ $exp->subtitle }} | {{ $exp->date_range }}</p>
                    @if($exp->description)
                    <p style="margin-top: 0.5rem; font-size: 0.9rem; color: var(--muted);">{{ $exp->description }}</p>
                    @endif
                </div>
                @endforeach
                @endif
                
                @if($educations->count() > 0)
                <h3>Education</h3>
                @foreach($educations as $edu)
                <div class="cv-item">
                    <h4>{{ $edu->title }}</h4>
                    <p>{{ $edu->subtitle }} | {{ $edu->date_range }}</p>
                    @if($edu->description)
                    <p>{{ $edu->description }}</p>
                    @endif
                </div>
                @endforeach
                @endif
                
                @if($trainings->count() > 0)
                <h3>Training</h3>
                @foreach($trainings as $tr)
                <div class="cv-item">
                    <h4>{{ $tr->title }}</h4>
                    <p>{{ $tr->subtitle }}</p>
                </div>
                @endforeach
                @endif
            </div>
            
            <div class="cv-column reveal">
                @if($languages->count() > 0)
                <h3>Languages</h3>
                <div class="cv-item">
                    @foreach($languages as $lang)
                    <p><strong>{{ $lang->title }}:</strong> {{ $lang->subtitle }}</p>
                    @endforeach
                </div>
                @endif

                @if($volunteers->count() > 0)
                <h3>Volunteer Experience</h3>
                @foreach($volunteers as $vol)
                <div class="cv-item">
                    <h4>{{ $vol->title }}</h4>
                    <p>{{ $vol->subtitle }}</p>
                </div>
                @endforeach
                @endif

                @if($references->count() > 0)
                <h3>References</h3>
                @foreach($references as $ref)
                <div class="cv-item">
                    <h4>{{ $ref->title }}</h4>
                    <p>{{ $ref->subtitle }}</p>
                    @if($ref->description)
                    <p>{{ $ref->description }}</p>
                    @endif
                </div>
                @endforeach
                @endif
            </div>
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
