<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CraneFile</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-secondary">
    <div id="wrapper" class="w-100">
        <div class="row mt-5 mb-4 w-100 align-items-center">
            <div class="col-11 offset-1 col-lg-5 offset-lg-4">
                <div class="card shadow border-info">
                    <div class="card-header text-center py-1 bg-info">
                        <h3 class="h3 font-weight-bold text-white m-1">Cranefile</h3>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-light mt-1 text-center">Descarga el archivo <span>""</span> dándole click al botón</h5>
                        <h5 class="h5 font-weight-light mt-1 text-center">URL: <span>"{{$url}}"</span> </h5>
                        <hr/>
                        <img src="{{$url}}" alt="aaaa"/>
                        <a href="{{route('download')}}" class="btn btn-primary shadow"><i class="fa fa-crow"></i> Descargar</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</body>
</html>