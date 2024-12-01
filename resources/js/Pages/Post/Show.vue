<template>
    <GuestLayout>
        <Head title="Blog" />
        <main>
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <p class="text-base/7 font-semibold text-primary-600">
                        {{ post.category }}
                    </p>

                    <h1
                        class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
                    >
                        {{ post.title }}
                    </h1>

                    <time
                        :datetime="post.created_at"
                        class="text-xs text-gray-500"
                        >{{ post.formatted_created_at }}</time
                    >

                    <div class="prose my-8" v-html="post.body" />
                </div>
            </div>
        </main>

        <NewsletterSection />

        <FaqSection />
    </GuestLayout>
</template>

<script setup>
import FaqSection from '@/Components/Sections/FaqSection.vue';
import NewsletterSection from '@/Components/Sections/NewsletterSection.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const { post } = defineProps({
    post: Object,
});
</script>
