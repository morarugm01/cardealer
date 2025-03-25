<script setup>

const props = defineProps({
    id: String,
    items: Object,
    label: String,
    modelValue:[String, Number],
})

const emit = defineEmits(['updateValue'])

const updateValue = (event) => {
    emit('updateValue', event.target.value)
}
</script>

<template>
    <select :id=id :value="modelValue" @change="updateValue" class="rounded-md disabled:bg-gray-200 disabled:cursor-not-allowed w-48" :disabled="!items.data">
        <option :disabled value="">{{ label }}</option>
        <option v-for="item in items.data" :value="item.id">
            {{ item.name }}
        </option>
    </select>
</template>