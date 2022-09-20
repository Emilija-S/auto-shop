<template>
    <div class="container p-5 flex-col mx-auto">
        <table class="table table-auto border border-2 border-blue-500">
            <thead>
            <tr>
                <th scope="col" class="py-2 px-7 mx-3">#</th>
                <th scope="col" class="py-2 px-7 mx-3">Manufacturer id</th>
                <th scope="col" class="py-2 px-7 mx-3">Model</th>
                <th scope="col" class="py-2 px-7 mx-3">Chassis number</th>
                <th scope="col" class="py-2 px-7 mx-3">Title</th>
                <th scope="col" class="py-2 px-7 mx-3">Description</th>
                <th scope="col" class="py-2 px-7 mx-3">Image</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="vehicle in vehicles" :key="vehicle.id" class="mx-5 text-center">
                <th scope="row" class="border border-2 border-blue-500 p-2">{{ vehicle.id }}</th>
                <td class="border border-2 border-blue-500">{{ vehicle.manufacturer_id }}</td>
                <td class="border border-2 border-blue-500">{{ vehicle.model_id }}</td>
                <td class="border border-2 border-blue-500">{{ vehicle.number_chassis }}</td>
                <td class="border border-2 border-blue-500">{{ vehicle.title }}</td>
                <td class="border border-2 border-blue-500">{{ vehicle.description }}</td>
                <td class="border border-2 border-blue-500">
                    <img :src="vehicle.image" alt="Image alt">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",
    props: {
        vehicles: Array
    }
}
</script>

<style scoped>

</style>
