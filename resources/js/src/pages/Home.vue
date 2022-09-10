<template>
    <div class="home">
        <Banner></Banner>
        <div class="wrapper" role="document">
            <div class="content">
                <div class="main">
                    <WhyTest></WhyTest>
                    <FastTurnaround></FastTurnaround>
                    <PricingPlans></PricingPlans>
                    <StepsRow></StepsRow>

                    <b-container>
                        <hr>
                    </b-container>

                    <BasicTextBlock
                        title="Choose one of our 5 proven tests"
                        content="These days it can be a real struggle to maintain a good balanced diet and healthy lifestyle. When you’re not feeling right it can sometimes be hard to find the underlying reasons. Allergenics tests will help unlock that picture for you."
                    ></BasicTextBlock>
                    <TestSections></TestSections>
                    <StartJourney></StartJourney>
                    <Testimonials></Testimonials>
                    <OurTeam></OurTeam>
                    <CtaSection></CtaSection>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Banner from "../components/home/Banner.vue";
import WhyTest from "../components/home/WhyTest.vue";
import FastTurnaround from "../components/home/FastTurnaround.vue";
import StartJourney from "../components/home/StartJourney.vue";
import OurTeam from "../components/home/OurTeam.vue";
import PricingPlans from "../components/shared/PricingPlans.vue";
import StepsRow from "../components/shared/StepsRow.vue";
import BasicTextBlock from "../components/shared/BasicTextBlock.vue";
import TestSections from "../components/shared/TestsSection.vue";
import Testimonials from "../components/shared/Testimonials.vue";
import CtaSection from "../components/shared/CtaSection.vue";
import axios from "axios";

export default {
  name: 'Home',
    components: {
      Banner,
      WhyTest,
      FastTurnaround,
      StartJourney,
      OurTeam,
      PricingPlans,
      StepsRow,
      BasicTextBlock,
      TestSections,
      Testimonials,
      CtaSection
    },
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/home').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

#header.scrolling {
    background: #fff;
}

</style>
