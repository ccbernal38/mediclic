<template>
    <div class="row">
        <div class="container">
            <div class="form-group">
                <label for="nombre_comercial">Nombre comercial:</label>
                <input type="text" v-model="nombre_comercial" class="form-control" id="nombre_comercial" aria-describedby="nombreComercial" placeholder="ingrese el nombre comercial">
            </div>
            <div class="form-group">
                <label for="nombre_generico">Nombre generico:</label>
                <input type="text" v-model="nombre_generico" class="form-control" id="nombre_generico" aria-describedby="nombreGenerico" placeholder="ingrese el nombre generico">
            </div>
            <div class="form-group">
                <label for="indicaciones">Indicaciones:</label>
                <textarea class="form-control" v-model="indicaciones" id="indicaciones" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="contraindicaciones">Contraindicaciones:</label>
                <textarea class="form-control" v-model="contraindicaciones" id="contraindicaciones" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control-file" id="imagen">
            </div>
            <button  @click="save()" class="btn btn-success">Registrar</button>
            <b-alert
                :show="dismissCountDown"
                dismissible
                variant="warning"
                @dismissed="dismissCountDown=0"
                @dismiss-count-down="countDownChanged"
            >
                {{ mensaje }}
            </b-alert>
        </div>
    </div>
</template>

<script>
    export default {
        name: "producto-registro-component",
        data(){
            return{
                nombre_generico:"",
                nombre_comercial:"",
                indicaciones:"",
                contraindicaciones:"",
                dismissSecs: 5,
                dismissCountDown: 0
            }
        },
        methods:{
            save(){
                let me =this;
                let url = '/producto' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'nombre_comercial':this.nombre_comercial,
                    'nombre_generico':this.nombre_generico,
                    'indicaciones':this.indicaciones,
                    'contraindicaciones':this.contraindicaciones,
                }).then(function (response) {
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                    me.showAlert();
                })
                    .catch(function (error) {
                        console.log(error);
                    });

            },
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
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

</style>
