<template>
    <section
        class="bg-hero relative isolate min-h-screen overflow-hidden bg-surface-900 pt-20"
    >
        <svg
            class="absolute inset-0 -z-10 size-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true"
        >
            <defs>
                <pattern
                    id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc"
                    width="200"
                    height="200"
                    x="50%"
                    y="-1"
                    patternUnits="userSpaceOnUse"
                >
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                <path
                    d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0"
                />
            </svg>
            <rect
                width="100%"
                height="100%"
                stroke-width="0"
                fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)"
            />
        </svg>
        <div
            class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
            aria-hidden="true"
        >
            <div
                class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="
                    clip-path: polygon(
                        73.6% 51.7%,
                        91.7% 11.8%,
                        100% 46.4%,
                        97.4% 82.2%,
                        92.5% 84.9%,
                        75.7% 64%,
                        55.3% 47.5%,
                        46.5% 49.4%,
                        45% 62.9%,
                        50.3% 87.2%,
                        21.3% 64.1%,
                        0.1% 100%,
                        5.4% 51.1%,
                        21.4% 63.9%,
                        58.9% 0.2%,
                        73.6% 51.7%
                    );
                "
            />
        </div>
        <div
            class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40"
        >
            <div class="mx-auto max-w-2xl shrink-0 lg:mx-0 lg:pt-8">
                <ApplicationLogo class="h-11 text-primary-500" />
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <Link
                        :href="route('blog.index')"
                        class="inline-flex space-x-6"
                    >
                        <span
                            class="rounded-full bg-primary-500/10 px-3 py-1 text-sm/6 font-semibold text-primary-400 ring-1 ring-inset ring-primary-500/20"
                            >What's new</span
                        >
                        <span
                            class="inline-flex items-center space-x-2 text-sm/6 font-medium text-gray-300"
                        >
                            <span>Just shipped v1.0</span>
                            <ChevronRightIcon
                                class="size-5 text-gray-500"
                                aria-hidden="true"
                            />
                        </span>
                    </Link>
                </div>
                <h1
                    class="mt-10 text-pretty text-5xl font-semibold tracking-tight text-white sm:text-7xl"
                >
                    Organize. Solve. Succeed.
                </h1>
                <p
                    class="mt-8 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8"
                >
                    42issues is the smart way to tackle your tasks, track
                    progress, and stay focused on what matters.
                </p>
                <div class="mt-10 flex items-center gap-x-6">
                    <form>
                        <div class="flex gap-x-4">
                            <label for="email-address" class="sr-only"
                                >Email address</label
                            >
                            <input
                                id="email-address"
                                name="email"
                                type="email"
                                autocomplete="email"
                                required=""
                                class="flex-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:min-w-72 sm:text-sm/6"
                                placeholder="Enter your email"
                            />
                            <button
                                type="submit"
                                class="flex-none rounded-md bg-primary-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600"
                            >
                                Subscribe
                            </button>
                        </div>
                        <p
                            class="mt-4 text-sm text-gray-900 dark:text-gray-200"
                        >
                            Join the Journey, stay updated
                            <span aria-hidden="true">→</span>
                        </p>
                    </form>
                </div>
            </div>
            <div
                class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32"
            >
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img
                        src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png"
                        alt="App screenshot"
                        width="2432"
                        height="1442"
                        class="w-[76rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ChevronRightIcon } from '@heroicons/vue/20/solid';
import { CodeBracketSquareIcon } from '@heroicons/vue/24/outline';
import ApplicationLogo from '../ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>
