<template>
    <section class="bg-surface-900 py-24 sm:py-32">
        <div
            class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8"
        >
            <h2
                class="max-w-xl text-balance text-3xl font-semibold tracking-tight text-white sm:text-4xl lg:col-span-7"
            >
                Want product news and updates? Sign up for our newsletter.
            </h2>
            <form class="w-full max-w-md lg:col-span-5 lg:pt-2">
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
                        class="focus:ring-primary-500 min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset sm:text-sm/6"
                        placeholder="Enter your email"
                    />
                    <button
                        type="submit"
                        class="bg-primary-500 hover:bg-primary-400 focus-visible:outline-primary-500 flex-none rounded-md px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2"
                    >
                        Subscribe
                    </button>
                </div>
                <p class="mt-4 text-sm/6 text-gray-300">
                    We care about your data. Read our
                    <a href="#" class="font-semibold text-white"
                        >privacy&nbsp;policy</a
                    >.
                </p>
            </form>
        </div>
    </section>
</template>
