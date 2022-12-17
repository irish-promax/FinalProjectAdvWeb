@extends("CSS-related.bootstrapTest")

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
@section('xxx')
<br>
<div class="card">
    <div class="card-body">
        <form action="/add" method="POST">
            @csrf
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Project Title: </h3>
                <input type="text" name="pname" placeholder="Enter project title here" required>
            </div>
            <br>
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Student Name: </h3>
                <input type="text" name="sname" placeholder="Enter student name here" required>
            </div>
            <br>
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Student ID: </h3>
                <input type="text" name="sid" placeholder="Enter student ID here" required>
            </div>
            <br>
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Supervisor: </h3>
                <br>
                <br>
                <select name="supervisor" required>
                    @foreach($data as $data)
                    <option value='{{$data->id}}'>{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Examiner 1: </h3>
                <br>
                <br>
                <select name="examiner1" required>
                    @foreach($data1 as $data1)
                    <option value='{{$data1->id}}'>{{$data1->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <br>
            <div>
                <h3 style="display:inline;font-weight:bold;font-size:25px">Examiner 2: </h3>
                <br>
                <br>
                <select name="examiner2" required>
                    @foreach($data2 as $data2)
                    <option value="{{$data2->id}}">{{$data2->name}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <br>

            <center>
                <button class="button button1" type="submit">Register</button>
                <button class="button button2" type="reset">Cancel</button>
                <center>
        </form>
    </div>
</div>
<br><br>

@stop