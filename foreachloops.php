<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Loops: foreach</title>
    </head>
    <body>
        <?php /*array with foreach */
            $ages = array(4,8,15,16,23,42);

            foreach($ages as $age) {
                echo "Age: {$age}<br />";
            }
        ?>
        <br />
        <?php /* associative array with foreach */
            $person = array(
                "first_name" => "Kevin",
                "last_name" => "Skoglund",
                "address" => "123 Main Street",
                "city" => "Beverly Hills",
                "sate" => "CA",
                "zip_code" => "90210"
            );

            foreach($person as $attribute => $data) {  /* key => value */
                $attr_nice = ucwords(str_replace("_", " ", $attribute));
                echo "{$attr_nice}: {$data}<br />";
            }
        ?>
        <br />
        <?php /* associative array with foreach */
            $prices = array("Brand New Computer" => 2000, "1 month of Lynda.com" => 25, "Learning PHP" => null);

            foreach($prices as $item => $price) {  /* key => value */
                echo "{$item}: ";
                if (is_int($price)) {
                    echo "$" . $price;
                } else {
                    echo "priceless";
                }
                echo "<br />";
            }
        ?>
        <br />
    </body>
</html>