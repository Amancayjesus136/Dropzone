<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir Archivos con Dropzone</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="dropzone" id="myDropzone">
                    @csrf
                    <div class="fallback">
                        <input name="nombre[]" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="{{ asset('assets/js/dropzone-config.js') }}"></script>

</body>
</html>
