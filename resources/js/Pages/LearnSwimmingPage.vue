<script setup>
import Layout from '../Components/Layout.vue'

defineOptions({
  layout: Layout
})
</script>
<template>

  <div class="container py-5">
    <div class="row g-4">
      <!-- service offer -->
      <div class="col-md-8 mx-auto d-flex align-items-center mb-3">
        <div class="card h-100 shadow-sm card-hover w-100">
          <div class="card-body bg-info-subtle text-center">
            <h4 class="card-title fw-bold text-primary">Learn to Swim — A Life Skill That Saves Lives</h4>
            <h6 class="card-subtitle mb-3 text-muted">Private Coaching with National Champion Laila Noor</h6>
            <p class="card-text">
              Whether you're a beginner or brushing up your strokes, swim smart and safe with tailored one-on-one
              sessions.
              <br><strong>Confidence starts with the first splash!</strong>
            </p>
          </div>
        </div>
      </div>

<h2 class="text-center border border-2 rounded m-1 p-4 card card-hover gradient-hover">Swimming lessons I offer </h2>
      <!-- Featured Card 1 (double width) -->

      <div class="col-md-6">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Private Swimming Lessons</h4>
            <h6 class="card-subtitle mb-2 text-muted">One-on-One Personalized Coaching</h6>
            <p class="card-text">Build confidence and master swimming skills at your own pace with Laila’s focused,
              private sessions.</p>
          </div>
        </div>
      </div>

      <!-- Featured Card 2 (double width) -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Group Classes for Kids & Adults</h4>
            <h6 class="card-subtitle mb-2 text-muted">Fun, Safe & Structured Learning</h6>
            <p class="card-text">Join interactive group sessions tailored for beginners to intermediates, with classes
              divided by age and skill level.</p>
          </div>
        </div>
      </div>

      <!-- Rest of the cards -->


      <div class="col-md-4">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Professional Swim Coaching</h4>
            <h6 class="card-subtitle mb-2 text-muted">Elite Training for Competitive Swimmers</h6>
            <p class="card-text">Train with a national-level coach. Ideal for athletes aiming to improve race
              performance, endurance, and technique.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Swim Camps & Workshops</h4>
            <h6 class="card-subtitle mb-2 text-muted">Intensive Weekend & Holiday Programs</h6>
            <p class="card-text">Level up with focused camps that combine technique, stamina, and strategy in a
              fast-paced, motivating environment.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Water Safety & Survival Skills</h4>
            <h6 class="card-subtitle mb-2 text-muted">Essential Life-Saving Skills</h6>
            <p class="card-text">Learn how to stay safe in and around water through survival techniques, floating, and
              basic rescue skills.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Stroke Correction & Technique Fix</h4>
            <h6 class="card-subtitle mb-2 text-muted">Swim Smarter, Not Harder</h6>
            <p class="card-text">Enhance your efficiency in the water. Perfect your strokes using expert guidance and
              video feedback.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Fitness Swimming for Adults</h4>
            <h6 class="card-subtitle mb-2 text-muted">Stay Fit with Low-Impact Exercise</h6>
            <p class="card-text">Enjoy the health benefits of swimming with tailored programs designed to improve
              strength, mobility, and cardio health.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Online Swimming Consultation</h4>
            <h6 class="card-subtitle mb-2 text-muted">Remote Coaching, Real Results</h6>
            <p class="card-text">Send in your swim videos and receive expert technique reviews, training plans, and
              personalized progress reports.</p>
          </div>
        </div>
      </div>
      <!-- Featured Card 3 (double width) -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm card-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Special Needs Swimming</h4>
            <h6 class="card-subtitle mb-2 text-muted">Inclusive & Adaptive Training</h6>
            <p class="card-text">Safe, supportive lessons for children and adults with special needs—designed with
              empathy and expertise.</p>
          </div>
        </div>
      </div>
      <!-- Featured Card 4 (double width) -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm card-hover gradient-hover gradient-hover">
          <div class="card-body">
            <h4 class="card-title">Pre-Competition Preparation</h4>
            <h6 class="card-subtitle mb-2 text-muted">Ready, Set, Win!</h6>
            <p class="card-text">Refine your race skills with targeted training for starts, turns, breathing control,
              and mental focus.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


</template>

<style scoped>
.card-hover:hover {
  transform: scale(1.03);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gradient-hover {
  background: linear-gradient(to right, #e0f7fa, #ffffff);
  transition: background 0.5s ease;
}
.gradient-hover:hover {
  background: linear-gradient(to right, #b2ebf2, #e1f5fe);
}
</style>