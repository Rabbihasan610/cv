import os

views_dir = r'e:\cv\portfolio\laravel-app\resources\views\frontend'

for filename in os.listdir(views_dir):
    if filename.endswith('.blade.php'):
        filepath = os.path.join(views_dir, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()

        # Fix JSON-LD blade directive conflicts
        content = content.replace('"@context"', '"@@context"')
        content = content.replace('"@graph"', '"@@graph"')
        content = content.replace('"@type"', '"@@type"')

        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(content)

print("Fixed JSON-LD blade parsing errors.")
