<template>
    <div>
        <TestsBanner
            :title="content.data && content.data.banner_overlay"
            :image="content.data && content.data.food_banner_image.file_name"
            :image_alt="content.data && content.data.food_banner_image.custom_properties.alt"
        ></TestsBanner>

        <div class="wrapper" role="document">
            <div class="content">
                <div class="main">

                    <div class="ag-basic-header-and-text">
                        <b-container>
                            <div class="agg-heading">
                                <h1>{{ content.data && content.data.food_title }}</h1>

                                <p v-html="content.data && content.data.food_content"></p>

                                <h3>{{ content.data && content.data.symptoms_title }}</h3>

                                <p v-html="content.data && content.data.symptoms_content"></p>

                                <h3>{{ content.data && content.data.diets_title }}</h3>

                                <p v-html="content.data && content.data.diets_content"></p>

                                <h3>{{ content.data && content.data.difference_title }}</h3>

                                <p v-html="content.data && content.data.difference_content"></p>

                                <h3>{{ content.data && content.data.use_test_title }}</h3>

                                <p v-html="content.data && content.data.use_test_content"></p>
                            </div>
                        </b-container>
                    </div>

                    <ImproveLife></ImproveLife>

                    <TestsMainContent
                        :title="content.data && content.data.who_should_test"
                        :image="content.data && content.data.food_who_image.file_name"
                        :image_alt="content.data && content.data.food_who_image.custom_properties.alt"
                        :content='content.data && content.data.who_should_content'
                        :list='content.data && content.data.who_should_list'
                    >
                    </TestsMainContent>

                    <TestsMainContent
                        :title="content.data && content.data.what_results_tell"
                        :image="content.data && content.data.food_what_results_image.file_name"
                        :image_alt="content.data && content.data.food_what_results_image.custom_properties.alt"
                        :content='content.data && content.data.what_results_content'
                        :list='content.data && content.data.what_results_list'
                        sample_link="Download sample report"
                        :sample_href="content.data && content.data.test_pdf_path">
                    </TestsMainContent>

                    <TestsMainContent
                        :title="content.data && content.data.next_steps"
                        :image="content.data && content.data.food_next_steps_image.file_name"
                        :image_alt="content.data && content.data.food_next_steps_image.custom_properties.alt"
                        :content='content.data && content.data.next_steps_content'
                        :list='content.data && content.data.next_steps_list'
                    >
                    </TestsMainContent>

                    <FullListTested
                        :content='content.data && content.data.full_list_tested'>
                    </FullListTested>

                    <Testimonials></Testimonials>

                    <b-container>
                        <hr class="m-0">
                    </b-container>

                    <PricingPlans></PricingPlans>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import BasicTextLarge from "../components/tests/BasicTextLarge.vue";
import TestsBanner from "../components/tests/TestsBanner.vue";
import ImproveLife from "../components/tests/ImproveLife.vue";
import TestsMainContent from "../components/tests/TestsMainContent.vue";
import FullListTested from "../components/tests/FullListTested.vue";
import Testimonials from "../components/shared/Testimonials.vue";
import PricingPlans from "../components/shared/PricingPlans.vue";
import axios from "axios";

export default {
  name: 'FoodAndEnvironmental',
    components: {
        BasicTextLarge,
        TestsBanner,
        ImproveLife,
        TestsMainContent,
        FullListTested,
        Testimonials,
        PricingPlans,
    },
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/food-and-environmental-sensitivity-test').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
