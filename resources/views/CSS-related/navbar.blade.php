<!DOCTYPE html>
<html>

<head>
    <style>
        ul {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            overflow: hidden;
            background-color: #222222;
            height: 200px;
        }

        li {
            float: left;
            font-size: 16px
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 12px 14px;
            text-decoration: none;
            border-radius: 30px;
        }

        li a:hover:not(.active) {
            background-color: #D6E4E5;
            color: #497174
        }

        .active {
            background-color: blue;
            border-radius: 30px;
        }
    </style>
</head>

<body>

    <ul>
        <br>
        <li style="font-weight:bold"><a href="/redirect">Final Year Project Management System</a></li>
        <li><a href="/viewproject">View Supervisee</a></li>
        <li><a href="/viewprojectexaminee">View Examinee</a></li>

        <li style="float:right">
            <div style="float:right">
                @if (Route::has('login'))
                @auth
                <x-app-layout></x-app-layout>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                    in</a>&nbsp &nbsp &nbsp
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth

                @endif
            </div>
        </li>
    </ul>


</body>

</html>