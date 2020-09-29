<?php
    if(isset($_POST['username']) && isset($_POST['phone']))
    {
        $name = htmlentities($_POST['username']);
        $phone = htmlentities($_POST['phone']);

        $output = "
            <html>
                <head>
                    <title>Данные пользователя</title>
                </head>
                <body>
                    Имя: $name <br/>
                    Телефон: $phone <br/>
                </body>
            </html>";

            echo $output;
    }

    else {
        echo "Некорректные данные";
    }
?>
