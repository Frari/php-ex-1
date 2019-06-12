<!-- creare una variabile con del testo (es: lorem ipsum). Leggere dal parametro GET
un parola da censurare e stampare a schermo un paragrafo contenente il testo con
3 * (3 caratteri di asterisco) al posto della badword. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ex-1</title>
  </head>
  <body>
    <?php
    // testo da modificare
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    // sostituisco all'interno del testo la badword con ***
    $testo = str_replace($_GET["badword"], '***', $testo);
    // stampo il testo con le parole censurate
    echo $testo;

     ?>
  </body>
</html>
