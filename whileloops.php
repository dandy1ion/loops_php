<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Loops: while</title>
    </head>
    <body>
        <?php //while loop
            $count = 0;
            while ($count <= 10) {
                echo $count . ", ";
                $count++; //increment by 1 (same as $count += 1)
            }
            echo "<br />";
            echo "Count: {$count}";//after loop is done running what is the final value of $count
        ?>
        <br />
        <?php //while loop with if statement
            $count = 0;
            while ($count <= 10) {
                if ($count == 5) {
                    echo "FIVE, ";
                } else {
                echo $count . ", ";
                }
                $count++; //increment by 1 (same as $count += 1), need this here to stop from infinite looping
            }
            echo "<br />";
            echo "Count: {$count}";//after loop is done running what is the final value of $count
        ?>
        <br />
        <?php /*while loop with if, else statement for even and odd numbers
        hint: modulo operator $count % 2*/
            $count = 1;
            while ($count <= 10) {
                if ($count % 2 == 0) {
                    echo $count . " even, ";
                } else {
                echo $count . " odd, ";
                }
                $count++; //increment by 1
            }
        ?>
        <br />
    </body>
</html>