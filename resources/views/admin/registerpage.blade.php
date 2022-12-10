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
            background-color: #45a049;
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
            <h1 style="font-weight:bold; font-size:30px">FYP-MS</h1>
            </center>
        <div style="margin:40px 80px 80px 80px;">
            <form action="/action_page.php">

                <h3 style=" font-size:25px">Project Title</H3>
                <input type="text" id="fname" name="pname" placeholder="Enter project title here" required>
                
                <br>
                <br>
                <h3 style=" font-size:25px">Supervisor</H3>
                <select id="country" name="Supervisor" required>
                    <option value="Milestone 1">Milestone 1</option>
                    <option value="Milestone 2">Milestone 2</option>
                    <option value="Final Report">Final Report</option>
                </select><br>

                <br>
                <h3 style=" font-size:25px">Examiner 1</H3>
                <select id="country" name="Examiner1" required>
                    <option value="Milestone 1">Milestone 1</option>
                    <option value="Milestone 2">Milestone 2</option>
                    <option value="Final Report">Final Report</option>
                </select>

                <br>
                <br>
                <h3 style=" font-size:25px">Examiner 2</H3>
                <select id="country" name="Examiner2" required>
                    <option value="Milestone 1">Milestone 1</option>
                    <option value="Milestone 2">Milestone 2</option>
                    <option value="Final Report">Final Report</option>
                </select>

                <br>
                <br>
                <br>
                
                <h3 style="color:grey; font-size:25px">----------------- For Supervisor Use Only -----------------</H3>
                <br>
                
                <h3 style=" font-size:25px">Start Date</H3>
                <input type="date" name="startdate">

                <br>
                <br>

                <h3 style=" font-size:25px">End Date</H3>
                <input type="date" name="enddate">
                
                <br>
                <br>
                <h3 style=" font-size:25px">Duration</H3>
                <input type="month" name="pduration">


                
                <br>
                <br>
                <h3 style=" font-size:25px">Project Status</H3>
                <select id="country" name="country">
                    <option value="Milestone 1">Milestone 1</option>
                    <option value="Milestone 2">Milestone 2</option>
                    <option value="Final Report">Final Report</option>
                </select>

                <br>
                <br>
                <h3 style=" font-size:25px">Project Progress</H3>
                <select id="country" name="country">
                    <option value="On Track">On Track</option>
                    <option value="Delayed">Delayed</option>
                    <option value="Extended">Extended</option>
                    <option value="Completed">Completed</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
            </form>
        </div>
        


        @include("CSS-related.footer")


    </body>
</html>