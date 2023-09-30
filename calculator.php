<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <form>
        <input type="text"name="num1" placeholder="enter number 1">
        <select neme="operator">
            <option>Add</option>
            <option>Substact</option>
            <option>Multiply</option>
            <option>Divide</option>

            </select>
        <input type="text"name="num2" placeholder="enter number 2">
        <br><br>
        <button type="submit" name="submit">CALCULATE</button>
</form>
<div>
    <h3>THE RESULT IS:
    <?php
if(isset($_GET['submit'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    switch($operator){
        case "Add":
            echo $num1+$num2;
            break;
            case "Substact":
                echo $num1-$num2;
                break;
                case "Multiply":
                    echo $num1*$num2;
                    break;
                    case "Devide":
                        echo $num1/$num2;
                        break;
    } 
}
?>
</div>
</h3>  
    </body>
</html>