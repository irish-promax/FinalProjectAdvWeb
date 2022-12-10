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
            <button style="background-color:green"class="button button1"><a href="/viewproject"><img src="assets/images/img1.png" alt="view">View Project</a></button>
        </center>

        @include("CSS-related.footer")


    </body>
</html>