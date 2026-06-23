@extends('admin.layout')

@section('content')

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session("success") }}',
                confirmButtonColor: '#198754',
                timer: 2500,
                showConfirmButton: false
            });
        </script>
    @endif

    <!-- Form -->
    <form action="/sliderstore" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row gx-3">

            <!-- Heading -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" placeholder="Enter heading" required>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <label class="form-label">Upload Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                </div>
            </div>

            <!-- Title -->
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="col-12 text-end">
                <button class="btn btn-success">
                    Submit Form
                </button>
            </div>

        </div>
    </form>


    <!-- TABLE -->
    <div class="card mt-4">
        <div class="card-header">
            <h5>Slider List</h5>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Heading</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($data as $slider)

                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $slider->heading }}</td>

                            <td>
                                <img src="{{ asset('Uploads/' . $slider->image) }}" width="120" height="70">
                            </td>

                            <td>{{ $slider->title }}</td>

                            <td>
                                <a href="/editslider/{{ $slider->id }}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>

                                <a href="/deleteslider/{{ $slider->id }}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">
                                    Delete
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center">
                                No Data Found
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

@endsection