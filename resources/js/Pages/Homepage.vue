<script setup>
import { onMounted, ref, watch } from 'vue';
import useManufacturers from '@/composables/manufacturers';
import useModels from '../composables/models';
import Dropdown from '../Components/Dropdown.vue';

const { manufacturers, getManufacturers } = useManufacturers();
const { models, getModels } = useModels();

let selectedMake = ref(null)

const handleMake = (updateValue) => {
    selectedMake = updateValue
    getModels(selectedMake)
}

onMounted(() => {
    getManufacturers()
})


</script>

<template>
    <form>
        <div class="flex flex-row space-x-4">
            <Dropdown @updateValue="handleMake" :id="'make'" :items="manufacturers" :label="'Make'"></Dropdown>
            <Dropdown :id="'model'" :items="models" :label="'Model'"></Dropdown>
        </div>
        <div class="mt-4">
            <button class="rounded-md bg-green-600 px-3 py-2 text-sm uppercase text-white">Save</button>
        </div>
    </form>
</template>
