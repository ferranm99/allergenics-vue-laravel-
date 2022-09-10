<template>
    <div class="wrapper" role="document">
        <div class="content">
            <main class="main">
                <div class="ag-basic-header-and-text">
                    <b-container>
                        <div class="agg-heading">
                            <h1>Contact us</h1>
                        </div>
                    </b-container>
                </div>
                <b-container class="mt-4">
                    <b-row>
                        <b-col cols="12" md="6">
                            <p v-if="content.data && content.data.contact_general.length"
                                v-html="content.data && content.data.contact_general"></p>

                            <p>The answer to your question might already be here<br>
                                – have you seen our <b-link @click="() => this.$router.push({ name: 'faqs' })" target="_blank">FAQs</b-link> page?</p>
                        </b-col>

                        <b-col cols="12" md="6">
                            <p><strong>Where to send your sample</strong><br>
                                Please send samples to the address below:</p>
                            <b-row>
                                <b-col cols="6">
                                    <p v-if="content.data && content.data.contact_post.length"
                                       v-html="content.data && content.data.contact_post"></p>
                                </b-col>
                                <b-col cols="6">
                                    <p v-if="content.data && content.data.contact_courier.length"
                                       v-html="content.data && content.data.contact_courier"></p>
                                </b-col>
                            </b-row>
                        </b-col>
                    </b-row>
                </b-container>
            </main>
        </div>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'Contact',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/region/7').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
