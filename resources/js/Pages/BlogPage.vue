<script setup>
import Layout from '../Components/Layout.vue'

defineOptions({
  layout: Layout
})
</script>
<template>
  <div class="container py-4">
    <div class="row">
      <!-- Contact Form Column -->
      <div class="col-md-8">
        <div class="card bg-primary text-white p-3 h-100 animate-card shadow">
          <h2>About Laila Noor</h2>

Laila Noor is a name synonymous with excellence, dedication, and passion in the world of swimming. A six-time National Swimming Champion, Laila has carved a legendary path in the sport with her unmatched determination and discipline. Her journey from a promising young swimmer to becoming a National Swimming Coach is a testament to her lifelong commitment to nurturing talent and pushing boundaries.

With decades of experience in the pool, Laila has not only represented her country with honor but has also trained and inspired a generation of swimmers to chase greatness. Her coaching philosophy blends technical mastery with a deep understanding of each athlete’s unique strengths, fostering a holistic approach to performance and growth.

In recognition of her outstanding contributions to sports, Laila was honored with the National Sports Award, one of the country’s most prestigious accolades, celebrating her impact both in and out of the water.

Outside of swimming, Laila is also a passionate cook, known among friends and family for her delicious, home-cooked meals. Whether she’s designing a training schedule or crafting the perfect dish, Laila brings the same creativity, focus, and love to everything she does.

Today, she continues to lead with purpose—as a mentor, athlete, and lifelong learner—dedicated to empowering others through the transformative power of sport and the joy of sharing a good meal.
        </div>
      </div>

      <!-- Contact Details Column -->
      <div class="col-md-4">
        <div class="card bg-warning text-dark p-3 h-100 animate-card shadow animate-delay">
          <h2>Laila Noor's Contact Details</h2>
          <!-- Put contact info here -->
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

@keyframes fadeInUp {
  0% {
    transform: translateY(30px);
    opacity: 0;
  }
  100% {
    transform: translateY(0px);
    opacity: 1;
  }
}

.animate-card {
  animation: fadeInUp 0.8s ease-in-out;
}

.animate-delay {
  animation-delay: 0.3s;
}
</style>