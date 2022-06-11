<template>
    <div class="container mx-auto px-6 py-8">
        <div class="flex justify-between items-center mb-5">
            <h1 class="text-3xl py-2 border-b mb-5">التعليقات</h1>
         </div>

        <div class="mb-4 flex justify-between items-center">
            <div class="flex-1 pr-4">
                <div class="relative md:w-1/3">
                    <input
                        type="search"
                        class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        placeholder="Search..."
                        v-model="search"
                        @keyup="searching"
                    />
                    <div class="absolute top-0 left-0 inline-flex items-center p-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 text-gray-400"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <circle cx="10" cy="10" r="7"/>
                            <line x1="21" y1="21" x2="15" y2="15"/>
                        </svg>
                    </div>
                    <div class="absolute top-0 right-0 inline-flex items-center p-2">
                        <inertia-link :href="route('admin.posts.index')">
                            <svg
                                class="w-6 h-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </inertia-link>
                    </div>
                </div>
            </div>
            <div>
                <inertia-link
                    :href="route('admin.posts.create')"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    إضافة موضوع
                    <svg
                        class="w-5 ml-2"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                        />
                    </svg>
                </inertia-link>
            </div>
        </div>

    </div>


    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container">
            <!--begin::Tables Widget 11-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <Success/>

                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                     <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path
                                  d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                  fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                              <path
                                  d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                  fill="#000000" fill-rule="nonzero"/>
                           </g>
                        </svg>
                     </span>
                                    <input type="text" data-kt-customer-table-filter="search"
                                           class="form-control form-control-solid w-250px ps-15" placeholder="بحث"/>
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                </div>
                                <div class="d-flex justify-content-end align-items-center d-none"
                                     data-kt-customer-table-toolbar="selected">
                                    <div class="fw-bolder me-5">
                                        <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                            data-kt-customer-table-select="delete_selected">Delete Selected
                                    </button>
                                </div>
                            </div>
                        </div>


                        <table id="kt_customers_table" class="table table-row-bordered gy-5">
                            <!--begin::Table head-->
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-4px rounded-start" style="margin: 40px">#الرقم</th>
                                <th class="min-w-4px">العنوان</th>
                                <th class="min-w-4px">الموضوع</th>
                                <th class="min-w-4px">الإجرائات</th>

                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                            <tr v-for="(post , counter ) in postsData" :key="post.id">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50px me-5">
                                            <a class="text-dark fw-bolder text-hover-primary mb-1 fs-6"
                                               style="margin: 20px">{{ counter + 1 }}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">
                                        {{ post.name }}</a>
                                </td>
                                <td>
                                    <a class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">
                                        {{ post.body }}</a>
                                </td>

                                <td>
                                    <inertia-link
                                        :href="route('admin.posts.edit', post.id)"
                                        class="btn btn-primary btn-sm m-1">
                                        <i class="bi bi-pencil-square" style="font-size:18px"></i>
                                    </inertia-link>

                                    <button
                                        @click.prevent="deletePost(post.id)"
                                        class="btn btn-danger btn-sm m-1">
                                        <i class="bi bi-trash" style="font-size:18px"></i></button>
                                </td>
                            </tr>

                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                        <tr v-if="!postsData.length">
                            <td rowspan="3" class="p-5">There is no results</td>
                        </tr>
                        <Paginate
                            v-if="postsData.length && posts.total > posts.per_page"
                            :from="posts.from"
                            :to="posts.to"
                            :total="posts.total"
                            :previous="posts.prev_page_url"
                            :next="posts.next_page_url"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
import AdminLayout from "@/Layouts/Admin/Layout";
import Success from "@/Layouts/Admin/Success";
import Paginate from "@/Layouts/Admin/Paginate";

export default {
    layout: AdminLayout,
    props: ["posts"],
    data() {
        return {
            search: "",
        };
    },
    components: {Success, Paginate},
    computed: {
        postsData() {
            return this.posts.data;
        },
    },
    methods: {
        deletePost(postId) {
            this.$inertia.delete(route("admin.posts.destroy", postId), {
                onBefore: () => confirm("Are you sure you want to delete this post?"),
            });
        },
        searching() {
            this.$inertia.replace(
                route("admin.posts.index", {search: this.search})
            );
        },
    },
};
</script>

<style>
</style>
