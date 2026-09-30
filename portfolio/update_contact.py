import os
import re

filepath = r'e:\cv\portfolio\contact.html'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Update the intro of contact page
contact_info_pattern = re.compile(r'<div class="contact-info reveal">.*?</div>', re.DOTALL)
new_contact_info = """<div class="contact-info reveal">
          <p class="eyebrow">Get in touch</p>
          <h1>Md Rabbi Hasan</h1>
          <p style="font-size:1.125rem; font-weight:600;">Senior Laravel & PHP Developer</p>
          <p style="margin-bottom: 2rem; color: var(--text-muted);">
            Specializing in Laravel Development, PHP Development, React Development, REST API Development, SaaS Development, API Integration, and Business Automation.
          </p>
          <div class="contact-methods">
            <a href="mailto:mdrabbihasan610@gmail.com" class="method-card">
              <i class="fa-solid fa-envelope"></i>
              <div>
                <span>Email me</span>
                <strong>mdrabbihasan610@gmail.com</strong>
              </div>
            </a>
            <a href="https://www.linkedin.com/in/rabbihasan610/" target="_blank" class="method-card">
              <i class="fa-brands fa-linkedin"></i>
              <div>
                <span>Connect on</span>
                <strong>LinkedIn</strong>
              </div>
            </a>
            <a href="https://github.com/rabbihasan610" target="_blank" class="method-card">
              <i class="fa-brands fa-github"></i>
              <div>
                <span>View code on</span>
                <strong>GitHub</strong>
              </div>
            </a>
            <a href="https://www.facebook.com/rabbihasan610" target="_blank" class="method-card">
              <i class="fa-brands fa-facebook"></i>
              <div>
                <span>Follow on</span>
                <strong>Facebook</strong>
              </div>
            </a>
          </div>
        </div>"""
content = contact_info_pattern.sub(new_contact_info, content)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)

print("Contact page updated")
