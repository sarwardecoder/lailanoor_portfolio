<script setup>
import Layout from '../Components/Layout.vue'

defineOptions({
  layout: Layout
})
</script>
<template>
  <div class="container py-4 ">
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-primary text-white p-3 h-100">
          <h2>Home Foods</h2>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card bg-warning text-dark p-3 h-100">
          <h2>Home Foods 2</h2>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>