<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    isLoggedIn: {
        type: Boolean,
        required: true,
    },
    userName: {
        type: String,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <main class="flex h-screen items-center justify-center">
        <div
            class="container mx-auto flex flex-col items-center justify-center gap-12"
        >
            <ApplicationLogo />

            <p v-if="isLoggedIn" class="text-lg">
                Welcome, {{ userName }}. Navigate to
                <Link
                    :href="route('dashboard')"
                    class="text-blue-800 transition-all duration-300 ease-in hover:text-blue-600 hover:underline"
                >
                    Dashboard
                </Link>
            </p>

            <p v-else class="text-lg">
                This is a simple job board. You have to
                <Link
                    class="text-blue-800 transition-all duration-300 ease-in hover:text-blue-600 hover:underline"
                    :href="route('register')"
                    >register</Link
                >
                or
                <Link
                    class="text-blue-800 transition-all duration-300 ease-in hover:text-blue-600 hover:underline"
                    :href="route('login')"
                    >log in</Link
                >
                to start using it.
            </p>
        </div>
    </main>
</template>
