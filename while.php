<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Loops: while</title>
    </head>
    <body>
        <?php /*Repeating actions with while loops
            initializer counter*/
            $i = 0;
            while ($i < 10) {
                /*increment counter*/
                $i++;
                echo $i . '<br>';
            }
        ?>
        <br />
        <?php
            $i = 0;
            while ($i < 10) {
                $i++;
                echo $i . '<br>';
                if ($i === 6) {
                    break;
                }
            }
        ?>
        <br />
        <?php /*use continue
            only shows even numbers
            initializer counter*/
            $i = 0;
            while ($i < 10) {
                /*increment counter*/
                $i++;
                if ($i % 2) {  /*condition fails when even because 0=false, condition works when odd because 1=true*/
                    continue;  /*stops odds from being output on page*/
                }
                echo $i . '<br>';
            }
        ?>
        <br />
    </body>
</html>