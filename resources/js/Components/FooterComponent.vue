<script setup>
 
</script>
<template>
  <footer class="bg-dark text-white pt-5 pb-3 mt-5">
    <div class="container">
      <div class="row">
        <!-- Column 1 -->
        <div class="col-md-4 mb-4">
          <h5 class="text-uppercase">Laila Noor</h5>
          <p>
A six-time National Swimming Champion, Laila has carved a legendary path in the sport with her unmatched determination and discipline.           </p>
        </div>

        <!-- Column 2 -->
        <div class="col-md-4 mb-4">
          <h5 class="text-uppercase">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white text-decoration-none">Home</a></li>
            <li><a href="#" class="text-white text-decoration-none">Portfolio</a></li>
            <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
            <li><a href="#" class="text-white text-decoration-none">Blog</a></li>
          </ul>
        </div>

        <!-- Column 3 -->
        <div class="col-md-4 mb-4">
          <h5 class="text-uppercase">Contact</h5>
          <ul class="list-unstyled">
            <li><i class="bi bi-envelope"></i> laila@example.com</li>
            <li><i class="bi bi-telephone"></i> +880 123 456 789</li>
            <li><i class="bi bi-geo-alt"></i> Dhaka, Bangladesh</li>
          </ul>
        </div>
      </div>

      <div class="text-center mt-4 border-top pt-3">
        &copy; {{ new Date().getFullYear() }} Laila Noor. All rights reserved. 
      </div>
      <div class="text-center mt-4 border-top pt-3">Design & Crafted by <button class="btn btn-info"><a href="https://github.com/sarwardecoder">Sarwar Jahan</a></button></div>
    </div>
  </footer>
</template>



<style scoped>
footer a:hover {
  text-decoration: underline;
}
</style>
