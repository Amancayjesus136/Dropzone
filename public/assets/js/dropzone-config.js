Dropzone.options.myDropzone = {
    paramName: "nombre[]", 
    maxFilesize: 10, 
    maxFiles: 10,
    acceptedFiles: ".jpg,.jpeg,.png,.pdf", 
    dictDefaultMessage: "Arrastra los archivos aquí o haz clic para subirlos",
    init: function () {
        this.on("success", function (file, response) {
            console.log(response); 
        });
    }
  };