<template>
<div class="d-flex justify-contents-between" style="position:relative; left:200px;">
<div class="card text-center bg-primary">
  <div class="card-header text-light">
    Welcome Students
  </div>
  <div class="card-body bg-secondary">
    <h5 class="card-title text-light">Choose Your Course Here</h5>
    <p class="card-text text-light">Only the best is Good Enough</p>
  </div>
</div>
</div>

 <div class="bb" style="top: 20px">
            <div class="card shadow-lg p-3 mb-5 bg-primary rounded" style="width: 16rem; height:14.5rem;">
              <img class="card-img-top" style="height:120px; position:absolute; top:0px; left: 0.1px;" src="/images/sub.png">
                 <div class="card-body">
                     <h5 class="card-title" style="color: whitesmoke; top:55%; position:relative; font-size:16px; font-weight:bold;">Panitikan Subjects</h5>
                       <p class="card-text"  style="color: whitesmoke; top:50%; position:relative; font-size:14px;">Want to become future Filipino Teacher</p>
                     
              </div>
           </div>
        </div>


         <div class="bd" style="top: 20px">
            <div class="card shadow-lg p-3 mb-5 bg-primary rounded" style="width: 16rem; height:14.5rem;">
              <img class="card-img-top" style="height:120px; position:absolute; top:0px; left: 0.1px;" src="/images/busi.jpg">
                 <div class="card-body">
                     <h5 class="card-title" style="color: whitesmoke; top:55%; position:relative; font-size:16px; font-weight:bold;">Business Subjects</h5>
                       <p class="card-text"  style="color: whitesmoke; top:50%; position:relative; font-size:14px;">Want to become an Entreprenuer</p>
                       
              </div>
           </div>
        </div>

      
</template>


<script setup>
import Layout from '../shared/Layout.vue'


</script>

<script>
export default {
   layout: Layout,
    
}

</script>
<style scoped>
.card {
   width: 50%;
}

.bb{
    position: absolute;
    margin-top: 25%;
    margin-left:5%;
}
.bd{
    position: absolute;
    margin-top: 25%;
    margin-left:40%;
}

</style>

