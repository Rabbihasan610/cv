import os
import re

filepath = r'e:\cv\portfolio\contact.html'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Update the intro of contact page using the correct class 'contact-copy reveal'
contact_info_pattern = re.compile(r'<div class="contact-copy reveal">.*?</div>', re.DOTALL)
new_contact_info = """<div class="contact-copy reveal">
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
            <a href="https://www.linkedin.com/in/rabbihasan610/" target="_blank" class="method-card" style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem;">
              <i class="fa-brands fa-linkedin"></i>
              <div>
                <span>Connect on</span>
                <br><strong>LinkedIn</strong>
              </div>
            </a>
            <a href="https://github.com/rabbihasan610" target="_blank" class="method-card" style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem;">
              <i class="fa-brands fa-github"></i>
              <div>
                <span>View code on</span>
                <br><strong>GitHub</strong>
              </div>
            </a>
            <a href="https://www.facebook.com/rabbihasan610" target="_blank" class="method-card" style="display: flex; gap: 1rem; align-items: center;">
              <i class="fa-brands fa-facebook"></i>
              <div>
                <span>Follow on</span>
                <br><strong>Facebook</strong>
              </div>
            </a>
          </div>
        </div>"""

if '<div class="contact-copy reveal">' in content:
    content = contact_info_pattern.sub(new_contact_info, content)
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print("Contact page successfully updated")
else:
    print("Could not find contact-copy reveal div")

