<template>
    <GuestLayout>
        <Head title="News" />
        <main>
            <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
                <h1
                    class="mb-8 text-2xl/7 font-bold text-gray-800 sm:truncate sm:text-3xl sm:tracking-tight"
                >
                    News
                </h1>

                <ul>
                    <li v-for="article in news" :key="article.id" class="mb-8">
                        <!-- Link the title to the article's page -->
                        <h2
                            class="mb-1 text-xl text-primary-500 hover:underline"
                        >
                            <Link :href="route('news.show', article.id)">{{
                                article.title
                            }}</Link>
                        </h2>

                        <!-- Display the excerpt of the article -->
                        <div class="prose" v-html="article.excerpt"></div>

                        <!-- Read more link -->
                        <Link
                            :href="route('news.show', article.id)"
                            class="mt-2 inline-flex items-center text-primary-500 hover:underline"
                            ><span>Read more</span
                            ><ArrowRightIcon class="ml-1 size-4"
                        /></Link>
                    </li>
                </ul>
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
import { ArrowRightIcon } from '@heroicons/vue/24/outline';
import { Head, Link } from '@inertiajs/vue3';

const { news } = defineProps({
    news: Object,
});
</script>
