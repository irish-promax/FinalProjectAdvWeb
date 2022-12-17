@extends("CSS-related.bootstrapTest")
@section('xxx')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Project List</h4>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th>Title</th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Project Status</th>
                        <th>Project Progress</th>
                      
                    </tr>
                </thead>

                <tbody>
                    @foreach($disdata as $data)
                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->studentID}}</td>
                        <td>{{$data->studentName}}</td>

                        @if($data->projectStatus == 'On Track')
                        <td class="table-primary">
                            <p style="font-weight:bold; color: blue;">{{$data->projectStatus}}</p>
                        </td>
                        @elseif($data->projectStatus == 'Delayed')
                        <td class="table-warning">
                            <p style="font-weight:bold; color: orange;">{{$data->projectStatus}}</p>
                        </td>
                        @elseif($data->projectStatus == 'Extended')
                        <td class="table-danger">
                            <p style="font-weight:bold; color: red;">{{$data->projectStatus}}</p>
                        </td>
                        @else
                        <td class="table-success">
                            <p style="font-weight:bold; color: green;">{{$data->projectStatus}}</p>
                        </td>
                        @endif

                        <td>
                            <p style="font-weight:bold; color: black;">{{$data->projectProgress}}</p>
                        </td>
                        
                        

                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
<br>
{{ $disdata->links('vendor.pagination.custom') }}
@stop