<!doctype html>
<html>
<head>
    <!-- TinyMCE CDN (Community Version) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.richtext',
        plugins: 'lists link image table code help wordcount',
        toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
        menubar: 'file edit view insert format tools table help',
        min_height: 300,
        promotion: false
      });
    </script>
    <style>
        /* Hide TinyMCE API key warning */
        .tox-notifications-container { display: none !important; }
        
        .admin{min-height:100vh;display:grid;grid-template-columns:205px minmax(0,1fr)}.sidebar{min-height:100vh;padding:15px;color:#d6e3ec;background:radial-gradient(circle at 24% 0,#12647b 0,transparent 31%),linear-gradient(170deg,#093a61,#03192e 76%);display:flex;flex-direction:column}.brand{display:flex;gap:10px;align-items:center;padding:2px 2px 23px;color:#fff}.brand-mark{width:37px;height:37px;display:grid;place-items:center;border-radius:10px;background:linear-gradient(145deg,#1fd7c1,#057d96);box-shadow:0 8px 18px rgba(0,0,0,.15)}.brand-mark:before{content:"⚗";font-size:19px}.brand b{display:block;font-size:15px}.brand small{display:block;margin-top:2px;color:#9db5c8;font-size:8px}.section-label{margin:0 7px 8px;color:#87a5bb;font-size:8px;font-weight:800;letter-spacing:.11em;text-transform:uppercase}.nav{margin-bottom:20px}.nav a{display:flex;align-items:center;gap:11px;min-height:33px;margin:2px 0;padding:8px 10px;color:#bfd0dd;text-decoration:none;border-radius:8px;font-size:10px;font-weight:650;transition:.18s}.nav a:hover,.nav a.active{color:#fff;background:linear-gradient(90deg,#0aa990,#165986);box-shadow:0 7px 16px rgba(0,0,0,.13)}.nav svg{width:16px;height:16px;flex:none;fill:none;stroke:currentColor;stroke-width:1.8}.sidebar-rule{height:1px;margin:0 7px 15px;background:rgba(203,228,242,.12)}.upgrade{margin-top:auto;padding:11px;display:flex;align-items:center;gap:9px;border-radius:9px;color:#d4f7f2;background:linear-gradient(110deg,#087c81,#13536d);font-size:8px}.upgrade-icon{width:27px;height:27px;display:grid;place-items:center;flex:none;border-radius:7px;color:#087e7e;background:#bff7ea;font-size:14px}.upgrade b{display:block;color:#fff;font-size:10px;margin-bottom:2px}
        body{margin:0;background:#fdfdf9;color:#333;font-family:Inter,ui-sans-serif,system-ui,Arial,sans-serif;}
        .wrap{max-width:1120px;margin:30px auto;padding:0 20px;}
        .top-navbar{display:flex;justify-content:space-between;align-items:center;padding:15px 30px;background:#fff;border-bottom:1px solid #eee;margin-bottom:30px;}
        .top-navbar .title-area h1{margin:0;font-size:22px;color:#052440;}
        .top-navbar .title-area .breadcrumb{font-size:13px;color:#777;margin-top:6px;}
        .top-navbar .user-area{display:flex;align-items:center;gap:15px;}
        .top-navbar .user-info{text-align:right;}
        .top-navbar .user-info b{display:block;font-size:14px;color:#052440;}
        .top-navbar .user-info span{display:block;font-size:12px;color:#777;margin-top:2px;}
        .top-navbar .avatar{width:42px;height:42px;display:flex;align-items:center;justify-content:center;background:#fef3dd;border:1px solid #f2e2c4;border-radius:10px;font-weight:bold;color:#052440;}
        .top-navbar .logout-btn{background:#fef3dd;color:#e8a931;border:none;padding:10px 16px;border-radius:8px;font-weight:bold;font-size:13px;cursor:pointer;display:flex;align-items:center;gap:6px;}
        
        .section-card{background:#fff;border:1px solid #eee;border-radius:10px;margin-bottom:25px;padding:30px;box-shadow:0 4px 15px rgba(0,0,0,0.02);}
        .section-header{color:#ffad00;font-weight:bold;font-size:18px;margin-top:0;margin-bottom:25px;padding-bottom:10px;}
        .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:30px;}
        .field{margin-bottom:20px;}
        .field label{display:block;margin-bottom:8px;font-size:13px;font-weight:bold;color:#052440;}
        input[type="text"],input[type="date"],select,textarea{width:100%;padding:12px 15px;border:1px solid #ddd;border-radius:8px;font-family:inherit;font-size:14px;box-sizing:border-box;color:#333;}
        input[type="text"]:focus,input[type="date"]:focus,select:focus,textarea:focus{outline:none;border-color:#ccc;}
        input[type="file"]{width:100%;padding:10px;border:1px solid #ddd;border-radius:8px;background:#fafafa;box-sizing:border-box;}
        .checkbox-group{display:flex;gap:20px;align-items:center;}
        .checkbox-group label{font-weight:normal;display:flex;align-items:center;gap:8px;cursor:pointer;}
        .actions{display:flex;justify-content:flex-end;gap:15px;margin-top:30px;padding:20px;background:#fff;border:1px solid #eee;border-radius:10px;}
        .btn{padding:12px 25px;border:none;border-radius:8px;font-weight:bold;cursor:pointer;font-size:14px;}
        .btn-cancel{background:#f5f5f5;color:#555;text-decoration:none;}
        .btn-save{background:#ffb800;color:#fff;}
        .success{margin-bottom:18px;padding:12px;border-radius:8px;background:#e8f5e9;color:#2e7d32;border:1px solid #c8e6c9;}
        .error-list{color:#d32f2f; background:#fdebea; padding:12px; border-radius:8px; margin-bottom:18px;border:1px solid #ef9a9a;}
        .current-image{max-width: 150px; margin-bottom: 10px; border: 1px solid #ccc; padding: 3px; border-radius: 4px; display: block;}
    </style>
</head>
<body>

<div class="admin"><aside class="sidebar"><div class="brand"><span class="brand-mark"></span><span class="brand-copy"><b>Lab Admin</b><small>Laboratory Management</small></span></div><div class="section-label">Main menu</div><nav class="nav"><a href="{{ route('admin.dashboard') }}"><svg viewBox="0 0 24 24"><path d="M3 11 12 3l9 8v10H3z"/><path d="M9 21v-6h6v6"/></svg><span>Dashboard</span></a><a href="{{ route('admin.home-hero.edit') }}"><svg viewBox="0 0 24 24"><path d="M3 11 12 3l9 8v10H3z"/><path d="M9 21v-6h6v6"/></svg><span>Home Page</span></a><a href="/admin/services"><svg viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg><span>Services</span></a><a href="#"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/></svg><span>Appointment Page</span></a><a href="#"><svg viewBox="0 0 24 24"><path d="M21 15a4 4 0 0 1-4 4H7l-4 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg><span>Contact Us</span></a><a class="active" href="{{ route('admin.blog-posts.index') }}"><svg viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM9 17H7v-2h2v2zm0-4H7v-2h2v2zm0-4H7V7h2v2zm8 8h-6v-2h6v2zm0-4h-6v-2h6v2zm0-4h-6V7h6v2z"/></svg><span>Blog Posts</span></a><a href="{{ route('admin.tests.index') }}"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg><span>Tests</span></a>
            <a href="{{ route('admin.test-pages.index') }}"><svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg><span>Test Pages</span></a><a href="{{ route('admin.faqs.index') }}"><svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" fill="none" stroke="currentColor" stroke-width="1.8"/></svg><span>FAQs</span></a>
            <a href="{{ route('admin.authors.index') }}"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg><span>Authors</span></a></nav><div class="sidebar-rule"></div><div class="section-label">System</div><nav class="nav"><a href="#"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .34 1.88l.06.06-2.1 2.1-.06-.06a1.7 1.7 0 0 0-1.88-.34 1.7 1.7 0 0 0-1.03 1.56v.1h-3v-.1A1.7 1.7 0 0 0 10.7 18.6a1.7 1.7 0 0 0-1.88.34l-.06.06-2.1-2.1.06-.06A1.7 1.7 0 0 0 7.06 15a1.7 1.7 0 0 0-1.56-1.03h-.1v-3h.1A1.7 1.7 0 0 0 7.06 9a1.7 1.7 0 0 0-.34-1.88l-.06-.06 2.1-2.1.06.06A1.7 1.7 0 0 0 10.7 5.36a1.7 1.7 0 0 0 1.03-1.56v-.1h3v.1a1.7 1.7 0 0 0 1.03 1.56 1.7 1.7 0 0 0 1.88-.34l.06-.06 2.1 2.1-.06.06A1.7 1.7 0 0 0 19.4 9a1.7 1.7 0 0 0 1.56 1.03h.1v3h-.1A1.7 1.7 0 0 0 19.4 15Z"/></svg><span>Settings</span></a></nav><div class="upgrade"><span class="upgrade-icon">▥</span><div><b>Lab Admin Pro</b>Manage your lab efficiently</div></div></aside><main style="min-width:0; background:#fdfdf9;">

<header class="top-navbar">
    <div class="title-area">
        <h1>{{ isset($blogPost) ? 'Edit Blog Post' : 'Add Blog Post' }}</h1>
        <div class="breadcrumb">Lab Admin > Blog Posts</div>
    </div>
    <div class="user-area">
        <div class="user-info">
            <b>Administrator</b>
            <span>admin@labadmin.com</span>
        </div>
        <div class="avatar">LA</div>
        <form method="POST" action="{{ route('admin.logout') }}" style="margin:0;">
            @csrf
            <button type="submit" class="logout-btn">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                Logout
            </button>
        </form>
    </div>
</header>

<main class="wrap">

    @if(session('success'))<div class="success">{{ session('success') }}</div>@endif
    @if($errors->any())
        <div class="error-list">
            <ul style="margin:0; padding-left:20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ isset($blogPost) ? route('admin.blog-posts.update', $blogPost->id) : route('admin.blog-posts.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($blogPost))
            @method('PUT')
        @endif

        <!-- Basic Information -->
        <div class="section-card">
            <h2 class="section-header">Basic Information</h2>
            <div class="grid-2">
                <div class="field">
                    <label>Title / Name *</label>
                    <input type="text" name="title" required value="{{ old('title', $blogPost->title ?? '') }}">
                </div>
                <div class="field">
                    <label>URL Slug</label>
                    <input type="text" name="slug" value="{{ old('slug', $blogPost->slug ?? '') }}">
                </div>
                <div class="field">
                    <label>Status</label>
                    <select name="status" required>
                        <option value="published" {{ old('status', $blogPost->status ?? '') === 'published' ? 'selected' : '' }}>Published</option>
                        <option value="draft" {{ old('status', $blogPost->status ?? '') === 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>
                </div>
                <div class="field">
                    <label>Featured Image</label>
                    @if(isset($blogPost) && $blogPost->image_url)
                        <img src="{{ $blogPost->image_url }}" class="current-image" alt="Current Image">
                    @endif
                    <input type="file" name="featured_image" accept="image/*">
                </div>
            </div>
        </div>

        <!-- Article Details -->
        <div class="section-card">
            <h2 class="section-header">Article Details</h2>
            <div class="grid-2">
                <div class="field">
                    <label>Author</label>
                    <select name="author">
                        <option value="">Select an author</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->name }}" {{ old('author', $blogPost->author ?? '') === $author->name ? 'selected' : '' }}>{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @if($authors->isEmpty())
                        <small style="display:block;margin-top:6px;color:#b45309;">No authors found. Add an author from the Authors section first.</small>
                    @endif
                </div>
                <div class="field">
                    <label>Publish Date</label>
                    <input type="date" name="publish_date" value="{{ old('publish_date', $blogPost->publish_date ?? '') }}">
                </div>
            </div>
            <div class="grid-2">
                <div class="field">
                    <label>Category</label>
                    <select name="category" required>
                        <option value="" disabled {{ empty($blogPost->category) && empty(old('category')) ? 'selected' : '' }}>-- Select Category --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->name }}" {{ old('category', $blogPost->category ?? '') === $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @if($categories->isEmpty())
                        <small style="display:block;margin-top:6px;color:#b45309;">No categories found. Create one from Blog Categories first.</small>
                    @endif
                </div>
                <div class="field">
                    <label>Tags / Tag Cloud</label>
                    <input type="text" name="tags" placeholder="e.g. custom inserts, EVA foam" value="{{ old('tags', $blogPost->tags ?? '') }}">
                </div>
            </div>
        </div>

        <!-- Excerpt -->
        <div class="section-card">
            <h2 class="section-header">Excerpt</h2>
            <div class="field">
                <textarea name="excerpt" class="richtext">{{ old('excerpt', $blogPost->excerpt ?? '') }}</textarea>
            </div>
        </div>

        <!-- Key Takeaways -->
        <div class="section-card">
            <h2 class="section-header">Key Takeaways</h2>
            <div class="field">
                <textarea name="key_takeaways" class="richtext">{{ old('key_takeaways', $blogPost->key_takeaways ?? '') }}</textarea>
            </div>
        </div>

        <!-- Article Content -->
        <div class="section-card">
            <h2 class="section-header">Article Content</h2>
            <div class="field">
                <textarea name="content" class="richtext">{{ old('content', $blogPost->content ?? '') }}</textarea>
            </div>
            <div class="field" style="margin-top: 20px;">
                <label>Image Alt Text</label>
                <input type="text" name="image_alt_text" value="{{ old('image_alt_text', $blogPost->image_alt_text ?? '') }}">
            </div>
        </div>

        <!-- SEO & Search Visibility -->
        <div class="section-card">
            <h2 class="section-header">SEO & Search Visibility</h2>
            <div class="grid-2">
                <div class="field">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $blogPost->meta_title ?? '') }}">
                </div>
                <div class="field">
                    <label>Robots</label>
                    <select name="meta_robots">
                        <option value="index, follow" {{ old('meta_robots', $blogPost->meta_robots ?? '') === 'index, follow' ? 'selected' : '' }}>index, follow</option>
                        <option value="noindex, nofollow" {{ old('meta_robots', $blogPost->meta_robots ?? '') === 'noindex, nofollow' ? 'selected' : '' }}>noindex, nofollow</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label>Meta Description</label>
                <textarea name="meta_description" style="min-height:80px;">{{ old('meta_description', $blogPost->meta_description ?? '') }}</textarea>
            </div>
            <div class="field">
                <label>Meta Keywords / Tags</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $blogPost->meta_keywords ?? '') }}">
            </div>
            <div class="field">
                <label>Schema JSON-LD</label>
                <textarea name="schema_json" style="min-height:120px; font-family:monospace;">{{ old('schema_json', $blogPost->schema_json ?? '') }}</textarea>
            </div>
        </div>

        <!-- Visibility -->
        <div class="section-card">
            <h2 class="section-header">Visibility</h2>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="show_on_home" value="1" {{ old('show_on_home', $blogPost->show_on_home ?? false) ? 'checked' : '' }}>
                    Show on home page
                </label>
                <label>
                    <input type="checkbox" name="feature_on_home" value="1" {{ old('feature_on_home', $blogPost->feature_on_home ?? false) ? 'checked' : '' }}>
                    Feature on home
                </label>
            </div>
        </div>

        <!-- Actions -->
        <div class="actions">
            <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-cancel">Cancel</a>
            <button type="submit" class="btn btn-save">Save Blog Post</button>
        </div>
    </form>
</main>
</div>
<script>
    (function () {
        const blogPostsLink = Array.from(document.querySelectorAll('.nav a')).find(function (link) {
            const label = link.querySelector('span');
            return label && label.textContent.trim() === 'Blog Posts';
        });
        if (blogPostsLink && !document.querySelector('.nav a[href="{{ route('admin.blog-categories.index') }}"]')) {
            const categoryLink = blogPostsLink.cloneNode(true);
            categoryLink.href = '{{ route('admin.blog-categories.index') }}';
            categoryLink.classList.remove('active');
            categoryLink.querySelector('span').textContent = 'Blog Categories';
            blogPostsLink.after(categoryLink);
        }
    })();
</script>
</body>
</html>
