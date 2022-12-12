<!DOCTYPE html>
<html lang="en">

    <head>
        @include("CSS-related.header")

        <style>
            input[type=text], select {
            width: 50%;
            padding: 12px 20px;
         
            display: inline-block;
            
            border-radius: 0px;
            box-sizing: border-box;
            }

            input[type=submit] {
            width: 25%;
            background-color: grey;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #5a96e6;
            }

            input[type=reset] {
            width: 25%;
            background-color: grey;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=reset]:hover {
            background-color: red;
            }

            .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
            display: block;
            }

            .dropdown:hover .dropbtn {
            background-color: #3e8e41;
            }

          
        </style>
    </head>

    <body>
        @include("CSS-related.navbar")

        <center>
            <h1 style="font-weight:bold; font-size:50px; color:#023273">Final Year Project Management System</h1>
            </center>
        <div style="margin:40px 80px 80px 80px;">
            <form action = "/add" method="POST">
                @csrf
                <h3 style=" font-size:25px">Project Title</H3>
                <input type="text"  name="pname" placeholder="Enter project title here" required>
                <br>
                <br>
                <h3 style=" font-size:25px">Student Name</H3>
                <input type="text"  name="sname" placeholder="Enter student name here" required>
                <br>
                <br>
                <h3 style=" font-size:25px">Student ID</H3>
                <input type="text"  name="sid" placeholder="Enter student ID here" required>
                
                <br>
                <br>
                <h3 style=" font-size:25px">Supervisor</H3>
                <select name="supervisor" required>
                @foreach($data as $data)
                        <option value='{{$data->id}}'>{{$data->name}}</option>
                        @endforeach
                </select><br>

                <br>
                <br>
                <h3 style=" font-size:25px">Examiner 1</H3>
                <select name="examiner1" required>
                @foreach($data1 as $data1)
                        <option value='{{$data1->id}}'>{{$data1->name}}</option>
                        @endforeach
                </select><br>

                <br>
                <br>
                <h3 style=" font-size:25px">Examiner 2</H3>
                <select name="examiner2" required>
                @foreach($data2 as $data2)
                        <option value="{{$data2->id}}">{{$data2->name}}</option>
                        @endforeach
                </select><br>

                <br>
                <br>
                <br>
                
                
                <br>
                <center>
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
                </center>
            </form>
        </div>
        @include("CSS-related.footer")


    </body>
</html>