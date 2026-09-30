<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#07111f">
  <title>{{ $post->title }} | Md Rabbi Hasan</title>
  <meta name="description" content="{{ Str::limit(strip_tags($post->content), 150) }}">
  <link rel="canonical" href="{{ url('/blog/' . $post->slug) }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <header class="site-header" id="top">
    <nav class="navbar container" aria-label="Main navigation">
      <a class="logo" href="/" aria-label="Md Rabbi Hasan home">
        <span class="logo-mark">RH</span>
        <span>Md Rabbi Hasan</span>
      </a>
      <div class="nav-links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/projects">Projects</a>
        <a href="/blog">Blog</a>
        <a href="/contact">Contact</a>
      </div>
    </nav>
  </header>

  <main style="padding-top: 100px;">
    <article class="section container">
      <div class="reveal">
        <p class="eyebrow">Technical Blog</p>
        <h1>{{ $post->title }}</h1>
        <p style="color: var(--text-muted); margin-bottom: 2rem;">Published on {{ $post->created_at->format('M d, Y') }}</p>
        
        @if($post->image)
          <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" style="width: 100%; max-height: 400px; object-fit: cover; border-radius: 8px; margin-bottom: 2rem;">
        @endif
        
        <div class="blog-content" style="font-size: 1.125rem; line-height: 1.8;">
          {!! $post->content !!}
        </div>
      </div>
    </article>

    <section class="section container" style="margin-top: 4rem; border-top: 1px solid var(--border); padding-top: 2rem;">
      <h3>Comments</h3>
      
      <div class="comments-list" style="margin-bottom: 3rem;">
        @forelse($post->comments()->where('is_approved', true)->get() as $comment)
          <div class="comment" style="margin-bottom: 1.5rem; padding: 1rem; background: var(--surface); border-radius: 8px;">
            <strong>{{ $comment->guest_name }}</strong> <small style="color: var(--text-muted);">{{ $comment->created_at->diffForHumans() }}</small>
            <p style="margin-top: 0.5rem;">{{ $comment->content }}</p>
          </div>
        @empty
          <p style="color: var(--text-muted);">No comments yet. Be the first to share your thoughts!</p>
        @endforelse
      </div>

      <h4>Leave a Reply</h4>
      @if(session('comment_success'))
        <div style="margin-bottom: 1rem; padding: 1rem; background-color: rgba(16, 185, 129, 0.1); border: 1px solid #10b981; border-radius: 4px; color: #10b981;">
          {{ session('comment_success') }}
        </div>
      @endif
      <form action="{{ route('comment.submit', $post->id) }}" method="POST" style="display: flex; flex-direction: column; gap: 1rem; max-width: 600px;">
        @csrf
        <div style="display: flex; gap: 1rem;">
            <input type="text" name="guest_name" placeholder="Name (Required)" required style="flex: 1; padding: 0.75rem; border-radius: 4px; border: 1px solid var(--border); background: var(--surface); color: var(--text);">
            <input type="email" name="guest_email" placeholder="Email (Optional)" style="flex: 1; padding: 0.75rem; border-radius: 4px; border: 1px solid var(--border); background: var(--surface); color: var(--text);">
        </div>
        <textarea name="content" rows="4" placeholder="Your comment..." required style="padding: 0.75rem; border-radius: 4px; border: 1px solid var(--border); background: var(--surface); color: var(--text);"></textarea>
        <button type="submit" class="button button-primary" style="align-self: flex-start;">Post Comment</button>
      </form>
    </section>
  </main>
</body>
</html>
