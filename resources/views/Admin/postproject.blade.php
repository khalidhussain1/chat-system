@extends('admin.layout.main')
@section('content')

<body>

    <div class="page-content">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <form class="bg-dark m-5" action="{{route('admin.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-2" placeholder="Title" name="title">
                    </div>
                    <div class="col-md-6">
                        <input type="file" class="form-control mt-2" name="sample">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control mt-2" placeholder="Name" name="name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-2" placeholder="Email" name="email">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control mt-2" placeholder="Phone" name="phone">
                    </div>
                    <div class="col-md-3">
                    <input type="text" class="form-control mt-2" placeholder="Industry" name="industry">
                    </div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <select class="custom-select mt-2" id="inputGroupSelect03" aria-label="Example select with button addon" name="intrested">
                                <option selected>Payemnt Method</option>
                                <option value="paypal">Paypal</option>
                                <option value="upwork">Upwork</option>
                                <option value="fiver">Fiver</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control mt-2" placeholder="Budget" name="budget">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control mt-2" placeholder="Date" name="date">
                    </div>
                    <div class="col-md-6">
                        <textarea name="recomendation" id="" cols="50" rows="3" class="bg-dark" style="color: white;" placeholder="Any Recomendation"></textarea>
                    </div>
                    <div class="col-md-6">
                        <textarea name="description" id="" cols="50" rows="3" class="bg-dark" style="color: white;" placeholder="Description"></textarea>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="ml-3 mt-3">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>

    </div>
    </form>
    </div>


</body>
@endsection