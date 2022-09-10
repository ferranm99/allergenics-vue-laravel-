<template>
    <div>
        <div class="ag-basic-header-and-text" style="background-color: #349da1;">
            <b-container>
                <div class="agg-heading text-center text-white">
                    <h2 v-if="content.data && content.data.fast_title.length" class="text-white">
                        {{ content.data && content.data.fast_title }}
                    </h2>

                    <vue-aos animation-class="rotateIn animated faster">
                        <b-img loading="lazy" class="icon-turnaround" :src="require('../../assets/images/icon_turnaround.svg').default" fluid alt="Fast Turnaround"></b-img>
                    </vue-aos>
                    <p v-if="content.data && content.data.fast_content.length" class="text-center"
                       v-html="content.data && content.data.fast_content">
                    </p>
                </div>
            </b-container>
        </div>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'FastTurnaround',
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

.icon-turnaround {
    height: 62px;
    width: 62px;
    margin: 50px auto;
}

</style>
