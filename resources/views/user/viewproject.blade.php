@extends("CSS-related.bootstrapTest")

@section('xxx')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Project List</h4>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr align="center">
                    <th>Student Information</th>
                        <th>Title</th>
                        <th>Project Status</th>
                        <th>Project Progress</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($disdata as $data)
                    <tr align="center">
                        
                        <td><h2 style="font-weight:bold;">{{$data->studentName}}</h2><br> <h2 style="font-weight:bold; color:grey;">{{$data->studentID}}</h2></td>
                       
                        <td>{{$data->title}}</td>

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
                        
                        <td>
                            <a href={{"upd/".$data['projectID']}}
                                style="border-radius:10px; padding: 10px 30px 10px 30px; margin:10px;background-color: #FFC84D; color:white;font-weight:bold;">
                                Update &nbsp &nbsp 🖊 </a>
                            <a href={{"del/".$data['projectID']}}
                                style="border-radius:10px; padding: 10px 30px 10px 30px; margin:10px;background-color: #FF4D4D; color:white;font-weight:bold;">
                                Delete &nbsp &nbsp 🗑 </a>
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