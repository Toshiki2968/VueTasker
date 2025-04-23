<template>
  <div>
    <h2>タスク一覧</h2>
    <ul>
      <task-item
        v-for="task in tasks"
        :key="task.id"
        :task="task"
      />
    </ul>
  </div>
</template>

<script>
import TaskItem from './TaskItem.vue';

export default {
  components: {
    TaskItem
  },
  props: {
    tasks: Array
  }
};
</script>
