<script setup>
import { Head, Link } from '@inertiajs/vue3';

import FeatureSection from '@/Components/Sections/FeatureSection.vue';
import AboutSection from '@/Components/Sections/AboutSection.vue';
import FaqSection from '@/Components/Sections/FaqSection.vue';
import PartnerSection from '@/Components/Sections/PartnerSection.vue';
import NewsletterSection from '@/Components/Sections/NewsletterSection.vue';
import HeroSection from '@/Components/Sections/HeroSection.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';

const props = defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <GuestLayout :header-overlay="true">
        <HeroSection />

        <FeatureSection />

        <AboutSection />

        <FaqSection />

        <NewsletterSection />

        <PartnerSection />
    </GuestLayout>
</template>
