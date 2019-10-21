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
                <a href="/producto/create">Nuevo registro</a>
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
                <tr v-for="producto in array" :key="producto.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                    <td v-text="producto.logo"></td>
                    <td v-text="producto.nombre"></td>
                    <td v-text="producto.nit"></td>
                    <td v-text="producto.contacto"></td>
                    <td v-text="producto.telefono"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LaboratorioIndexComponent.vue",
        data(){
            return{
                logo:"",
                nombre:"",
                nit:"",
                contacto:"",
                telefono:"",
                array:[],
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
        },
        mounted() {
            this.getAll();
        }
    }
</script>

<style scoped>
    .row{
        background-color: #f2f2f2;
    }
    .img-producto{
        background-image: url("/img/icon/producto.png");
    }
    .img-proveedores{
        background-image: url("/img/icon/proveedores.png");
    }
    img{
        width: 100%;
        background-size: cover;
    }
    .buscar{
        width: 90%;
        display: block;
        height: 40%;
    }
    .containerBuscar{
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
    .acciones{
        background-color: #37595a;
        height: 50px;
    }
    th{
        text-align: center;
    }
</style>
