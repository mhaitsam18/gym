@extends('layouts.main')
@section('content')
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Schedule</h4>
                
                <div class="table-responsive">
                    <center><a href="{{url('/event')}}"><button class="btn btn-success btn-lg">Full Calender</a></button></center>
                    <table id="myTable" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>Name Schedule</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <td>{{$data->start}}</td>
                                <td>{{$data->end}}</td>

                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                    <!-- Modal -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')

@endsection
@section('script')

@endsection