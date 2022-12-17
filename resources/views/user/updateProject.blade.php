<!DOCTYPE html>
<html lang="en">
    <head>
        @include("CSS-related.header")
        <style>
            body {
            background-color: #222222
        }

            input[type=text], select {
            width: 60%;
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

            h3{
                color: white;
            }
            p{
                color: white;
            }

    

          
        </style>
    </head>

    <body>
        @include("CSS-related.navbar")

   
        <div style="margin:0px 60px 60px 60px; background-color:#48527D; padding:10px;">
        <form action="/edit" method="post">
            @csrf
            <input type="hidden"  name="projectID" value ="{{$output->projectID}}">

            <h3 style=" font-size:25px">Project Title</H3>
            <input type="text"  name="pname" placeholder="Enter project title here" value ="{{$output->title}}" disabled>
            <br>
            <br>
            <h3 style=" font-size:25px">Student Name</H3>
            <input type="text"  name="studentname" placeholder="Enter project title here" value ="{{$output->studentName}}" disabled>
            <br>
            <br>
            <h3 style=" font-size:25px">Student ID</H3>
            <input type="text"  name="studentID" placeholder="Enter project title here" value ="{{$output->studentID}}" disabled>
            
            <br>
            <br>
            <h3 style=" font-size:25px">Supervisor</H3>
            @foreach($sv as $sv)
                    @if($sv->id == $output->supervisorID)
                        <input type="text"  name="sv" placeholder="Enter project title here" value ="{{$output->supervisorID}}" disabled>
                        <input type="text"  name="sv" placeholder="Enter project title here" value ="{{$sv->name}}" disabled>
                    @endif
            @endforeach
               

            <br>
                <br>
                <h3 style=" font-size:25px">Examiner 1</H3>
                @foreach($ex1 as $ex1)
                    @if($ex1->id == $output->examiner1ID)
                        <input type="text"  name="exa1" placeholder="Enter project title here" value ="{{$output->examiner1ID}}" disabled>
                        <input type="text"  name="exa1" placeholder="Enter project title here" value ="{{$ex1->name}}" disabled>
                    @endif
                @endforeach
              

                <br>
                <br>
                <h3 style=" font-size:25px">Examiner 2</H3>
                @foreach($ex2 as $ex2)
                    @if($ex2->id == $output->examiner2ID)
                        <input type="text"  name="exa2"  value ="{{$output->examiner2ID}}" disabled>
                        <input type="text"  name="exa2"  value ="{{$ex2->name}}" disabled>
                    @endif
                @endforeach
                
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
                <input type="number" name="pduration" value ="{{$output->duration}}">

                <br>
                <br>
                <p style=" font-size:25px">Project Status</p>
                
                <p>Current Status: </p>
                        @if($output->projectStatus == 'On track')
                        <p style="border-radius:10px; padding:2px; margin:10px;height: 30px;color:white;text-align:center;width: 10%; font-weight:bold; background-color: blue;">{{$output->projectStatus}}</p>
                        @elseif($output->projectStatus == 'Delayed')
                        <p style="border-radius:10px; padding:2px;margin:10px;height: 30px;color:white;text-align:center; width: 10%; font-weight:bold; background-color: orange;">{{$output->projectStatus}}</p>
                        @elseif($output->projectStatus == 'Extended')
                        <p style="border-radius:10px; padding:2px;margin:10px;height: 30px; color:white;text-align:center;width: 10%; font-weight:bold; background-color: red;">{{$output->projectStatus}}</p>
                        @elseif($output->projectStatus == '')
                        <p>-</p>
                        @else
                        <p style="border-radius:10px; padding:2px;margin:10px; height: 30px;color:white; text-align:center; width: 10%; font-weight:bold; background-color: green;">{{$output->projectStatus}}</p>
                        @endif 
                        <p style="color:red;">Choose to update project status:</p>    
                <select  name="pstatus">
                <option selected value="{{$output->projectStatus}}">{{$output->projectStatus}}</option> 
                    <option value="On Track">On Track</option>
                    <option value="Delayed">Delayed</option>
                    <option value="Extended">Extended</option>
                    <option value="Completed">Completed</option>
                </select> 

                <br>
                <br>
                <h3 style=" font-size:25px">Project Progress</H3>
                <p>Current Progress: </p>
                        @if($output->projectProgress == 'Final Report')
                        <p style="border-radius:10px; padding:2px; margin:10px;height: 30px;color:white;text-align:center;width: 10%; font-weight:bold; background-color: blue;">{{$output->projectProgress}}</p>
                        @elseif($output->projectProgress == 'Milestone 1')
                        <p style="border-radius:10px; padding:2px;margin:10px;height: 30px;color:white;text-align:center; width: 10%; font-weight:bold; background-color: orange;">{{$output->projectProgress}}</p>
                        @elseif($output->projectStatus == '')
                        <p>-</p>
                        @else($output->projectProgress == 'Milestone 1')
                        <p style="border-radius:10px; padding:2px;margin:10px;height: 30px; color:white;text-align:center;width: 10%; font-weight:bold; background-color: green;">{{$output->projectProgress}}</p>
                        @endif 
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
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
                </center>
            </form>
        </div>
        



    </body>
</html>
