@extends('_layouts.default')

@section('content')

<article>
	<h2>{{ $post->title }}</h2>
	<p class="created_at">Created on {{{ date('Y-m-d', strtotime($post->created_at)) }}} By {{{ $post->user->name }}}</p>
	<p> {{{ $post->body }}}</p>
	<p>{{ link_to_route('home', 'Back &lsaquo;') }}</p>
</article>

@stop