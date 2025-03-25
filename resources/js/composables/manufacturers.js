import { ref } from "vue";

export default function useManufacturers() {
    const manufacturers = ref({})  

    const getManufacturers = async () => {
        axios.get('/api/manufacturers')
            .then(response => {
                manufacturers.value = response.data;
            })
    }

    return { manufacturers, getManufacturers }
}