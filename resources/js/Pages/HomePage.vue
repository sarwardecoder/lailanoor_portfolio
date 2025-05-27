<script setup>
import Layout from "../Components/Layout.vue";
defineOptions({
  layout: Layout
})
</script>
<template>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-primary text-white p-3 h-100">
          <h2>Home Foods</h2>
          <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequuntur accusantium officiis ipsum, dolorem hic aspernatur eligendi! Omnis eum recusandae quo sapiente quae consectetur eligendi eos distinctio deserunt officiis placeat ipsa amet necessitatibus cumque quod nihil itaque ex, ea vero corrupti aperiam! Quos magni facilis sit provident similique minus id.</h5>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card bg-warning text-dark p-3 h-100">
            <h2>Home Foods 2</h2>
            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequuntur accusantium officiis ipsum, dolorem hic aspernatur eligendi! Omnis eum recusandae quo sapiente quae consectetur eligendi eos distinctio deserunt officiis placeat ipsa amet necessitatibus cumque quod nihil itaque ex, ea vero corrupti aperiam! Quos magni facilis sit provident similique minus id.</h5>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* .container-fluid {
    background-image: url('/LailaNoor/public/bg-main.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    color: #fff; /* Optional: makes text readable on dark backgrounds */
/* }  */

.container-fluid {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    
    color: #fff;
}
</style>
