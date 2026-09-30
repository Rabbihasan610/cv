import re

filepath = r'e:\cv\portfolio\laravel-app\resources\views\frontend\projects.blade.php'
with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the static case grid with a dynamic blade loop
grid_pattern = re.compile(r'<div class="case-grid" id="featured-case-grid">.*?</div>', re.DOTALL)

dynamic_grid = """<div class="case-grid" id="featured-case-grid">
          @foreach($projects as $project)
            <article class="case-card reveal">
              <a href="{{ $project->url ?? '#' }}" class="case-image-wrapper">
                <img src="{{ $project->image ? asset($project->image) : asset('assets/images/placeholder.jpg') }}" alt="{{ $project->title }}" loading="lazy">
              </a>
              <div class="case-content">
                <p class="case-tags"><span>{{ $project->technology ?? 'Laravel' }}</span></p>
                <h3>{{ $project->title }}</h3>
                <p>{{ Str::limit($project->description, 120) }}</p>
                <a href="{{ $project->url ?? '#' }}" class="text-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </article>
          @endforeach
        </div>"""

if grid_pattern.search(content):
    content = grid_pattern.sub(dynamic_grid, content)
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print("Updated projects blade to use dynamic @foreach loop.")
else:
    print("Could not find case-grid div")
