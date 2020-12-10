@extends('master')

@section('content')
    @each('post.item', $posts, 'post', 'post.no-items')

    {{ $posts->links() }}
@endsection
