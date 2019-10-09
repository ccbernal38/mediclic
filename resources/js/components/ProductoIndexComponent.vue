<template>
    <div class="container-fluid">
    <div class="row">
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre comercial</th>
                    <th scope="col">Nombre generico</th>
                    <th scope="col">Indicaciones</th>
                    <th scope="col">Contraindicaciones</th>
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

</style>
