<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Post" />

    <AuthenticatedLayout>

        <template #header>
            <span class="font-semibold text-xl text-gray-800 leading-tight mx-3">비밀글 메인</span>
            <Link href="/revelation/post/write" class="font-semibold text-xl text-gray-800 leading-tight mx-3">비밀글 작성</Link>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">비밀글 메인 페이지</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


