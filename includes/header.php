<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://mediacollege.dylansopleidingstraject/favicon.png" />
    <title>
        <?php
        $pagina = $_SERVER['PHP_SELF'];
        switch ($pagina) {
            case "/leerjaar-1/periode-1.php":
                echo "Leerjaar 1 - Periode 1 - Opleidingstraject Mediadeveloper";
                break;
            case "/":
                echo "Leerjaar 1 - Periode 1 - Opleidingstraject Mediadeveloper";
                break;

            case "/leerjaar-1/periode-2.php":
                echo "Leerjaar 1 - Periode 2 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-1/periode-3.php":
                echo "Leerjaar 1 - Periode 3 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-1/periode-4.php":
                echo "Leerjaar 1 - Periode 4 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-2/periode-1.php":
                echo "Leerjaar 2 - Periode 1 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-2/periode-2.php":
                echo "Leerjaar 2 - Periode 2 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-2/periode-3.php":
                echo "Leerjaar 2 - Periode 3 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-2/periode-4.php":
                echo "Leerjaar 2 - Periode 4 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-3/periode-1.php":
                echo "Leerjaar 3 - Periode 1 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-3/periode-2.php":
                echo "Leerjaar 3 - Periode 2 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-3/periode-3.php":
                echo "Leerjaar 3 - Periode 3 - Opleidingstraject Mediadeveloper";
                break;
            case "/leerjaar-3/periode-4.php":
                echo "Leerjaar 3 - Periode 4  - Opleidingstraject Mediadeveloper";
                break;
            default:
                echo "Opleidingstraject Mediadeveloper";
        }
        ?>
    </title>

    <meta name="description"
          content="
          <?php
          switch ($pagina) {
              case "/leerjaar-1/periode-1.php":
                  echo "Op zoek naar informatie voor het eerste leerjaar, periode 1 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/":
                  echo "Op zoek naar informatie voor het eerste leerjaar, periode 2 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;

              case "/leerjaar-1/periode-2.php":
                  echo "Op zoek naar informatie voor het eerste leerjaar, periode 2 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-1/periode-3.php":
                  echo "Op zoek naar informatie voor het eerste leerjaar, periode 3 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-1/periode-4.php":
                  echo "Op zoek naar informatie voor het eerste leerjaar, periode 4 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-2/periode-1.php":
                  echo "Op zoek naar informatie voor het tweede leerjaar, periode 1 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-2/periode-2.php":
                  echo "Op zoek naar informatie voor het tweede leerjaar, periode 2 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-2/periode-3.php":
                  echo "Op zoek naar informatie voor het tweede leerjaar, periode 3 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-2/periode-4.php":
                  echo "Op zoek naar informatie voor het tweede leerjaar, periode 4 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-3/periode-1.php":
                  echo "Op zoek naar informatie voor het derde leerjaar, periode 1 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-3/periode-2.php":
                  echo "Op zoek naar informatie voor het derde leerjaar, periode 2 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-3/periode-3.php":
                  echo "Op zoek naar informatie voor het derde leerjaar, periode 3 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              case "/leerjaar-3/periode-4.php":
                  echo "Op zoek naar informatie voor het derde leerjaar, periode 4 op het Mediacollege in Amsterdam 
                  voor de opleiding Mediadevelopment? Kijk dan op deze site!";
                  break;
              default:
                  echo "Ook benieuwd naar het opleidingstraject van Mediadevelopment? Kijk op deze website voor meer 
                  informatie over de opleiding op het Mediacollege Amsterdam.";
          }
          ?>
          ">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://mediacollege.dylanstruik.nl/opleidingstraject/css/app.css">
</head>
<body>