<template>
    <div class="container-fluid">
        <div class="container position-absolute bg-danger rect"></div>
        <div class="row">
            <div class="col ps-5 align-content-center">
                <h2 class="mb-3">{{name}}</h2>
                <h4>Bringing visions to life. We build and manage your web & mobile
                    projects.</h4>
            </div>
            <div class="col">
                <img :src="imgUrl" alt="">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props : ["name", "imgUrl"]
}
</script>

<style scoped>
    .container-fluid {
        height: 70vh;
    }
    h2 {
        color : #DC3545;
    }
    .rect {
        right: 0;
        top: 0;
        z-index: -1;
        width: 35%;
        height: 360vh;
    }
</style>