<!DOCTYPE html>
<html>
<head>
    <title>{$lang->pagetitle}</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 64px;
        }

        .quote {
            font-size: 24px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">{$lang->default.403_title}</div>
        <div class="quote">
            {$lang->default.403_quote}
        </div>
    </div>
</div>
</body>
</html>