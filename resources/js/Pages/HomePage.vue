<script setup>
import Layout from "../Components/Layout.vue";
defineOptions({
    layout: Layout
})
</script>
<template>
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-8">
                <div class="card text-dark p-3 h-100">
                    <h2>Learn swimming with full confidence with <span class="text-warning">Laila Noor</span></h2>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos consequuntur accusantium officiis
                        ipsum, dolorem hic aspernatur eligendi! Omnis eum recusandae quo sapiente quae consectetur
                        eligendi eos distinctio deserunt officiis placeat ipsa amet necessitatibus cumque quod nihil
                        itaque ex, ea vero corrupti aperiam! Quos magni facilis sit provident similique minus id.</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning text-dark p-3 h-100 ">
<img
  class="img-fluid rounded-circle shadow"
  src="https://images.unsplash.com/photo-1505968409348-bd000797c92e?q=80&w=2071&auto=format&fit=crop"
  alt="Laila Noor's photo"
  height="400"
  width="400"
/>

</div>
            </div>
        </div>
        <div class="row">
            <h1>My best courses for swimming</h1>
All cards 

<div class="row g-3 mt-3">
  <div class="col-md-4" v-for="course in courses" :key="course.id">
    <div class="card h-100 shadow-sm">
      <div class="card-body">
        <h5 class="card-title">{{ course.title }}</h5>
        <p class="card-text">{{ course.description }}</p>
        <a :href="course.link" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</template>

<style scoped>
.container-fluid {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);

    color: #fff;
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
.placeholder-box {
  width: 400px;
  height: 400px;
  background-color: #e0e0e0;
  border-radius: 50%;
  color: #888;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  border: 1px dashed #ccc;
}
/* option 1 */
/* .container-fluid {
    background: linear-gradient(135deg, #0ffa52 0%, #2a5298 100%);
    color: #fff;
} */

/* option 2 */

/* .container-fluid {
    background: linear-gradient(135deg, #1e3c72, #6a11cb);
    color: #fff;
} */

/* option 3
 */
/* 
.container-fluid {
    background: linear-gradient(to right, #00c6ff, #0072ff);
    color: #fff;
} */
.container-fluid {
    background: linear-gradient(135deg, #f12711, #f5af19);
    color: #fff;
}
/* .container-fluid {
    background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
    color: #333;
} */

</style>

<style>

</style>
