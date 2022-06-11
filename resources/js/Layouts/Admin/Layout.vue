<template>



    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="flex h-screen bg-gray-200">
                        <!-- sidebar -->
                        <Sidebar/>
                        <!-- end sidebar -->
                        <div class="flex-1 flex flex-col overflow-hidden">
                            <!-- header -->
                            <Header/>
                            <Toolbar/>
                            <!-- end header -->
                            <!-- content -->

                            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                                <slot/>
                            </main>
                            <Footer/>
                            <!-- end content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</template>

<script>
import Header from "./Header.vue";
import Sidebar from "./Sidebar.vue";
import Toolbar from "./Toolbar";
import Footer from "./Footer.vue";

export default {
    components: {Sidebar, Header, Toolbar, Footer},
};
</script>
