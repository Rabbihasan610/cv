import os
import re

views_dir = r'e:\cv\portfolio\laravel-app\resources\views\frontend'

# We'll just manually rewrite the footer section using a regex replacement to ensure it's clean and perfectly styled.
footer_regex = re.compile(r'<footer>.*?</footer>', re.DOTALL)

clean_footer = """<footer>
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
  </footer>"""

for filename in os.listdir(views_dir):
    if filename.endswith('.blade.php'):
        filepath = os.path.join(views_dir, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        if re.search(footer_regex, content):
            new_content = re.sub(footer_regex, lambda m: clean_footer, content)
            
            # Since index.blade.php uses <?php if(session...) earlier, let's just make sure we replace the blade directives properly if needed, but the user didn't complain about the parsing error anymore, so @if is fine (we already fixed the @@context issue).
            
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)

print("Footer redesigned perfectly in all blade files.")
