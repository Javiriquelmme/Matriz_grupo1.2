<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="tex/html;charset=UTF-8">

    <title>Document</title>
</head>

<body>
    <form method="post">
        <?php
        if (isset($_POST['filas_a']) && isset($_POST['columnas_a']) && isset($_POST["filas_b"]) && isset($_POST["columnas_b"])) {
            $filas_a = intval($_POST['filas_a']);
            $columnas_a = intval($_POST['columnas_a']);
            $filas_b = intval($_POST['filas_b']);
            $columnas_b = intval($_POST['columnas_b']);

            if ($filas_a < 1 || $columnas_a < 1 || $filas_b < 1 || $columnas_b < 1 || $columnas_a != $filas_b) {
                echo 'Las matrices no se pueden multiplicar.<br><br>';
                unset($_POST['filas_a']);
                unset($_POST['columnas_a']);
                unset($_POST['filas_b']);
                unset($_POST['columnas_b']);
            } else {
        ?>
        Ingrese los elementos de la matriz A:
        <table border="1" cellpadding="0" cellspacing="0">
            <tbody>
                <tr align="center">
                    <td>&nbsp;&nbsp;<b>A</b>&nbsp;&nbsp;</td>


                    <?php
                for ($j = 0; $j < $columnas_a; $j++)
                    echo "<td><b>$j</b></td>";
                echo '</tr>';
                for ($i = 0; $i < $fils_a; $i++) {
                    echo "<tr align=\"center\"><td><b>$i</b></td>";
                    for ($j = 0; $j < $columnas_a; $j++)
                        echo '<td><input name="a[' . $i . '][' . $j . ']" type="text" size="4"></td>';

                    echo '</tr>';
                }
            }
                    ?>
            </tbody>
        </table>
        <br> Ingrese los elementos de la matriz B:

        <table border="1" cellpadding="0" cellspacing="0">
            <table border="1" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr align="center">
                        <td>&nbsp;&nbsp;<b>B</b>&nbsp;&nbsp;</td>


                        <?php
                for ($j = 0; $j < $columnas_b; $j++)
                    echo "<td><b>$j</b></td>";
                echo '</tr>';
                for ($i = 0; $i < $filas_b; $i++) {
                    echo "<tr align=\"center\"><td><b>$i</b></td>";
                    for ($j = 0; $j < $columnas_b; $j++)
                        echo '<td><input name="b[' . $k . '][' . $j . ']" type="text" size="4"></td>';

                    echo '</tr>';
                
            ?>
                </tbody>
            </table>
            <?php
            }
        }
	?>
            <table>
                <tbody>
                    <tr>
                        <td>Ingrese el n&uacute;mero de filas de la matriz A :</td>
                        <td><input name="filas_a" type="text" size="4"></td>
                    </tr>
                    <tr>
                        <td>Ingrese el n&uacute;mero de columnas de la matriz A :</td>
                        <td><input name="columnas_a" type="text" size="4"></td>
                    </tr>
                    <tr>
                        <td>Ingrese el n&uacute;mero de filas de la matriz B :</td>
                        <td><input name="filas_b" type="text" size="4"></td>
                    </tr>
                    <tr>
                        <td>Ingrese el n&uacute;mero de columnas de la matriz B :</td>
                        <td><input name="columnas_b" type="text" size="4"></td>
                    </tr>
                </tbody
            </table



            <input type="submit" value="Continuar">
        </table>
    </form>
</body>

</html>