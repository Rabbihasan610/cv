import os
import re

views_dir = r'e:\cv\portfolio\laravel-app\resources\views\frontend'

for filename in os.listdir(views_dir):
    if filename.endswith('.blade.php'):
        filepath = os.path.join(views_dir, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        # Fix CSS paths
        content = re.sub(r'href="assets/(.*?)"', r'href="{{ asset(\'assets/\1\') }}"', content)
        
        # Fix JS paths
        content = re.sub(r'src="assets/(.*?)"', r'src="{{ asset(\'assets/\1\') }}"', content)
        
        # Fix Image paths
        content = re.sub(r'src="assets/images/(.*?)"', r'src="{{ asset(\'assets/images/\1\') }}"', content)

        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)

print("Fixed asset paths in blade templates.")
