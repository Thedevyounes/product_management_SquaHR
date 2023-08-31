<script setup>
// Import required components and utilities
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import BreezeLabel from '@/Components/InputLabel.vue';
import BreezeInput from '@/Components/TextInput.vue';
import BreezeTextArea from '@/Components/Textarea.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

// Initialize form for creating a new product
const form = useForm({
    name: '',
    description: '',
    size: ''
});

// Function to handle form submission
const submit = () => {
    // Send a POST request to the 'products.store' route
    form.post(route('products.store'));
};
</script>
<template>
    <!-- Set the page title and use the AuthenticatedLayout component -->
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <!-- Page header -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Product
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <!-- Link to navigate back to products index page -->
                            <Link className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                :href="route('products.index')">
                            Back
                            </Link>
                        </div>
                        <!-- Form to create a new product -->
                        <form name="createForm" @submit.prevent="submit">
                            <div className="flex flex-col">
                                <!-- Input for product name -->
                                <div className="mb-4">
                                    <BreezeLabel for="name" value="Name" />
                                    <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name"
                                        autofocus />
                                    <span className="text-red-600" v-if="form.errors.name">
                                        {{ form.errors.name }}
                                    </span>
                                </div>
                                <!-- Textarea for product description -->
                                <div className="mb-4">
                                    <BreezeLabel for="description" value="Description" />
                                    <BreezeTextArea id="description" class="mt-1 block w-full" v-model="form.description"
                                        autofocus />
                                    <span className="text-red-600" v-if="form.errors.description">
                                        {{ form.errors.description }}
                                    </span>
                                </div>
                                <!-- Input for product size -->
                                <div className="mb-4">
                                    <BreezeLabel for="size" value="Size" />
                                    <BreezeInput id="size" type="text" class="mt-1 block w-full" v-model="form.size"
                                        autofocus />
                                    <span className="text-red-600" v-if="form.errors.size">
                                        {{ form.errors.size }}
                                    </span>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <div className="mt-4">
                                <button type="submit" className="px-6 py-2 font-bold text-white bg-green-500 rounded">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
