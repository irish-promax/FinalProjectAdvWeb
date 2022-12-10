<!DOCTYPE html>
<html lang="en">

    <head>
        @include("CSS-related.header")

        <style>
            .button {
                background-color: blue; /* Green */
                border: none;
                color: white;
                padding: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 30px;
                font-weight: bold;
                margin: 40px 20px;
                cursor: pointer;
                border-radius: 16px;
                height:500px;
                width:400px;
            }
        </style>
    </head>

    <body>
        @include("CSS-related.navbar")

        <center>
        <h1 style="font-weight:bold; font-size:50px; color:#023273">Final Year Project Management System</h1>

        <div>
        <table bgcolor="grey", border=3px>
            <tr>
                <th style="padding: 50px">ID</th>
                <th style="padding: 50px">Name</th>
                <th style="padding: 50px">Email</th>
                <th style="padding: 50px">User Type</th>
                <th style="padding: 50px">Action</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <th>{{$data->id}}</th>
                <th>{{$data->name}}</th>
                <th>{{$data->email}}</th>
                <th>{{$data->usertype}}</th>
                @if($data->usertype == 0)
                    <th><a href="{{url('/deleteuser', $data->id)}}">Delete?</a></th>
                @else
                    <th><a>Not allowed</a></th>
                    @endif
            </tr>
            @endforeach
        </table>
    </div>
        </center>

        @include("CSS-related.footer")


    </body>
</html>