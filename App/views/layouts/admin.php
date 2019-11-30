<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?php if(isset($title)) echo $title; ?></title>
        <link rel="shortcut icon" href="/public/images/favicon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/public/style/bootstrap/bootstrap-grid.css">
        <link rel="stylesheet" href="/public/style/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="/public/style/css/admin.css">
        <script type="text/javascript" src="/public/style/js/jquery-3.4.0.min.js"></script>
        <script type="text/javascript" src="/public/style/font-awesome/js/all.min.js"></script>
        <script type="text/javascript" src="/public/style/js/clipboard.min.js"></script>
        <script type="text/javascript" src="/public/style/js/main.js"></script>
    </head>
    <body>
        <?php if(isset($content)) echo $content; ?>
        <script type="text/javascript" src="/public/style/bootstrap/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/public/style/bootstrap/bootstrap.js"></script>
    </body>
</html>