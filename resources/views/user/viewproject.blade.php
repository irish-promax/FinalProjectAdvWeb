<!DOCTYPE html>
<html lang="en">

<head>
    @include("CSS-related.header")
    <style>
        body {
            background-color: #222222
        }

        .button {
            background-color: blue;
            /* Green */
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
            height: 500px;
            width: 400px;
        }

        table,
        td,
        th {

            text-align: left;
            margin-top: 50px;
            margin-bottom: 50px;
            border-radius: 16px;
            background-color: white;
        }


        table {
            border-collapse: collapse;
            width: 90%;
            background-color: white;
            border-radius: 16px;
            padding-bottom: 35px;

        }

        th,
        td {
            padding-top: 30px;

            padding-bottom: 35px;
            text-align: center;
            background-color: white;
        }
    </style>
</head>

<body>
    @include("CSS-related.navbar")

    <center>

        <div>
            <table>
                <tr style="font-size:17px;">
                    <th>Project ID</th>
                    <th>Title</th>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Project Status</th>
                    <th>Project Progress</th>
                    <th>Action</th>
                </tr>
                @foreach($disdata as $data)
                <tr align="center">
                    <td>{{$data['projectID']}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->studentID}}</td>
                    <td>{{$data->studentName}}</td>

                    @if($data->projectStatus == 'On track')
                    <td>
                        <p style="font-weight:bold; color: blue;">{{$data->projectStatus}}</p>
                    </td>
                    @elseif($data->projectStatus == 'Delayed')
                    <td>
                        <p style="font-weight:bold; color: orange;">{{$data->projectStatus}}</p>
                    </td>
                    @elseif($data->projectStatus == 'Extended')
                    <td>
                        <p style="font-weight:bold; color: red;">{{$data->projectStatus}}</p>
                    </td>
                    @else
                    <td>
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

            </table>

            
          

                
               
        </div>

        {{ $disdata->links('vendor.pagination.custom') }}
    </center>


</body>

</html>