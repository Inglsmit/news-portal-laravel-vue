<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" ></Head>

        <h1 class="text-3xl font-medium mb-4">Register</h1>
        <form @submit.prevent="submit" class="space-y-5 mt-5">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="w-full h-12 border border-gray-800 rounded px-3"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="w-full h-12 border border-gray-800 rounded px-3"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="w-full h-12 border border-gray-800 rounded px-3"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="w-full h-12 border border-gray-800 rounded px-3"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div>
                <Link
                    :href="route('login')"
                    class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2"
                >
                    Already registered?
                </Link>
            </div>

            <button
                type="submit"
                class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium"
                :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
            >
                Register
            </button>

        </form>
    </GuestLayout>
</template>
