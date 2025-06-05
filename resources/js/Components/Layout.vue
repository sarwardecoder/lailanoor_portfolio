<script setup>
import NavBar from "../Components/NavBar.vue";
import FooterComponent from "../Components/FooterComponent.vue";
</script>

<template>
 <div class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <NavBar/>

    <!-- Page content -->
    <main class="flex-fill container my-4">
      <slot />
    </main>

    <!-- Footer -->
    <FooterComponent />
  </div>
</template>

<style scoped>

</style>