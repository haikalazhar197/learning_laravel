<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Laravel</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <style>
        body {

            font-family: "Montserrat";

            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 3em;
            letter-spacing: 0.05em;
            word-spacing: 0.15em;
        }

        div {
            /* border: 1px solid #333333; */
            border-radius: 0.75em;

            -webkit-box-shadow: -8px 6px 23px 0px rgba(204, 204, 204, 0.1);
            box-shadow: -8px 6px 23px 0px rgba(204, 204, 204, 0.1);
            /* 
            -webkit-box-shadow: -8px 6px 23px 0px rgba(51, 51, 51, 0.05);
            box-shadow: -8px 6px 23px 0px rgba(51, 51, 51, 0.05); */

            padding: 0 1.5em;

            transition: 0.5s;
        }

        div:hover {
            -webkit-box-shadow: -8px 6px 23px 0px rgba(51, 51, 51, 0.2);
            box-shadow: -8px 6px 23px 0px rgba(51, 51, 51, 0.2);
        }
    </style>
</head>

<body>
    <div>
        <h1>Hello World Laravel</h1>
    </div>
</body>

</html>