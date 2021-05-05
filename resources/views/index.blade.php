<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CraneFile</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        @keyframes animateButton{
            0%,from{
                transform: scale(1);
            }

            50%{
                transform: scale(1.1);
                background: var(--light);
                color: var(--primary)
            }

            100%,to{
                transform: scale(1);
            }
        }

        #downloadButton{
            animation: animateButton 0.8s ease 1 1.8s both;
        }

        @keyframes animateTitle{
            0%,from{
                transform: scale(0.8);
                opacity: 0;
            }
            100%,to{
                transform: scale(1);
                opacity: 1;
            }
        }

        #title{
            animation: animateTitle 1s ease-in-out 1 0s both;
        }
    </style>
</head>
<body class="bg-primary">
    <div id="wrapper" class="w-100">
        <div class="row mt-5 mb-4 w-100 align-items-center">
            <div class="col-11 offset-1 col-lg-5 offset-lg-4">
                <div class="card shadow border-info" id="theCard">
                    <div class="card-header text-center py-1 bg-info">
                        <h3 class="h3 font-weight-bold text-white m-1" id="title">Cranefile</h3>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="h5 font-weight-light mt-1 text-center">Descarga el archivo <span class="small">"{{$fileName}}"</span> dándole click al botón</h5>
                        <hr/>
                        <a href="{{route('download')}}" id="downloadButton" class="btn btn-primary font-weight-bold shadow"><i class="fa fa-download"></i> Descargar</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        var title = 'Cranefile';
        var position = 0;
        var maxLenght = title.length;
        var counter = 0;
        var iterations = 1;

        function animateTitle(){
            var idvar = setInterval(()=>{
                if(counter>=iterations){
                    console.log('stop');
                    clearInterval(idvar);
                    document.getElementById('title').innerText = title;
                }

                var aux ="";
                for(var j = 0; j < maxLenght; j++) {
                    var newChar = title.charAt(j);
                    if(j==position){
                        newChar = newChar.toUpperCase();
                    }
                    aux = aux.concat(newChar);
                }
                position = position>=maxLenght?0:position+1;
                document.getElementById('title').innerText = aux;

                counter = position/maxLenght==1?counter+1:counter;
            },90);
        }

        setTimeout(animateTitle,500);


    </script>
</body>
</html>