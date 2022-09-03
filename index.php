<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="php/create.php" method="post">
        <fieldset>
            <legend>create:</legend>
            <mark>
                <?php if (isset($_GET['ms'])){
                    echo $_GET['ms'];
                } ?>    
            </mark>

            <div>
                <label>Nombre: </label>
                <input type="text" 
                name="name">
            </div>
<br/>
            <div>
                <label>Genero: </label>
                <input type="radio" 
                        name="gender"
                        value="Hombre"
                        checked>
                <label>masculino</label>
                <input type="radio" 
                        name="gender"
                        value="Mujer"
                        checked>
                <label>femenino</label>
            </div>
            <br/>
            <div>
                <input type="checkbox" 
                    name="programmer">
                <label>Eres programador?</label>
                
            </div><br/>
            <input type="submit" value="Crear">

        </fieldset>
    </form>
</body>
</html>