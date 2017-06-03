<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="num1" value="" placeholder="Number 1 ">
        <input type="text" name="num2" value="" placeholder="Number 2 ">
        <select name="slt-operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['slt-operator'];
        $result_statement = function ($arg) use ($result1, $result2) {
            return '<strong>' . $result1. '</strong>&nbsp;<em>' . $arg . '&nbsp;</em><strong>' . $result2 . "&nbsp;</strong>is equal to ";
        };
        switch ($operator) {
            case 'Add':
            echo $result_statement('plus') , $result1+$result2;
            break;
            case 'Subtract':
            echo  $result_statement('minus') , $result1-$result2;
            break;
            case 'Multiply':
            echo $result_statement('multipled by') , $result1*$result2;
            break;
            case 'Divide':
            echo $result_statement('divided by') , $result1/$result2;
            break;
            default:
            echo "No operator selected";
            break;
        }
    }
    ?>
</body>
</html>
