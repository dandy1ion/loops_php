<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Loops: do-while</title>
    </head>
    <body>
        <?php //Repeating actions do-while loops
            //initializer counter
            $i = 100;
            do {
                //increment counter
                $i++;
                echo $i . '<br>';
            } while ($i < 10);
            //always runs at least once as the condition outside the {}
        ?>
        <br />
        <?php //If you do the same initializer as above with a while loop it wont run at all because condition is already false
            //initializer counter
            $i = 100;
            while ($i < 10) {
                //increment counter
                $i++;
                if ($i % 2) {
                    continue;
                }
                echo $i . '<br>';
            }
        ?>
        <br />

    </body>
</html>