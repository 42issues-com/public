<template>
    <section class="min-h-min overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2"
            >
                <div class="lg:ml-auto lg:pl-4 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base/7 font-semibold text-primary-600">
                            Invest in the Future of Productivity
                        </h2>
                        <p
                            class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
                        >
                            Interested in partnering?
                        </p>
                        <p class="mt-6 text-lg/8 text-gray-600">
                            Task management software is a rapidly growing
                            market, projected to exceed $10 billion in the
                            coming years. With 42issues, we’re driving
                            innovation through user-focused design, seamless
                            collaboration, and AI-powered insights. Join us in
                            shaping the future of productivity.
                        </p>
                        <dl
                            class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none"
                        >
                            <div
                                v-for="feature in investors"
                                :key="feature.name"
                                class="relative pl-9"
                            >
                                <dt class="inline font-semibold text-gray-900">
                                    <component
                                        :is="feature.icon"
                                        class="absolute left-1 top-1 size-5 text-primary-600"
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
                <div class="flex items-start justify-end lg:order-first">
                    <img
                        src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png"
                        alt="Product screenshot"
                        class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                        width="2432"
                        height="1442"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { StarIcon, BuildingOfficeIcon } from '@heroicons/vue/24/outline';

const investors = [
    {
        name: 'Founders Membership',
        description:
            'Join an exclusive group of backers recognized as the foundation of 42issues. Members get lifetime access to premium features, early access to updates, and direct input into future developments. High-tier backers gain access to one-on-one consultations, workshops, or tailored setup support, ensuring they maximize the app for their unique needs.',
        icon: StarIcon,
    },
    {
        name: 'Corporate & Institutional Partnerships.',
        description:
            'We offer bulk licenses and tailored onboarding packages to businesses, schools, and organizations, making 42issues the ideal productivity tool for teams and institutions. Our platform enhances team efficiency and focus by providing specialized dashboards that simplify task management and enable transparent collaboration. With advanced reporting tools, managers and educators can easily track progress, identify bottlenecks, and ensure everyone stays aligned with organizational goals.',
        icon: BuildingOfficeIcon,
    },
];
</script>
