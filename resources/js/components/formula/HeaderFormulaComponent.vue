<template>
    <div class="container-fluid">
        <div class="row img-header-home">
            <div class="col-md-3">
                <div class="offset-1 col-md-11 img-logo-inicio"></div>
            </div>
            <div class="offset-6 col-md-3">
                <h4>Crear formula</h4>
            </div>
        </div>
        <!--Franja de colores footer-->
        <div class="row color-footer">
            <div class="col-md-4 color-footer-1"></div>
            <div class="col-md-2 color-footer-2"></div>
            <div class="col-md-2 color-footer-3"></div>
            <div class="col-md-2 color-footer-4"></div>
            <div class="col-md-2 color-footer-5"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HeaderFormulaComponent"
    }
</script>

<style scoped>
    .img-header-home > div > div {
        height: 100%;
    }
    .row{
        height: 100%;
    }
    .img-header-home{
        height: 150px;
        background-color: white;
    }
    .img-logo-inicio{
        background-position: center;
        background-size: contain;
    }
    h4{
        margin-top: 5%;
    }
</style>
