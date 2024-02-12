<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;

        }
        td{
            font-size: 12px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
        }
        .page-break {
            page-break-after: always;
          }


    </style>
  <script type="text/javascript" src="/home/js/jquery-2.2.0.min.js"></script>
</head>

<body >
    @yield('content')
</body>
</html>



