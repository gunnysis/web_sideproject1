<template>
    <Head title="Revelation" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Revelation</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">비밀소개 작성 페이지</div>
                </div>

                <!-- 폼 섹션 -->
                <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                    <form @submit.prevent="submitForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- 입력 필드 -->
                            <input-field label="출생년도" v-model="form.birth_year" type="select" :options="yearOptions" placeholder="출생년도 선택" />
                            <input-field label="도시" v-model="form.city" type="text"/>
                            <input-field label="성격" v-model="form.personality" type="text" />
                            <input-field label="성별" v-model="form.gender" type="select" :options="genderOptions" placeholder="성별 선택" />
                            <input-field label="직업" v-model="form.occupation" type="text" />
                            <input-field label="학력" v-model="form.education" type="text" />
                            <input-field label="직급" v-model="form.position" type="text" />
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                                제출
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive, computed } from 'vue';
import axios from 'axios';
import InputField from '@/Components/InputField.vue';

const props = defineProps({
    userRevelation: {
        type: Object,
        default: () => ({
            birth_year: '',
            city: '',
            personality: '',
            gender: '',
            occupation: '',
            education: '',
            position: ''
        })
    }
});

const form = reactive({
    birth_year: props.userRevelation?.birth_year || '',
    city: props.userRevelation?.city || '',
    personality: props.userRevelation?.personality || '',
    gender: props.userRevelation?.gender || '',
    occupation: props.userRevelation?.occupation || '',
    education: props.userRevelation?.education || '',
    position: props.userRevelation?.position || ''
});

const yearOptions = computed(() => {
    const years = [];
    const currentYear = new Date().getFullYear();
    for (let year = currentYear; year >= 1980; year--) {
        years.push({ value: year, text: year.toString() });
    }
    return years;
});

const genderOptions = [
    { value: 'male', text: '남자' },
    { value: 'female', text: '여자' },
    { value: 'gay', text: '게이' },
    { value: 'lesbian', text: '레즈비언' }
];

function submitForm() {
    axios.post('/revelation/account/store', form)
        .then(response => {
            alert('프로필 저장 성공!');
        })
        .catch(error => {
            console.error('프로필 저장 실패:', error);
        });
}
</script>
