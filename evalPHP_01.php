<!-- Exo1 -->
<?php
$dc_heroes = [
    '01' => ['prénom'=>'Diana', 'Nom'=>'Prince', 'Alias'=>'Wonderwoman', 'Gender'=>'Female'],
    '02' => ['prénom'=>'Bruce', 'Nom'=>'Wayne', 'Alias'=>'Batman', 'Gender'=>'Male'],
    '03' => ['prénom'=>'Clark', 'Nom'=>'Kent', 'Alias'=>'Superman', 'Gender'=>'Male'],
    '04' => ['prénom'=>'Selina', 'Nom'=>'Kyle', 'Alias'=>'Catwoman', 'Gender'=>'Female']];
$characters = null;
$gender = null;
$value = null;
function displaycharacter($characters, $gender, $dc_heroes){
    $value = null;
    if (is_array($characters) == false || empty($characters) == true){
        return;
    }
    elseif(is_array($characters) ==  true && empty($characters) == false){
        if ($gender == 'Female'){
            echo $dc_heroes('01', '04');
            return $value;
        }
        elseif($gender == 'Male'){
            echo $dc_heroes('02', '03');
        } 
        else{
            echo $dc_heroes();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php displaycharacter([1] , '', $dc_heroes);?>
    <?php displaycharacter([1] , 'Female', $dc_heroes);?>
</body>
</html>


