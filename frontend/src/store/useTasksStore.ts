// src/store/useTasksStore.ts
import { defineStore } from 'pinia'
import ApiService from '@/services/ApiService'

export interface Task {
    id: number
    title: string
    description: string
    completed: boolean
}

export const useTasksStore = defineStore('tasks', {
    state: () => ({
        tasks: [] as Task[]
    }),
    actions: {
        async fetchTasks() {
        try {
            const data = await ApiService.getTasks()
            this.tasks = data
        } catch (error) {
            console.error('タスクの取得に失敗しました:', error)
        }
        }
    },
    getters: {
        allTasks: (state) => state.tasks
    }
})
