<template>
    <div class="container">
        <div class="row" style="margin-top: 1%">
            <div class="offset-1 col-md-9">
                <h2>Nombre:</h2><br>
                <h4>Especialidad</h4><br>
                <h4>Epidemiologia</h4><br>
                <h4>Medicina alternativa</h4><br>
            </div>
            <div class="col-md-2">
                <img src="/img/icon/terapeuta-75.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="offset-1 col-md-10">
                <div class="form-group">
                    <label class="label-register" for="nombre">Nombres</label><br>
                    <input class="form-mediclic" id="nombre" v-model="nombres"><span class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-1 col-md-4">
                <div class="form-group">
                    <label class="label-register" for="fecha">Fecha</label><br>
                    <input class="form-mediclic" id="fecha" v-model="fecha"><span class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="label-register" for="documento">Documento de identidad</label><br>
                    <input class="form-mediclic" id="documento" v-model="documento"><span class="form-clear d-none">
                                <i class="material-icons">clear</i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Nombre comercial</th>
                    <th scope="col">Nombre generico</th>
                    <th scope="col">Presentacion</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"><img src="/img/icon/producto-prueba.png" alt=""></th>
                    <td>Atopeel</td>
                    <td>Ectonia</td>
                    <td>Crema 10gr</td>
                </tr>
                <tr>
                    <th scope="row"><img src="/img/icon/producto-prueba.png" alt=""></th>
                    <td>Atopeel</td>
                    <td>Ectonia</td>
                    <td>Crema 10gr</td>
                </tr>
                <tr>
                    <th scope="row"><img src="/img/icon/producto-prueba.png" alt=""></th>
                    <td>Atopeel</td>
                    <td>Ectonia</td>
                    <td>Crema 10gr</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Medicamento
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Recomendaciones
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Control
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingCertificaciones">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#headingCertificaciones" aria-expanded="false" aria-controls="headingCertificaciones">
                                Certificaciones
                            </button>
                        </h2>
                    </div>
                    <div id="collapseCertificaciones" class="collapse" aria-labelledby="headingCertificaciones" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row firma-digital">
            <div class="offset-7 col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="firma">
                            <img src="/img/icon/firma.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5>Firma digital</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-md-3">            <button class="btn btn-success">Registrar</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormulaRegistroComponent",
        data() {
            return {
                nombres: "",
                documento: "",
                fecha:""
            }
        },
    }

</script>

<style scoped>
    img{
        width: 100%;
    }
    th > img {
        width: 200px;
    }
    td{
        font-size:30px;
    }
    .accordion{
        width: 100%;
    }
    .firma{
        border-bottom-color: #1d2124;
        border-bottom-width: 2px;
        border-bottom-style: solid;
    }
    .firma-digital{
      margin-top: 10%;
    }
</style>
