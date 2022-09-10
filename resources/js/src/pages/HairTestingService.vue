<template>
    <div class="wrapper" role="document">
            <div class="content">
                <div class="main">
<!--                    <BasicTextLarge></BasicTextLarge>-->
                    <div class="ag-basic-header-and-text">
                        <b-container>
                            <div class="agg-heading">
                                <h1>{{ content.data && content.data.main_title }}</h1>

                                <p v-html="content.data && content.data.hair_testing_content"></p>

                                <h2>{{ content.data && content.data.learn_more_title }}</h2>

                                <p v-html="content.data && content.data.learn_more_content"></p>

                                <h2>{{ content.data && content.data.immediate_title }}</h2>

                                <p v-html="content.data && content.data.immediate_content"></p>

                                <h2>{{ content.data && content.data.healthcare_professionals_title }}</h2>

                                <p v-html="content.data && content.data.healthcare_professionals_content"></p>
                            </div>
                        </b-container>
                    </div>

                    <TestsSection></TestsSection>
                    <Testimonials></Testimonials>

                    <b-container>
                        <hr class="m-0">
                    </b-container>

                    <PricingPlans></PricingPlans>
                    <StepsRow></StepsRow>
                </div>
            </div>
        </div>
</template>

<script>

import BasicTextLarge from "../components/tests/BasicTextLarge.vue";
import TestsSection from "../components/shared/TestsSection.vue";
import Testimonials from "../components/shared/Testimonials.vue";
import PricingPlans from "../components/shared/PricingPlans.vue";
import StepsRow from "../components/shared/StepsRow.vue";
import axios from "axios";

export default {
  name: 'HairTestingService',
    components: {
        BasicTextLarge,
        TestsSection,
        Testimonials,
        PricingPlans,
        StepsRow
    },
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/hair-testing-service').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.ag-basic-header-and-text {
    min-height: 100vh;
}
</style>
