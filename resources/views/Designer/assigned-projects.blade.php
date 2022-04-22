@extends('Designer.layout.main')
@section('content')

<body>

    <div class="page-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>{{Auth()->user()->name}} , Your Assigned Projects here </strong></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm ">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Designer </th>
                                        <th>Client </th>
                                        <th>Assigned By</th>
                                        <th>Chat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->designer->name}}</td>
                                        <td>{{$item->client->name}}</td>
                                        <td>{{$item->assignedby->name}}</td>
                                        <td><a href="{{url('/chatify/'.$item->client->id)}}"><button class="btn btn-primary">Chat</button></a></td>
                                   
                                
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection