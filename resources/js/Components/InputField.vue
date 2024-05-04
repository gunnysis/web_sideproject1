<template>
    <div class="mb-4">
        <label :for="label" class="block text-sm font-medium text-gray-700">{{ label }}</label>
        <select v-if="type === 'select'" :id="label" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                :value="modelValue" @change="updateValue($event.target.value)">
            <option disabled value="">{{ placeholder }}</option>
            <option v-for="option in options" :key="option.value" :value="option.value">{{ option.text }}</option>
        </select>
        <input v-else :type="type" :value="modelValue" @input="updateValue($event.target.value)" :id="label"
               class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
               :placeholder="label">
    </div>
</template>

<script setup>
import { defineProps, defineEmits, computed } from 'vue';

const props = defineProps({
    label: String,
    modelValue: [String, Number],
    type: {
        type: String,
        default: 'text'
    },
    options: Array,  // This is new, used for dynamic options in the select dropdown
    placeholder: String  // Optional: Placeholder text for the dropdown
});

const emits = defineEmits(['update:modelValue']);

function updateValue(value) {
    emits('update:modelValue', value);
}

// Example: You might define static options like this if they are constant
const genderOptions = computed(() => [
    { value: 'male', text: '남자' },
    { value: 'female', text: '여자' }
]);
</script>
