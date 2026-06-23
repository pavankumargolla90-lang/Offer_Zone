@extends('admin.layout')
@section('content')

    <style>
        .about-form-card {
            border: 0;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .about-form-header {
            background: linear-gradient(135deg, #111827, #dc2626);
            color: #fff;
            padding: 22px 28px;
        }

        .about-form-header h4 {
            margin: 0;
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
            color: #111827;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 14px;
        }

        .form-control:focus {
            border-color: #dc2626;
            box-shadow: 0 0 0 0.2rem rgba(220, 38, 38, 0.12);
        }

        .btn-about {
            background: #dc2626;
            color: #fff;
            border: 0;
            border-radius: 12px;
            font-weight: 700;
            padding: 12px 30px;
        }

        .btn-about:hover {
            background: #991b1b;
            color: #fff;
        }

        .about-table-card {
            border: 0;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-top: 28px;
            overflow: hidden;
        }

        .about-table-card .card-header {
            background: #111827;
            color: #fff;
            padding: 18px 24px;
            font-weight: 700;
        }

        .about-img {
            width: 90px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
        }

        .about-content {
            max-width: 450px;
            white-space: normal;
            line-height: 1.6;
        }

        .table thead th {
            background: #f3f4f6;
            color: #111827;
            font-weight: 700;
            white-space: nowrap;
        }

        .table td {
            vertical-align: middle;
        }

        @media(max-width: 768px) {
            .about-form-header {
                padding: 18px;
            }

            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>

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

    <div class="card about-form-card">
        <div class="about-form-header">
            <h4>About Us Form</h4>
            <p class="mb-0">Add your About Us section details here.</p>
        </div>

        <div class="card-body p-4">
            <form action="/aboutstore" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row gx-3">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Upload Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" placeholder="Enter heading" required>
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" name="content" rows="5" placeholder="Enter about us content"
                            required></textarea>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-about" type="submit">
                                Submit About Us
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="card about-table-card">
        <div class="card-header">
            About Us List
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Content</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($data as $key => $about)
                            <tr>
                                <td>{{ $key + 1 }}</td>

                                <td>
                                    @if($about->image)
                                        <img src="{{ asset('Uploads/' . $about->image) }}" class="about-img" alt="About Image">
                                    @else
                                        No Image
                                    @endif
                                </td>

                                <td>{{ $about->heading }}</td>

                                <td class="about-content">{{ $about->content }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">No About Us data found</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection