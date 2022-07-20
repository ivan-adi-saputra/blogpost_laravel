@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <div class="table-responsive col-lg-8">
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create new post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>
                      {{ $loop->iteration }}
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>
                        <a href="{{ route('posts.show', $item->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="{{ route('posts.edit', $item->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="{{ route('posts.destroy', $item->id) }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf 
                          <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></button>
                        </form>
                    </td>  
                  </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection