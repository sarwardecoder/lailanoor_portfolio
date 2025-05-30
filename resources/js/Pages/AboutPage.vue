<script setup>
import Layout from '../Components/Layout.vue'

defineOptions({
  layout: Layout
})
</script>
<template>
  <div class="hero-section">
    <div class="overlay"></div>
    <div class="content-wrapper">
      <div class="about-card">
        <span class="badge">About</span>
        <h1>Laila Noor</h1>
        <p>
Laila Noor is a name synonymous with excellence, dedication, and passion in the world of swimming. A six-time National Swimming Champion, Laila has carved a legendary path in the sport with her unmatched determination and discipline. Her journey from a promising young swimmer to becoming a National Swimming Coach is a testament to her lifelong commitment to nurturing talent and pushing boundaries.

With decades of experience in the pool, Laila has not only represented her country with honor but has also trained and inspired a generation of swimmers to chase greatness. Her coaching philosophy blends technical mastery with a deep understanding of each athlete’s unique strengths, fostering a holistic approach to performance and growth.

In recognition of her outstanding contributions to sports, Laila was honored with the National Sports Award, one of the country’s most prestigious accolades, celebrating her impact both in and out of the water.

Outside of swimming, Laila is also a passionate cook, known among friends and family for her delicious, home-cooked meals. Whether she’s designing a training schedule or crafting the perfect dish, Laila brings the same creativity, focus, and love to everything she does.

Today, she continues to lead with purpose—as a mentor, athlete, and lifelong learner—dedicated to empowering others through the transformative power of sport and the joy of sharing a good meal.        </p>
      </div>

      <div class="contact-card">
        <h2 class="text-center">Laila Noor </h2>
        <!-- Add contact details here -->
      </div>
    </div>
  </div>
</template>

<style scoped>
.hero-section {
  background-image: url('/23b4d863-9648-4f25-9a47-415960ae0cd6.png');
  background-size: cover;
  background-position: center;
  position: relative;
  min-height: 100vh;
  padding: 3rem 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(10, 10, 10, 0.6);
  z-index: 1;
}

.content-wrapper {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  z-index: 2;
  position: relative;
  max-width: 1200px;
  width: 100%;
  color: #fff;
}

.about-card,
.contact-card {
  flex: 1 1 45%;
  background-color: rgba(0, 0, 0, 0.75);
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.contact-card {
  background-color: #ffc107;
  color: #fff;
background-image: url('https://images.pexels.com/photos/73760/swimming-swimmer-female-race-73760.jpeg?auto=compress&cs=tinysrgb&w=600');  
height: 400px;
}

.badge {
  background: #e63946;
  padding: 0.5rem 1rem;
  border-radius: 0.5rem;
  font-weight: bold;
  font-size: larger;
  color: white;
  display: inline-block;
  margin-bottom: 1rem;
}

h1,
h2 {
  margin-bottom: 1rem;
  text-align: center;
}

p {
  line-height: 1.6;
}
</style>
