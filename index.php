<!--Gurnek and Daniel pair programming 4/7/21
This is a cupcake order form that sends the data entred to a process php page that shows the order summary-->
<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--CSS-->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

    <title>cupcakes file</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>

    <form method="post" action="process.php">
    <input name="fname" type="text" placeholder="Please input your name">
    <label for="checkboxes">Cupcake flavors</label>

    <div  id="checkboxes" name="checkboxes">
        <input value="Tiramisu" type="checkbox" name='flavor[]'>Tiramisu
        <input value="The Grasshopper" type="checkbox" name='flavor[]'>The Grasshopper
        <input value="Whiskey Maple Bacon" type="checkbox" name='flavor[]'>Whiskey Maple Bacon
        <input value="Carrot Walnut" type="checkbox" name='flavor[]'>Carrot Walnut
        <input value="Salted Caramel" type="checkbox" name='flavor[]'>Salted Caramel
        <input value="Red Velvet" type="checkbox" name='flavor[]'>Red Velvet
        <input value="Lemon Drop" type="checkbox" name='flavor[]'>Lemon Drop
    </div>
        <button type="submit">Order</button>
</form>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="scripts/pizza.js"></script>
</body>
</html>
