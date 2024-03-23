<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Archivos con Dropzone</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .cliente {
        position: absolute;
        margin-top: -100px;
        margin-left: -23px; 
    }
    .container {
        margin-top: 100px;
    }

    .dz-preview .dz-remove {
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="card-body">
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="dropzone" id="myDropzone">
                @csrf
                <div class="row">
                    <div class="cliente col-9">
                        <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                        <input type="text" name="title[]" id="nombre_cliente" class="form-control" placeholder="Nombre del Cliente">
                    </div>
                </div>
                <div class="fallback">
                    <input name="nombre[]" type="file" multiple required>
                </div>
            </form>
            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
