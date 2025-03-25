import { ref } from "vue";

export default function useModels() {
    const models = ref({})
    const getModels = async (id) => {
        axios.get(`api/models/${id}`)
            .then(response => {
                models.value = response.data;
            })
    }

    return { models, getModels }
}