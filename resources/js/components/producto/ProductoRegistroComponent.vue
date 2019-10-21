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
        <div class="row registro">
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
                        <label class="label-register" for="nombre_comercial">Nombre comercial</label>
                        <input aria-describedby="nombre_comercial" class="form-mediclic" id="nombre_comercial"
                               v-model="nombre_comercial">
                        <span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="label-register" for="concentracion">Concentración</label>
                        <input class="form-mediclic" id="concentracion"
                               v-model="concentracion"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="label-register" for="laboratorio">Laboratorio</label>
                        <input class="form-mediclic" id="laboratorio"
                               v-model="laboratorio"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="label-register" for="imagen">Imagen</label>
                        <input class="form-mediclic-file" id="imagen" type="file"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="row" style="background-color:white;">
                        <div class="offset-9 col-md-3 ">
                            <button @click="save()" class="btn btn-success btn-registro">Registrar</button>
                        </div>
                    </div>
                    <b-alert
                        :show="dismissCountDown"
                        @dismiss-count-down="countDownChanged"
                        @dismissed="dismissCountDown=0"
                        dismissible
                        variant="warning"
                    >
                        {{ mensaje }}
                    </b-alert>
                </div>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "producto-registro-component",
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
                dismissCountDown: 0,
                mensaje: ""
            }
        },
        methods: {
            save() {
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
                }).then(function (response) {
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                    me.showAlert();
                })
                    .catch(function (error) {
                        console.log(error);
                    });

            },
            clearFields() {/*Limpia los campos e inicializa la variable update a 0*/
                this.nombre_comercial = "";
                this.nombre_generico = "";
                this.contraindicaciones = "";
                this.indicaciones = "";
            },
            countDownChanged(dismissCountDown) {
                this.dismissCountDown = dismissCountDown
            },
            showAlert() {
                this.dismissCountDown = this.dismissSecs
            }
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
