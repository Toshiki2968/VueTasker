<template>
    <div>
      <h1>タスク一覧</h1>
      <ul>
        <li v-for="task in tasks" :key="task.id">
          {{ task.title }} - {{ task.description }}
        </li>
      </ul>
    </div>
  </template>
  
  <script setup>
  import { onMounted, ref } from 'vue';
  import api from '@/lib/axios';
  
  const tasks = ref([]);
  
  onMounted(async () => {
    const response = await api.get('/tasks');
    console.log(response);
    tasks.value = response.data;
  });
  </script>
  