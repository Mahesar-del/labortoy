<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Main FAQs | Lab Admin</title>
<style>
body{margin:0;background:#f1f7fb;color:#12304c;font-family:Arial}
.wrap{max-width:900px;margin:42px auto;padding:0 20px}
.top{display:flex;justify-content:space-between;align-items:center;margin-bottom:22px}
.top-actions{display:flex;gap:10px}
.back{color:#2476c7;text-decoration:none;font-weight:bold}
.card{background:#fff;border:1px solid #dce9f0;border-radius:14px;padding:28px;box-shadow:0 8px 22px #dce8ef;margin-bottom:20px}
h1{margin:0 0 5px}
h2{margin-top:0}
p{color:#58748c;margin:0 0 20px}
.btn{background:#16b9a7;border:0;border-radius:8px;color:#fff;font-weight:bold;padding:10px 16px;cursor:pointer;text-decoration:none;display:inline-block}
.btn-sm{padding:6px 12px;font-size:12px}
.btn-outline{background:#fff;border:1px solid #cbdce7;color:#58748c}
.btn-danger{background:#ff4c53;color:#fff}
.category-block{border:1px solid #dce9f0;border-radius:10px;padding:20px;margin-bottom:20px;background:#fcfdfe}
.category-header{display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #e1ecf2;padding-bottom:12px;margin-bottom:12px}
.category-title{font-size:18px;font-weight:bold;margin:0;display:flex;align-items:center;gap:10px}
.badge{background:#e1f8f4;color:#078d7b;padding:4px 8px;border-radius:99px;font-size:10px;font-weight:bold}
.badge-inactive{background:#f4f8fb;color:#7e96ad}
table{width:100%;border-collapse:collapse;text-align:left;margin-top:10px}
th{padding:7px 9px;color:#7e96ad;background:#f4f8fb;font-size:10px;letter-spacing:.05em;text-transform:uppercase}
td{padding:12px 9px;border-bottom:1px solid #dbe8f1;font-size:13px;vertical-align:top}
.actions{display:flex;gap:6px}
.modal{display:none;position:fixed;inset:0;background:rgba(6,35,61,.4);align-items:center;justify-content:center;z-index:999}
.modal.active{display:flex}
.modal-content{background:#fff;padding:28px;border-radius:14px;width:100%;max-width:500px;box-shadow:0 10px 30px rgba(0,0,0,.2)}
.field{margin:17px 0}
.field label{display:block;font-size:13px;font-weight:bold;margin-bottom:6px}
input,textarea{background:#fff;border:1px solid #cbdce7;border-radius:8px;box-sizing:border-box;font:inherit;padding:11px;width:100%}
textarea{min-height:80px;resize:vertical}
.modal-actions{display:flex;justify-content:flex-end;gap:10px;margin-top:24px}
.alert{background:#dffaf3;color:#078f7b;padding:12px 16px;border-radius:8px;margin-bottom:20px;font-weight:bold}
.alert-error{background:#fff3e2;color:#c16d13}
</style>
</head>
<body class="admin-inner-page">
@include('components.admin-sidebar')
<main class="wrap">
    <header class="top">
        <div>
            <h1>Main FAQs</h1>
            <p>Manage the categories and questions on the primary FAQ page.</p>
        </div>
        <div class="top-actions">
            <a class="back" href="{{ route('admin.dashboard') }}">← Dashboard</a>
            <button class="btn" onclick="openCategoryModal()">+ Add Category</button>
        </div>
    </header>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-error">Please check the form fields for errors.</div>
    @endif

    <div class="card">
        @forelse($categories as $category)
            <div class="category-block">
                <div class="category-header">
                    <h3 class="category-title">
                        {{ $category->name }} 
                        <span class="badge {{ $category->is_active ? '' : 'badge-inactive' }}">{{ $category->is_active ? 'Active' : 'Hidden' }}</span>
                        <span style="font-size:12px;color:#7e96ad;font-weight:normal">Order: {{ $category->sort_order }}</span>
                    </h3>
                    <div class="actions">
                        <button class="btn btn-sm" onclick="openItemModal({{ $category->id }})">+ Add Question</button>
                        <button class="btn btn-sm btn-outline" onclick="editCategory({{ json_encode($category) }})">Edit</button>
                        <form method="POST" action="{{ route('admin.main-faqs.categories.destroy', $category->id) }}" onsubmit="return confirm('Delete this category and all its questions?');" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
                
                @if($category->items->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Question</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category->items as $item)
                                <tr>
                                    <td style="width:60px">{{ $item->sort_order }}</td>
                                    <td>
                                        <strong>{{ $item->question }}</strong><br>
                                        <span style="color:#58748c">{{ Str::limit($item->answer, 80) }}</span>
                                    </td>
                                    <td style="width:80px">
                                        <span class="badge {{ $item->is_active ? '' : 'badge-inactive' }}">{{ $item->is_active ? 'Active' : 'Hidden' }}</span>
                                    </td>
                                    <td style="width:140px">
                                        <div class="actions">
                                            <button class="btn btn-sm btn-outline" onclick="editItem({{ json_encode($item) }})">Edit</button>
                                            <form method="POST" action="{{ route('admin.main-faqs.items.destroy', $item->id) }}" onsubmit="return confirm('Delete this question?');" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p style="margin:10px 0 0;font-size:13px">No questions in this category yet.</p>
                @endif
            </div>
        @empty
            <p>No FAQ categories found. Add one to get started.</p>
        @endforelse
    </div>
</main>

<!-- Category Modal -->
<div class="modal" id="categoryModal">
    <div class="modal-content">
        <h2 id="categoryModalTitle">Add Category</h2>
        <form id="categoryForm" method="POST" action="{{ route('admin.main-faqs.categories.store') }}">
            @csrf
            <input type="hidden" name="_method" id="categoryMethod" value="POST">
            <div class="field">
                <label>Category Name</label>
                <input name="name" id="cat_name" required placeholder="e.g. Getting Ready for Testing">
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" name="sort_order" id="cat_sort" value="0">
            </div>
            <div class="field" style="display:flex;align-items:center;gap:8px">
                <input type="checkbox" name="is_active" id="cat_active" value="1" checked style="width:auto">
                <label style="margin:0">Active (Visible on website)</label>
            </div>
            <div class="modal-actions">
                <button type="button" class="btn btn-outline" onclick="closeModals()">Cancel</button>
                <button type="submit" class="btn">Save Category</button>
            </div>
        </form>
    </div>
</div>

<!-- Item Modal -->
<div class="modal" id="itemModal">
    <div class="modal-content">
        <h2 id="itemModalTitle">Add Question</h2>
        <form id="itemForm" method="POST" action="{{ route('admin.main-faqs.items.store') }}">
            @csrf
            <input type="hidden" name="_method" id="itemMethod" value="POST">
            <input type="hidden" name="faq_category_id" id="item_category_id">
            
            <div class="field">
                <label>Question</label>
                <input name="question" id="item_question" required>
            </div>
            <div class="field">
                <label>Answer</label>
                <textarea name="answer" id="item_answer" required></textarea>
            </div>
            <div class="field">
                <label>Sort Order</label>
                <input type="number" name="sort_order" id="item_sort" value="0">
            </div>
            <div class="field" style="display:flex;align-items:center;gap:8px">
                <input type="checkbox" name="is_active" id="item_active" value="1" checked style="width:auto">
                <label style="margin:0">Active</label>
            </div>
            <div class="modal-actions">
                <button type="button" class="btn btn-outline" onclick="closeModals()">Cancel</button>
                <button type="submit" class="btn">Save Question</button>
            </div>
        </form>
    </div>
</div>

<script>
function closeModals() {
    document.querySelectorAll('.modal').forEach(m => m.classList.remove('active'));
}

function openCategoryModal() {
    document.getElementById('categoryModalTitle').textContent = 'Add Category';
    document.getElementById('categoryForm').action = '{{ route("admin.main-faqs.categories.store") }}';
    document.getElementById('categoryMethod').value = 'POST';
    document.getElementById('cat_name').value = '';
    document.getElementById('cat_sort').value = '0';
    document.getElementById('cat_active').checked = true;
    document.getElementById('categoryModal').classList.add('active');
}

function editCategory(category) {
    document.getElementById('categoryModalTitle').textContent = 'Edit Category';
    document.getElementById('categoryForm').action = '/admin/main-faqs/categories/' + category.id;
    document.getElementById('categoryMethod').value = 'POST';
    document.getElementById('cat_name').value = category.name;
    document.getElementById('cat_sort').value = category.sort_order;
    document.getElementById('cat_active').checked = category.is_active ? true : false;
    document.getElementById('categoryModal').classList.add('active');
}

function openItemModal(categoryId) {
    document.getElementById('itemModalTitle').textContent = 'Add Question';
    document.getElementById('itemForm').action = '{{ route("admin.main-faqs.items.store") }}';
    document.getElementById('itemMethod').value = 'POST';
    document.getElementById('item_category_id').value = categoryId;
    document.getElementById('item_question').value = '';
    document.getElementById('item_answer').value = '';
    document.getElementById('item_sort').value = '0';
    document.getElementById('item_active').checked = true;
    document.getElementById('itemModal').classList.add('active');
}

function editItem(item) {
    document.getElementById('itemModalTitle').textContent = 'Edit Question';
    document.getElementById('itemForm').action = '/admin/main-faqs/items/' + item.id;
    document.getElementById('itemMethod').value = 'POST';
    document.getElementById('item_category_id').value = item.faq_category_id;
    document.getElementById('item_question').value = item.question;
    document.getElementById('item_answer').value = item.answer;
    document.getElementById('item_sort').value = item.sort_order;
    document.getElementById('item_active').checked = item.is_active ? true : false;
    document.getElementById('itemModal').classList.add('active');
}
</script>
</body>
</html>
