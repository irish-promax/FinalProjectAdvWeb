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
        <h1 style="font-weight:bold; font-size:30px">FYP-MS</h1>
            <button class="button button1"> <a href="registerpage"> <img src="assets/images/img2.png" alt="register">Register New Project</a></button>
            <button style="background-color:green"class="button button1"><a href="/viewproject"><img src="assets/images/img1.png" alt="view">View Project</a></button>
        </center>

        @include("CSS-related.footer")


    </body>
</html>