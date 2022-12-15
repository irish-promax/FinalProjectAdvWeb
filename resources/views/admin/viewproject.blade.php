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

            table, td, th {  
                border: 1px solid #ddd;
                text-align: left;
                margin-top:50px;
            }

            table {
                border-collapse: collapse;
                width: 90%;
            }

            th, td {
                padding: 15px;
                text-align:center;
            }
        </style>
    </head>

    <body>
        @include("CSS-related.navbar")

        <center>
        <h1 style="font-weight:bold; font-size:50px; color:#023273">Final Year Project Management System</h1>

        <div>
        <table>
            <tr>
                <th>Project ID</th>
                <th>Title</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Project Progress</th>
                <th>Project Status</th>
                <th>Action</th>
            </tr>
            @foreach($disdata as $data)
            <tr align="center">
                <td>{{$data->projectID}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->studentID}}</td>
                <td>{{$data->studentName}}</td>
                <td>{{$data->projectStatus}}</td>
                <td>{{$data->projectProgress}}</td>
                <td>-</td>
                
            @endforeach
        </table>
   
        <br>
        <br>
        <br>
        <span>
       
        {{ $disdata->links() }}
        <span>
    </div>
  
        </center>
   

    </body>
</html>
