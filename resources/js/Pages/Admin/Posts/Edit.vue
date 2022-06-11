<template>


    <div class="d-flex flex-column-fluid">

        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom example example-compact">
                <div class="card-header">
                    <h2 class="card-title">تعديل البيانات </h2>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                        </div>
                    </div>

                    <inertia-link :href="route('admin.posts.index')" style="margin-top: 3%">
                        <i class="bi bi-skip-backward base_icon"></i>
                    </inertia-link>

                </div>

                <!--begin::Form-->
                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form2" novalidate="novalidate"
                      @submit.prevent="updatePost">
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
                                    حفظ التعديلات
                                </button>
                            </div>
                        </div>
                    </div>

                    <input type="hidden">
                    <div></div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>


</template>

<script>
import AdminLayout from "@/Layouts/Admin/Layout";

export default {
    layout: AdminLayout,
    props: ["post"],
    data() {
        return {
            form: {
                name: this.post.name,
                body: this.post.body,
            },
        };
    },
    computed: {
        errors() {
            return this.$page.props.errors;
        },
    },
    methods: {
        updatePost() {
            this.$inertia.put(route("admin.posts.update", this.post.id), this.form);
        },
    },
};
</script>

<style>
</style>
