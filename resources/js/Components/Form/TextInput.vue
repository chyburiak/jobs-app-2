<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="rounded-xl border border-zinc-200 p-4 outline-blue-650 placeholder:text-gray-450 focus:border focus:border-blue-650 focus:outline-1 focus:ring-blue-650"
        v-model="model"
        ref="input"
    />
</template>
