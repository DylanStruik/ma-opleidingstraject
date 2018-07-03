<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        $pagina = $_SERVER['PHP_SELF'];
        switch ($pagina) {
            case "/leerjaar-1/periode-1.php":
                echo "Leerjaar 1 - Periode 1 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-1/periode-2.php":
                echo "Leerjaar 1 - Periode 1 - Opleidingstraject Mediadeveloper";
                break;
            default:
                echo "Opleidingstraject Mediadeveloper";
        }
        ?>
    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://opleidingstraject.test/css/app.css">
</head>
<body>