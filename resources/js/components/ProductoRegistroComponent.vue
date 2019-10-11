<template>
    <div class="container-fluid">
        <div class="row">
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
            <div class="col-md-4">
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input aria-describedby="codigo" class="form-control" id="codigo"
                           type="text" v-model="codigo">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input aria-describedby="nombre" class="form-control" id="nombre"
                           type="text" v-model="nombre">
                </div>
                <div class="form-group">
                    <label for="nombre_comercial">nombre_comercial</label>
                    <input aria-describedby="nombre_comercial" class="form-control" id="nombre_comercial"
                           v-model="nombre_comercial">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ubicacion">Ubicación</label>
                    <input class="form-control" id="ubicacion" v-model="ubicacion">
                </div>
                <div class="form-group">
                    <label for="principio_activo">principio_activo:</label>
                    <input class="form-control" id="principio_activo"
                           v-model="principio_activo">
                </div>
                <div class="form-group">
                    <label for="concentracion">concentracion</label>
                    <input class="form-control" id="concentracion"
                           v-model="concentracion">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="forma_farmaceutica">forma_farmaceutica</label>
                    <input class="form-control" id="forma_farmaceutica"
                           v-model="forma_farmaceutica">
                </div>
                <div class="form-group">
                    <label for="registro_sanitario">registro_sanitario</label>
                    <input class="form-control" id="registro_sanitario"
                           v-model="registro_sanitario">
                </div>
                <div class="form-group">
                    <label for="laboratorio">laboratorio</label>
                    <input class="form-control" id="laboratorio"
                           v-model="laboratorio">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input class="form-control-file" id="imagen" type="file">
                </div>
            </div>
            <button @click="save()" class="btn btn-success">Registrar</button>
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
                    'nombre_comercial': this.nombre_comercial,
                    'nombre_generico': this.nombre_generico,
                    'indicaciones': this.indicaciones,
                    'contraindicaciones': this.contraindicaciones,
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
    .row {
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

    .acciones {
        background-color: #37595a;
        height: 50px;
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
    }
</style>
