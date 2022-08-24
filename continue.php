<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Continue</title>
    </head>
    <body>
        <?php //output all numbers but 5
            for ($count = 0; $count <= 10; $count++) {
                if ($count == 5) {
                    continue;
                }
                echo $count . ", ";
            }
        ?>
        <br />
        <?php //output odd numbers only
            for ($count = 0; $count <= 10; $count++) {
                if ($count % 2 == 0) {
                    continue;
                }
                echo $count . ", ";
            }
        ?>
        <br />
        <?php /*what's wrong with this?
            $count = 0;
            while ($count <= 10) {once reach 5 stuck in infinite loop
                if ($count == 5) {
                    continue;
                }
                echo $count . ", ";
                $count++;
            }*/
        ?>
        <br />
        <?php //fixed infinite loop by putting increment in
            $count = 0;
            while ($count <= 10) {
                if ($count == 5) {
                    $count++;
                    continue;
                }
                echo $count . ", ";
                $count++;
            }
        ?>
        <br />
        <?php //loop inside a loop with continue
            for ($i=0; $i<=5; $i++) {
                if ($i % 2 == 0) {
                    continue;
                }
                for ($k=0; $k<=5; $k++) {
                    echo $i . "-" . $k . "<br />";
                }
            }
        ?>
        <br />
        <?php //loop inside a loop with continue
            for ($i=0; $i<=5; $i++) {
                if ($i % 2 == 0) {
                    continue;
                }
                for ($k=0; $k<=5; $k++) {
                    if ($k == 3) {
                        continue;
                    }
                    echo $i . "-" . $k . "<br />";
                }
            }
        ?>
        <br />
        <?php //loop inside a loop with continue
            for ($i=0; $i<=5; $i++) {
                if ($i % 2 == 0) {
                    continue(1);
                }
                for ($k=0; $k<=5; $k++) {
                    if ($k == 3) {
                        continue(2);
                    }
                    echo $i . "-" . $k . "<br />";
                }
            }
        ?>
        <br />
    </body>
</html>