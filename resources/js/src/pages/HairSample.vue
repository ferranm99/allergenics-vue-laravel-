<template>
    <div class="wrapper" role="document">
            <div class="content">
                <div class="main">

                    <div class="agg-content-holder">
                        <b-container>
                            <div class="ag-text-container">
                                <h1 v-if="content.data && content.data.hair_sample_title.length">
                                    {{ content.data && content.data.hair_sample_title }}
                                </h1>
                                <b-row>
                                    <b-col cols="12" sm="6" md="7">
                                       <div
                                           v-if="content.data && content.data.hair_sample_content.length"
                                           v-html="content.data && content.data.hair_sample_content"></div>
                                    </b-col>
                                    <b-col cols="12" sm="6" md="5">
                                        <div class="ag-img-wrap pt-0">
                                            <b-img
                                                :src="content.data && content.data.hair_sample_image.original_url"
                                                fluid
                                                :alt="content.data && content.data.hair_sample_image.custom_properties.alt">
                                            </b-img>
                                        </div>
                                    </b-col>
                                </b-row>
                            </div>
                        </b-container>
                    </div>

                    <CtaSection></CtaSection>
                    <Testimonials></Testimonials>

                </div>
            </div>
        </div>
</template>

<script>
import Testimonials from "../components/shared/Testimonials.vue";
import CtaSection from "../components/shared/CtaSection.vue";
import axios from "axios";

export default {
  name: 'HairSample',
    components: {
      Testimonials,
      CtaSection,
    },
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/hair-sample').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">




</style>
