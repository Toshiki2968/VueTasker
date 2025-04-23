// src/services/ApiService.ts
import axios from 'axios'
import type { Task } from '@/store/useTasksStore'

const API_URL = 'http://localhost:8000/api/tasks'

export default {
    async getTasks(): Promise<Task[]> {
        const response = await axios.get(API_URL)
        return response.data
    }
}
