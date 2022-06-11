<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" direction="rtl" dir="rtl" style="direction: rtl">

@include('includes.head')

<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->

@inertia

<!--end::Modals-->
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/js/custom/documentation/general/datatables/basic.js')}}"></script>
<script src="{{asset('assets/js/custom/documentation/documentation.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
<!--end::Page Custom Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{asset('assets/js/custom/apps/customers/list/export.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/customers/list/list.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/customers/add.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
@yield('script')

</body>


</html>
