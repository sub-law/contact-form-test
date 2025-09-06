@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header-links')
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="header__link logout-btn">logout</button>
</form>
@endsection

@section('content')
<div class="admin-container">
    <h1 class="admin-heading">Admin</h1>

    <form method="GET" action="{{ route('admin.search') }}" class="search-form">
        <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">

        <select name="gender">
            <option value="">性別</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
        </select>

        <select name="category_id">
            <option value="">お問い合わせ種類</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->content }}</option>
            @endforeach
        </select>

        <input type="date" name="date">

        <button type="submit" class="search-btn">検索</button>
        <a href="{{ route('admin.index') }}" class="reset-btn">リセット</a>

        {{-- <a href="{{ route('admin.export') }}" class="export-btn">エクスポート</a> --}}

    </form>

    <div class="admin-table-wrapper">
        <div class="pagination-top">
            {{ $contacts->links('pagination::default') }}
        </div>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->full_name }}</td>
                    <td>{{ $contact->gender_label }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->category_name }}</td>
                    <td><button class="detail-btn" data-id="{{ $contact->id }}">詳細</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    <!-- モーダルウィンドウ -->
    <div class="modal" id="detail-modal">
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <div class="modal-body">
                <!-- 詳細内容をJavaScriptで挿入 -->
            </div>
            {{-- <form method="POST" action="" id="delete-form"> --}}
            <form method="POST" action="#" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn">削除</button>
            </form>
        </div>
    </div>
    @endsection