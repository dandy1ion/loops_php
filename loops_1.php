<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Loops: while</title>
    </head>
    <body>
        Part 1:
        <br />
        <?php  //while loop
            $abc = 0;
            while ($abc <= 8) {
                echo "abc ";
                $abc++;
            }
        ?>
        <br />
        <?php  //do while loop
            $xyz = 0;
            do {
                $xyz++;
                echo "xyz ";
            } while ($xyz <= 8);
        ?>
        <br />
        <?php  //for loop
            for($count = 1; $count <= 9; $count++) {
                echo $count . " ";
            }
        ?>
        <br />
        <?php  //for loop with switch
            for( $i = 1; $i <= 6; $i++ ) {
                
                switch( $i ) {
                    case 1: echo '1. Item A <br />'; break;
                    case 2: echo '2. Item B <br />'; break;
                    case 3: echo '3. Item C <br />'; break;
                    case 4: echo '4. Item D <br />'; break;
                    case 5: echo '5. Item E <br />'; break;
                    case 6: echo '6. Item F <br />'; break;
                }
                
            }
        ?>
        <br />
        <br />
        Part 2:
        <br />
        <?php
            for($i=1;$i<=12;$i++) {
                echo $i.'<sup>2</sup> = '.pow($i,2).'<br />';
            }
        ?>
        <br />
        <br />
        Part 3:
        <?php
            echo "<table border =\"1\" style='border-collapse: collapse'>";
            for ($row=1; $row <= 7; $row++) {
                echo "<tr> \n";
            for ($col=1; $col <= 7; $col++) {
                $p = $col * $row;
                echo "<td>$p</td> \n";
            }
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <br />
        <br />
        Part 4:
        <br />
        <?php  //foreach loops
            $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
            $daysInMonth = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
            echo "<table border =\"1\" style='border-collapse: collapse'><tr><th>Days in a Month</th></tr>";
            echo "<tr>";
            foreach ($months as $month) {
                echo "<td>" . strtoupper($month) . "</td>";
            }
            echo "</tr>";
            echo "<tr>";
            foreach ($daysInMonth as $days) {
                echo "<td>$days</td>";
            }
            echo "</tr>";
            echo "</table>";
            
        ?>  
    </body>
</html>