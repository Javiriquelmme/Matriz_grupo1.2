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
        <table border="1" cellpadding="0" cellspacing="0" summary="tabla matriz A">
            <th>matriz A</th>
                <tbody>
                    <tr align="center">
                        <td>&nbsp;&nbsp;<strong>A</strong>&nbsp;&nbsp;</td>


                        <?php
                for ($j = 0; $j < $columnas_a; $j++)
                    echo "<td><b>$j</b></td>";
                echo '</tr>';
                for ($i = 0; $i < $filas_a; $i++) {
                    echo "<tr align=\"center\"><td><b>$i</b></td>";
                    for ($j = 0; $j < $columnas_a; $j++)
                        echo '<td><input name="a[' . $i . '][' . $j . ']" type="text" size="4"></td>';

                    echo '</tr>';
                }
                    ?>
                </tbody>
            
        </table>
        <br> Ingrese los elementos de la matriz B:

        <table border="1" cellpadding="0" cellspacing="0" summary="tabla matriz B">
        <th>matriz B</th>
            <tbody>
                <tr align="center">
                    <td>&nbsp;&nbsp;<strong>B</strong>&nbsp;&nbsp;</td>


                    <?php
                for ($j = 0; $j < $columnas_b; $j++)
                    echo "<td><b>$j</b></td>";
                echo '</tr>';
                for ($i = 0; $i < $filas_b; $i++) {
                    echo "<tr align=\"center\"><td><b>$i</b></td>";
                    for ($j = 0; $j < $columnas_b; $j++)
                        echo '<td><input name="b[' . $i . '][' . $j . ']" type="text" size="4"></td>';

                    echo '</tr>';
                }
                    ?>
            </tbody>
        </table>
        <?php
            }
        }
        if (!isset($_POST['filas_a']) || !isset($_POST['columnas_a']) || !isset($_POST['filas_b']) || !isset($_POST['columnas_b'])) {
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
            </tbody>
        </table>
        <?php
        }
        ?>


        <input type="submit" value="Continuar">
        </table>
    </form>
    <br>
    <?php
    if (isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $filas_a = count($a);
        $columnas_a = count($a[0]);
        $filas_b = count($b);
        $columnas_b = count($b[0]);
        $c = array();
        for ($i = 0; $i < $filas_a; $i++) {
            array_push($c, array());
            for ($j = 0; $j < $columnas_b; $j++) {
                array_push($c[$i], 0.0);
                for ($k = 0; $k < $filas_b; $k++)
                    $c[$i][$j] += $a[$i][$k] * $b[$k][$j];

                }
            }
        ?>
    
        Resultado:
        <table border="1" cellpadding="0" cellspacing="0" summary="resultados de la matriz">
        <th>R</th>
            <tbody>
                <?php
            for ($i = 0; $i < $filas_a; $i++) {
                echo '<tr align="center">';
                for ($j = 0; $j < $columnas_b; $j++)
                    echo '<td>&nbsp;&nbsp;' . $c[$i][$j] . '&nbsp;&nbsp;</td>';
                echo '</tr>';
            }
                ?>
    
            </tbody>
        </table>
        <?php
        }
        ?>
</body>

</html>