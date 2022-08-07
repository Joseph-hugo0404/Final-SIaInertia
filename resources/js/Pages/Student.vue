<template>
<div class="card" style="width: 900px">
        <h1 class="text-center" style="font-size: 30px; font-weight: bold; font-family: 'Courier New', Courier, monospace; color: dimgray;">Student Information</h1>
     
     <table class="table rounded bg-primary text-light" style="margin:auto">

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Student ID</th>
                <th>Year</th>
                <th>Favorite Subject</th>
                <th>School Name</th>
                <th>Age</th>
                
            </tr>
        </thead>

         <tbody class="text-center bg-secondary text-white">
           <tr v-for="student in students" :key="student.id">
            <td>{{student.student_name}}</td>
            <td>{{student.address}}</td>
            <td>{{student.phone_number}}</td>
            <td>{{student.stud_id}}</td>
            <td>{{student.year}}</td>
            <td>{{student.fav_subject}}</td>
            <td>{{student.school_name}}</td>
            <td>{{student.age}}</td>
            </tr>
            

      </tbody>



     </table>





     </div>

   
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../shared/Layout.vue'
       
    
</script>

<script>
export default {
   
   layout: Layout,

   props: {
    students: Array 
   }
}

</script>
<style scoped>
.card {
    position: absolute;
    margin-left: 8%;
    left: 8%;
}
.th, .td {
    text-align: left;
}
table, th, td {
  border: 1px solid;
}
</style>
