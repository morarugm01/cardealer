import { ref } from "vue";

export default function useManufacturers() {
    const manufacturers = ref({})

    const getManufacturers = async (page = 1) => {
        axios.get('/api/manufacturers?page=' + page)
            .then(response => {
                manufacturers.value = response.data;
            })
    }

    return { manufacturers, getManufacturers }
}