<template>
    <section class="min-h-min overflow-hidden bg-surface-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
            >
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2
                            class="flex items-center text-base/7 font-semibold text-primary-400"
                        >
                            <ApplicationLogo
                                class="mr-1 size-5 text-primary-400"
                                aria-hidden="true"
                            />
                            <span class="sr-only">42 </span><span>and You</span>
                        </h2>
                        <p
                            class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-white sm:text-5xl"
                        >
                            Every issue has a solution, and we’re here to help
                            you find it.
                        </p>
                        <p class="mt-6 text-lg/8 text-gray-300">
                            At 42issues, our mission is to empower individuals
                            and organizations to achieve their goals with
                            structured progress, accessible tools, and
                            intelligent tracking. We are dedicated to creating a
                            platform that supports focus, organization, and
                            productivity for all, embracing diverse ways of
                            thinking and learning.
                        </p>
                        <dl
                            class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-300 lg:max-w-none"
                        >
                            <div
                                v-for="feature in features"
                                :key="feature.name"
                                class="relative pl-9"
                            >
                                <dt class="inline font-semibold text-white">
                                    <component
                                        :is="feature.icon"
                                        class="absolute left-1 top-1 size-5 text-primary-500"
                                        aria-hidden="true"
                                    />
                                    {{ feature.name }}
                                </dt>
                                {{ ' ' }}
                                <dd class="inline">
                                    {{ feature.description }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <img
                    src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png"
                    alt="Product screenshot"
                    class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-[57rem] md:-ml-4 lg:-ml-0"
                    width="2432"
                    height="1442"
                />
            </div>
        </div>
    </section>
</template>

<script setup>
import {
    ChartBarSquareIcon,
    CheckCircleIcon,
    ClipboardDocumentCheckIcon,
    UserGroupIcon,
} from '@heroicons/vue/24/outline';
import ApplicationLogo from '../ApplicationLogo.vue';

const features = [
    {
        name: 'Progress.',
        description:
            'Every feature we build encourages consistent growth, ensuring tasks are broken into manageable steps and milestones are celebrated.',
        icon: ChartBarSquareIcon,
    },
    {
        name: 'Accessibility.',
        description:
            'With inclusivity at the heart of our design, we deliver tools that work for everyone—whether you’re a professional juggling multiple responsibilities or a student navigating learning challenges.',
        icon: UserGroupIcon,
    },
    {
        name: 'Clarity in Tracking.',
        description:
            'We simplify the chaos of everyday life with intuitive interfaces that keep you on top of tasks, deadlines, and goals.',
        icon: ClipboardDocumentCheckIcon,
    },
    {
        name: 'Completion.',
        description:
            'Success is about finishing what you start. Our tools help you track, prioritize, and stay motivated, ensuring nothing gets left undone.',
        icon: CheckCircleIcon,
    },
];
</script>
