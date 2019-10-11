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
                        <td v-text="producto.nombre_comercial"></td>
                        <td v-text="producto.nombre_generico"></td>
                        <td v-text="producto.indicaciones"></td>
                        <td v-text="producto.contraindicaciones"></td>
                        <td>
                            <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                            <button class="btn" @click="loadFieldsUpdate(task)">Modificar</button>
                            <!--Botón que borra la tarea que seleccionemos-->
                            <button class="btn" @click="deleteTask(task)">Borrar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
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
            }
        },
        methods: {
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
</style>
