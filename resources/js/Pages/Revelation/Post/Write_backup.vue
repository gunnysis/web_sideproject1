<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Post" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Post</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label for="kind" class="block text-sm font-medium text-gray-700">Post Type</label>
                                <select v-model="form.kind" id="kind" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" v-model="form.title" id="title" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter the title">
                            </div>
                            <div class="mb-6">
                                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                                <textarea v-model="form.content" id="content" rows="4" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your content"></textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition ease-in-out duration-150">
                                    Save Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { ref } from 'vue';

export default {
    setup() {
        const form = useForm({
            kind: '',
            title: '',
            content: ''
        });

        function submit() {
            form.post(''); // Adjust the URL to your route configuration
        }

        return {
            form,
            submit,
        };
    },
};
</script>

<style scoped>
/* Your additional CSS here */
</style>
