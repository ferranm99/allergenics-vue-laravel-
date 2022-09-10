<template>

<!--        <b-button v-b-modal.modal-1>Payment error</b-button>-->
    <b-modal
        id="error-payment"
        class="error-modal"
        title="Payment error" :footer-bg-variant="'white'">
        <p class="my-4 text-danger">There is an error while processing your payment. Please contact us</p>

        <template #modal-footer="{ ok }">
            <b-button class="agg-button agg-button--red" size="sm" @click="ok()">
                Close
            </b-button>
        </template>
    </b-modal>
</template>

<script>
export default {
    name: 'ErrorPayment',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
</style>
