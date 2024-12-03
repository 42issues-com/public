<template>
    <GuestLayout>
        <Head title="Blog" />
        <main>
            <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h1
                        class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
                    >
                        From the blog
                    </h1>
                    <p class="mt-6 text-lg/8 text-gray-600">
                        Learn how to grow your business with our expert advice.
                    </p>
                </div>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3"
                >
                    <article
                        v-for="post in posts"
                        :key="post.id"
                        class="flex max-w-xl flex-col items-start justify-between"
                    >
                        <div class="flex items-center gap-x-4 text-xs">
                            <time
                                :datetime="post.created_at"
                                class="text-gray-500"
                                >{{ post.formatted_created_at }}</time
                            >
                            <span
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600"
                                >{{ post.category }}</span
                            >
                        </div>
                        <div class="group relative">
                            <h2
                                class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600"
                            >
                                <Link :href="route('blog.show', post.slug)">
                                    <span class="absolute inset-0" />
                                    {{ post.title }}
                                </Link>
                            </h2>
                            <p
                                class="mt-5 line-clamp-3 text-sm/6 text-gray-600"
                            >
                                {{ post.excerpt }}
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <Initials :initials="post.user.initials" />
                            <div class="text-sm/6">
                                <p class="font-semibold text-gray-900">
                                    <span class="absolute inset-0" />
                                    {{ post.user.name }}
                                </p>
                                <p class="text-gray-600">
                                    {{ post.user.email }}
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </main>

        <NewsletterSection
            @close-notification="show = false"
            @show-notification="show = true"
        />

        <FaqSection />

        <SubscriptionNotification
            :show="show"
            @close-notification="show = false"
        />
    </GuestLayout>
</template>

<script setup>
import { ref } from 'vue';
import Initials from '@/Components/Initials.vue';
import FaqSection from '@/Components/Sections/FaqSection.vue';
import NewsletterSection from '@/Components/Sections/NewsletterSection.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import SubscriptionNotification from '@/Components/SubscriptionNotification.vue';

const { posts } = defineProps({
    posts: Object,
});

const show = ref(false);
</script>
