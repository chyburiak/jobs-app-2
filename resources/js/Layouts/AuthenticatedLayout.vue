<script setup>
import ApplicationShortLogo from '@/Components/ApplicationShortLogo.vue';
import LogoutIcon from '@/Components/Icons/Logout.vue';
import ProfileIcon from '@/Components/Icons/Profile.vue';
import Notification from '@/Components/Notification.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-neutral-100">
        <div class="relative flex">
            <div
                class="fixed left-0 top-0 z-10 h-screen w-2/12 overflow-x-hidden bg-blue-650 bg-sidebar bg-cover bg-center bg-no-repeat px-5"
            >
                <div class="flex h-20 w-full items-center justify-center">
                    <ApplicationShortLogo class="h-16 w-16" />
                </div>

                <nav class="flex w-full flex-col justify-between gap-6 py-6">
                    <ul class="flex flex-col gap-2">
                        <li>
                            <Link
                                :href="route('profile.edit')"
                                class="inline-flex items-center gap-2 text-base text-white"
                            >
                                <ProfileIcon class="h-5 w-auto" />
                                Profile</Link
                            >
                        </li>
                    </ul>

                    <Link
                        :href="route('logout')"
                        class="inline-flex items-center gap-2 text-base text-white"
                        method="post"
                    >
                        <LogoutIcon class="h-5 w-auto" />
                        Log Out</Link
                    >
                </nav>
            </div>

            <div class="relative ml-auto flex min-h-screen w-10/12 flex-col">
                <div
                    class="fixed right-0 top-0 z-10 flex w-10/12 items-center justify-between bg-white px-10 py-7"
                >
                    <div>
                        <span class="text-base leading-6 text-zinc-500"
                            >Breadcrumbs</span
                        >
                    </div>

                    <Notification />
                </div>

                <main class="mt-20 px-10 py-5">
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
