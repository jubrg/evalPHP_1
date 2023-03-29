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
    <form method="post">
        <label> Poids : <input name="large"  class="form-control" type="number" placeholder="poids"></label>
        <label> Taille : <input name="height" class="form-control" type="number" placeholder="taille"></label>
        <input type="submit" class="btn btn-primary" value="Calculer">
    </form>
    <?php echo $_GET['large']?>
</body>
</html>