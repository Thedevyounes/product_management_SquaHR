<script setup>
// Import required components and utilities
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import Pagination from '@/Components/Pagination.vue'
import { computed, ref } from 'vue';

// Define the products prop using defineProps
const { products } = defineProps({
    products: Object,
});

// Initialize form for deleting products
const form = useForm({
    id: 0
});

// Initialize refs for search inputs
const searchName = ref('');
const searchSize = ref('');

// Compute filtered products based on search inputs
const filteredProducts = computed(() => {
    // Initialize filtered products with all products
    let filtered = products.data;

    // Filter by name if searchName has a value
    if (searchName.value) {
        filtered = filtered.filter(product => {
            return product.name.toLowerCase().includes(searchName.value.toLowerCase());
        });
    }

    // Filter by size if searchSize has a value
    if (searchSize.value) {
        filtered = filtered.filter(product => {
            return product.size.toLowerCase().includes(searchSize.value.toLowerCase());
        });
    }

    return filtered;
});

// Function to delete a product
function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        try {
            form.delete(route('products.destroy', id));
        } catch (error) {
            console.error('Error deleting product:', error);
        }
    }
}

</script>
<template>
    <!-- Set the page title and use the AuthenticatedLayout component -->

    <Head title="Products" />
    <AuthenticatedLayout>
        <template #header>
            <!-- Page header -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <!-- Link to create a new product -->
                            <Link className="px-6 py-2 text-white bg-green-500 rounded-md focus:outline-none"
                                :href="route('products.create')">
                            Create Product
                            </Link>
                        </div>
                        <div class="mb-4">
                            <!-- Search input for filtering by name -->
                            <input v-model="searchName" type="text" placeholder="Search by name"
                                class="border px-4 py-2 rounded-lg">
                        </div>
                        <div class="mb-4">
                            <!-- Search input for filtering by size -->
                            <input v-model="searchSize" type="text" placeholder="Search by size"
                                class="border px-4 py-2 rounded-lg">
                        </div>
                        <table className="table-fixed w-full">
                            <!-- Table headers -->
                            <thead>
                                <tr className="bg-gray-100">
                                    <th className="px-4 py-2 w-20">Id</th>
                                    <th className="px-4 py-2">Name</th>
                                    <th className="px-4 py-2">Description</th>
                                    <th className="px-4 py-2">Size</th>
                                    <th className="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Display filtered products in the table -->
                                <tr v-for="product in filteredProducts">
                                    <td className="border px-4 py-2">{{ product.id }}</td>
                                    <td className="border px-4 py-2">{{ product.name }}</td>
                                    <td className="border px-4 py-2">{{ product.description }}</td>
                                    <td className="border px-4 py-2">{{ product.size }}</td>
                                    <td className="border px-4 py-2">
                                        <!-- Link to edit product and button to delete product -->
                                        <Link tabIndex="1" className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                                            :href="route('products.edit', product.id)">
                                        Edit
                                        </Link>
                                        <button @click="destroy(product.id)" tabIndex="-1" type="button"
                                            className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="my-4">
                            <!-- Display pagination -->
                            <pagination class="mt-6" :links="products.links"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
