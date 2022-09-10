<template>
    <div class="two-fullwidth-tiles-wrapper">
        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img :src="require('../../assets/images/food-and-env.jpeg').default" fluid alt="Healthy breakfast cereal with salmon and assorted healthy vegetables"></b-img>
                    </div>
                    <div class="ag-text-hold">
                        <div class="ag-text">
                            <vue-aos animation-class="fadeInLeft animated faster">
                                <h2>{{ content.data && content.data.food_img_overlay }}</h2>
                            </vue-aos>

                        </div>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <p v-html="content.data && content.data.food_content"></p>

                    <b-link @click="() => this.$router.push({ name: 'food-and-environmental-sensitivity-test' }).catch(() => {})" class="agg-button agg-button--outline-green">Find out more</b-link>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img :src="require('../../assets/images/optimum-nutrition.jpeg').default" fluid alt="A variety of fruits and vegetables in a wooden bowl"></b-img>
                    </div>
                    <div class="ag-text-hold">
                        <div class="ag-text">
                            <vue-aos animation-class="fadeInRight animated faster">
                                <h2>{{ content.data && content.data.nutrition_img_overlay }}</h2>
                            </vue-aos>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <p  v-html="content.data && content.data.nutrition_content"></p>

                    <b-link @click="() => this.$router.push({ name: 'optimum-nutrition-test' }).catch(() => {})" class="agg-button agg-button--outline-green">Find out more</b-link>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img :src="require('../../assets/images/womens-health.jpeg').default" fluid alt="Picture of a beautiful woman wearing white shirt in the outdoors"></b-img>
                    </div>
                    <div class="ag-text-hold">
                        <div class="ag-text">
                            <vue-aos animation-class="fadeInLeft animated faster">
                                <h2>{{ content.data && content.data.womens_img_overlay }}</h2>
                            </vue-aos>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <p  v-html="content.data && content.data.womens_content"></p>

                    <b-link @click="() => this.$router.push({ name: 'comprehensive-womens-health-test' }).catch(() => {})" class="agg-button agg-button--outline-green">Find out more</b-link>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img :src="require('../../assets/images/mens-health.jpeg').default" fluid alt="Picture of an athletic man jogging in the outdoors"></b-img>
                    </div>
                    <div class="ag-text-hold">
                        <div class="ag-text">
                            <vue-aos animation-class="fadeInRight animated faster">
                                <h2>{{ content.data && content.data.mens_img_overlay }}</h2>
                            </vue-aos>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <p  v-html="content.data && content.data.mens_content"></p>

                    <b-link @click="() => this.$router.push({ name: 'comprehensive-mens-health-test' }).catch(() => {})" class="agg-button agg-button--outline-green">Find out more</b-link>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img :src="require('../../assets/images/sleep-and-mood.jpeg').default" fluid alt="Picture of a pretty young woman sleeping in bed"></b-img>
                    </div>
                    <div class="ag-text-hold">
                        <div class="ag-text">
                            <vue-aos animation-class="fadeInLeft animated faster">
                                <h2>{{ content.data && content.data.sleep_img_overlay }}</h2>
                            </vue-aos>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <p v-html="content.data && content.data.sleep_content"></p>

                    <b-link @click="() => this.$router.push({ name: 'sleep-and-mood-test' }).catch(() => {})" class="agg-button agg-button--outline-green">Find out more</b-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'TestSections',
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
@import "../../../../sass/_variables";
@import "../../../../sass/_mixins";

