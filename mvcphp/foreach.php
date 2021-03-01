<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 500px;
        }

        table tr td,
        table tr th {
            border: solid 1px #999;
            padding: 5px;
            text-align: left;
        }

        table tr th {
            background: #666;
            color: #FFF;
        }

        table tr:nth-child(2n) {
            background: #e4e4e4;
        }
    </style>
</head>

<body>
    <?php
    $class1 = array(
        array('Mehat Eltony', 30, 10, 20),
        array('Mostafa Eltony', 60, 20, 30),
        array('abdullah Eltony', 40, 10, 30)
    );
    $class2 = array(
        array('Mehat Eltony', 30, 10, 20),
        array('Mostafa Eltony', 60, 20, 30),
        array('abdullah Eltony', 40, 10, 30)
    );
    $school = array($class1, $class2);



    ?>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Arabic</th>
            <th>English</th>
            <th>Math</th>
            <th>Total</th>
            <th>Percentage</th>
            <th>Status</th>
        </tr>
        <?php
        for ($i = 0, $ii = count($school); $i < $ii; $i++) {
            echo '<tr>
                        <th data-class-name="class1" colspan="7" >class ' . ($i + 1) . '</th>
                </tr>';
            for ($j = 0, $jj = count($school[$i]); $j < $jj; $j++) {
                $total = $school[$i][$j][1] + $school[$i][$j][2] + $school[$i][$j][3];
                $perventage = ($total / 150) * 100;
                echo '<tr>
                    <td>' . $school[$i][$j][0] . '</td>
                    <td>' . $school[$i][$j][1] . '</td>
                    <td>' . $school[$i][$j][2] . '</td>
                    <td>' . $school[$i][$j][3] . '</td>
                    <td>' . $total . '</td>
                    <td>' . round($perventage, 1) . '%</td>
                    <td><span class="green">Succeed</span></td>
                </tr>';
            }
        }
        ?>
    </table>

    <table>
        <?php

        $employees = array(
            'Mohame Ahmed Ibrahim' => 1000,
            'Ali Mostafa Ali' => 2000,
            'Osama ALi hisham' => 3000
        );



        ?>
        <tr>
            <th>Employee Name</th>
            <th>Salary</th>
            <?php

            foreach ($employees as $name => $salary) {

                echo '<tr>
                        <td>' . $name . '</td>
                        <td>' . $salary . '</td>
                    </tr>';
            }

            ?>
        </tr>
    </table>
</body>

</html>