<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} | Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; padding: 0; font-family: 'Inter', sans-serif; background-color: #FFFFFF; }        /* Container Setup */
        .post-container { max-width: 1518px; margin: 0 auto; padding: 60px 99px 20px; box-sizing: border-box; }
        
        /* Title Section */
        .post-header { margin-bottom: 40px; }
        .post-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 34px; font-weight: 700; color: #000000; line-height: 44px; margin: 0 0 16px; }
        .post-subtitle { font-family: 'Inter', sans-serif; font-size: 18px; font-weight: 400; color: #000000; line-height: 30px; margin: 0 0 24px; }
        .post-meta { display: flex; flex-wrap: wrap; row-gap: 8px; align-items: center; font-size: 14px; color: #6B7280; font-weight: 500; }
        .post-meta span {color: #000; display: flex; align-items: center; white-space: nowrap; margin-right: 16px; }
        .post-meta span:last-child { margin-right: 0; }
        .post-meta span:not(:last-child)::after {
            content: "";
            display: block;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: #000;
            margin-left: 16px;
        }
        
        /* Hero Image */
        .post-hero-image { width: 100%; height: 500px; object-fit: cover; border-radius: 20px; margin-bottom: 60px; }

        /* Main Content Area */
        .post-content-area { display: grid; grid-template-columns: 1fr 340px; gap: 60px; margin-bottom: 0; }
        
        /* Left Column: Article Body */
        .article-body { font-family: 'Inter', sans-serif; font-size: 16px; color: #000000; line-height: 30px; }
        .article-body p { margin: 0 0 24px; text-align: justify; }
        .article-body h2 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 28px; font-weight: 700; color: #000000; margin: 40px 0 20px; line-height: 44px; }
        .article-body ul { margin: 0 0 24px; padding-left: 20px; }
        .article-body li { margin-bottom: 12px; }
        .article-body strong { color: #000000; font-weight: 600; }

        /* Right Column: Sidebar */
        .sidebar { position: sticky; top: 20px; border-left: 1px dashed #D1D5DB; padding-left: 30px; align-self: start; }
        .sidebar-heading { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 18px; font-weight: 700; color: #000000; margin: 0 0 20px; }
        
        /* Author Card */
        .author-card { padding-bottom: 30px; margin-bottom: 30px; border-bottom: 1px dashed #D1D5DB; }
        .author-header { display: flex; align-items: center; gap: 16px; margin-bottom: 20px; }
        .author-image { width: 64px; height: 64px; border-radius: 50%; object-fit: cover; }
        .author-info h3 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px; font-weight: 600; color: #000000; margin: 0 0 4px; line-height: 24px; letter-spacing: -0.31px; }
        .author-info p { font-family: 'Inter', sans-serif; font-size: 15px; color: #6B7280; margin: 0; }
        .author-bio { font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 400; color: #000000; line-height: 24px; margin: 0; text-align: justify; }

        /* Share Section */
        .social-icons { display: flex; gap: 12px; }
        .social-icon { width: 44px; height: 44px; border-radius: 10px; background-color: #E5E7EB; display: flex; align-items: center; justify-content: center; color: #000000; text-decoration: none; transition: 0.3s; }
        .social-icon:hover { background-color: #D1D5DB; }

        /* Related Posts Section */
        .related-section { padding-bottom: 40px; margin-top: 0; }
        .related-container { max-width: 1518px; margin: 0 auto; padding: 0 99px; box-sizing: border-box; }
        .related-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 32px; font-weight: 800; color: #071A31; margin: 0 0 24px; }
        
        /* Blog Grid from blog.blade.php */
        .blog-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
        .blog-card { display: flex; flex-direction: column; text-decoration: none; color: inherit; }
        .blog-image-wrapper { width: 100%; height: auto; aspect-ratio: 4 / 3; border-radius: 20px; overflow: hidden; margin-bottom: 24px; position: relative; }
        .blog-image { width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease; }
        .blog-card:hover .blog-image { transform: scale(1.05); }
        .blog-meta { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; font-size: 13px; font-weight: 600; color: #6B7280; text-transform: uppercase; letter-spacing: 0.05em; }
        .blog-meta-left { display: flex; align-items: center; gap: 8px; }
        .blog-meta-right { display: flex; align-items: center; gap: 8px; }
        .meta-line { width: 20px; height: 1px; background-color: #D1D5DB; }
        .blog-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 24px; font-weight: 700; color: #071A31; line-height: 1.4; margin: 0; }

        /* Responsive */
        @media (max-width: 1024px) {
            .post-container, .related-container { padding-left: 24px; padding-right: 24px; }
            .post-content-area { grid-template-columns: 1fr; gap: 40px; }
            .sidebar { 
                position: static; 
                display: block; 
                padding: 32px; 
                border: 0.67px dashed #ACACAC; 
                border-radius: 2px;
                margin-top: 10px;
                border-left: 0.67px dashed #ACACAC; /* Ensure left border is overridden */
            }
            /* Keep the border inside the sidebar block */
            .author-card { margin-bottom: 30px; padding-bottom: 30px; border-bottom: 0.67px dashed #ACACAC; }
        }
        @media (max-width: 768px) {
            .post-container { padding-top: 16px; }
            .post-title { font-size: 24px; line-height: 34px; }
            .post-subtitle { font-size: 16px; line-height: 26px; }
            .post-meta { font-size: 15px; line-height: 26px; }
            .post-hero-image { height: 360px; margin-bottom: 30px; }
            .post-content-area { gap: 0; }
            .article-body h2 { font-size: 24px; line-height: 34px; margin: 30px 0 16px; }
            .blog-grid { 
                display: flex; 
                flex-wrap: nowrap; 
                overflow-x: auto; 
                gap: 20px; 
                padding-bottom: 20px;
                scroll-snap-type: x mandatory;
                -ms-overflow-style: none; /* IE and Edge */
                scrollbar-width: none; /* Firefox */
            }
            .blog-grid::-webkit-scrollbar { display: none; } /* Chrome, Safari and Opera */
            .blog-card { 
                flex: 0 0 100%; 
                scroll-snap-align: start; 
            }
            .sidebar { padding: 24px; margin-top: 0; }
            .author-card { margin-bottom: 24px; padding-bottom: 24px; }
        }
    </style>
</head>
<body>
    @include('components.header')

    <div class="post-container">
        <!-- Title Section -->
        <div class="post-header">
            <h1 class="post-title">{{ $post->title }}</h1>
            <div class="post-subtitle">{!! $post->excerpt !!}</div>
            <div class="post-meta">
                <span>{{ $post->author }}</span>
                <span>{{ $post->publish_date ? $post->publish_date->format('F d, Y') : '' }}</span>
                <span>5 min read</span>
            </div>
        </div>

        <!-- Hero Image -->
        @if($post->image_url)
            <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="post-hero-image">
        @endif

        <!-- Main Content Area -->
        <div class="post-content-area">
            
            <!-- Left Column: Article Body -->
            <div class="article-body">
                {!! $post->content !!}
            </div>

            <!-- Right Column: Sidebar -->
            <div class="sidebar">
                <!-- Author Card -->
                <div class="author-card">
                    <h4 class="sidebar-heading">Written by</h4>
                    <div class="author-header">
                        @if($post->authorDetails && $post->authorDetails->profile_image)
                            <img src="{{ asset('storage/' . $post->authorDetails->profile_image) }}" alt="{{ $post->author }}" class="author-image">
                        @else
                            <div style="width:64px; height:64px; border-radius:50%; background:#22B6AF; color:white; display:flex; align-items:center; justify-content:center; font-size:24px; font-weight:bold;" class="author-image">
                                {{ substr($post->author, 0, 1) }}
                            </div>
                        @endif
                        <div class="author-info">
                            <h3>{{ $post->author }}</h3>
                            <p>Author</p>
                        </div>
                    </div>
                    <p class="author-bio">
                        {{ $post->authorDetails->description ?? 'Our dedicated authors provide the latest insights and updates regarding laboratory testing and healthcare.' }}
                    </p>
                </div>

                <!-- Share Section -->
                <div class="share-section">
                    <h4 class="sidebar-heading">Share Article</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon" aria-label="Copy Link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Share on LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Share on X">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4l16 16m0-16L4 20"></path></svg>
                        </a>
                        <a href="#" class="social-icon" aria-label="Share on Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Related Posts Section -->
    <section class="related-section">
        <div class="related-container">
            <h2 class="related-title">Related Posts</h2>
            
            <div class="blog-grid">
                @php
                    $relatedPosts = \App\Models\BlogPost::where('id', '!=', $post->id)->where('status', 'Published')->latest('publish_date')->take(3)->get();
                @endphp
                @foreach($relatedPosts as $related)
                <a href="{{ route('blog.show', $related->slug) }}" class="blog-card">
                    <div class="blog-image-wrapper">
                        @if($related->image_url)
                            <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="blog-image">
                        @else
                            <img src="{{ asset('images/related_lab_on_chip.jpg') }}" alt="Lab-on-a-Chip Devices" class="blog-image">
                        @endif
                    </div>
                    <div class="blog-meta">
                        <div class="blog-meta-left">
                            <span>
                                @php
                                    $tags = explode(',', $related->tags);
                                    echo strtoupper(trim($tags[0] ?? 'BIOMEDICAL'));
                                @endphp
                            </span>
                        </div>
                        <div class="blog-meta-right">
                            <div class="meta-line"></div>
                            <span>{{ $related->publish_date ? $related->publish_date->format('F d, Y') : 'MARCH 18, 2024' }}</span>
                        </div>
                    </div>
                    <h3 class="blog-title">{{ $related->title }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    @include('components.footer')
</body>
</html>
