<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="form-container">
        <form action="procesar3.php" method="post" enctype="multipart/form-data">
            <h2>Registro Vehiculo</h2>
            <div class="form-group">
            <label for="">Tipo Vehiculo</label>
                <select name="" id=""> 
                <option value="" disabled selected>Elige una opción</option>
                <option value="Manizales">Auto</option>
                <option value="Manizales">Moto</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Marca</label>
                <input type="text" name="" id="">
            </div>
            <div class="form-group">
                <label for="">Cantidad de Ruedas</label>
                <input type="Number" name="" id="">
            </div>
            <div class="form-group">
                <label for="">Cantidad de Puertas</label>
                <input type="Number" name="" id="">
            </div>
            <div class="form-group">
            <label for="">¿Vehiculo Encendido?</label>
                <div class="radio-option">
                    <label for="">Si</label>
                    <input type="radio" name="encendido" id="" value="Si">
                </div>
                <div class="radio-option">
                    <label for="">No</label>
                    <input type="radio" name="encendido" id="" value="No">
                </div>
            </div>
            
            
            <button type="submit">Registar</button>
          
            
        </form>
    </div>
</body>
</html>