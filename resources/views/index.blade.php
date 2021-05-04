<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CraneFile</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body{
            background-color: var(--primary);
        }

        #wrapper{
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="row mt-5 mb-4 w-100">
            <div class="col-10 offset-1 col-lg-5 offset-lg-4">
                <div class="card shadow border-info">
                    <div class="card-header text-center py-1 bg-info">
                        <h3 class="h3 font-weight-bold text-white m-1">Cranefile</h3>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-light mt-1 text-center">¡Hola! Descarga el archivo dándole al botón</h5>
                        <hr/>
                        <a href="#download" onclick="alert('Aún no hay archivo ):')" class="btn btn-primary shadow">Descargar Archivo</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</body>
</html>