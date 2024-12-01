<template>
    <div
        class="flex size-10 items-center justify-center rounded-full bg-gray-100 text-sm text-primary-600"
    >
        {{ initials }}
    </div>
</template>

<script setup>
const { initials } = defineProps({
    initials: {
        type: String,
        required: true,
    },
});
</script>
