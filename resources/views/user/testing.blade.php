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
                <input type="text"  name="pname" placeholder="Enter project title here" value ="{{$output->title}}" disabled>
                <br>
                <br>
                <h3 style=" font-size:25px">Student Name</H3>
                <input type="text"  name="pname" placeholder="Enter project title here" value ="{{$output->studentName}}" disabled>
                <br>
                <br>
                <h3 style=" font-size:25px">Student ID</H3>
                <input type="text"  name="pname" placeholder="Enter project title here" value ="{{$output->studentID}}" disabled>
                
                <br>
                <br>
                <h3 style=" font-size:25px">Supervisor</H3>
                <input type="text"  name="pname" value ="{{$output->examiner1ID}}" disabled>
               

                <br>
                <br>
                <h3 style=" font-size:25px">Examiner 1</H3>
                <input type="text"  name="pname" placeholder="Enter project title here" value ="{{$output->supervisorID}}" disabled>
              

                <br>
                <br>
                <h3 style=" font-size:25px">Examiner 2</H3>
                <input type="text"  name="pname" value ="{{$output->examiner2ID}}" disabled>
                
                <br>

                <br>
                <br>
                <br>
                
               
                <h3 style="color:grey; font-size:25px">----------------- For Supervisor Use Only -----------------</H3>
                <br>
                
                <h3 style=" font-size:25px">Start Date</H3>
                <input type="date" name="sdate" value ="{{$output->start_date}}">

                <br>
                <br>

                <h3 style=" font-size:25px">End Date</H3>
                <input type="date" name="edate" value ="{{$output->end_date}}">
                
                <br>
                <br>
                <h3 style=" font-size:25px">Duration</H3>
                <input type="month" name="pduration" value ="{{$output->duration}}">

                <br>
                <br>
                <p style=" font-size:25px">Project Status</p>
                
                Current Status: 
                        @if($output->projectStatus == 'On track')
                        <p style="border-radius:10px; padding:2px; margin:10px;height: 30px;color:white;text-align:center;width: 10%; font-weight:bold; background-color: blue;">{{$output->projectStatus}}</p>
                        @elseif($output->projectStatus == 'Delayed')
                        <p style="border-radius:10px; padding:2px;margin:10px;height: 30px;color:white;text-align:center; width: 10%; font-weight:bold; background-color: orange;">{{$output->projectStatus}}</p>
                        @elseif($output->projectStatus == 'Extended')
                        <p style="border-radius:10px; padding:2px;margin:10px;height: 30px; color:white;text-align:center;width: 10%; font-weight:bold; background-color: red;">{{$output->projectStatus}}</p>
                        @else
                        <p style="border-radius:10px; padding:2px;margin:10px; height: 30px;color:white; text-align:center; width: 10%; font-weight:bold; background-color: green;">{{$output->projectStatus}}</p>
                        @endif 
                <br>
                <select  name="pstatus">
                    <option value="On Track">On Track</option>
                    <option value="Delayed">Delayed</option>
                    <option value="Extended">Extended</option>
                    <option value="Completed">Completed</option>
                </select> 

                <br>
                <br>
                <h3 style=" font-size:25px">Project Progress</H3>
                <select name="pprogress">
                <option value="Milestone 1">Milestone 1</option>
                    <option value="Milestone 2">Milestone 2</option>
                    <option value="Final Report">Final Report</option>
                    </select> 
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
