@extends("CSS-related.bootstrapTest")


@section('xxx')
<br>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Register Project</h4>
        <form class="forms-sample" action="/add" method="POST">
            @csrf
            <div class="form-group">
                <label>Project Title</label>
                <input type="text" class="form-control" name="pname" placeholder="Enter project title here" required>
            </div>

            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" name="sname" placeholder="Enter student name here" required>
            </div>

            <div class="form-group">
                <label>Student ID</label>
                <input type="text" class="form-control" name="sid" placeholder="Enter student ID here" required>
            </div>

            <div class="form-group">
                <label>Supervisor</label><br>
                <select name="supervisor" required>
                    @foreach($data as $data)
                    <option value='{{$data->id}}'>{{$data->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Examiner 1</label><br>
                <select name="examiner1" required>
                    @foreach($data1 as $data1)
                    <option value='{{$data1->id}}'>{{$data1->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Examiner 2</label><br>
                <select name="examiner2" required>
                    @foreach($data2 as $data2)
                    <option value="{{$data2->id}}">{{$data2->name}}</option>
                    @endforeach
                </select>
            </div>
            <center>
                <button type="submit" class="btn btn-primary me-2">Register</button>
                <button class="btn btn-light">Cancel</button>
                <center>
        </form>
    </div>
</div>
<br><br>

@stop