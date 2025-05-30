<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary  sticky-top bg-success-subtle">
        <div class="container-fluid">
            <Link class="navbar-brand" href="#">LailaNoor</Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <Link class="nav-link nav-animate active" aria-current="page" href="/">Home</Link>
                    <Link class="nav-link nav-animate" href="/about">About</Link>
                    <!-- <Link class="nav-link nav-animate" href="/services">Services</Link> -->
                    <li class="nav-item nav-animate dropdown">
                        <Link class="nav-link dropdown-toggle nav-animate" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </Link>
                        <ul class="dropdown-menu dropdown-animate">
                            <li><Link class="dropdown-item dropdown-animate" href="/learn-swimming">Learn Swimming</Link></li>
                            <li><Link class="dropdown-item dropdown-animate" href="/home-foods">Laila Noors Home Made Food</Link></li>
                          
                        </ul>
                    </li>
                    <Link class="nav-link nav-animate" href="/testimonials">Testimonials</Link>
                    <Link class="nav-link nav-animate" href="/blog">Blog</Link>
                    <Link class="nav-link nav-animate" href="contact">Contact Us</Link>
                </div>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.nav-animate {
    transition: all 0.3s ease-in-out;
}

.nav-animate:hover {
    color: rgb(15, 156, 7) !important;
    transform: scale(1.25);
}
.dropdown-animate:hover {
    color: rgb(190, 247, 4) !important;
/* background-color: aqua; */
/* border-radius: 15px; */
padding:1px 1px ;
    transition: all 0.3s ease-in-out;
    background-color:rgb(9, 162, 245)  ;

}
</style>