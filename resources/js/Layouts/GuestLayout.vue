<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div class="grid min-h-screen place-items-center bg-white py-10">
        <div class="flex w-520 flex-col items-center justify-center">
            <div class="flex flex-col items-center gap-2">
                <ApplicationLogo />

                <p class="text-xl">Please enter your login information</p>
            </div>

            <div class="mt-10 w-full">
                <slot />
            </div>
        </div>
    </div>
</template>
