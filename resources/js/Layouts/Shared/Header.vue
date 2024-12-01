<template>
    <header :class="[overlay ? 'absolute z-10 w-full' : 'bg-surface-900']">
        <nav
            class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <Link :href="route('welcome')" class="-m-1.5 p-1.5">
                    <span class="sr-only">42issues</span>
                    <ApplicationLogoBrand class="h-8 text-primary-500" />
                </Link>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3Icon class="size-6" aria-hidden="true" />
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <Link
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    class="text-sm/6 font-semibold text-white"
                    >{{ item.name }}</Link
                >
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a
                    href="https://docs.42issues.com"
                    class="text-sm/6 font-semibold text-white"
                    >Docs <span aria-hidden="true">&rarr;</span></a
                >
            </div>
        </nav>
        <Dialog
            class="lg:hidden"
            @close="mobileMenuOpen = false"
            :open="mobileMenuOpen"
        >
            <div class="fixed inset-0 z-10" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-surface-950 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10"
            >
                <div class="flex items-center justify-between">
                    <Link :href="route('welcome')" class="-m-1.5 p-1.5">
                        <span class="sr-only">42issues</span>
                        <ApplicationLogoBrand class="h-8 text-primary-500" />
                    </Link>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-400"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon class="size-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/25">
                        <div class="space-y-2 py-6">
                            <Link
                                v-for="item in navigation"
                                :key="item.name"
                                :href="item.href"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-gray-800"
                                >{{ item.name }}</Link
                            >
                        </div>
                        <div class="py-6">
                            <a
                                href="https://docs.42issues.com"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-gray-800"
                                >Docs</a
                            >
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
        <slot />
    </header>
</template>

<script setup>
import { ref } from 'vue';
import { Dialog, DialogPanel } from '@headlessui/vue';
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
import ApplicationLogoBrand from '@/Components/ApplicationLogoBrand.vue';

const { overlay } = defineProps({
    overlay: {
        type: Boolean,
        default: false,
    },
});

const navigation = [
    // { name: 'Products', href: '#' },
    { name: 'Blog', href: route('blog.index') },
    { name: 'Company', href: '#' },
    { name: 'Contact', href: '#' },
];

const mobileMenuOpen = ref(false);
</script>
