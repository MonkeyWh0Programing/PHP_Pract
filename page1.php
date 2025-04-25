<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Page 1</title>
</head>

<body>
    <?php
    $value = $_POST['value'];


    ?>

    <table>
        <thead>
            <tr>
                <td>
                    <h1>Form.exe</h1>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <form action="page1.php" method="post" autocomplete="off">
                        <p>Введите значение</p>
                        <input autocomplete="off" type="text" name="value" id="valInput" placeholder="ваше значение">
                        <button type="submit">Get result</button>
                    </form>
                </td>
                <td>
                    <p>Результат</p>
                    <p>
                        <?php 

                            if (is_numeric( $value )) 
                            {
                                echo "<span>$value</span> is numeric.<br>";
                                if ($value > 0)
                                {
                                    echo "$value greater than 0";
                                }
                                elseif ($value < 0)
                                {
                                    echo "$value lower than 0";
                                }
                                elseif ($value == 0)
                                {
                                    echo "0 is 0 lol";
                                }
                            }
                            elseif (!is_numeric( $value )) 
                            {
                                // echo "\"<span>$value</span>\"  is not numeric. Is string.";

                                if ($value == ''){
                                    echo "empty.";
                                }
                                else
                                {
                                    echo "\"<span>$value</span>\"  is not numeric.<br>Is string.";
                                }
                            }
                        
                        ?>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>



</body>

</html>