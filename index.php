<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>
    <form action="" method="POST" name="formularz">
        <input type="text" name="name" id="" placeholder="Imię">
        <input type="text" name="lastname" id="" placeholder="Nazwisko">
        <input type="number" name="grade" id="" placeholder="Ocena">
        <button value="dodaj" name="dodaj" type="submit">Zapisz</button>
    </form>

    <table>
        <caption>Matematyka</caption>
        <tr>
            <th>
                
            </th>
        </tr>        
    </table>
    <?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

    $zapytanie = "SELECT * FROM `matematyka`";

    while ($matematyka = mysqli_fetch_assoc($wynik)) {
        echo
    }
    
    ?>
</body>

</html>