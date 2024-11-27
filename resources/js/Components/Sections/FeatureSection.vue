<template>
    <section class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-5"
            >
                <div class="col-span-2">
                    <h2 class="text-primary-600 text-base/7 font-semibold">
                        Everything you need
                    </h2>
                    <p
                        class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
                    >
                        All-in-one platform
                    </p>
                    <p class="mt-6 text-base/7 text-gray-600">
                        Tasks may be universal—whether for individuals, schools,
                        or organizations—but the environments in which they are
                        performed are unique. At 42issues, we deliver tailored
                        tools to meet the specific needs of each setting,
                        ensuring productivity is optimized regardless of
                        context.
                    </p>
                </div>
                <dl
                    class="col-span-3 grid grid-cols-1 gap-x-8 gap-y-10 text-base/7 text-gray-600 sm:grid-cols-2 lg:gap-y-16"
                >
                    <div
                        v-for="feature in features"
                        :key="feature.name"
                        class="relative pl-9"
                    >
                        <dt class="font-semibold text-gray-900">
                            <CheckIcon
                                class="text-primary-500 absolute left-0 top-1 size-5"
                                aria-hidden="true"
                            />
                            {{ feature.name }}
                        </dt>
                        <dd class="mt-2">{{ feature.description }}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
</template>

<script setup>
import { CheckIcon } from '@heroicons/vue/20/solid';

const features = [
    {
        name: 'For Individuals',
        description:
            'We offer flexible task management with reminders and customizable goal tracking to address personal productivity challenges, including people with neurodivergences. Individuals can also invite family members to share tasks, ask for help, and plan together, fostering collaboration and accountability at home.',
    },
    {
        name: 'For Schools',
        description:
            'Our platform facilitates structured learning environments with tools for student progress tracking, teacher-parent communication, and shared task boards that adapt to both collaborative and individualized educational needs.',
    },
    {
        name: 'For Organizations',
        description:
            'Businesses benefit from advanced team coordination, project planning, and performance metrics through dashboards tailored for leadership and team efficiency, empowering managers to identify and resolve bottlenecks quickly.',
    },
    {
        name: 'All inclusive',
        description:
            'Manage your work, school, and home life in one place with a shared calendar view, simplifying your schedule and making time management a breeze. Whether you’re juggling tasks, assignments, or home chores, our system breaks everything down into manageable steps.',
    },
];
</script>
