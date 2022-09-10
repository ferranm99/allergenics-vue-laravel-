<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div class="agg-content-holder">
                    <b-container>
                        <b-row>
                            <b-col cols="12" sm="10" md="8" class="mx-auto">
                                <div class="ag-faq-holder">
                                    <h1>{{ content.data && content.data.faqs_title }}</h1>
                                    <p v-html="content.data && content.data.faqs_content"></p>
                                    <div class="ag-faq-wrap">
                                        <h3>{{ content.data && content.data.hair_sample }}</h3>

                                        <ul v-if="content.data && content.data.faqs_hair_row.length" class="ag-faq-list accordion" role="tablist">

                                            <li v-for="(item, index) in content.data.faqs_hair_row" :key="item.key">
                                                <h3 class="ag-faq__heading">
                                                    <b-link class="opener" v-b-toggle="String(index)">
                                                        {{ item.attributes.question }}
                                                    </b-link>
                                                </h3>
                                                <b-collapse
                                                    :id="String(index)"
                                                    class="ag-faq-holder" accordion="my-accordion" role="tabpanel">
                                                    <div class="ag-faq-txtbox">
                                                        <div class="ag-txthold">
                                                            <p v-html="item.attributes.answer"></p>
                                                        </div>
                                                    </div>
                                                </b-collapse>
                                            </li>

                                        </ul>

                                    </div><!--ag-faq-wrap-->

                                    <div class="ag-faq-wrap">

                                        <h3>{{ content.data && content.data.food_questions }}</h3>

                                        <ul v-if="content.data && content.data.faqs_food_row.length" class="ag-faq-list accordion" role="tablist">

                                            <li v-for="(item, index) in content.data.faqs_food_row" :key="item.key">
                                                <h3 class="ag-faq__heading">
                                                    <b-link class="opener" v-b-toggle="String(index)">
                                                        {{ item.attributes.question }}
                                                    </b-link>
                                                </h3>
                                                <b-collapse
                                                    :id="String(index)"
                                                    class="ag-faq-holder" accordion="my-accordion" role="tabpanel">
                                                    <div class="ag-faq-txtbox">
                                                        <div class="ag-txthold">
                                                            <p v-html="item.attributes.answer"></p>
                                                        </div>
                                                    </div>
                                                </b-collapse>
                                            </li>

                                        </ul>

                                    </div><!--ag-faq-wrap-->
                                </div>
                            </b-col>
                        </b-row>
                    </b-container>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'Faqs',
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/faqs').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

.ag-faq-holder {
    h2, h1 {
        color: $green;
        font-size: 30px;

        @include media-breakpoint-up(md) {
            font-size: 33px;
        }
    }
    h3 {
        font-size: 24px;
    }
}

.ag-faq-wrap {
    padding-top: 20px;

    >h3 {
        margin-bottom: 30px;
    }
}

.ag-faq-list {
    @extend .listreset;
    padding-bottom: 40px;

    li {
        padding-bottom: 20px;

        a.collapsed {
            &:before {
                transform: rotate(0);
            }
        }
    }

    h3 {
        font-size: 18px;
        padding: 0 0 0 10px;

        a {
            display: inline-block;
            vertical-align: top;
            padding-left: 25px;
            position: relative;

            &:before {
                content: '';
                position: absolute;
                left: 0;
                top: 5px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 5px 5px 0;
                border-color: $green transparent transparent;
                transition: transform 0.3s;
                transform: rotate(-90deg);
            }
        }
    }

    .ag-faq-holder {
        overflow: hidden;
        padding: 0 35px;
    }
}

.ag-faq-txtbox {
    @extend .clearfix;

    .ag-img-box {
        text-align: center;
        margin-bottom: 20px;

        @include media-breakpoint-up(sm) {
            float: right;
            margin: 0 0 0 20px;
            max-width: 250px;
        }
    }
}

.fade {
    opacity: 0;
    @extend .transition;

    &.show {
        opacity: 1;
    }
}

.collapse {
    display: none;
    &.show {
        display: block;
    }
}

tr {
    &.collapse.show {
        display: table-row;
    }
}

tbody {
    &.collapse.show {
        display: table-row-group;
    }
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    @extend .transition;
}
</style>
