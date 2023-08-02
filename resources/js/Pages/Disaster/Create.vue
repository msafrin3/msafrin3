<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import Swal from 'sweetalert2';

const props = defineProps({
    errors: Object
});

</script>

<template>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Test Form</h3>
            </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" class="form-control">
                    <span class="text-danger" v-if="errors.title">{{ errors.title }}</span>
                </div>
            </div>
            <div class="card-footer d-grid gap-2">
                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </div>
        </div>
    </div>
</template>