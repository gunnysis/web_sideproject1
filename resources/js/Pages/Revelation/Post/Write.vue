<template>
    <Head title="Post" />

    <AuthenticatedLayout>

        <template #header>
            <Link href="/revelation/post" class="font-semibold text-xl text-gray-800 leading-tight mx-3">비밀글 메인</Link>
            <span class="font-semibold text-xl text-gray-800 leading-tight mx-3">비밀글 작성</span>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">비밀글 작성 페이지</div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submit">
                            <div class="mb-6">
                                <label for="kind" class="block text-sm font-medium text-gray-700">종류</label>
                                <select v-model="form.kind" id="kind"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="사회생활">사회생활</option>
                                    <option value="가족">가족</option>
                                    <option value="연애">연애</option>
                                    <option value="성문화">성문화</option>
                                    <option value="기타">기타</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">제목</label>
                                <input type="text" v-model="form.title" id="title" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            <div class="mb-6">
                                <label for="content" class="block text-sm font-medium text-gray-700">내용</label>
                                <textarea v-model="form.content" id="content" rows="10" class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div class="flex items-center justify-end">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 active:bg-indigo-600 disabled:opacity-25 transition ease-in-out duration-150">
                                    저장
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>


<script setup>
    import { reactive } from 'vue';
    import { Inertia } from '@inertiajs/inertia';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    import { Link } from '@inertiajs/inertia-vue3';

    // Define a reactive form object and default values
    const form = reactive({
        kind: '사회생활',
        title: '',
        content: ''
    });

    // Function to handle form submission
    const submit = () => {
        Inertia.post('/revelation/post/store', form);
    };
</script>

