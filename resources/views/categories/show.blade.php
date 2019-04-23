@extends('layouts.app')
@section('title', '商品詳細')
@section('content')
    <p>ID：{{ $Category->id }}</p>
    <p>カテゴリー名：{{ $Category->name }}</p>
    <p>登録日：{{ $Category->created_at }}</p>
    <p>更新日：{{ $Category->updated_at }}</p>

    このカテゴリーに属している商品：
    <ul>
        @foreach($category->items as $item)
            <li>{{ link_to_action_route('items.show',$item->name,['item' => $item->id]) }}</li>
    </ul>
@endsection