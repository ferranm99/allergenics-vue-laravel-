<template>
    <div class="wrapper" role="document">
            <div class="content">
                <div class="main">
                    <b-container>

                        <div class="ag-testimonials-inner">

                            <header class="agg-heading">
                                <h1>{{ content.data && content.data.testimonials_page_title }}</h1>
                            </header>

                            <b-row>

                                <b-col cols="12" md="6" v-for="item in content.data.testimonials_slide" :key="item.key">
                                    <div class="ag-testimonial-container">
                                        <span class="ag-quote float-left">
                                          <b-img :src="require('../assets/images/icon-quote.svg').default" fluid alt="Quotes"></b-img>
                                        </span>

                                        <div class="ag-testimonial-content">
                                            <p><span v-html="item.attributes.content"></span></p>
                                            <p class="ag-testimonial-name">
                                                <span>{{ item.attributes.name }}</span>
                                                <span v-if="item.attributes.date">, {{ item.attributes.date }}</span>
                                            </p>
                                            <p class="ag-testimonial-place">
                                                <span v-if="item.attributes.city">{{ item.attributes.city }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </b-col>

                            </b-row>

                        </div>

                    </b-container>

                </div>
            </div>
        </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'Testimonials',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/region/3').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

//TESTIMONIALS PAGE

.ag-testimonials-inner {
    margin: 80px 0;
    @include media-breakpoint-down(md) {
        margin: 40px 0;
    }
    .agg-heading{
        @include media-breakpoint-down(md) {
            padding-bottom: 10px;
        }
        h2{
            margin-bottom: 0;
        }
    }
}

.ag-testimonial-container{
    padding: 35px 0;
    .ag-quote{
        float: left;
        margin-right: 15px;
        svg{
            width: 48px;
            height: 48px;
            .st0{
                fill:$green;
            }
        }
    }
    .ag-testimonial-content{
        width: calc(100% - 65px);
        float: left;
        .ag-testimonial-name{
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 0;
            line-height: 1.2;
        }
        .ag-testimonial-place{
            font-size: 15px;
            margin-bottom: 0;
            line-height: 1.2;
        }
    }
}

.ag-testimonial-heading.agg-heading{
    padding: 35px 10px 0 10px;
    @include media-breakpoint-up(md) {
        padding: 65px 0 0 0;
    }
}

.ag-quote img {
    width: 48px;
    height: auto;
    display: block;
}


</style>
