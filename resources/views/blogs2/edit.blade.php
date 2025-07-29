@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')

    <section class="section">
        <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
            <ul class="breadcrumb text-white-all mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                            class="fas fa-home"></i>
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.blogs') }}"
                        class="text-decoration-none"><i class="fas fa-list"></i> All Blogs</a></li>
            </ul>
        </div>

        <div class="card" ng-app="products">
            <div class="card-header bg-dark text-white-all">
                <h4>Update Blog</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" role="form" class="needs-validation" id=""
                    enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- Blog Title -->
                                    <div class="col-md-6 order-md-1">
                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Enter Title" required value="{{ $blog->title }}">
                                        </div>
                                    </div>

                                    <!-- Cover Image -->
                                    <div class="col-md-6 order-md-2">
                                        <div class="form-group">
                                            <label for="cover_image">Cover Image <span class="text-danger">*</span></label>
                                            <input type="file" name="cover_image" id="cover_image" class="form-control"
                                                accept="image/png, image/gif, image/jpeg, image/webp" 
                                                onchange="previewBlogCoverImage(event)">
                                        </div>
                                    </div>

                                    <!-- Author -->
                                    <div class="col-md-6 order-4 order-md-3">
                                        <div class="form-group">
                                            <label for="author">Author <span class="text-danger">*</span></label>
                                            <input type="text" name="author" id="author" class="form-control"
                                                placeholder="Enter Author Name" required value="{{ $blog->author }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 order-3 order-md-4">
                                        <div class="form-group">
                                            <img id="blog_cover_image_preview" src="{{$blog->cover_image ? asset($blog->cover_image) : '#' }}" alt="Cover Image Preview"
                                                style="max-width:100%; height:auto; {{ $blog->cover_image ? '' : 'display:none;' }}" />
                                        </div>
                                    </div>
                                    <script>
                                        function previewBlogCoverImage(event) {
                                            const [file] = event.target.files;
                                            if (file) {
                                                const preview = document.getElementById('blog_cover_image_preview');
                                                preview.src = URL.createObjectURL(file);
                                                preview.style.display = 'block';
                                            }
                                        }
                                    </script>
                                    <!-- Description -->
                                    <div class="col-md-12 order-5 order-md-5">
                                        <div class="form-group">
                                            <label for="description">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" id="description" class="form-control summernote" placeholder="Enter Description"
                                                rows="10" required>
                                                {{ $blog->description }}
                                            </textarea>
                                        </div>
                                    </div>


                                    {{-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="b_description">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="b_description" id="b_description" class="form-control summernote" placeholder="Enter Short Description"
                                                rows="10" required></textarea>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>



                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary update_button"> <i class="fa fa-send"></i>
                                    Submit</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </section>

@endsection
