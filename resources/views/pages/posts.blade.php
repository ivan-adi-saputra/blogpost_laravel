@extends('layouts.default')

@section('container')
<div class="container">
    <div class="row">
      <!-- Latest Posts -->
      <main class="posts-listing col-lg-8"> 
        <div class="container">
            <div class="row">
              <div class=" mb-3 mt-5">
                  <div class="post-details">
                      <div class="post-meta d-flex justify-content-center">
                        <p class="fs-4 text-bold">{{ $title }}</p>
                      </div>
                  </div>
                </div>

                @if ($items->count())
                <div class="card mb-3 mt-5">
                    <img src="img/blog-post-1.jpeg" class="card-img-top" height="400" alt="...">
                    <div class="card-body">
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                              <div class="date meta-last">{{ $items[0]->created_at->format('j F | Y') }}</div>
                              <div class="category"><a href="/posts?category={{ $items[0]->category->slug }}">{{ $items[0]->category->name }}</a></div>
                            </div>
                            <a href="{{ Route('post', $items[0]->slug) }}">
                              <h3 class="h4">{{ $items[0]->title }}</h3>
                            </a>
                            <p class="text-muted">{{ $items[0]->excerpt }}</p>
                            <footer class="post-footer d-flex align-items-center">
                              <a href="/posts?user={{ $items[0]->user->username }}" class="author d-flex align-items-center flex-wrap">
                                <div class="avatar">
                                    <img src="img/avatar-3.jpg" width="40" class="img-fluid rounded-circle">
                                </div>
                                <div class="title card-text" style="margin-left: 10px">
                                  <span>{{ $items[0]->user->name }}</span>
                                </div>
                              </a>
                              <div class="date card-text" style="margin-left: 10px">
                                  <i class="icon-clock"></i>
                                      {{ $items[0]->created_at->diffForHumans() }}
                              </div>
                            </footer>
                          </div>
                    </div>
                  </div>

           
            <!-- post -->
            @foreach ($items->skip(1) as $item)
            <div class="post col-xl-6">
              <div class="post-thumbnail"><a href="{{ Route('post', $item->slug) }}"><img src="img/blog-post-1.jpeg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date meta-last">{{ $item->created_at->format('j F | Y') }}</div>
                  <div class="category"><a href="/posts?category={{ $item->category->slug }}">{{ $item->category->name }}</a></div>
                </div>
                  <h3 class="h4">{{ $item->title }}</h3>
                <p class="text-muted">{{ $item->excerpt }}</p>
                <footer class="post-footer d-flex align-items-center">
                  <a href="/posts?user={{ $item->user->username }}" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{ $item->user->name }}</span></div></a>
                  <div class="date"><i class="icon-clock"></i>{{ $item->created_at->diffForHumans() }}</div>
                </footer>
              </div>
            </div>
            @endforeach

            @else 
            <p class="text-center">Post Not Found</p>
          @endif

          <div class="d-flex justify-content-start">
            {{ $items->links() }}
          </div>
            
            <!-- post             -->
            {{-- <div class="post col-xl-6">
              <div class="post-thumbnail"><a href="post.html"><img src="img/blog-post-2.jpg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date meta-last">20 May | 2016</div>
                  <div class="category"><a href="#">Business</a></div>
                </div><a href="post.html">
                  <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>John Doe</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                </div>
              </div>
            </div>
            <!-- post             -->
            <div class="post col-xl-6">
              <div class="post-thumbnail"><a href="post.html"><img src="img/blog-post-3.jpeg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date meta-last">20 May | 2016</div>
                  <div class="category"><a href="#">Business</a></div>
                </div><a href="post.html">
                  <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>John Doe</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                </div>
              </div>
            </div> --}}
            <!-- post -->
            {{-- <div class="post col-xl-6">
              <div class="post-thumbnail"><a href="post.html"><img src="img/blog-post-4.jpeg" alt="..." class="img-fluid"></a></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <div class="date meta-last">20 May | 2016</div>
                  <div class="category"><a href="#">Business</a></div>
                </div><a href="post.html">
                  <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>John Doe</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- Pagination -->
          {{-- <nav aria-label="Page navigation example">
            <ul class="pagination pagination-template d-flex justify-content-center">
              <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
              <li class="page-item"><a href="#" class="page-link active">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </nav> --}}
        </div>
      </main>
      <aside class="col-lg-4">
        <!-- Widget [Search Bar Widget]-->
        <div class="widget search mt-5">
          <header>
            <h3 class="h6">Search the blog</h3>
          </header>
          <form action="/posts" class="search-form">
            @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="form-group">
              <input type="search" placeholder="What are you looking for?" name="search" value="{{ request('search') }}">
              <button type="submit" class="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
        <!-- Widget [Latest Posts Widget]        -->
        <div class="widget latest-posts">
          <header>
            <h3 class="h6">Latest Posts</h3>
          </header>
          @if($post)
          <div class="blog-posts"><a href="#">
              <div class="item d-flex align-items-center">
                <div class="image"><img src="img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>{{ $post[0]->title }}</strong>
                  <div class="d-flex align-items-center">
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div></a><a href="#">
              <div class="item d-flex align-items-center">
                <div class="image"><img src="img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>{{ $post[1]->title }}</strong>
                  <div class="d-flex align-items-center">
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div></a><a href="#">
              <div class="item d-flex align-items-center">
                <div class="image"><img src="img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>{{ $post[2]->title }}</strong>
                  <div class="d-flex align-items-center">
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div></a></div>
        </div>
        @endif
       
        <!-- Widget [Categories Widget]-->
        <div class="widget categories">
          <header>
            <h3 class="h6">Categories</h3>
          </header>
          <div class="item d-flex justify-content-between"><a href="/posts">All Post</a>
          </div>
          @foreach ($category as $category)
            <div class="item d-flex justify-content-between"><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a>
              <span>{{ $category->count() }}</span>
            </div>
          @endforeach
          {{-- <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
          <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
          <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
          <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div> --}}
        </div>

        {{-- Users --}}
        <div class="widget categories">
          <header>
            <h3 class="h6">Author</h3>
          </header>
          @foreach ($user as $user)
            <div class="item d-flex justify-content-between"><a href="/posts?user={{ $user->username }}">{{ $user->name }}</a>
              <span>{{ $user->count() }}</span>
            </div>
          @endforeach
          {{-- <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div>
          <div class="item d-flex justify-content-between"><a href="#">Sales</a><span>8</span></div>
          <div class="item d-flex justify-content-between"><a href="#">Tips</a><span>17</span></div>
          <div class="item d-flex justify-content-between"><a href="#">Local</a><span>25</span></div> --}}
        </div>
      </aside>
    </div>
  </div>
@endsection