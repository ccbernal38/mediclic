<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <!--<p>{{ user.id }}</p>-->
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h1-perfil-usuario">Perfil de usuario</h1>
                    </div>
                </div>
                <div class="row padding-row-register">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="primer_nombre" class=" label-register">Primer Nombre</label>
                            <input id="primer_nombre" type="text" class="form-mediclic" name="primer_nombre" v-model="primer_nombre" required autocomplete="primer_nombre" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="segundo_nombre" class=" label-register">Segundo Nombre</label>
                            <input id="segundo_nombre" type="text" class="form-mediclic @error('segundo_nombre') is-invalid @enderror" name="segundo_nombre" value="" autocomplete="segundo_nombre" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "paciente-registro-component",
        props: ['user'],
        data(){
            return{
                primer_nombre: (this.user),
            }
        },
        mounted() {
            console.log(this.primer_nombre);
        }
    }
</script>

<style scoped>

</style>
