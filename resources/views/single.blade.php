@include('header')

<div class="container">
    <header class="blog-header py-3">

    </header>

    <div class="nav-scroller py-1 mb-2">

    </div>
</div>

<main class="container">


    <div class="row g-5">
        <div class="col-md-8">


            <article class="blog-post">
                <h2 class="blog-post-title">{{ $blog->title }}</h2>
                <p class="blog-post-meta">{{ date('d M Y', strtotime($blog->created_at)) }} by <a href="#">Admin</a>
                </p>

                <p>{{ $blog->short_description }}</p>
                <hr>

                <img src="{{ asset('storage/'  . $blog->img) }}" alt="My Image" class="img-fluid" alt="Image" width="840"
                    height="420">>
         

                <!--<img src="{{ '/storage/' . $blog->img }}" class="img-fluid" alt="Image" width="840"-->
                <!--    height="420">-->
                <p>{!! $blog->content !!}</p>

            </article>


            <form action="" class="my-4">
                <div class="form-floating">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Comments</label>
                    </div>
                    <button class="btn btn-info my-2">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                    class="single-blog-card fb d-flex align-items-center justify-content-center">
                    <i class="fa fa-brands fa-facebook" aria-hidden="true"></i>
                    <p>Share on facebook</p>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ Request::url() }}"
                    class="single-blog-card linkedin d-flex align-items-center justify-content-center">
                    <i class="fa fa-brands fa-linkedin" aria-hidden="true"></i>
                    <p>Share on linkedin</p>
                </a>
                <a href="http://twitter.com/share?url={{ Request::url() }}"
                    class="single-blog-card twitter d-flex align-items-center justify-content-center">
                    <i class="fa fa-brands fa-twitter" aria-hidden="true"></i>
                    <p>Share on twitter</p>
                </a>

                <div class="single-blog-card d-flex flex-column px-4">
                    <h3>Archives</h3>
                    <a class="text-dark" href="{{ route('blog', 'archive=') }}">2023</a>
                    <a class="text-dark" href="{{ route('blog', 'archive=') }}">2022</a>
                    <a class="text-dark" href="{{ route('blog', 'archive=') }}">2021</a>
                    <a class="text-dark" href="{{ route('blog', 'archive=') }}">2020</a>
                    <a class="text-dark" href="{{ route('blog', 'archive=') }}">2019</a>
                </div>
                <div class="single-blog-card d-flex flex-column px-4">
                    <h3>Category</h3>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 1</a>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 2</a>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 3</a>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 4</a>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 5</a>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 6</a>
                    <a class="text-dark" href="{{ route('blog', 'category=') }}">Category 7</a>
                </div>
            </div>
        </div>
    </div>

</main>

@include('footer')
