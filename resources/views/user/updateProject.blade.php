<style>
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius:20px;
    }

    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #40798C;
    }

    .button1:hover {
        background-color: #40798C;
        color: white;
    }

    .button2 {
        background-color: white;
        color: black;
        border: 2px solid red;
    }

    .button2:hover {
        background-color: red;
        color: white;
    }

    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        border-radius: 10px;
    }

    input[type=text]:focus {
        border: 3px solid #555;
    }

    input[type=date] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        border-radius: 10px;
    }

    input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        border-radius: 10px;
    }

    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        border-radius: 10px;
    }
</style>
@extends("CSS-related.bootstrapTest")



@section('xxx')
<br>

<div class="card">
    <div class="card-body">

        <h3 style="font-weight:bold;color:#001F54;font-size:25px">---------------------------------- Student Info
            ----------------------------------</H3>
        <br>
        <h3 style="display:inline;font-weight:bold;font-size:25px">Student Name: </h3>
        <h2 style="display:inline;font-size:20px">{{$output->studentName}}</h2>
        <br>
        <br>
        <h3 style="display:inline;font-weight:bold;font-size:25px">Student ID: </h3>
        <h2 style="display:inline;font-size:20px">{{$output->studentID}}</h2>
        <br>
        <br>

        <h3 style="font-weight:bold;color:#001F54;font-size:25px">---------------------------------- Lecturer Info
            ----------------------------------</H3>

        <br>

        @foreach($sv as $sv)
        @if($sv->id == $output->supervisorID)
        <h3 style="display:inline;font-weight:bold;font-size:25px">Supervisor ID: </h3>
        <h2 style="display:inline;font-size:20px">{{$output->supervisorID}}</h2>
        <br>
        <br>
        <h3 style="display:inline;font-weight:bold;font-size:25px">Supervisor Name: </h3>
        <h2 style="display:inline;font-size:20px">{{$sv->name}}</h2>
        @endif
        @endforeach

        <br>
        <br>

        @foreach($ex1 as $ex1)
        @if($ex1->id == $output->examiner1ID)
        <h3 style="display:inline;font-weight:bold;font-size:25px">Examiner ID: </h3>
        <h2 style="display:inline;font-size:20px">{{$output->examiner1ID}}</h2>
        <br>
        <br>
        <h3 style="display:inline;font-weight:bold;font-size:25px">Examiner 1 Name: </h3>
        <h2 style="display:inline;font-size:20px">{{$ex1->name}}</h2>
        @endif
        @endforeach


        <br>
        <br>

        @foreach($ex2 as $ex2)
        @if($ex2->id == $output->examiner2ID)
        <h3 style="display:inline;font-weight:bold;font-size:25px">Examiner 2 ID: </h3>
        <h2 style="display:inline;font-size:20px">{{$output->examiner2ID}}</h2>
        <br>
        <br>
        <h3 style="display:inline;font-weight:bold;font-size:25px">Examiner 2 Name: </h3>
        <h2 style="display:inline;font-size:20px">{{$ex2->name}}</h2>
        @endif
        @endforeach

        <br>
        <br>

        <br>
        <h3 style="font-weight:bold;color:#001F54;font-size:25px">---------------------------------- Project Info
            ----------------------------------</H3>


        <br>

        <form action="/edit" method="post">
            @csrf
            <input type="hidden" name="projectID" value="{{$output->projectID}}">
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Project ID </h3>
                <input type="text" name="pname" placeholder="Enter project title here" value="{{$output->title}}">
            </div>

            <br>
            <h3 style="display:inline;font-weight:bold;font-size:25px">Start Date</h3>
            <input type="date" name="sdate" value="{{$output->start_date}}">

            <br>
            <br>

            <h3 style="display:inline;font-weight:bold;font-size:25px">End Date </h3>
            <input type="date" name="edate" value="{{$output->end_date}}">

            <br>
            <br>
            <h3 style="display:inline;font-weight:bold;font-size:25px">Project Duration</h3>
            <br>
            <input type="number" name="pduration" value="{{$output->duration}}">

            <br>
            <br>
            <h3 style="display:inline;font-weight:bold;font-size:25px">Project Status</h3>
            <br> <br>

            <p style="pading:0px 0px 0px 0px;display:inline;">Current Status: </p>
            @if($output->projectStatus == 'On track')
            <p style="display:inline;color:blue;font-weight:bold;font-size:25px">
                {{$output->projectStatus}}</p>
            @elseif($output->projectStatus == 'Delayed')
            <p style="display:inline;color:orange;font-weight:bold;font-size:25px">
                {{$output->projectStatus}}</p>
            @elseif($output->projectStatus == 'Extended')
            <p style="display:inline;color:red;font-weight:bold;font-size:25px">
                {{$output->projectStatus}}</p>
            @elseif($output->projectStatus == '')
            <p>-</p>
            @else
            <p style="display:inline;color:blue;font-weight:bold;font-size:25px">
                {{$output->projectStatus}}</p>
            @endif
            <br><br>
            <p style="color:red;">Choose to update project status:</p>
            <select name="pstatus">
                <option selected value="{{$output->projectStatus}}">{{$output->projectStatus}}</option>
                <option value="On Track">On Track</option>
                <option value="Delayed">Delayed</option>
                <option value="Extended">Extended</option>
                <option value="Completed">Completed</option>
            </select>

            <br>
            <br>
            <br>
            <h3 style="display:inline;font-weight:bold;font-size:25px">Project Progress</h3>
            <br>
            <br>
            <p style="display:inline;pading:0px 0px 0px 0px;display:inline;">Current Progress: </p>
            @if($output->projectProgress == 'Final Report')
            <p style="display:inline;color:blue;font-weight:bold;font-size:25px">
                {{$output->projectProgress}}</p>

            @elseif($output->projectProgress == 'Milestone 1')
            <p style="display:inline;color:green;font-weight:bold;font-size:25px">
                {{$output->projectProgress}}</p>
            @elseif($output->projectStatus == '')
            <p>-</p>
            @else($output->projectProgress == 'Milestone 1')
            <p style="display:inline;color:orange;font-weight:bold;font-size:25px">
                {{$output->projectProgress}}</p>
            @endif
            <br>
            <br>
            <p style="color:red;">Choose to update project progress:</p>
            <select name="pprogress">
                <option selected value="{{$output->projectProgress}}">{{$output->projectProgress}}</option>
                <option value="Milestone 1">Milestone 1</option>
                <option value="Milestone 2">Milestone 2</option>
                <option value="Final Report">Final Report</option>
            </select>
            <br>
            <br>
            <br>
            <br>
            <center>
            <button class="button button1" type="submit">Update</button>
                <button class="button button2" type="reset">Cancel</button>
            </center>
        </form>
    </div>
</div>


<br><br>

@stop