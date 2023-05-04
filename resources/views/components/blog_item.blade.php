@props(['blog'])
@php
    $unformated_date = $blog->created_at;
    $formated_date=date_format($unformated_date,"F j, Y" );
@endphp
<div class="post-preview"><a href="/blogs/{{$blog['id']}}">
    <h2 class="post-title">{{$blog->title}}</h2>
    <h3 class="post-subtitle">{{$blog->subtitle}}</h3>
</a>
<p class="post-meta">Posted by&nbsp;<a href="{{ request()->fullUrlWithQuery(['written-by' => $blog->username]) }} ">{{$blog->username." on "}} </a>{{ $formated_date}}</p>
</div>
<hr>