<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="offset-4 col-md-8">
                    <a href="/proveedor">
                        <img src="/img/icon/proveedores.png" alt="Proveedores">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="col-md-8">
                    <a href="#">
                        <img src="/img/icon/producto.png" alt="Producto">
                    </a>
                </div>
            </div>
            <div class="col-md-8 containerBuscar">
                <input class="buscar" type="text" placeholder="Buscar">
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
                    <th scope="col">#</th>
                    <th scope="col">Código</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Existencias</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Proveedor</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="producto in array" :key="producto.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                        <td v-text="producto.id"></td>
                        <td v-text="producto.codigo"></td>
                        <td v-text="producto.nombre"></td>
                        <td v-text="producto.nombre_comercial"></td>
                        <td v-text="producto.ubicacion"></td>
                        <td v-text="producto.registro_sanitario"></td>
                        <td v-if="producto.laboratorio != null" v-text="producto.laboratorio.nombre"></td>
<!--                        <td>-->
                            <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
<!--                            <button class="btn" @click="loadFieldsUpdate(task)">Modificar</button>-->
                            <!--Botón que borra la tarea que seleccionemos-->
<!--                            <button class="btn" @click="deleteTask(task)">Borrar</button>-->
<!--                        </td>-->
                    </tr>
                </tbody>
            </table>
        </div>
        <b-modal class="registro-modal" id="modal-xl" size="xl" title="Nuevo registro">
            <div class="modal-body">
                <div class="registro">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="codigo">Codigo</label>
                                <input aria-describedby="codigo" class="form-mediclic" id="codigo"
                                       type="text" v-model="codigo">
                                <span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="nombre">Nombre</label>
                                <input aria-describedby="nombre" class="form-mediclic" id="nombre"
                                       type="text" v-model="nombre"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="imagen">Imagen</label><br>
                                <div class="row">
                                    <div v-if="imageData.length > 0" class="col-md-4">
                                        <img class="preview" :src="imageData">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="form-mediclic-file" id="imagen" type="file" @change="previewImage" accept="image/png">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="nombre_comercial">Nombre comercial</label>
                                <input aria-describedby="nombre_comercial" class="form-mediclic" id="nombre_comercial"
                                       v-model="nombre_comercial">
                                <span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="ubicacion">Ubicación</label>
                                <input class="form-mediclic" id="ubicacion" v-model="ubicacion"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="principio_activo">Principio activo</label>
                                <input class="form-mediclic" id="principio_activo"
                                       v-model="principio_activo"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="concentracion">Concentración</label>
                                <input class="form-mediclic" id="concentracion"
                                       v-model="concentracion"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="forma_farmaceutica">Forma farmaceutica</label>
                                <input class="form-mediclic" id="forma_farmaceutica"
                                       v-model="forma_farmaceutica"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="registro_sanitario">Registro sanitario</label>
                                <input class="form-mediclic" id="registro_sanitario"
                                       v-model="registro_sanitario"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="label-register" for="laboratorio">Laboratorio</label><br>
                                <select class="form-mediclic" v-model="laboratorio" id="laboratorio">
                                    <option v-for="option in arrayLabs" v-bind:value="option.id">
                                        {{ option.nombre }}
                                    </option>
                                </select>
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
        name: "ProductoIndexComponent.vue",
        data(){
            return{
                nombre_generico:"",
                nombre_comercial:"",
                indicaciones:"",
                contraindicaciones:"",
                array:[],
                codigo: "",
                nombre: "",
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
                        me.getAll();
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
            getAll() {
                let me = this;
                let url = '/getAllProductos' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.array = response.data;
                })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
            },
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
