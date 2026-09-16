<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Health Insights & Diagnostic Updates</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/favicon.jpg') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        html, body {
            max-width: 100%;
            overflow-x: clip;
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #FAFAFA;
        }

        .blog-section {
            padding: 0 99px;
            width: 100%;
            box-sizing: border-box;
        }

        .blog-container {
            max-width: 1320px;
            margin: 0 auto;
            width: 100%;
        }

        /* Search Section */
        .search-section {
            display: flex;
            justify-content: center;
            margin-top: -60px; /* Overlap hero more because box is taller */
            position: relative;
            z-index: 10;
            margin-bottom: 60px;
            padding: 0 99px; /* keep consistent */
        }

        .search-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 20px 40px;
            width: 100%;
            max-width: 860px;
            box-sizing: border-box;
        }

        .search-input-group {
            display: flex;
            align-items: stretch;
            width: 100%;
            border: 1px solid #000000;
            border-radius: 10px;
            overflow: hidden;
            height: 54px;
        }

        .search-input-wrapper {
            display: flex;
            align-items: center;
            flex-grow: 1;
            padding: 0 20px;
            background: white;
        }

        .search-icon {
            color: #6B7280;
            margin-right: 12px;
            flex-shrink: 0;
        }

        .search-input {
            border: none;
            outline: none;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            width: 100%;
            color: #111827;
            background: transparent;
        }

        .search-input::placeholder {
            color: #9CA3AF;
        }

        .search-button {
            background-color: #0F2A4A;
            color: white;
            border: none;
            padding: 0 40px;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: background-color 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .search-button:hover {
            background-color: #1a3c63;
        }

        /* Blog Grid */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .blog-card {
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
        }

        .blog-image-wrapper {
            width: 100%;
            height: 320px;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 24px;
            background-color: #E5E7EB;
        }

        .blog-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .blog-card:hover .blog-image {
            transform: scale(1.03);
        }

        .blog-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .blog-category {
            font-size: 12px;
            font-weight: 600;
            color: #9CA3AF;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .blog-date {
            font-size: 12px;
            font-weight: 600;
            color: #9CA3AF;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .blog-date::before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 1px;
            background-color: #9CA3AF;
        }

        .blog-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 24px;
            font-weight: 500;
            color: #000000;
            margin: 0;
            line-height: 34px;
            letter-spacing: 0px;
        }

        /* View More Button */
        .view-more-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .btn-view-more {
            background-color: #22B6AF;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 14px 40px;
            font-size: 15px;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: background-color 0.2s;
            text-decoration: none;
        }

        .btn-view-more:hover {
            background-color: #1c9b95;
        }

        @media (max-width: 992px) {
            .blog-section {
                padding: 0 40px;
            }
            .search-section {
                padding: 0 40px;
            }
            .blog-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .blog-section, .search-section {
                padding: 0 20px;
            }
            .search-box {
                padding: 20px 15px; /* Gives exactly 90px height and matches width padding */
            }
            .search-section {
                margin-bottom: 40px; /* Add gap between search box and cards */
            }
            .blog-section {
                padding-top: 50px; /* Less top padding on mobile */
                margin-top: -20px;
            }
            .search-input-group {
                flex-direction: row; /* keep input and button on same line */
                height: 50px;
            }
            .search-button {
                padding: 0 20px;
                font-size: 14px;
                width: auto;
                border-radius: 0 10px 10px 0;
            }
        }

        @media (max-width: 640px) {
            .blog-section {
                padding: 0 20px;
            }
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }
            .blog-image-wrapper {
                height: 240px;
            }
            .blog-title {
                font-size: 20px;
            }
            .search-section {
                padding: 0 20px;
            }
            .search-button {
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    @include('components.header')

    @include('components.services-hero', [
        'title' => 'Health Insights & Diagnostic Updates',
        'description' => 'Stay informed with clear, reliable information about laboratory testing, diagnostics, preparation, and general health. Explore articles designed to help patients and healthcare providers better understand diagnostic testing.',
        'bgImage' => asset('images/custom_blog_hero.jpg'),
        'showButton' => false
    ])

    <div class="search-section">
        <form class="search-box" action="{{ route('blog.index') }}" method="get">
            <div class="search-input-group">
                <div class="search-input-wrapper">
                    <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="search" name="q" class="search-input" placeholder="Search Blog" value="{{ $query }}" aria-label="Search blog posts">
                </div>
                <button type="submit" class="search-button">Search</button>
            </div>
        </form>
    </div>

    <section class="blog-section">
        <div class="blog-container">
        @if($query !== '')
            <p class="blog-search-status">{{ $posts->count() }} result(s) for “{{ $query }}”</p>
        @endif
        <div class="blog-grid">
            @forelse($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="blog-card">
                <div class="blog-image-wrapper">
                    @if($post->image_url)
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="blog-image">
                    @else
                        <img src="{{ asset('images/clinical-labs.jpg') }}" alt="Placeholder" class="blog-image">
                    @endif
                </div>
                <div class="blog-meta">
                    <span class="blog-category">
                        @php
                            $tags = explode(',', $post->tags);
                            echo strtoupper(trim($tags[0] ?? 'BIOMEDICAL'));
                        @endphp
                    </span>
                    <span class="blog-date">{{ $post->publish_date ? $post->publish_date->format('M d, Y') : 'MARCH 15, 2024' }}</span>
                </div>
                <h3 class="blog-title">{{ $post->title }}</h3>
                <div class="blog-author-card" style="display:flex; align-items:center; gap:12px; margin-top:20px;">
                    @if($post->authorDetails && $post->authorDetails->profile_image)
                        <img src="{{ asset('storage/' . $post->authorDetails->profile_image) }}" alt="{{ $post->author }}" style="width:36px; height:36px; border-radius:50%; object-fit:cover;">
                    @else
                        <div style="width:36px; height:36px; border-radius:50%; background:#22B6AF; color:white; display:flex; align-items:center; justify-content:center; font-size:14px; font-weight:bold;">
                            {{ substr($post->author, 0, 1) }}
                        </div>
                    @endif
                    <span style="font-size:14px; font-weight:600; color:#111827;">{{ $post->author }}</span>
                </div>
            </a>
            @empty
                <p class="blog-search-status">{{ $query !== '' ? 'No blog posts matched your search.' : 'No blog posts found.' }}</p>
            @endforelse
        </div>

        @if($posts->count() > 9)
        <div class="view-more-container">
            <a href="#" class="btn-view-more">View More</a>
        </div>
        @endif
    </div>
    </section>

    @include('components.footer')
</body>
</html>
