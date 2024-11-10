<script setup>
import PrimaryButton from '@/Components/Buttons/PrimaryButton.vue';
import Checkbox from '@/Components/Form/Checkbox.vue';
import InputError from '@/Components/Form/InputError.vue';
import InputLabel from '@/Components/Form/InputLabel.vue';
import TextInput from '@/Components/Form/TextInput.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-2 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-3">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-2 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4 block">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm">Remember me</span>
                </label>
            </div>

            <div class="mt-4 flex flex-col items-center justify-center">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="mb-4 text-blue-650 underline underline-offset-4 transition-all duration-300 ease-in hover:text-blue-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton
                    class="mb-2 w-full"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </PrimaryButton>

                <p class="text-base">
                    Don't have an account?
                    <Link
                        class="text-blue-650 underline underline-offset-4 transition-all duration-300 ease-in hover:text-blue-500"
                        :href="route('register')"
                        >Create an account</Link
                    >
                </p>
            </div>
        </form>
    </GuestLayout>
</template>
