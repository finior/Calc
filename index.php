<html>
    <head>
        <title>Calc</title>
        <meta charset="utf-8"/>
    </head>
    <body>

        <form method="POST" action="#">
            <table border = "0">
                <tr>
                    <td>Первый аргумент</td>
                    <td><input type='text' name="first"/><br></td>
                </tr>    
                <tr>
                    <td>Операция</td>
                    <td><input type='text' name="operation"/><br></td>
                </tr>
                <tr>
                    <td>Второй аргумент</td>
                    <td><input type='text' name="second"/><br></td>
                </tr>
                <tr>
                    <td align = 'right'><input type='submit' value='ок'/><br></td>
                </tr>
               
            </table>

        </form>

    </body>
</html>

<?php
if (empty ($_POST['operation'])){
   $errop = 'Введите операцию';
   
   
   
}
if (empty ($_POST['first'])){
   $errfirst = 'Введите первое значение';
  
   
}
if (empty ($_POST['second'])){
    $errsecond = 'Введите второе значение';
    
   
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
echo $errop. "<br>";
echo $errfirst. "<br>";
echo $errsecond. "<br>";
echo $result;
?>


