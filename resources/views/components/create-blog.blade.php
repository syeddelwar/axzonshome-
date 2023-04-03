<div class="px-4 py-2 d-flex align-items-center gap-2">
    <h1 class="fw-bold">Add Blog</h1>

</div>
<div class="px-4">
    <form enctype="multipart/form-data" action="{{ url('store-blog') }}" class="my-2" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" required name="title" placeholder="Enter Title" class="form-control" id="title"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="short_description" class="form-label">Short Description</label>
            <input type="text" max="100" required name="short_description" placeholder="Enter Short Description"
                class="form-control" id="short_description" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" required name="content" placeholder="Write Something....">
            
            </textarea>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Featured Image</label>
            <input name="img" required accept="image/png, image/gif, image/jpeg"
                class="form-control form-control-sm" id="formFileSm" type="file">
        </div>
        <button type="submit" name="submit_add_blog" class="btn btn-primary">Submit</button>
    </form>
</div>
</aside>
