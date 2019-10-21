<template>
    <div class="container-fluid">
        <div class="row img-header-home">
            <div class="col-md-3">
                <div class="offset-1 col-md-11 img-logo-inicio"></div>
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
        name: "HeaderComponent"
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
        background-image: url("/img/home/header.png");
        height: 220px;
        background-repeat: no-repeat;
        background-size: cover;;
    }
    .img-logo-inicio{
        background-position: center;
        background-size: contain;
    }


</style>
