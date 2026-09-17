<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact Messages | Lab Admin</title>
    <style>
        body{margin:0;background:#f1f7fb;color:#12304c;font-family:Arial,sans-serif}.wrap{max-width:1180px;margin:0 auto;padding:42px 28px}.top{display:flex;justify-content:space-between;align-items:flex-start;gap:20px;margin-bottom:26px}.eyebrow{color:#168e9e;font-size:12px;font-weight:800;letter-spacing:.1em;text-transform:uppercase}h1{margin:8px 0 0;font-size:36px}.sub{color:#52718a;font-size:16px}.ok{margin-bottom:18px;padding:13px 16px;border-radius:10px;background:#def9f2;color:#087a6b}.list{display:grid;gap:16px}.message-card{background:#fff;border:1px solid #dce9f0;border-radius:15px;padding:22px;box-shadow:0 8px 22px rgba(30,75,102,.05)}.message-head{display:flex;justify-content:space-between;gap:18px}.message-head h2{margin:0 0 6px;font-size:20px}.meta{color:#617e96;font-size:13px;line-height:1.6}.source{display:inline-block;margin-bottom:9px;padding:5px 10px;border-radius:999px;background:#dff8f1;color:#087a6b;font-size:11px;font-weight:800;text-transform:uppercase}.message-body{margin:17px 0;padding:15px;border-radius:10px;background:#f5f9fc;white-space:pre-wrap;line-height:1.6}.actions{display:flex;align-items:center;gap:10px}.actions form{display:flex;gap:8px}.actions select,.actions button{height:38px;border-radius:8px;font:inherit}.actions select{border:1px solid #cbdce7;padding:0 10px;background:#fff}.actions button{border:0;padding:0 14px;background:#16b9a7;color:#fff;font-weight:700;cursor:pointer}.actions .delete{background:#dc4b52}@media(max-width:760px){.wrap{padding:25px 15px}.top,.message-head{display:block}.top .back{margin-top:15px}.actions,.actions form{align-items:stretch;flex-direction:column}h1{font-size:29px}}
    </style>
</head>
<body class="admin-inner-page">
@include('components.admin-sidebar')
<main class="wrap">
    <header class="top"><div><div class="eyebrow">Contact Us submissions</div><h1>Contact Messages</h1><p class="sub">These messages were submitted through the website Contact Us form.</p></div><a class="back" href="{{ route('admin.dashboard') }}">← Dashboard</a></header>
    @if(session('success'))<div class="ok">{{ session('success') }}</div>@endif
    <section class="list">
        @forelse($messages as $message)
            <article class="message-card">
                <div class="message-head"><div><span class="source">Contact Us</span><h2>{{ $message->subject ?: 'No subject' }}</h2><div class="meta"><strong>{{ $message->name }}</strong> · {{ $message->email }} @if($message->phone)· {{ $message->phone }}@endif<br>{{ \Carbon\Carbon::parse($message->created_at)->format('d M Y, h:i A') }}</div></div></div>
                <div class="message-body">{{ $message->message }}</div>
                <div class="actions">
                    <form method="post" action="{{ route('admin.contact-messages.status', $message->id) }}">@csrf<select name="status">@foreach(['new'=>'New','read'=>'Read','replied'=>'Replied'] as $value=>$label)<option value="{{ $value }}" {{ $message->status===$value?'selected':'' }}>{{ $label }}</option>@endforeach</select><button type="submit">Update status</button></form>
                    <form method="post" action="{{ route('admin.contact-messages.destroy', $message->id) }}" onsubmit="return confirm('Delete this contact message?')">@csrf @method('DELETE')<button class="delete" type="submit">Delete</button></form>
                </div>
            </article>
        @empty
            <article class="message-card">No Contact Us messages have been received yet.</article>
        @endforelse
    </section>
</main>
</body>
</html>
