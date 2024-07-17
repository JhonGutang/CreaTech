<template>
  <div class="container-fluid cont mt-5" id="offers">
    <div class="container h-100 border border-5 border-white rounded py-5 px-5 banner">
        <h3 class="mb-4 text-white">Limited Time Offer <i class="bi bi-fire"></i></h3>
        <div class="row h-100 px-5">
            <div class="col border border-2 border-danger rounded h-75 bg-white py-3 me-2" v-for="service in services" :key="service.id">
                <h5>
                    {{service.name}}
                </h5>
                <div class="ms underline mb-2 mt-2"></div>

                <ul>
                    <li v-for="(offer, index) in service.offers" :key="index">
                        {{ offer }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

  </div>
</template>

<script>
export default {
    props : ["services"]

}
</script>

<style scoped>
    .cont {
        height: 50vh;
    }
    .banner {
        background-color: #DC3545;
    }
    .underline {
        margin-top: -5px;
        width: 100px;
        height: 4px;
        background-color: red;
    }
</style>