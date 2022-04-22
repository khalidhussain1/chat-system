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
        <form class="bg-dark m-5" action="{{route('admin.reporting')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <input type="hidden" value="{{auth()->user()->id}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="assign_by" placeholder="Title" name="title" required>
                    <div class="col-md-12">
                        <select class="custom-select mt-2 bg-dark " name="project_id">
                            <option selected>Select Projec Here </option>
                            @foreach(projects() as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 bg-dark">
                     <textarea name="description" class="bg-dark mt-2" id="" cols="105" rows="5" style="color:white"></textarea>
                    </div>
              
                
                 
                </div>
                <div class="row">
              
                 <div class="ml-3 mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> 
            </div>

    </div>
    </form>
    </div>


</body>
@endsection