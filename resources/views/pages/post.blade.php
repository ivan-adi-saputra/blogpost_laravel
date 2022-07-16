@extends('layouts.default')

@section('container')
<div class="container">
    <div class="row justify-content-center mt-5">
      <!-- detail Posts -->
      <main class="post blog-post col-lg-8"> 
        <div class="container">
          <div class="post-single">
           
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="category"><a href="">{{ $post->category->name }}</a></div>
              </div>
              <h1>{{ $post->title }}<a href="#"><i class="bi bi-bookmark"></i></a></h1>
              <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                  <div class="avatar"><img src="{{ asset('img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div>
                  <div class="title"><span>{{ $post->user->name }}</span></div></a>
                <div class="d-flex align-items-center flex-wrap">       
                  <div class="date"><i class="bi bi-clock"></i>{{ $post->created_at->diffForHumans() }}</div>
                </div>
              </div>
              <div class="post-thumbnail mt-3"><img src="{{ asset('img/blog-post-3.jpeg') }}" alt="..." class="img-fluid"></div>
              <div class="post-body">
                <h3>{{ $post->title }}</h3>
                <blockquote class="blockquote">
                  <p>{{ $post->excerpt }}</p>
                  <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>
                <p>{!! $post->description !!}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center flex-wrap">       
          <div class="date">
            <i>
              ~~ Created by {{ $post->user->name }} ~~
            </i>
          </div>
        </div>
      </main>
    </div>
  </div>
@endsection