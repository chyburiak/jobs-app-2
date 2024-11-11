<script setup>
import Notification from '@/Components/Notification.vue';
</script>

<template>
    <div class="bg-neutral-100">
        <div class="mx-auto flex max-w-[1440px]">
            <div class="w-2/12 bg-blue-650">sidebar</div>

            <div class="flex min-h-screen w-10/12 flex-col">
                <div
                    class="flex items-center justify-between bg-white px-10 py-7"
                >
                    <div>
                        <span class="text-base leading-6 text-zinc-500"
                            >Breadcrumbs</span
                        >
                    </div>

                    <Notification />
                </div>

                <main class="px-10 py-5">
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>
