<script setup>
import { ref, computed } from 'vue';
//import TheWelcome from '../components/TheWelcome.vue'

//const msg = 'Hallo dek';

//Directiv conditional
const deadline = ref('2023-05-26');
    const hariIni = new Date().toLocaleDateString();
    const selesai = ref(true);

    const isDeadlineToday = computed(() => {
      return deadline.value === hariIni;
    });

    const isTaskCompleted = computed(() => {
      return selesai.value;
    });

//deklarasi kondisional awal
const awesome = ref(true);
//function untuk menghandle ketika button di klik
const clickHandle = ()=>  {
  //mengubah nilai dari true ke false/ sebaliknya
  awesome.value = !awesome.value;
}


//Event Handling
const count = ref(0);
const eventHandling = ()=>{
  count.value++;
  console.log(items.value.id);
}
const eventHandlingReset = ()=>{
  count.value--;
  if(count.value <0){
    count.value = 0;
  }
}

//List Rendering
const items = ref([
      { id: 1, name: "Bawang", price: 1000 },
      { id: 2, name: "Semongko", price: 2000 },
      { id: 3, name: "Lombok", price: 3000 },
    ]);

</script>

<template>
  <main class="flex flex-col justify-center items-center">

      <!-- <h1 class="text-red-400 text-6xl">{{msg}}</h1> -->
   
    <div>
      <h1>Conditional Rendering</h1>

      <div v-if="isDeadlineToday">
        Deadline hari ini
      </div>

      <div v-else-if="!isTaskCompleted">
        Tugas belum selesai
      </div>

      <div v-else>
        Tugas sudah selesai
      </div>
     </div>
     <div>=========================</div>
     <div>
      <button  class="border-2 border-light-500 rounded-full p-2" @click="clickHandle">Pencet sini</button>

      <div v-if="awesome">vue is awesome</div>
      <div v-else>Ohh no 😢</div>
     </div>
     <div>=========================</div>
     <div>Event Handling</div>
     <div class="flex ">
      <button  class="border-2 border-light-500 rounded-full p-2 m-2 hover:bg-sky-700 text-white" @click="eventHandlingReset">-</button>
      <div class="p-2 m-2">
        {{ count }}
      </div>
      <button  class="border-2 border-light-500 rounded-full p-2 m-2 hover:bg-sky-700 text-white" @click="eventHandling">+</button>
     </div>
     
    
     <div>=========================</div>
     <div>List Rendering (Lopp)</div>
     <div>
      <h1>Data Blonjoan</h1>
      <ul>
        <li v-for="item in items" :key="item.id">
          {{ item.name }} - {{ item.price }}
        </li>
      </ul>
    </div>

  </main>
</template>
