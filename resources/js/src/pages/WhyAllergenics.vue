<template>
    <div class="wrapper" role="document">
            <div class="content">
                <div class="main">
                    <BasicTextBlock
                        :header="content.data && content.data.experience_title"
                        :content="content.data && content.data.experience"
                    ></BasicTextBlock>
                    <Content></Content>
                    <CtaSection></CtaSection>
                    <Testimonials></Testimonials>
                    <!--Divider-->
                    <b-container>
                        <b-row no-gutters>
                            <hr class="w-100">
                        </b-row>
                    </b-container>

                    <PricingPlans></PricingPlans>
                    <StepsRow></StepsRow>
                </div>
            </div>
        </div>
</template>

<script>

import PricingPlans from "../components/shared/PricingPlans.vue";
import StepsRow from "../components/shared/StepsRow.vue";
import BasicTextBlock from "../components/shared/BasicTextBlock.vue";
import TestSections from "../components/shared/TestsSection.vue";
import Testimonials from "../components/shared/Testimonials.vue";
import CtaSection from "../components/why-allergenics/CtaSection.vue";
import Content from "../components/why-allergenics/Content.vue";
import axios from 'axios';

export default {
  name: 'WhyAllergenics',
    components: {
      PricingPlans,
      StepsRow,
      BasicTextBlock,
      TestSections,
      Testimonials,
      CtaSection,
      Content
    },
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/why-allergenics').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
