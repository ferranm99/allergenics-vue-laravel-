<template>
    <div>
        <b-container class="agg-pricing-block">
            <!--Link anchor-->
            <div id="pricing-block"></div>

            <b-row no-gutters>
                <b-col cols="12" sm="8" lg="6" class="mx-auto">
                    <div class="agg-heading">
                        <h2 v-if="content.data && content.data.price_plans_title.length">
                            {{ content.data && content.data.price_plans_title }}
                        </h2>
                    </div>

                    <div v-if="content.data && content.data.plans_content.length"
                         v-html="content.data && content.data.plans_content" class="pricing-plans-list"></div>
                </b-col>
            </b-row>

            <b-row no-gutters>
                <b-col cols="12" lg="10" class="mx-auto">
                    <!--Pricing Tiles-->
                    <b-row class="tiles-row">
                        <!--First tile-->
                        <b-col cols="12" md="4">
                            <div class="agg-plans-tile">
                                <h3>1 Test</h3>
                                <div v-html="content.data && content.data.pricing_columns[0].attributes.columns_content"></div>

                                <div class="price-large">
                                    {{ content.data && content.data.pricing_columns[0].attributes.full_price }}
                                </div>

                                <!--Order Link-->
                                <a class="agg-button agg-button--filled-green" href="https://allergenicstesting.com/start-here/4Yw7Kfs69wf/?pref=148&amp;extra=hm">Order now</a>
                            </div>
                        </b-col><!--First tile-->

                        <!--Second tile-->
                        <b-col cols="12" md="4">
                            <div class="agg-plans-tile most-popular">
                                <h3>2 Tests <span>save 13%</span></h3>
                                <div v-html="content.data && content.data.pricing_columns[1].attributes.columns_content"></div>

                                <div class="price-discount">
                                    {{ content.data && content.data.pricing_columns[1].attributes.discount_price }}
                                </div>

                                <div class="price-large">
                                    {{ content.data && content.data.pricing_columns[1].attributes.full_price }}
                                </div>

                                <!--Order Link-->
                                <a class="agg-button agg-button--red" href="https://allergenicstesting.com/start-here/4Yw7Kfs69wf/?pref=148,gender&amp;extra=hm">Order now</a>
                            </div>
                        </b-col><!--Second tile-->

                        <!--Third tile-->
                        <b-col cols="12" md="4">
                            <div class="agg-plans-tile">
                                <h3>4 Tests <span>save 20%</span></h3>
                                <div v-html="content.data && content.data.pricing_columns[2].attributes.columns_content"></div>

                                <div class="price-discount">
                                    {{ content.data && content.data.pricing_columns[2].attributes.discount_price }}
                                </div>

                                <div class="price-large">
                                    {{ content.data && content.data.pricing_columns[2].attributes.full_price }}
                                </div>

                                <!--Order Link-->
                                <a class="agg-button agg-button--filled-green" href="https://allergenicstesting.com/start-here/4Yw7Kfs69wf/?pref=148,150,153,gender&amp;extra=hm">Order now</a>
                            </div>
                        </b-col><!--Third tile-->
                    </b-row>

                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'PricingPlans',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/region/2').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
