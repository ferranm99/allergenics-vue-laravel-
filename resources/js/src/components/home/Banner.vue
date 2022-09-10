<template>
    <section class="ag-banner">
        <div class="agg-bg-image ag-has-overlay">
            <b-img
                :src="content.data && content.data.home_banner_image.original_url"
                fluid
                :alt="content.data && content.data.home_banner_image.custom_properties.alt">
            </b-img>
        </div>
        <div class="agg-center-wrap">
            <div class="agg-center-hold">
                <b-container>
                    <div class="ag-banner-text">
                        <h1>{{ content.data && content.data.banner_title }}</h1>
                            <p>New Zealand’s <strong>No.1</strong> Food Intolerance Testing Service.</p>
                        <div class="ag-button-holder">
                            <vue-aos animation-class="zoomIn animated fast">
                                <b-link @click="() => this.$router.push({hash: '#pricing-block'}).catch(() => {})" class="agg-button agg-button--red">Get Started</b-link>
                            </vue-aos>
                        </div>

                        <p class="ag-under-button-text">{{ content.data && content.data.banner_subtitle }}</p>
                    </div>
                </b-container>
            </div>
        </div>
    </section>
</template>

<script>
// import Logo from "./Logo.vue";

import axios from "axios";

export default {
  name: 'Banner',
    components: {
      // Logo
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
<style scoped>


</style>
