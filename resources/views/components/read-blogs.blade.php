@props(['blogs'])

<div class="px-4 py-2 d-flex align-items-center gap-2">
    <h1 class="fw-bold">Blogs</h1>
    <a href="?route=create_blog" class="btn btn-warning">
        +
    </a>
</div>
<div class="px-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($blogs as $blog)
                @php
                    $i++;
                @endphp
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::substr($blog->created_at, 0, 10) }}</td>
                    <td class="d-flex align-items-center gap-2">
                        <form action="{{ route('delete_blog', $blog->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash text-light" aria-hidden="true"></i>
                            </button>
                        </form>
                        <a href="?route=edit_blog&blog_id={{ $blog->id }}">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-pencil text-light" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
