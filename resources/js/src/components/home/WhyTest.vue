<template>
    <div>
<!--        Why Should I get Hair Test-->
        <div class="ag-basic-header-and-text ">
            <b-container>
                <div class="agg-heading">
                    <h2 v-if="content.data && content.data.why_title.length" class="mb-3">
                        {{ content.data && content.data.why_title }}
                    </h2>
                    <p v-if="content.data && content.data.why_content.length" class="text-center"
                    v-html="content.data && content.data.why_content">
                    </p>
                </div>
            </b-container>
        </div>

<!--        Four Icon Columns-->
        <b-container class="four-columns-image-with-text">
            <b-row class="flex-row">
                <b-col cols="12" sm="6" md="3">
                    <div class="image-with-text-column">
                        <div class="ag-image-wrap">
                            <b-img :src="require('../../assets/images/icon_scissors2.svg').default" fluid alt="A pair of green scissors"></b-img>
                        </div>
                        <h3>{{ content.data && content.data.why_column[0].attributes.title }}</h3>
                        <p>{{ content.data && content.data.why_column[0].attributes.content }}</p>
                    </div>
                </b-col>
                <b-col cols="12" sm="6" md="3">
                    <div class="image-with-text-column">
                        <div class="ag-image-wrap">
                            <b-img :src="require('../../assets/images/icon_thumbsup2.svg').default" fluid alt="Thumbs Up"></b-img>
                        </div>
                        <h3>{{ content.data && content.data.why_column[1].attributes.title }}</h3>
                        <p>{{ content.data && content.data.why_column[1].attributes.content }}</p>
                    </div>
                </b-col>
                <b-col cols="12" sm="6" md="3">
                    <div class="image-with-text-column">
                        <div class="ag-image-wrap">
                            <b-img :src="require('../../assets/images/icon_dollar2.svg').default" fluid alt="Dollar"></b-img>
                        </div>
                        <h3>{{ content.data && content.data.why_column[2].attributes.title }}</h3>
                        <p>{{ content.data && content.data.why_column[2].attributes.content }}</p>
                    </div>
                </b-col>
                <b-col cols="12" sm="6" md="3">
                    <div class="image-with-text-column">
                        <div class="ag-image-wrap">
                            <b-img :src="require('../../assets/images/icon_noninvasive2.svg').default" fluid alt="Non_Invasive"></b-img>
                        </div>
                        <h3>{{ content.data && content.data.why_column[3].attributes.title }}</h3>
                        <p>{{ content.data && content.data.why_column[3].attributes.content }}</p>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </div>

</template>

<script>

import axios from "axios";

export default {
  name: 'WhyTest',
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
@import "../../../../sass/_variables";

.four-columns-image-with-text {
    margin-bottom: 40px;
    .image-with-text-column {
        text-align: center;
        font-size: 14px;
        line-height: 1.36;
        max-width: 252px;
        margin: 0 auto;

        .ag-image-wrap {
            height: 85px;
            white-space: nowrap;
            margin: 0 0 6px;

            img {
                width: 61px;
            }

            &:before {
                content: '';
                display: inline-block;
                vertical-align: middle;
                height: 100%;
            }

            img {
                display: inline-block;
                vertical-align: middle;
            }
        }

        h3 {
            font-size: 21px;
            color: $green;
        }
    }
}

</style>
