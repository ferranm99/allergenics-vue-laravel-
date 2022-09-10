<template>
    <div class="ag-basic-header-and-text agg-has-bg">
        <div class="agg-bg-image">
            <b-img :src="require('../../assets/images/order-now-background.jpeg').default" fluid alt="A family of 3 having a good walk in the outdoors"></b-img>
        </div>
        <b-container>
            <b-row>
                <div class="agg-heading text-white">
                    <h2 class="text-white mb-3"
                        v-if="content.data && content.data.cta_title.length">
                        {{ content.data && content.data.cta_title }}
                    </h2>
                    <p v-if="content.data && content.data.cta_content.length">
                        {{ content.data && content.data.cta_content }}
                    </p>

                    <div class="ag-button-holder">
                        <b-link to="/#pricing-block" class="agg-button agg-button--plain">Order your test</b-link>
                    </div>
                </div>
            </b-row>
        </b-container>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'CtaSections',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/region/6').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.agg-bg-image img {
    object-fit: cover;
    object-position: center;
    width: 100%;
    height: 100%;
    max-height: 100%;
}
</style>
