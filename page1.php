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
    $value = '';


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
                    <h1>Результат</h1>
                        <?php 
                            $value = $_POST['value'];
                            if (is_numeric( $value )) 
                            {
                                echo "<p>\"<span>$value</span>\" is numeric.</p>";
                                if ($value > 0)
                                {
                                    echo "<p><span>$value</span> greater than 0</p>";
                                }
                                elseif ($value < 0)
                                {
                                    echo "<p><span>$value</span> lower than 0</p>";
                                }
                                elseif ($value == 0)
                                {
                                    echo "<p>0 is 0 lol</p>";
                                }
                                
                            }
                            elseif (!is_numeric( $value )) 
                            {
                                // echo "\"<span>$value</span>\"  is not numeric. Is string.";

                                if ($value == ''){
                                    echo "<p>empty.</p>";
                                }
                                else
                                {
                                    echo "<p>\"<span>$value</span>\"  is not numeric. Is string.</p>";
                                }
                            }
                        
                        ?>
                </td>
            </tr>
        </tbody>
    </table>



</body>

</html>