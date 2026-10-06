<script setup>
import { ref } from 'vue';

defineProps({
    title: {
        type: String,
        default: 'Example Component'
    }
});

const count = ref(0);
</script>

<template>
    <div class="p-4 bg-white rounded-lg shadow-sm border border-gray-100">
        <h3 class="text-lg font-medium text-gray-900 mb-2">{{ title }}</h3>
        <p class="text-gray-600">This is an example Vue 3 component using script setup.</p>
        <button class="btn-primary mt-4" @click="count++">
            Count: {{ count }}
        </button>
    </div>
</template>

<style scoped>
/* Component-specific styles */
</style>
