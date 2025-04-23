import { createRouter, createWebHistory } from 'vue-router'
import TaskPage from '@/views/TaskPage.vue'

const routes = [
  { path: '/tasks', name: 'Tasks', component: TaskPage }
]

export const router = createRouter({
  history: createWebHistory(),
  routes
})