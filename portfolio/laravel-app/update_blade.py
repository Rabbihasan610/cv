import os

views_dir = r'e:\cv\portfolio\laravel-app\resources\views\frontend'

def process_file(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # Replace using str.replace to avoid regex escape issues
    content = content.replace(
        'https://www.facebook.com/rabbihasan610',
        "{{ \\App\\Models\\Setting::where('key', 'facebook')->value('value') ?? 'https://www.facebook.com/rabbihasan610' }}"
    )
    
    content = content.replace(
        'https://www.linkedin.com/in/rabbihasan610/',
        "{{ \\App\\Models\\Setting::where('key', 'linkedin')->value('value') ?? 'https://www.linkedin.com/in/rabbihasan610/' }}"
    )
    
    content = content.replace(
        'https://github.com/rabbihasan610',
        "{{ \\App\\Models\\Setting::where('key', 'github')->value('value') ?? 'https://github.com/rabbihasan610' }}"
    )

    # Inject Subscribe Form in Footer
    subscribe_html = """
      <div class="footer-subscribe" style="margin-top: 2rem; display: flex; flex-direction: column; align-items: center;">
        <p style="margin-bottom: 0.5rem; font-weight: bold;">Subscribe to my technical newsletter</p>
        <form action="/subscribe" method="POST" style="display: flex; gap: 0.5rem;">
          @csrf
          <input type="email" name="email" placeholder="Your email address" required style="padding: 0.5rem; border-radius: 4px; border: 1px solid #ccc; background: transparent; color: inherit;">
          <button type="submit" class="button button-primary" style="padding: 0.5rem 1rem;">Subscribe</button>
        </form>
        @if(session('success'))
            <p style="color: #10b981; margin-top: 0.5rem; font-size: 0.875rem;">{{ session('success') }}</p>
        @endif
      </div>
      <div class="footer-coffee" style="margin-top: 1rem;">
        <a href="{{ \\App\\Models\\Setting::where('key', 'buy_me_a_coffee')->value('value') ?? '#' }}" target="_blank" class="button button-secondary" style="font-size: 0.875rem; padding: 0.25rem 0.75rem;"><i class="fa-solid fa-mug-hot"></i> Support a coffee</a>
      </div>
    """
    
    if '<div class="footer-subscribe"' not in content:
        content = content.replace('<div class="footer-social"', subscribe_html + '\n      <div class="footer-social"')
        
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

for filename in os.listdir(views_dir):
    if filename.endswith('.blade.php'):
        process_file(os.path.join(views_dir, filename))
        
print("Blade templates updated with dynamic settings and subscribe form.")
