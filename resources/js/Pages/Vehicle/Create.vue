<template>
    <div class="container mx-auto">
        <h1>ADD NEW VEHICLE</h1>
        <form @submit.prevent="submit">
            <div>
                <label for="manufacturer_id">Vehicle Brand</label>
                <select name="manufacturer_id"
                       id="manufacturer_id"
                       type="text"
                       v-model="form.manufacturer_id"
                >
                    <option v-for="manufacturer in manufacturers"
                            :value="manufacturer.id"
                    >
                        {{ manufacturer.name }}
                    </option>
                </select>
            </div>
            <div>
                <label for="model_id">Vehicle Model</label>
                <select name="model_id"
                        id="model_id"
                        type="text"
                        v-model="form.model_id"
                >
                    <option v-for="vehicle_model in vehicle_models"
                            :value="vehicle_model.id"
                    >
                        {{ vehicle_model.name }}
                    </option>
                </select>
            </div>
            <div>
                <label for="number_chassis">Vehicle Chassis Number</label>
                <input name="number_chassis"
                       id="number_chassis"
                       type="text"
                       v-model="form.number_chassis"
                >
            </div>
            <div>
                <label for="title">Vehicle Title</label>
                <input name="title"
                       id="title"
                       type="text"
                       v-model="form.title"
                >
            </div>
            <div>
                <label for="description">Vehicle Description</label>
                <input name="description"
                       id="description"
                       type="text"
                       v-model="form.description"
                >
            </div>
            <div>
                <label for="image">Vehicle Image</label>
                <input name="image"
                       id="image"
                       type="text"
                       v-model="form.image"
                >
            </div>
            <div>
                <button type="submit">SAVE</button>
            </div>
        </form>
    </div>
</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    name: "Create",
    props: {
        vehicle_models: Array,
        manufacturers: Array
    },
    setup() {
        const form = useForm({
            manufacturer_id: null,
            model_id: null,
            number_chassis: null,
            title: null,
            description: null,
            image: null
        });

        const submit = () =>
        {
            form.post(route("vehicles.store"));
        }

        return {form, submit}
    }
}
</script>

<style scoped>

</style>
