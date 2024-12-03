<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

import FeatureSection from '@/Components/Sections/FeatureSection.vue';
import AboutSection from '@/Components/Sections/AboutSection.vue';
import FaqSection from '@/Components/Sections/FaqSection.vue';
import PartnerSection from '@/Components/Sections/PartnerSection.vue';
import NewsletterSection from '@/Components/Sections/NewsletterSection.vue';
import HeroSection from '@/Components/Sections/HeroSection.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import SubscriptionNotification from '@/Components/SubscriptionNotification.vue';

const show = ref(false);
</script>

<template>
    <Head title="Welcome" />

    <GuestLayout :header-overlay="true">
        <HeroSection
            @close-notification="show = false"
            @show-notification="show = true"
        />

        <FeatureSection />

        <AboutSection />

        <FaqSection />

        <NewsletterSection
            @close-notification="show = false"
            @show-notification="show = true"
        />

        <PartnerSection />

        <SubscriptionNotification
            :show="show"
            @close-notification="show = false"
        />
    </GuestLayout>
</template>
