<template>
    <section class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="divide-y divide-gray-900/10">
                <h2
                    class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"
                >
                    Frequently asked questions
                </h2>
                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
                    <Disclosure
                        as="div"
                        v-for="faq in faqs"
                        :key="faq.question"
                        class="pt-6"
                        v-slot="{ open }"
                    >
                        <dt>
                            <DisclosureButton
                                class="flex w-full items-start justify-between text-left text-gray-900"
                            >
                                <span class="text-base/7 font-semibold">{{
                                    faq.question
                                }}</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <PlusIcon
                                        v-if="!open"
                                        class="size-5"
                                        aria-hidden="true"
                                    />
                                    <MinusIcon
                                        v-else
                                        class="size-5"
                                        aria-hidden="true"
                                    />
                                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base/7 text-gray-600">
                                {{ faq.answer }}
                            </p>
                        </DisclosurePanel>
                    </Disclosure>
                </dl>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue';
import { MinusIcon, PlusIcon } from '@heroicons/vue/24/outline';

const faqs = [
    {
        question: 'How much does 42issues cost?',
        answer: 'Pricing isn’t final, but here’s the current plan: Individuals: Core features will be free to ensure accessibility for everyone. Schools: We aim to keep costs as low as possible because we believe education is critical and want these tools in as many hands as possible. Corporations: Competitive pricing designed to rival industry leaders. ',
    },
    {
        question: 'How does 42issues help schools?',
        answer: '42issues provides schools with affordable tools for managing assignments, tracking student progress, and fostering better communication between teachers, parents, and students. By tailoring our features to education, we support learning environments with tools that encourage structure and focus.',
    },
    {
        question: 'Will 42issues be available worldwide?',
        answer: 'Yes, 42issues will be accessible globally, with tools and features that cater to diverse needs and settings.',
    },
    {
        question: 'What incentives do schools and organizations get?',
        answer: 'We offer bulk licensing, onboarding support, and specialized tools like dashboards for tracking progress and team efficiency. For schools, affordability remains a priority to ensure accessibility for students and teachers alike.',
    },
    {
        question: 'How can I sign up for updates or early access?',
        answer: 'You can join our newsletter to receive updates and early access invitations. Simply visit 42issues.com and sign up with your email.',
    },
    {
        question: 'Why should I invest in 42issues?',
        answer: 'It addresses a universal challenge: staying organized and focused. By offering tools that adapt to the needs of individuals, schools, and businesses, 42issues has the potential to create real impact. Your investment supports a platform designed for scalability, inclusivity, and innovation, aimed at helping people achieve more with less stress.',
    },
    // More questions...
];
</script>
