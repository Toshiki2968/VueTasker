<template>
    <TaskList :tasks="tasks" />
</template>

<script setup lang="ts">
import TaskList from '@/components/tasks/TaskList.vue'
import { computed, onMounted } from 'vue'
import { useTasksStore } from '@/store/useTasksStore'

const taskStore = useTasksStore()
const tasks = computed(() => taskStore.allTasks)

onMounted(() => {
    taskStore.fetchTasks()
})
</script>