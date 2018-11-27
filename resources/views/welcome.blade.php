<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
                    <div style='width:50%; '>
                        <div style='margin-left:50px;float:left;'>
                            <h2>Without join</h2>
                            @foreach($students as $student)
                        <strong>{{$student->name}} - Guardians: </strong> <ul>@foreach($student->guardians as $guardian)
                                            <li>{{$guardian['name']}}</li>
                                            @endforeach
                                            </ul>
                            @endforeach
                        </div>
                        <div style='float:right;'>
                            <h2>With left join</h2>
                            @foreach($studentsleftjoin as $studentleftjoin)
                            <strong>{{$studentleftjoin->name}} - Guardians:</strong> <ul>@foreach($studentleftjoin->guardians as $guardianleftjoin)
                                            <li>{{$guardianleftjoin['name']}}</li>
                                            @endforeach
                                            </ul>
                            @endforeach
                        </div>
                    </div>
    </body>
</html>
