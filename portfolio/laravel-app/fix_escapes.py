import os
import re

views_dir = r'e:\cv\portfolio\laravel-app\resources\views\frontend'

for filename in os.listdir(views_dir):
    if filename.endswith('.blade.php'):
        filepath = os.path.join(views_dir, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        # Fix incorrectly escaped quotes from previous script
        content = content.replace("asset(\\'assets/", "asset('assets/")
        content = content.replace("\\')", "')")

        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)

print("Fixed escaped quotes in asset calls.")
