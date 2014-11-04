<html>
    <head>
        <title>Calc</title>
        <meta charset="utf-8"/>
    </head>
    <body>

        <form method="POST" action="#">
            Первый аргумент<input type='text' name="first"/><br>
            Операция<input type='text' name="operation"/><br>
            Второй аргумент<input type='text' name="second"/><br>
            <input type='submit' value='ок'/><br>


        </form>

    </body>
</html>

<?php
if (empty ($_POST['operation'])){
    $result = 'Введите операцию';
}
elseif (empty ($_POST['first'])){
    $result = 'Введите первое значение';
}
elseif (empty ($_POST['second'])){
    $result = 'Введите второе значение';
}
else {
switch ($_POST['operation'])
{
case '+' : $result = $_POST['first'] + $_POST['second'];
break;
case '-' : $result = $_POST['first'] - $_POST['second'];    
break;
case '*' : $result = $_POST['first'] * $_POST['second'];    
break;
case '/' : $result = $_POST['first'] / $_POST['second'];    
break;
default : $result = 'Введите верную операцию';
break;
}
}
echo $result;
?>


