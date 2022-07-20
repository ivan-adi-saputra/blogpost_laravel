@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Post</h1>
    </div>

    <div class="col-lg-8">
        <form action="{{ route('posts.update', $post->id) }}" method="post" class="mb-5" enctype="multipart/form-data">
          @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $post->title) }}" autofocus>
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                @foreach( $categories as $category )
                  @if(old('category_id', $post->category->id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else 
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="photo" class="form-label">Image Post</label>
              <input type="hidden" name="oldImage" value="{{ $post->photo }}">
              @if ($post->photo)
                {{-- <img src="{{ asset('storage/' . $post->photo) }}" class="img-preview img-fluid mb-3 col-sm-5"> --}}
                <img src="{{ asset('storage/' . $post->photo) }}" id="blah" class="img-preview img-fluid mb-3 col-sm-5" />
              @else
                {{-- <img class="img-preview img-fluid mb-3 col-sm-5"> --}}
                <img id="blah" type="hidden" />
              @endif
              <input class="form-control @error('photo') is-invalid @enderror" type="file" id="imgInp" name="photo" onchange="loadFile(event)" accept="image/*">
              
              @error('photo')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $post->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
          </form>
    </div>

    <script>
       imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
      }
    </script>
@endsection