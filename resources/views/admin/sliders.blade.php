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
    <form action="/sliderstore" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row gx-3">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="was-validated">
                            <label for="formHeading" class="form-label">Heading</label>
                            <input type="text" class="form-control" id="formHeading" name="heading"
                                placeholder="Enter heading title" required="" />
                            <div class="invalid-feedback">Please provide a heading title.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="was-validated">
                            <label for="formImage" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="formImage" name="image" aria-label="file example"
                                required="" />
                            <div class="invalid-feedback">Please choose an image file to upload.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="was-validated">
                            <label for="formContent" class="form-label">Title</label>
                            <input class="form-control" id="formContent" name="title" rows="5"
                                placeholder="Enter your title here..." required=""></input>
                            <div class="invalid-feedback">Please choose an image file to upload.</div>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-success px-4 py-2" type="submit">
                        <i class="icon-check me-2"></i> Submit Form
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection