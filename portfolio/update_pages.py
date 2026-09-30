import os
import re

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

def update_seo_tags(content, title, url_path):
    # Title
    content = re.sub(r'<title>.*?</title>', f'<title>{title}</title>', content)
    
    # Schema
    if 'application/ld+json' not in content:
        content = content.replace('</head>', f'{schema}\n</head>')
        
    # Canonical
    canonical_tag = f'<link rel="canonical" href="https://rabbihasan.site{url_path}" />'
    if '<link rel="canonical"' not in content:
        content = content.replace('</head>', f'{canonical_tag}\n</head>')
        
    return content

# Update About.html
filepath = r'e:\cv\portfolio\about.html'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

content = update_seo_tags(content, 'Md Rabbi Hasan | Laravel & PHP Developer', '/about')

about_content_pattern = re.compile(r'<div class="about-content reveal">.*?</div>\s*</div>\s*</section>', re.DOTALL)
new_about = """<div class="about-content reveal">
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
    </section>"""
content = about_content_pattern.sub(new_about, content)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)

# Update other pages SEO (Projects, Experience, CV, Contact)
pages = {
    'projects.html': ('Md Rabbi Hasan | Projects & Case Studies', '/projects'),
    'experience.html': ('Md Rabbi Hasan | Professional Experience', '/experience'),
    'cv.html': ('Md Rabbi Hasan | Resume / CV', '/cv'),
    'contact.html': ('Md Rabbi Hasan | Contact', '/contact')
}

for page, (title, url_path) in pages.items():
    p = os.path.join(r'e:\cv\portfolio', page)
    if os.path.exists(p):
        with open(p, 'r', encoding='utf-8') as f:
            content = f.read()
        content = update_seo_tags(content, title, url_path)
        with open(p, 'w', encoding='utf-8') as f:
            f.write(content)

print("Pages updated successfully")
