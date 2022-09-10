<template>
    <div class="ag-basic-header-and-text " style="background-color: #86cfd5;">
        <b-container>
            <b-row class="agg-heading text-white justify-content-center">
                <h2 class="text-white">{{ content.data && content.data.ongoing_support }}</h2>
                <div class="ag-button-holder">
                    <a @click="() => this.$router.push({hash: '#pricing-block'}).catch(() => {})" class="agg-button agg-button--plain">GET STARTED</a>
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
        axios.get('api/content/why-allergenics').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
