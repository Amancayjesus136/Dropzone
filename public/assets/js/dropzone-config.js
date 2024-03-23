Dropzone.options.myDropzone = {
    paramName: "nombre[]", 
    maxFilesize: 10, 
    maxFiles: 10,
    acceptedFiles: ".jpg,.jpeg,.png,.pdf", 
    dictDefaultMessage: "Arrastra los archivos aquí o haz clic para subirlos",
    init: function () {
        var myDropzone = this;

        this.on("addedfile", function(file) {
            var removeButton = Dropzone.createElement("<button class='btn btn-danger btn-sm'>Eliminar</button>");
            var _this = this;

            removeButton.addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();

                _this.removeFile(file);
                
                $.ajax({
                    method: "POST",
                    url: "{{ route('delete-file') }}",
                    data: { nombreArchivo: file.name, _token: "{{ csrf_token() }}" },
                    success: function(response) {
                        console.log(response.message);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            file.previewElement.appendChild(removeButton);
        });
    }
};