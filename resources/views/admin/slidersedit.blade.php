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


    <form action="{{ url('/updateslider/'.$data->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row gx-3">

            <!-- Heading -->
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">

                        <label class="form-label">
                            Heading
                        </label>

                        <input type="text" class="form-control" name="heading" value="{{ $data->heading }}" required>

                    </div>
                </div>
            </div>


            <!-- Image -->
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">

                        <label class="form-label">
                            Upload Image
                        </label>

                        <input type="file" class="form-control" name="image">

                        <br>

                        @if($data->image)

                            <img src="{{ asset('Uploads/' . $data->image) }}" width="180" height="100"
                                style="object-fit:cover;border-radius:10px;">

                        @endif

                    </div>
                </div>
            </div>


            <!-- Title -->
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">

                        <label class="form-label">
                            Title
                        </label>

                        <input type="text" class="form-control" name="title" value="{{ $data->title }}" required>

                    </div>
                </div>
            </div>


            <!-- Submit -->
            <div class="col-md-12 text-end">

                <button class="btn btn-success" type="submit">

                    Update Form

                </button>

            </div>

        </div>

    </form>

@endsection
