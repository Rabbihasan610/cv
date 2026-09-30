import os
import re

def update_file(filepath, callback):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    new_content = callback(content)
    if content != new_content:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated {filepath}")

def update_html(content):
    # 1. Update title if it's index.html
    # We will do specific files later, but let's first fix footer for all
    
    footer_pattern = re.compile(r'<footer>.*?</footer>', re.DOTALL)
    new_footer = """<footer>
    <div class="container footer-inner">
      <a class="logo" href="/"><span class="logo-mark">RH</span><span>Md Rabbi Hasan</span></a>
      <p>Senior Laravel & PHP Developer</p>
      <p>Laravel • PHP • React • REST API • SaaS</p>
      <div class="footer-links" style="margin-top: 1rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/projects">Projects</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
      </div>
      <div class="footer-social" style="margin-top: 1rem; display: flex; gap: 1rem; justify-content: center;">
        <a href="https://github.com/rabbihasan610" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-github"></i> GitHub</a>
        <a href="https://www.linkedin.com/in/rabbihasan610/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
        <a href="https://www.facebook.com/rabbihasan610" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i> Facebook</a>
      </div>
      <p style="margin-top: 2rem;">© <span id="year">2026</span> Md Rabbi Hasan.</p>
    </div>
  </footer>"""
    content = footer_pattern.sub(new_footer, content)

    # 2. Update nav links
    nav_pattern = re.compile(r'<div class="nav-links">.*?</div>', re.DOTALL)
    new_nav = """<div class="nav-links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/experience">Experience</a>
        <a href="/#services">Services</a>
        <a href="/projects">Projects</a>
        <a href="/blog">Blog</a>
        <a href="/cv">CV</a>
        <a href="/contact">Contact</a>
        <a class="nav-cta" href="mailto:mdrabbihasan610@gmail.com">Let's Talk <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>"""
    content = nav_pattern.sub(new_nav, content)
    
    # logo text
    content = content.replace('<span>Rabbi Hasan</span>', '<span>Md Rabbi Hasan</span>')

    return content

files = ['index.html', 'about.html', 'contact.html', 'cv.html', 'experience.html', 'projects.html']
for f in files:
    filepath = os.path.join(r'e:\cv\portfolio', f)
    if os.path.exists(filepath):
        update_file(filepath, update_html)
