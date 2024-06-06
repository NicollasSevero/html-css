<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .principal{
            color:red;
        }
    </style>

</head>
<body>
    <h1 class>Hello world</h1>
    <?php 
        echo  "<h1 class='principal'> hello worlddddd</h1>";
    ?>

    <?= 'hello woooorld'?>
    <?php 
        echo "<button onclick='nicolau()'>Clique aqui</button>";
    ?>
    <script>
        function nicolau(){
            alert('Bem vindo ao TachWorld')
        }
    </script>
</body>
</html>