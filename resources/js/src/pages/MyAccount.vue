<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div v-if="!['incomplete-questionnaires'].includes($route.name)" class="ag-form-block my-account-content">
                    <b-container>
                        <b-row>
                            <b-col cols="12" md="4">
                                <div>
                                    <b-nav vertical class="my-account-nav pl-3 mb-4 mb-md-0">
                                        <b-nav-item @click="() => this.$router.push({ name: 'my-account-home' }).catch(() => {})"
                                                    exact
                                                    exact-active-class="active">
                                            My Account
                                        </b-nav-item>
                                        <b-nav-item @click="() => this.$router.push({ name: 'orders' }).catch(() => {})"
                                                    exact
                                                    exact-active-class="active">
                                            Orders
                                        </b-nav-item>
                                        <b-nav-item @click="() => this.$router.push({ name: 'edit-account' }).catch(() => {})"
                                                    exact
                                                    exact-active-class="active">
                                            Account Details
                                        </b-nav-item>
                                        <b-nav-item to="/logout">
                                            Logout
                                        </b-nav-item>
                                        <b-nav-item @click="() => this.$router.push({ name: 'incomplete-questionnaires' }).catch(() => {})"
                                                    exact
                                                    exact-active-class="active">
                                            Incomplete questionnaires
                                        </b-nav-item>
                                    </b-nav>
                                </div>
                            </b-col>

                            <b-col cols="12" md="8">
                                <router-view></router-view>
                            </b-col>
                        </b-row>
                    </b-container>
                </div>

                <div v-if="['incomplete-questionnaires'].includes($route.name)">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


export default {
  name: 'MyAccount'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
