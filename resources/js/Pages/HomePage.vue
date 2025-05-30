<script setup>
import Layout from "../Components/Layout.vue";
defineOptions({
    layout: Layout
})
</script>
<template>
    <div class="container-fluid ">
        <div class="row p-2">
            <div class="col-md-8">
                <div class="card text-dark p-3 h-100">
                    <h2>Learn swimming with full confidence with <span class="text-warning">Laila Noor</span></h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequuntur accusantium officiis
                        ipsum, dolorem hic aspernatur eligendi! Omnis eum recusandae quo sapiente quae consectetur
                        eligendi eos distinctio deserunt officiis placeat ipsa amet necessitatibus cumque quod nihil
                        itaque ex, ea vero corrupti aperiam! Quos magni facilis sit provident similique minus id.</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning text-dark p-3 h-100">
                    <h2>Home Foods 2</h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequuntur accusantium officiis
                        ipsum, dolorem hic aspernatur eligendi! Omnis eum recusandae quo sapiente quae consectetur
                        eligendi eos distinctio deserunt officiis placeat ipsa amet necessitatibus cumque quod nihil
                        itaque ex, ea vero corrupti aperiam! Quos magni facilis sit provident similique minus id.</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <col-md-12>
All cards 
            </col-md-12>
        </div>
    </div>
</template>

<style scoped>
.container-fluid {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);

    color: #fff;
}
</style>
