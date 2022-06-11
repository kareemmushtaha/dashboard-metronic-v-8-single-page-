<template>
    <div class="alert alert-success" role="alert" style="margin: 50px" v-if="message && isOpen">
        {{ message }}
<!--        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>-->
    </div>
</template>

<script>
export default {
    data() {
        return {
            isOpen: true,
        };
    },
    computed: {
        message() {
            return this.$page.props.message;
        },
    },
    mounted() {
        setTimeout(() => {
            this.isOpen = false;
        }, 3000);
    },
};
</script>
