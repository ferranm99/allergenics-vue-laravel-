<template>
    <div class="ag-basic-header-and-text" style="background-color: #fe797e;">
        <b-container>
            <b-row>
                <div class="agg-heading text-white">
                    <h2 v-if="content.data && content.data.start_journey_title.length" class="text-white">
                        {{ content.data && content.data.start_journey_title }}
                    </h2>
                    <p v-if="content.data && content.data.start_journey_content.length" class="text-center"
                       v-html="content.data && content.data.start_journey_content">
                    </p>
                    <div class="ag-button-holder">
                        <b-link @click="() => this.$router.push({hash: '#pricing-block'}).catch(() => {})" class="agg-button agg-button--plain">Order Your Test</b-link>
                    </div>
                </div>
            </b-row>
        </b-container>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'StartJourney',
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

</style>
