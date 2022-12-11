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
                echo "prueba";
       
            }} ?>
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



            <input type="submit" value="Continuar">
        </table>
    </form>
</body>
</html>