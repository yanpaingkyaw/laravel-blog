<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master View</title>
    <style  type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        .header {
            height: 100px;
            background: #FED54A;
            color:gray;
           
        }
        h2 {
            padding: 5px;
        }
        p {
            padding: 3px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="padding:20px;">This is the Header</h1>
    </div>
    @yield("main")
</body>
</html>