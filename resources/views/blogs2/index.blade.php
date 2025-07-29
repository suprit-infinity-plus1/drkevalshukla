@extends('layouts.admin-master')
@section('title', 'Administrative Dashboard')
@section('content')


    <div class="bg-dark text-white mb-3 px-4 py-3 rounded-2 d-flex justify-content-between align-items-center">
        <ul class="breadcrumb text-white-all mb-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-white text-decoration-none"><i
                        class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Blogs</li>
            {{-- <li class="breadcrumb-item"><a href="#"><i class="fas fa-plus"></i> Add
                    Blogs</a></li>
            <li class="breadcrumb-item">
                <a href="#importCustomersModel" data-toggle="modal" data-target="#importCustomersModel">
                    <i class="fas fa-plus"></i> Import Customers
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ asset('excel/sample_customers_excel.xlsx') }}" download="">
                    <i class="fas fa-download"></i> Download Sample Excel
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="">
                    <i class="fas fa-download"></i> Export Customers Excel
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="" data-toggle="modal" data-target="#exportCustomersModel">
                    <i class="fas fa-plus"></i> Export Customers
                </a>
            </li> --}}
        </ul>
        <ul class="breadcrumb text-white-all mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.blogs.add') }}" class="text-decoration-none"><i
                        class="fas fa-plus"></i> Add
                    Blogs</a></li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header bg-dark text-white-all">
            <h4>Manage Blogs</h4>

            {{-- <form action="" method="post">
            @csrf
            <button type="submit" class="btn btn-primary btnSubmit">
                <i class="fa fa-file-excel-o"></i> Export Excel
            </button>
        </form> --}}
        </div>


        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success ">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    {{-- @foreach ($errors->all() as $error) --}}
                    <li>
                        <span class="text-white">{{ Session::get('success') }}</span>
                    </li>
                    {{-- @endforeach --}}
                </div>
            @endif
            @if (Session::has('errors'))
                <div class="alert alert-danger ">
                    <span class="close" onclick="this.parentElement.style.display='none';"
                        style="cursor: pointer;">&times;</span>
                    {{-- @foreach ($errors->all() as $error) --}}
                    <li>
                        <span class="text-white">{{ Session::get('errors') }}</span>
                    </li>
                    {{-- @endforeach --}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <?php $i = 1; ?> --}}
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                {{-- <td>
                                    @if ($blog->cover_image)
                                        <a href="{{ asset('storage/' . $blog->cover_image) }}" target="_blank"
                                            title="View Image">
                                            <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="Cover"
                                                width="60">
                                        </a>
                                    @else
                                        ---
                                    @endif
                                </td> --}}
                                <td>
                                    @if ($blog->cover_image)
                                    <img src="{{ asset($blog->cover_image) }}" alt="" width="80">
                                    @else
                                    ---
                                    @endif
                                </td>
                                <td>{{ \Illuminate\Support\Str::limit($blog->title, 35) }}</td>
                                <td>
                                    {!! $blog->description
                                        ? (strlen(strip_tags($blog->description)) > 35
                                            ? substr(strip_tags($blog->description), 0, 35) . '...'
                                            : $blog->description)
                                        : ' --- ' !!}
                                </td>
                                <td>{{ date('d-M-Y', strtotime($blog->created_at)) }}</td>
                                <td>
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                class="dropdown-item has-icon" title="Edit Detail">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            {{-- <form action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="dropdown-item has-icon d-flex align-items-center"
                                                    onclick="return confirm('Delete this blog?')">
                                                    <i class="fa fa-trash text-danger"></i> Delete
                                                </button>
                                            </form> --}}
                                            <a href="javascript:void(0);" class="dropdown-item has-icon text-danger"
                                                onclick="confirmDeleteBlog({{ $blog->id }})" title="Delete Blog">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                            <form id="delete-blog-form-{{ $blog->id }}"
                                                action="{{ route('admin.blogs.delete', $blog->id) }}" method="POST"
                                                style="display:none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td class="text-danger" colspan="6">
                                    <h5>No Record Found. </h5>
                                </td>
                            </tr>
                        @endforelse
                        {{-- <?php $i = 1; ?>
                        @forelse ($blogs as $blog)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    @if ($blog->image_url)
                                        <a href="/storage/images/blogs/{{ $blog->image_url }}" target="_blank"
                                            title="View Image">View Image</a>
                                    @else
                                        "---"
                                    @endif
                                </td>

                                <td>{{ Str::limit($blog->title, 35) }}</td>
                                <td>{!! $blog->description
                                    ? (strlen(strip_tags($blog->description)) > 35
                                        ? substr(strip_tags($blog->description), 0, 35) . '...'
                                        : $blog->description)
                                    : ' --- ' !!}</td>
                                <td>{{ date('d-M-Y', strtotime($blog->created_at)) }}</td>


                                <td>
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('blogs.edit', $blog->id) }}" class="dropdown-item has-icon"
                                                title="Edit Detail">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="javascript:void(0)" data-role="delete-obj"
                                                data-obj-id="{{ $blog->id }}"
                                                class="dropdown-item has-icon delete-object" title="Delete Slider">
                                                <i class="fa fa-trash text-danger"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td class="text-danger" colspan="9">
                                    <h5>No Record Found. </h5>
                                </td>
                            </tr>
                        @endforelse --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmDeleteBlog(id) {
    if (confirm('Delete this blog?')) {
        document.getElementById('delete-blog-form-' + id).submit();
    }
}
    </script>
@endsection
