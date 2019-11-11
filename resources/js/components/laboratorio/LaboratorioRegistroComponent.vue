<template>
    <div class="container-fluid">
        <div class="row panel">
            <div class="col-md-2">
                <div class="offset-4 col-md-8">
                    <a href="#">
                        <img alt="Proveedores" src="/img/icon/proveedores.png">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="col-md-8">
                    <a href="/producto">
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
                        <label class="label-register" for="nombre">Nombre</label><br>
                        <input class="form-mediclic" id="nombre" v-model="nombre"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="label-register" for="nit">NIT</label><br>
                        <input class="form-mediclic" id="nit" v-model="nit"><span class="form-clear d-none">
                        <i class="material-icons">clear</i></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="label-register" for="logo">Logo</label><br>
                        <div class="row">
                            <div v-if="logo.length > 0" class="col-md-4">
                                <img class="preview" :src="logo">
                            </div>
                            <div class="col-md-4">
                                <input class="form-mediclic-file" id="logo" type="file" @change="previewImage" accept="image/png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="label-register" for="direccion">Dirección</label><br>
                        <input class="form-mediclic" id="direccion" v-model="direccion"><span class="form-clear d-none">
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
            <div class="row">
                <div class="offset-8 col-md-4">
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
        name: "laboratorio-registro-component",
        data() {
            return {

            }
        },
        methods: {

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
