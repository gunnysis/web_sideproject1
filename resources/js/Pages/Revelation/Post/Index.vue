<template>
    <Head title="Secret Posts" />

    <AuthenticatedLayout>
        <template #header>
            <span class="font-semibold text-xl text-gray-800 leading-tight mx-3">비밀글 메인</span>
            <Link href="/revelation/post/write" class="font-semibold text-xl text-gray-800 leading-tight mx-3">비밀글 작성</Link>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h1 class="text-2xl font-bold">비밀글 메인 페이지</h1>
                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div v-for="post in secretPost" :key="post.id" class="bg-gray-100 p-4 rounded-lg shadow">
                                <h3 class="font-semibold text-lg mb-2">{{ post.title }}</h3>
                                <p class="text-sm text-gray-600">{{ post.kind }}</p>
                                <p class="text-gray-800 mt-1">{{ new Date(post.created_at).toISOString().substring(0, 10) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { defineProps } from 'vue';

const props = defineProps({
    secretPost: Array,
});
</script>
