<template>
    <div class="container-fluid">
        <div class="row bar">
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
        <div class="row">
        </div>
        <div class="row acciones">
            <div class="offset-10 col-md-2">
                <b-button v-b-modal.modal-xl variant="primary">Nuevo registro</b-button>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">NIT</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">Telefono</th>
                </tr>
                </thead>
                <tbody>
                <tr :key="producto.id" v-for="producto in array"> <!--Recorremos el array y cargamos nuestra tabla-->
                    <td v-text="producto.logo"></td>
                    <td v-text="producto.nombre"></td>
                    <td v-text="producto.nit"></td>
                    <td v-text="producto.contacto"></td>
                    <td v-text="producto.telefono"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <b-modal class="registro-modal" id="modal-xl" size="xl" title="Nuevo registro">
            <div class="modal-body">
                <div class=" registro">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="nombre">Nombre</label><br>
                                <input class="form-mediclic" id="nombre" v-model="nombre"><span class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="nit">NIT</label><br>
                                <input class="form-mediclic" id="nit" v-model="nit"><span
                                class="form-clear d-none">
                <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="logo">Logo</label><br>
                                <div class="row">
                                    <div class="col-md-4" v-if="logo.length > 0">
                                        <img :src="logo" class="preview">
                                    </div>
                                    <div class="col-md-4">
                                        <input @change="previewImage" accept="image/png"
                                               class="form-mediclic-file"
                                               id="logo" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="direccion">Dirección</label><br>
                                <input class="form-mediclic" id="direccion" v-model="direccion"><span
                                class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="nit">Teléfono(s)</label><br>
                                <input class="form-mediclic" id="telefono"
                                       v-model="telefono"><span class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="contacto">Nombre de contacto(s)</label><br>
                                <input class="form-mediclic" id="contacto"
                                       v-model="contacto"><span class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <template v-slot:modal-footer="{ registrar }">
                <b-button size="md" variant="success" @click="save()">
                    Registrar
                </b-button>
            </template>
        </b-modal>
    </div>
</template>

<script>
    export default {
        name: "LaboratorioIndexComponent.vue",
        data() {
            return {
                logo: "",
                nombre: "",
                nit: "",
                contacto: "",
                telefono: "",
                array: [],
                direccion: "",
                dismissCountDown: 0,
                mensaje: "",
                dismiss: 1
            }
        },
        methods: {
            getAll() {
                let me = this;
                let url = '/getAllLaboratorios' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.array = response.data;
                })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
            },
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
                        this.logo = e.target.result;
                    }
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            },
            save() {
                this.dismiss = 0;
                let me = this;
                let url = '/laboratorio'; //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url, { //estas variables son las que enviaremos para que crear la tarea
                    'nombre': this.nombre,
                    'nit': this.nit,
                    'logo': this.logo,
                    'direccion': this.direccion,
                    'telefono': this.telefono,
                    'contacto': this.contacto
                }).then(function (response) {
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                    me.mensaje="Se ha registrado correctamente.";
                    me.showAlert();
                    me.getAll();
                    me.dismiss = 0
                })
                    .catch(function (error) {
                        console.log(error);
                    });

            },
            clearFields() {/*Limpia los campos e inicializa la variable update a 0*/
                this.nombre = "";
                this.nit = "";
                this.logo = "";
                this.direccion = "";
                this.telefono = "";
                this.contacto = "";
            },
            countDownChanged(dismissCountDown) {
                this.dismissCountDown = dismissCountDown
            },
            showAlert() {
                this.dismissCountDown = this.dismissSecs
            }
        },
        mounted() {
            this.getAll();
        }
    }
</script>

<style scoped>
    .bar {
        background-color: #f2f2f2 !important;
    }
    .row {
        background-color: white;
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

    .acciones {
        background-color: #37595a;
        height: 50px;
    }

    th {
        text-align: center;
    }

    .registro {
        background-color: white;

        margin: 1%;
        padding: 1%;
        width: 90% !important;
    }

</style>
