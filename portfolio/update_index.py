import re
import os

filepath = r'e:\cv\portfolio\index.html'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Update Title
content = re.sub(
    r'<title>.*?</title>',
    '<title>Md Rabbi Hasan | Senior Laravel & PHP Developer | React & Backend Developer</title>',
    content
)

# 2. Update Meta Description
content = re.sub(
    r'<meta name="description" content=".*?">',
    '<meta name="description" content="Md Rabbi Hasan is a Senior Laravel & PHP Developer from Bangladesh specializing in Laravel, PHP, React, REST APIs, SaaS applications, payment gateway integration and scalable backend systems.">',
    content
)

# 3. Canonical URL
canonical_tag = '<link rel="canonical" href="https://rabbihasan.site/" />\n  '
if '<link rel="canonical"' not in content:
    content = content.replace('</head>', f'{canonical_tag}</head>')

# 4. Open Graph Tags
og_title = '<meta property="og:title" content="Md Rabbi Hasan | Senior Laravel & PHP Developer">'
og_desc = '<meta property="og:description" content="Senior Laravel & PHP Developer specializing in Laravel, PHP, React, REST APIs, SaaS and business automation.">'
og_url = '<meta property="og:url" content="https://rabbihasan.site/">'
content = re.sub(r'<meta property="og:title" content=".*?">', og_title, content)
content = re.sub(r'<meta property="og:description" content=".*?">', og_desc, content)
content = re.sub(r'<meta property="og:url" content=".*?">', og_url, content)

# 5. Twitter Card
twitter_tags = """<meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Md Rabbi Hasan | Senior Laravel & PHP Developer">
  <meta name="twitter:description" content="Senior Laravel & PHP Developer specializing in Laravel, PHP, React, REST APIs, SaaS and business automation.">
  <meta name="twitter:image" content="https://rabbihasan.site/assets/images/og-cover.jpg">"""
if 'name="twitter:card"' not in content:
    content = content.replace('</head>', f'{twitter_tags}\n</head>')

# 6. Schema.org JSON-LD
schema = """<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "name": "Md Rabbi Hasan",
      "jobTitle": "Senior Laravel & PHP Developer",
      "url": "https://rabbihasan.site/",
      "sameAs": [
        "https://www.facebook.com/rabbihasan610",
        "https://www.linkedin.com/in/rabbihasan610/",
        "https://github.com/rabbihasan610"
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
      "@type": "WebSite",
      "url": "https://rabbihasan.site/",
      "name": "Md Rabbi Hasan | Senior Laravel & PHP Developer"
    }
  ]
}
</script>"""
if 'application/ld+json' not in content:
    content = content.replace('</head>', f'{schema}\n</head>')

# 7. Hero Section Update
hero_pattern = re.compile(r'<div class="hero-content reveal">.*?</div>\s+<div class="architecture-wrap', re.DOTALL)
new_hero = """<div class="hero-content reveal">
          <div class="availability"><span></span> Available for selected projects</div>
          <p class="eyebrow">Laravel • PHP • MySQL • Redis • React • REST APIs • Linux</p>
          <h1>Md Rabbi Hasan — <span>Senior Laravel & PHP Developer</span></h1>
          <p class="hero-copy">Backend & Full-Stack Developer specializing in Laravel, PHP, React, REST APIs, SaaS applications and business automation.</p>
          <div class="hero-actions">
            <a class="button button-primary" href="/projects">View My Work <i class="fa-solid fa-arrow-right"></i></a>
            <a class="button button-secondary" href="/contact">Contact Me <i class="fa-regular fa-envelope"></i></a>
          </div>
          <div class="hero-trust" style="margin-top:1rem;">
            <a href="https://github.com/rabbihasan610" target="_blank" style="color: inherit; margin-right: 1rem;"><i class="fa-brands fa-github"></i> GitHub</a>
            <a href="https://www.linkedin.com/in/rabbihasan610/" target="_blank" style="color: inherit;"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
          </div>
        </div>
        <div class="architecture-wrap"""
content = hero_pattern.sub(new_hero, content)

# 8. Introduction Section
intro_section = """
    <section class="section" style="padding-top: 4rem; padding-bottom: 2rem;">
      <div class="container">
        <div class="reveal">
          <h2 style="margin-bottom: 1rem;">Hi, I'm Md Rabbi Hasan</h2>
          <p style="font-size: 1.125rem; line-height: 1.7; max-width: 800px; color: var(--text-muted);">
            A Senior Laravel & PHP Developer specializing in backend development, REST APIs, SaaS applications, business automation and third-party API integrations.<br><br>
            I build scalable web applications using Laravel, PHP, MySQL, Redis and React, with experience in payment gateway integration, authentication, role-based access control, queue systems, database optimization and Linux/VPS deployment.
          </p>
        </div>
      </div>
    </section>
"""
if "Hi, I'm Md Rabbi Hasan" not in content:
    content = content.replace('</section>\n\n    <section class="metrics"', f'</section>\n{intro_section}\n    <section class="metrics"')

# 9. Fix Statistics
metrics_pattern = re.compile(r'<div class="container metrics-grid">.*?</div>', re.DOTALL)
new_metrics = """<div class="container metrics-grid">
        <div class="metric reveal"><strong>4+</strong><span>Years Experience</span></div>
        <div class="metric reveal"><strong><i class="fa-brands fa-laravel"></i></strong><span>Laravel & PHP Specialist</span></div>
        <div class="metric reveal"><strong><i class="fa-solid fa-server"></i></strong><span>Production Backend Systems</span></div>
        <div class="metric reveal"><strong><i class="fa-solid fa-plug"></i></strong><span>API & SaaS Development</span></div>
      </div>"""
content = metrics_pattern.sub(new_metrics, content)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)
print("index.html updated successfully")
