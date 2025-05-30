<script setup>
import { Link } from '@inertiajs/inertia-vue3';
 
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
            <li><Link href="/" class="text-white text-decoration-none">Home</Link></li>
            <li><Link href="/learn-swimming" class="text-white text-decoration-none">Learn Swimming</Link></li>
            <li><Link href="/contact" class="text-white text-decoration-none">Contact</Link></li>
            <li><Link href="/blog" class="text-white text-decoration-none">Blog</Link></li>
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
      <div class="text-center mt-4 border-top pt-3">Design & Crafted by <button class="btn btn-info"><Link href="https://github.com/sarwardecoder">Sarwar Jahan</Link></button></div>
    </div>
  </footer>
</template>



<style scoped>
footer Link:hover {
  text-decoration: none;
}
</style>
