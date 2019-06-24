<?php
$connect=mysqli_connect("localhost","root","","news");
mysqli_set_charset($connect,"utf8");
$query="SELECT * FROM `news`";
$result= mysqli_query($connect,$query);
while($news=mysqli_fetch_assoc($result)){

                                                          
echo"<h1 style=color:red>".$news['subject']."</h1><br/>";
echo"<h1>".$news['descriptions']."</h1><br/>";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>