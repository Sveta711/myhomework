<?php
require_once 'classes.php';
$students=[
    new Student(
        'ARMEN','Isahakyan','ABH515','033206045','19','17.5','computer science','1kurs'),
        new Student('Svetlana','Israyelyan','acvv55','094456456','18','20','science','1kurs'),
        new Student('Vanuhi','Bagratuni','ACV213','03256751','18','19.75','design','1kurs'),
    ];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ՈՒՍԱՆՈՂՆԵՐԻ ՑԱՆԿ</title>
        <style>
            body{
                font-family:Arial,sans-serif;margin:20px;background-color: #f4f4f9;
            }
            h1{
                color:#333;border-bottom:2px solid #5c5cff;padding-bottom:10px;
            }
            table{
                width:100%;border-collapse:collapse;margin-top:20px;box-shadow:0 4px 8px rgba(0,0,0,0.1);background-color:white;
            }
            th,td{
                padding:12px 15px;text-align:left;border-bottom:1px solid #ddd;
            }
            th{background-color: #5c5cff;color:white;font-weight:bold;}
            tr:nth-child(even){
                background-color: #f2f2f2;
            }
            tr:hover{
                background-color: #e0e0e0;cursor:pointer;
            }
        </style>
    </head>
    <body>
        <h1>STUDENTS' DATA</h1>
        <table>
            <thead>
                <tr>
                    <?php 
                    if(!empty($students)){
                        $headers=$students[0]->getFullInfo();
                        foreach(array_keys($headers) as $header){
                            echo "<th>{$header}</th>";
                        }} ?>
                 </tr>
            </thead>
            <tbody>
                <?php
                foreach($students as $student){
                    echo "<tr>";
                    $info=$student->getFullInfo();
                    foreach($info as $key=>$value){
                        $displayvalue=($key==='ՄՈԳ')? number_format($value,2):$value;
                        echo "<td>{$displayvalue}</td>";
                    }
                    echo"</tr>";
                }
                ?>
            </tbody>
        </table>

    </body>
</html>