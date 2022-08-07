<template>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected': $page.component=='Home'}" href="/">  <i class="fa fa-home"></i> Home </Link>
        </li>
        <li class="nav-item">
         <Link class="nav-link" :class="{'selected': $page.component=='Subject'}" href="/subject"><i class="fa fa-book"></i> Subjects</Link>
        </li>
        <li class="nav-item">
           <Link class="nav-link" :class="{'selected': $page.component=='Student'}" href="/student"><i class="fa fa-list"></i> Students</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>



<section class="container" style="margin-left: 250px; margin-top: 20px">
    <slot />
</section>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'


</script>

<style scoped>

body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

   img{
     position: absolute;
     top: 3px;
     left:5px;
   }

   .selected {
     color: aqua;
     font-weight: bold;
   }
section {
  width: 60%;
  height: 100%;
}

    
</style>
