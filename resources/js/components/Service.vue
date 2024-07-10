<template>
    <div class="container-fluid pt-5 cont" id="services">
        <div class="row mb-5">
            <div class="col-5">
                <h1 class="mt-5 ms-5">Our Services</h1>
                <div class="ms-5 underline mb-3"></div>
                <h3 class="ms-5">Get it done right, fast. That's the </h3>
                <h3 class="d-flex ms-5">
                    <div class="me-3 title">
                        {{title}} 
                        <div class="ms underlineTitle mb-3 mt-2"></div>
                    </div>
                     Advantage!!!
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <div class="row me-3">
                    <div class="col border border-3 border-danger rounded me-2 py-5 px-4 bg-white" v-for="service in services" :key="service.id">
                        <h4 :id="service.id">
                            {{ service.name }}
                        </h4>
                        <div class="ms underline mb-3 mt-2"></div>

                        <p>{{service.description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props : ['services', 'title']
}
</script>

<style scoped>
    .cont {
        height: 90vh;
    }

    #3 {
        color: white;
        background-color: white;
    }

    .underline, .underlineTitle {
        margin-top: -5px;
        height: 4px;
        background-color: red;
    }
    
    .title {
        color : #DC3545;
    }
    .underline {
        width: 150px;
    }
    
    .underlineTitle {
        
        width: 70px;
    }
    
</style>