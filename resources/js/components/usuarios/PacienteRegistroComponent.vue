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
                            <input id="primer_nombre" type="text" class="form-mediclic" name="primer_nombre" v-model="primer_nombre" required autocomplete="primer_nombre">
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="segundo_nombre" class=" label-register">Segundo Nombre</label>
                            <input id="segundo_nombre" type="text" class="form-mediclic @error('segundo_nombre') is-invalid @enderror" name="segundo_nombre" v-model="segundo_nombre" autocomplete="segundo_nombre">
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="primer_apellido" class=" label-register">Primer Apellido</label>
                            <input id="primer_apellido" type="text" class="form-mediclic @error('primer_apellido') is-invalid @enderror" name="primer_apellido" v-model="primer_apellido" required autocomplete="primer_apellido">
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label for="segundo_apellido" class=" label-register">Segundo Apellido</label>
                            <input id="segundo_apellido" type="text" class="form-mediclic @error('segundo_apellido') is-invalid @enderror" name="segundo_apellido" v-model="segundo_apellido"  required autocomplete="segundo_apellido" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label class="label-register">Correo electrónico</label>
                            <input id="email-register" type="email" class="form-mediclic @error('email-register') is-invalid @enderror" name="email-register" required autocomplete="email-register">
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label class="label-register">Fecha de nacimiento</label>
                            <input id="fecha_nacimiento" type="text" class="form-mediclic datepicker @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" required autocomplete="off" autofocus>
                            <span class="form-clear d-none"><i class="material-icons">clear</i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group position-relative">
                            <label class="label-register padd-lbl-sexo">Sexo</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="f" type="radio" class="custom-control-input" name="sexo" value="F" required>
                                <label class="custom-control-label" for="f">F</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input id="m" type="radio" class="custom-control-input" name="sexo" value="M" required>
                                <label class="custom-control-label" for="m">M</label>
                            </div>
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
                primer_nombre: this.user.primer_nombre,
                segundo_nombre: this.user.segundo_nombre,
                primer_apellido: this.user.primer_apellido,
                segundo_apellido: this.user.segundo_apellido,
            }
        },
        mounted() {
            console.log(this.user);
        }
    }
</script>

<style scoped>

</style>
