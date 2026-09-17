<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Blog Categories | Lab Admin</title>
    <style>
        body{margin:0;background:#f2f7fa;color:#12304c;font-family:Inter,Arial,sans-serif}.page{max-width:1050px;margin:0 auto;padding:42px 28px}.top{display:flex;justify-content:space-between;align-items:center;gap:20px;margin-bottom:25px}.top h1{margin:0 0 7px}.top p{margin:0;color:#6b8397}.grid{display:grid;grid-template-columns:360px 1fr;gap:22px;align-items:start}.card{background:#fff;border:1px solid #dce8f0;border-radius:15px;padding:24px;box-shadow:0 9px 24px rgba(24,61,88,.06)}.field{margin:15px 0}.field label{display:block;margin-bottom:7px;font-size:13px;font-weight:800}.field input[type=text]{width:100%;box-sizing:border-box;padding:12px;border:1px solid #c9dce7;border-radius:8px;font:inherit}.check{display:flex;align-items:center;gap:8px;font-size:13px}.save{width:100%;border:0;border-radius:8px;padding:13px;background:#14b8a6;color:#fff;font-weight:800}.alert,.errors{padding:12px 14px;margin-bottom:17px;border-radius:9px;font-weight:700}.alert{background:#def9f2;color:#087a6b}.errors{background:#fff0f0;color:#a52e3a}.category{display:grid;grid-template-columns:1fr auto auto;align-items:center;gap:15px;padding:16px 0;border-bottom:1px solid #e1ebf1}.category:last-child{border:0}.category b{display:block}.category small{color:#71869a}.badge{padding:5px 9px;border-radius:99px;background:#e0f8f3;color:#087d6e;font-size:11px;font-weight:800}.delete{border:0;background:#fff0f0;color:#a72f3c;border-radius:7px;padding:8px 10px;font-weight:700;cursor:pointer}@media(max-width:800px){.page{padding:28px 16px}.grid{grid-template-columns:1fr}.top{align-items:flex-start;flex-direction:column}}
    </style>
</head>
<body class="admin-inner-page">
@include('components.admin-sidebar')
<main class="page">
    <header class="top"><div><h1>Blog Categories</h1><p>Create categories used by blog posts and public blog filters.</p></div><a class="back" href="{{ route('admin.blog-posts.index') }}">← Blog Posts</a></header>
    @if(session('success'))<div class="alert">{{ session('success') }}</div>@endif
    @if($errors->any())<div class="errors">{{ $errors->first() }}</div>@endif
    <div class="grid">
        <form class="card" method="post" action="{{ route('admin.blog-categories.store') }}">
            @csrf
            <h2 style="margin-top:0">Add Category</h2>
            <div class="field"><label>Category name</label><input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Diagnostics" required></div>
            <label class="check"><input type="checkbox" name="is_active" value="1" checked> Active and available for blog posts</label>
            <div style="margin-top:20px"><button class="save" type="submit">Create Category</button></div>
        </form>
        <section class="card">
            <h2 style="margin-top:0">All Categories</h2>
            @forelse($categories as $category)
                <article class="category"><div><b>{{ $category->name }}</b><small>/{{ $category->slug }} · {{ $category->posts_count }} post(s)</small></div><span class="badge">{{ $category->is_active ? 'Active' : 'Inactive' }}</span><form method="post" action="{{ route('admin.blog-categories.destroy',$category) }}">@csrf @method('DELETE')<button class="delete" onclick="return confirm('Delete this category?')">Delete</button></form></article>
            @empty
                <p style="color:#71869a">No blog categories yet.</p>
            @endforelse
        </section>
    </div>
</main>
</body>
</html>
