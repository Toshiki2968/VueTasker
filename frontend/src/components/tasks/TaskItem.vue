<template>
    <li>
        <div>{{ task.title }}</div>
        <p>{{ task.description }}</p>
    </li>
</template>

<script>
    export default {
        props: {
            task: Object
        }
    };
</script>