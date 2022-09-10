<template>
    <div>

<!--        Edit Address View-->
        <div v-if="!['billing' , 'shipping'].includes($route.name)">
            <p>The following addresses will be used on the checkout page by default.</p>

            <b-row class="addresses">

                <b-col cols="12" md="6">
                    <div class="title d-flex justify-content-between">
                        <h3>Billing address</h3>
                        <b-link @click="() => this.$router.push({ name: 'billing' }).catch(() => {})" class="edit">Edit</b-link>
                    </div>
                    <address>Billy Bob<br>15B Koha Road<br>Taupo 3330</address>
                </b-col>

                <b-col cols="12" md="6">
                    <div class="title d-flex justify-content-between">
                        <h3>Shipping address</h3>
                        <b-link @click="() => this.$router.push({ name: 'shipping' }).catch(() => {})" class="edit">Edit</b-link>
                    </div>
                    <address>Australia</address>
                </b-col>
            </b-row>
        </div>


<!--        Edit Billing Address View-->
        <div v-if="['billing' , 'shipping'].includes($route.name)">
            <router-view></router-view>
        </div>

    </div>
</template>

<script>

export default {
  name: 'EditAddress'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    address {
        font-style: italic;
    }
</style>
