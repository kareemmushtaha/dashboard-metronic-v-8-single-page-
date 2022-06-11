<template>
    <div class="d-flex flex-column-fluid">

        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom example example-compact">
                <div class="card-header">
                    <h2 class="card-title">إضافة جديد</h2>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                        </div>
                    </div>

                    <inertia-link :href="route('admin.posts.index')" style="margin-top: 3%">
                        <i class="bi bi-skip-backward base_icon"></i>
                    </inertia-link>

                </div>


                <form class="form fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate"
                      @submit.prevent="createPost">
                    <div class="card-body">
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label for="name"
                                   class="col-lg-4 col-form-label required fw-bold fs-6">العنوان</label>
                            <input
                                type="text"
                                v-model="form.name"
                                :class="{ 'border-red-600': errors.name }"
                                id="name"
                                class="form-control form-control-lg form-control-solid"/>
                            <p class="mt-1 text-sm text-red-600" v-if="errors">
                                {{ errors.name }}
                            </p>
                        </div>

                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <label for="body"
                                   class="col-lg-4 col-form-label required fw-bold fs-6">
                                النص</label>
                            <textarea
                                name="body"
                                v-model="form.body"
                                :class="{ 'border-red-600': errors.body }"
                                class="form-control form-control-lg form-control-solid"
                                rows="4">
                </textarea>
                            <p class="mt-1 text-sm text-red-600" v-if="errors">
                                {{ errors.body }}
                            </p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button
                                    type="submit"
                                    class="btn btn-primary mr-2">

                                </button>
                            </div>
                        </div>
                    </div>

                    <input type="hidden">
                    <div></div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
import AdminLayout from "@/Layouts/Admin/Layout";

export default {
    layout: AdminLayout,
    data() {
        return {
            form: {
                name: "",
                body: "",
            },
        };
    },
    computed: {
        errors() {
            return this.$page.props.errors;
        },
    },
    methods: {
        createPost() {
            this.$inertia.post(route("admin.posts.store"), this.form);
        },
    },
};
</script>
 
<style>
</style>
