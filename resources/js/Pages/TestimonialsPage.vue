<script setup>

import Layout from '../Components/Layout.vue'

defineOptions({
  layout: Layout
})
const testimonials = [
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
];
</script>
<template>
  <div class="container py-5">
    <h2 class="text-center mb-5 fw-bold text-primary">What Our Swimmers Say</h2>
    <div class="row g-4">
      <div
        v-for="(testimonial, index) in testimonials"
        :key="index"
        class="col-md-6"
      >
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
  </div>
</template>



<style scoped>
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
</style>