.two-fullwidth-tiles {
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    background: $gray-light;
    font-weight: 300;
    position: relative;

    .ag-text-hold {
        overflow: hidden;
    }

    &.white {
        background: $white;
    }

    @include media-breakpoint-up(lg) {
        min-height: 330px;
    }

    &.inverse {
        &:nth-child(odd) {
            background: $white;

            @include media-breakpoint-up(md) {
                flex-direction: row-reverse;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
            }

            .ag-image-holder {
                left: auto;
                right: 0;
            }

            .ag-text-content {
                @include media-breakpoint-up(md) {
                    margin: 0 auto;
                }
            }
        }
    }

    &:not(.inverse) {
        &:nth-child(even) {
            background: $white;

            @include media-breakpoint-up(md) {
                flex-direction: row-reverse;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
            }

            .ag-image-holder {
                left: auto;
                right: 0;
            }

            .ag-text-content {
                @include media-breakpoint-up(md) {
                    margin: 0 auto;
                }
            }
        }
    }


    .ag-column {
        width: 100%;
        flex: 0 0 100%;
        -ms-flex: 0 0 100%;
        -webkit-flex: 0 0 100%;
        position: relative;
        max-width: 100%;

        @include media-breakpoint-up(md) {
            width: 50%;
            flex: 0 0 50%;
            -ms-flex: 0 0 50%;
            -webkit-flex: 0 0 50%;
            max-width: 50%;
        }
        &.ag-with-text{
            @include media-breakpoint-up(md) {
                align-self: center;
            }
        }
    }

    .ag-image-holder {
        position: relative;

        @include media-breakpoint-up(md) {
            position: absolute;
            left: 0;
            width: 100%;
            top: 0;
            bottom: 0;
        }

        @include media-breakpoint-up(xl) {
            position: relative;
            width: auto;
            height: 100%;
        }
    }

    .agg-bg-image {
        z-index: 1;
        height: 100%;

        @include media-breakpoint-down(md) {
            position: relative;
        }

        @include media-breakpoint-up(xl) {
            position: relative;
        }

        img {
            width: 100%;
            object-fit: cover;
            object-position: center;
            height: 100%;
            max-height: 100%;
            max-width: 100%;
        }
    }

    .ag-text-hold {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 100%;
        z-index: 2;
        white-space: nowrap;
        padding: 20px;
        text-align: center;

        &:before {
            content: '';
            display: inline-block;
            vertical-align: middle;
            height: 100%;
            margin-left: -0.25em;
        }

        &:after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: rgba(#414042, 0.5);
        }

        .ag-text {
            display: inline-block;
            vertical-align: middle;
            white-space: normal;
            position: relative;
            z-index: 3;
        }
    }

    h2 {
        margin: 0;
        color: $white;
    }

    .ag-text-content {
        padding: 25px 15px 35px;
        position: relative;
        text-align: center;

        @include media-breakpoint-down(md) {
            .ag-list{
                display: inline-block;
                width: auto;
                text-align: center;
                li{
                    display: block;
                    width: auto;
                    text-align: left;
                }
            }
        }
        @include media-breakpoint-up(md) {
            max-width: 85%;
            margin: 0 auto;
            padding: 30px 0;
            text-align: left;
        }
        @include media-breakpoint-up(lg) {
            max-width: 70%;
            position: relative;
        }

        .ag-title {
            display: block;
            font-weight: 500;
        }
    }

    p {
        margin-bottom: 35px;
    }
}

.why-allergenics,
.practitioner,
.practitioner-register {
    .ag-text-content{
        h3{
            font-weight: 100;
            font-size: 25px;
            margin-bottom: 30px;
        }
    }
    .ag-text-hold:after{
        background: none;
    }

}

.page-template-products,
.single-product{

    .two-fullwidth-tiles.inverted{
        @include media-breakpoint-up(md) {
            flex-direction: row-reverse;
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
        }
        .ag-image-holder {
            left: auto;
            right: 0;
        }
        .ag-text-content {
            @include media-breakpoint-up(md) {
                margin: 0 auto;
            }
        }
    }

    div.two-fullwidth-tiles{
        background: $white;
    }
    .ag-text-hold:after{
        background: none;
    }
}


.practitioner,
.practitioner-register {
    .two-fullwidth-tiles{
        background: $light-green;
        &.inverted{
            background: $gray-light;
        }
        .ag-text-content{
            p{
                font-size: 20px;
            }
        }
    }
}


.practitioner-intro {
    margin-bottom: 60px;

    .ag-column.ag-with-text {
        text-align: center;
        h2 {
            color: $text-dark;
            margin-bottom: 20px;
        }
        &.white-bg {
            padding: 50px 0;
            background-color: #fff;

            .ag-text-content {
                text-align: center;
                @include media-breakpoint-up(lg) {
                    max-width: 90%;
                }
                @media(max-width:1500px) {
                    max-width: 100%;
                    padding: 0 15px;
                }
            }

            p {
                font-size: 1rem;
                @include media-breakpoint-up(lg) {
                    padding: 0 50px;
                }

            }
        }

        &.left-col {
            padding: 50px 0;

            .ag-text-content {
                text-align: center;

                h2 {
                    margin-bottom: 60px;
                }
            }
        }
    }
}


</style>
