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
        <div class="card bg-primary text-white p-3 h-100">
          <h2 class="text-center">Contact Form</h2>
          <form class="contact-form">
            <input type="text" placeholder="Your Name" required />
            <input type="email" placeholder="Your Email" required />
            <textarea rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>  

      <!-- Contact Details Column -->
      <div class="col-md-4 mt-1 mb-1">
        <div class="card bg-warning text-dark p-3 h-100">
          <h2 class="text-center">Contact Details</h2>
          <hr>
          <div class="contact-info">
            <p class=" d-flex p-1"><i class="fas fa-phone-alt"></i> +880-1715 405 209</p>
            <p class=" d-flex p-1"><i class="bi bi-whatsapp"></i> +880-1715 405 209</p>
            <p class=" d-flex p-1"><i class="fas fa-envelope"></i> lnoor.sw@gmail.com</p>
            <p class=" d-flex p-1"><i class="bi bi-facebook"></i> facebook</p>
            <p class=" d-flex p-1"><i class="bi bi-youtube"></i> youtube</p>
            <p class=" d-flex p-1"><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

.contact-info{
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  margin-bottom: 0.75rem;
    flex-direction: column;

}
.contact-info p {
  display: flex;
  align-items: center;
  font-size: 1rem;
  margin-bottom: 0.75rem;

}

.contact-info i {
  margin-right: .5rem;
  color: #171616;
}

/* Contact form */
.contact-form {
  margin-top: 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.contact-form input,
.contact-form textarea {
  padding: 0.75rem;
  border: none;
  border-radius: 0.5rem;
  font-size: 1rem;
  width: 100%;
}

.contact-form button {
  background-color: #0b0fef;
  color: white;
  padding: 0.75rem;
  border: none;
  border-radius: 0.5rem;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.3s ease;
}

.contact-form button:hover {
  background-color: #000;
}
</style>