<script setup>
import Footer from './Shared/Footer.vue';
import Header from './Shared/Header.vue';

const { headerOverlay } = defineProps({
    headerOverlay: Boolean,
});
</script>

<template>
    <Header :overlay="headerOverlay" />
    <slot />
    <Footer />
</template>
