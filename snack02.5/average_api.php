<?php



    if ( empty($_GET['a']) || empty($_GET['b'])){
        echo 'NOPE';
    } else {
        // ? (a + b) / 2
        $average['results'] = (floatval($_GET['a']) + floatval($_GET['b'])) / 2;
       
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Title -->
    <title>Average</title>
</head>
<body>
    <form>
    <div class="mb-3">
        <label for="a" class="form-label">Number 1</label>
        <input type="number" class="form-control" id="a" name="a">
    </div>

    <div class="mb-3">
        <label for="b" class="form-label">Number 2</label>
        <input type="number" class="form-control" id="b" name="b">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div>
    Average is :
    <?php echo json_encode($average); ?>

    </div>
    
</body>
</html>

