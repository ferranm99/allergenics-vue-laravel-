<template>
    <div class="ag-basic-header-and-text" style="background-color: #f2f2f2;">
        <b-container>
            <div class="agg-heading">
                <h2 v-if="content.data && content.data.improve_life_title.length">
                    {{ content.data && content.data.improve_life_title }}
                </h2>
                <p v-if="content.data && content.data.improve_life_content.length"
                   v-html="content.data && content.data.improve_life_content"></p>
                <div class="ag-button-holder">
                    <b-link @click="() => this.$router.push({hash: '#pricing-block'}).catch(() => {})" class="agg-button agg-button--outline-light">Order your test</b-link>
                </div>
            </div>
        </b-container>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'ImproveLife',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/region/5').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

</style>
