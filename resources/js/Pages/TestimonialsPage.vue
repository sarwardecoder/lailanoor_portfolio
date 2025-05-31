<template>
  <div class="container py-5">
    <h2 class="text-center mb-4 fw-bold text-primary">What Our Swimmers Say</h2>

    <div class="row g-4 mb-5">
      <div v-for="(testimonial, index) in shuffledTestimonials" :key="index" class="col-md-6">
        <div class="card shadow-sm h-100 card-hover border-0">
          <div class="card-body p-4 gradient-hover rounded">
            <div class="d-flex align-items-center mb-3">
              <img
                :src="testimonial.avatar"
                alt="User Avatar"
                class="rounded-circle me-3"
                width="60"
                height="60"
              />
              <div>
                <h6 class="mb-0 fw-semibold">{{ testimonial.name }}</h6>
                <small class="text-muted">{{ testimonial.role }}</small>
                <div class="text-warning">
                  <i v-for="n in 5" :key="n" class="bi bi-star-fill" />
                </div>
              </div>
            </div>
            <blockquote class="blockquote mb-0">
              <p class="mb-0 fst-italic">“{{ testimonial.quote }}”</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <!-- Form Section -->
    <div class="card border-0 shadow-sm">
      <div class="card-body">
        <h4 class="card-title mb-4 text-center">Share Your Experience</h4>
        <form @submit.prevent="addTestimonial">
          <div class="row g-3">
            <div class="col-md-6">
              <input v-model="newTestimonial.name" type="text" class="form-control" placeholder="Your Name" required />
            </div>
            <div class="col-md-6">
              <input v-model="newTestimonial.role" type="text" class="form-control" placeholder="Your Role" required />
            </div>
            <div class="col-md-6">
              <input v-model="newTestimonial.avatar" type="url" class="form-control" placeholder="Avatar URL (optional)" />
            </div>
            <div class="col-md-6">
              <textarea v-model="newTestimonial.quote" rows="2" class="form-control" placeholder="Your Testimonial" required></textarea>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary px-4">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

import Layout from "../Components/Layout.vue";
defineOptions({
    layout: Layout
})

const testimonials = ref([
  {
    quote: "My daughter used to be afraid of water. Within weeks, Laila turned her into a confident swimmer!",
    name: "Farhana Rahman",
    role: "Parent from Dhaka",
    avatar: "https://randomuser.me/api/portraits/women/45.jpg"
  },
  {
    quote: "Laila’s insight and passion pushed me beyond my limits. She's not just a coach — she's a mentor for life.",
    name: "Asif Chowdhury",
    role: "Junior National Swimmer",
    avatar: "https://randomuser.me/api/portraits/men/22.jpg"
  },
  {
    quote: "At 42, I thought it was too late to learn. Laila proved me wrong. Truly transformational.",
    name: "Reza Karim",
    role: "Business Executive",
    avatar: "https://randomuser.me/api/portraits/men/50.jpg"
  },
  {
    quote: "Laila’s sessions for my son with autism were magical. We’ll always be grateful.",
    name: "Mariam Zaman",
    role: "Parent",
    avatar: "https://randomuser.me/api/portraits/women/61.jpg"
  }
])

const shuffledTestimonials = ref([])

onMounted(() => {
  shuffledTestimonials.value = [...testimonials.value].sort(() => 0.5 - Math.random())
})

const newTestimonial = ref({
  name: '',
  role: '',
  quote: '',
  avatar: 'https://randomuser.me/api/portraits/lego/1.jpg'
})

const addTestimonial = () => {
  testimonials.value.unshift({ ...newTestimonial.value })
  shuffledTestimonials.value = [...testimonials.value].sort(() => 0.5 - Math.random())
  newTestimonial.value = {
    name: '',
    role: '',
    quote: '',
    avatar: 'https://randomuser.me/api/portraits/lego/1.jpg'
  }
}
</script>

<style scoped>
.card{
  padding:15px;
}
.card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-hover:hover {
  transform: scale(1.02);
  box-shadow: 0 0 20px rgba(0, 123, 255, 0.3);
}
.gradient-hover {
  background: linear-gradient(to right, #e0f7fa, #ffffff);
  transition: background 0.5s ease;
}
.gradient-hover:hover {
  background: linear-gradient(to right, #b2ebf2, #e1f5fe);
}
.bi-star-fill {
  font-size: 0.9rem;
}
.card h2 {
  font-weight: 700;
  font-size: 1.8rem;
}
.card h5 {
  font-weight: 300;
  font-size: 1rem;
  line-height: 1.6;
}

</style>
