<template>
    <div class="container-fluid">
        <div class="row panel">
            <div class="col-md-2">
                <div class="offset-4 col-md-8">
                    <a href="/proveedor">
                        <img alt="Proveedores" src="/img/icon/proveedores.png">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="col-md-8">
                    <a href="#">
                        <img alt="Producto" src="/img/icon/producto.png">
                    </a>
                </div>
            </div>
            <div class="col-md-8 containerBuscar">
                <input class="buscar" placeholder="Buscar" type="text">
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "producto-registro-component",
        props: ['labs'],
        data() {
            return {
                codigo: "",
                nombre: "",
                nombre_comercial: "",
                ubicacion: "",
                principio_activo: "",
                concentracion: "",
                forma_farmaceutica: "",
                registro_sanitario: "",
                laboratorio: "",
                imageData: "",
                dismissCountDown: 0,
                dismissSecs:5,
                mensaje: "",
                arrayLabs:[],
            }
        },
        methods: {
            previewImage: function(event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.imageData = e.target.result;
                    }
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            },
            save() {
                if (this.laboratorio != ""){
                    let me = this;
                    let url = '/producto'; //Ruta que hemos creado para enviar una tarea y guardarla
                    axios.post(url, { //estas variables son las que enviaremos para que crear la tarea
                        'codigo': this.codigo,
                        'nombre': this.nombre,
                        'nombre_comercial': this.nombre_comercial,
                        'ubicacion': this.ubicacion,
                        'principio_activo': this.principio_activo,
                        'concentracion': this.concentracion,
                        'forma_farmaceutica': this.forma_farmaceutica,
                        'registro_sanitario': this.registro_sanitario,
                        'laboratorio_id': this.laboratorio,
                        'imagen':this.imageData,
                    }).then(function (response) {
                        me.clearFields();
                        me.showAlert();
                    }).catch(function (error) {
                            console.log(error);
                        });
                }else {
                    this.mensaje = "Debe seleccionar un laboratorio"
                    this.showAlert();
                }
            },
            clearFields() {/*Limpia los campos e inicializa la variable update a 0*/
                this.codigo = "";
                this.nombre = "";
                this.nombre_comercial = "";
                this.ubicacion = "";
                this.principio_activo = "";
                this.concentracion = "";
                this.forma_farmaceutica = "";
                this.registro_sanitario = "";
                this.laboratorio = "";
                this.imageData = "";
            },
            countDownChanged(dismissCountDown) {
                this.dismissCountDown = dismissCountDown
            },
            showAlert() {
                this.dismissCountDown = this.dismissSecs
            },
        },
        mounted() {
                this.arrayLabs = JSON.parse(this.labs);
        }
    }
</script>

<style scoped>
    .panel {
        background-color: #f2f2f2;
    }

    .img-producto {
        background-image: url("/img/icon/producto.png");
    }

    .img-proveedores {
        background-image: url("/img/icon/proveedores.png");
    }

    img {
        width: 100%;
        background-size: cover;
    }

    .buscar {
        width: 90%;
        display: block;
        height: 40%;
    }

    .containerBuscar {
        display: flex;
        align-items: center;
    }

    .container-fluid > div > div {
        padding: 0px;
    }

    .buscar {
        border-color: black;
        border-width: 1px;
        border-radius: 10px;
        padding-left: 2%;
        font-weight: bold;
        background-color: #f2f2f2;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #cccccc;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #cccccc;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #cccccc;
    }



    .form-mediclic {
        width: 90%;
    }

    .btn-registro {
        margin-bottom: 1vw;
    }
    .container-fluid > div {
        width: 100%;
    }
    .row{
        width: 100%;
    }
    .registro {
        background-color: white;
        padding-top: 3%;
        padding-left: 4%;
        padding-right: 4%;
        margin: 3%;
        border-radius: 10px;
        border-color: black;
        border-style: solid;
        border-width: 1px;
        width: 94% !important;
    }
</style>
