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
    <table>
        <tr>
            <th>Employee Name</th>
            <th>Salary</th>
        </tr>


        <?php
        //Examples on Loops
        $Employees = array(
            'Mohamed',
            'Ahmed',
            'shady',
            'srore',
            'Medhat',
            'Amjad',
            'Ajmal'
        );

        $salaries = array(
            1000,
            2000,
            3000,
            3000,
            1200,
            800,
            200
        );
        for ($i = 0; $i < count($salaries); $i++) {
            echo '<p> Emplyee no ' . ($i + 1) .  ' Salary is ' . $salaries[$i];
        }

        for ($i = 0, $ii = count($salaries); $i < $ii; $i++) {
            echo '<tr><td>' . $Employees[$i] . '</td>
            <td>' . $salaries[$i] . '</td>
        </tr>';
        }
        $total = 0; // حصالة
        for ($i = 0, $ii = count($salaries); $i < $ii; $i++) {
            //$total = $salaries[$i] + $salaries[2] + $salaries[3] + $salaries[4];
            $total += $salaries[$i];
        }
        echo '<tr><th> Total of salary is </th><th>' . $total . '</th><tr>';
        echo '</table>';
        ?>
</body>

</html>