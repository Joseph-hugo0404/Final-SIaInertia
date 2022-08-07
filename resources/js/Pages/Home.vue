<template>

<div class="card text-center bg-primary">
  <div class="card-header text-light">
    Dashboard
  </div>
  <div class="card-body bg-secondary" style="opacity: 0.7px">
    <h5 class="card-title text-light"></h5>
    <p class="card-text text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>
     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>
      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br>
       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat <br>
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br>
         deserunt mollit anim id est laborum <br>
    </p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
    
</template>


<script setup>
import Layout from '../shared/Layout.vue'


</script>

<script>
export default {
   
   layout: Layout
}

</script>

<style scoped>
body{
    margin:0;
} 


.card:hover .overlay {
  width: 100%;
  left: 0;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}


</style>


