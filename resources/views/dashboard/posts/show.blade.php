@extends('dashboard.layouts.main')

@section('container')
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-8">
                    <h3 class="mb-3">{{ $item->title }}</h3>
                   
                    <a href="{{ route('posts.index') }}" class="btn btn-info"><span data-feather="arrow-left"></span>Back to all my posts</a>
                    <a href="{{ route('posts.edit', $item->id) }}" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                    <form action="{{ route('posts.destroy', $item->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf 
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                    
                    @if( $item->photo )
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->category->name }}" class="img-fluid mt-3">
                        </div>
                    @else 
                        <img src="/img/small-thumbnail-1.jpg" alt="{{ $item->category->name }}" width="700" height="400" class="img-fluid mt-3">
                    @endif
                    <article class="my-3 fs-5">
                        {!! $item->description !!}
                    </article>
                </div>
            </div>
        </div>
@endsection