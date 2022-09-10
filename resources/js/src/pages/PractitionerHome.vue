<template>
    <div class="wrapper" role="document">
            <div class="content">
                <div class="main">

                    <div class="ag-basic-header-and-text agg-has-bg">
                        <div class="agg-bg-image">
                            <b-img :src="require('../assets/images/practitioner-banner.jpg').default" fluid alt="A family of 3 having a good walk in the outdoors"></b-img>
                        </div>
                        <b-container>
                            <b-row>
                                <div class="agg-heading" style="color: white;">
                                    <h1 style="color: white;">{{ content.data && content.data.banner_title }}</h1>

                                    <p>{{ content.data && content.data.banner_subtitle }}</p>
                                </div>
                            </b-row>
                        </b-container>
                    </div>

                    <div class="two-fullwidth-tiles-wrapper practitioner-intro">
                        <div class="two-fullwidth-tiles">
                            <div class="ag-column ag-with-text left-col">
                                <div class="ag-text-content">
                                    <h2>Already registered?</h2>

                                    <a href="/practitioner-login/" class="agg-button agg-button--red">Login</a>

                                </div>
                            </div>

                            <div class="ag-column ag-with-text white-bg">
                                <div class="ag-text-content">
                                    <h2>{{ content.data && content.data.interested_title }}</h2>
                                    <p v-html="content.data && content.data.interested_content"></p>


                                    <a href="#register" class="agg-button agg-button--red">Register now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="agg-heading ag-small">
                        <h2>{{ content.data && content.data.tests_title }}</h2>
                    </div>

                    <div class="ag-practitioner-tests">
                        <b-row class="m-0">
                            <b-col cols="12" sm="6" md="4">
                                <div class="ag-test-inner">
                                    <div class="ag-test">
                                        <div class="ag-image-holder">
                                            <div class="agg-test-image">
                                                <b-img :src="require('../assets/images/food-and-env.jpeg').default" fluid alt="Healthy breakfast cereal with salmon and assorted healthy vegetables"></b-img>
                                            </div>
                                            <div class="ag-text-hold">
                                                <div class="ag-text">
                                                  <span data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
                                                    {{ content.data && content.data.food_title }}
                                                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ag-test-text">
                                        <div class="ag-text-content" v-html="content.data && content.data.food_content"></div>
                                    </div>
                                </div>
                            </b-col>


                            <b-col cols="12" sm="6" md="4">
                                <div class="ag-test-inner">
                                    <div class="ag-test">
                                        <div class="ag-image-holder">
                                            <div class="agg-test-image">

                                                <img src="https://practitioner.allergenicstesting.com/app/uploads/2017/09/img03.jpg" alt="Picture of a beautiful woman wearing white shirt in the outdoors">

                                            </div>
                                            <div class="ag-text-hold">
                                                <div class="ag-text">
                                                  <span data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
                                                    Comprehensive Women’s Health Test
                                                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ag-test-text">
                                        <div class="ag-text-content">
                                            This is the ultimate health screen for women. It measures how well the body systems are functioning. The Comprehensive Women's Health Test will provide you with a detailed profile of your client in terms of organ health, hormonal balance, nutrient status and the impact of all of these on her overall health and wellbeing.  This test is also the ultimate in preventative healthcare, allowing your client to achieve a good balance both now and in the future.

                                        </div>
                                    </div>
                                </div>
                            </b-col>


                            <b-col cols="12" sm="6" md="4">
                                <div class="ag-test-inner">
                                    <div class="ag-test">
                                        <div class="ag-image-holder">
                                            <div class="agg-test-image">

                                                <img src="https://practitioner.allergenicstesting.com/app/uploads/2017/09/img02.jpg" alt="A variety of fruits and vegetables in a wooden bowl">

                                            </div>
                                            <div class="ag-text-hold">
                                                <div class="ag-text">
                  <span data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
                    Comprehensive Nutrition Test
                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ag-test-text">
                                        <div class="ag-text-content">
                                            The complete nutritional status of each person is not always easy to evaluate. While the most important factor impacting on nutritional status is the daily dietary choices, other unseen factors can have a dramatic impact on your clients’ ability to effectively obtain essential nutrients. These factors include the digestion and absorption of nutrients, the use of medications and chronic illness.  The Comprehensive Nutrition Test gives you insite into the specific needs of your client and will allow you to support them in their journey back to better health.

                                        </div>
                                    </div>
                                </div>
                            </b-col>


                            <b-col cols="12" sm="6" md="4">
                                <div class="ag-test-inner">
                                    <div class="ag-test">
                                        <div class="ag-image-holder">
                                            <div class="agg-test-image">

                                                <img src="https://practitioner.allergenicstesting.com/app/uploads/2017/09/img04.jpg" alt="Picture of an athletic man jogging in the outdoors">

                                            </div>
                                            <div class="ag-text-hold">
                                                <div class="ag-text">
                  <span data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
                    Comprehensive Men’s Health Test
                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ag-test-text">
                                        <div class="ag-text-content">
                                            The Comprehensive Men's Health Test gives you a detailed overview of how well the body is functioning. It assesses the health of a wide range of body organs, major hormones and a select range of specific vitamins, minerals and essential nutrients. This full body assessment has been designed exclusively for men and looks at what may be affecting vitality, health and wellbeing.  This test is suitable for men of all ages and stages of life who would like to achieve more balance and will allow you to tailor a programme suitable for the body's requirements.

                                        </div>
                                    </div>
                                </div>
                            </b-col>


                            <b-col cols="12" sm="6" md="4">
                                <div class="ag-test-inner">
                                    <div class="ag-test">
                                        <div class="ag-image-holder">
                                            <div class="agg-test-image">

                                                <img src="https://practitioner.allergenicstesting.com/app/uploads/2017/09/img05.jpg" alt="Picture of a pretty young woman sleeping in bed .">

                                            </div>
                                            <div class="ag-text-hold">
                                                <div class="ag-text">
                  <span data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
                    Sleep and Mood Test
                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ag-test-text">
                                        <div class="ag-text-content">
                                            The Sleep and Mood Test assesses the healthy functioning of those organs, hormones, neurotransmitters and nutrients involved in healthy sleep and mood.  Maintaining healthy sleep and mood is not always easy, there are so many factors impacting on how well we sleep and how happy we are. Our test looks at the physiological factors associated with mood and sleep and helps to identify any imbalances that may be present in our bodies.  This test is a perfect compliment to our other tests in really pinning down the overall picture of your client's health.

                                        </div>
                                    </div>
                                </div>
                            </b-col>


                            <b-col cols="12" sm="6" md="4">
                                <div class="ag-test-inner">
                                    <div class="ag-test">
                                        <div class="ag-image-holder">
                                            <div class="agg-test-image">

                                                <img src="https://practitioner.allergenicstesting.com/app/uploads/2017/11/toxic-test.jpg" alt="Metal factory smokestack releasing steam, gas and harmful smoke">

                                            </div>
                                            <div class="ag-text-hold">
                                                <div class="ag-text">
                  <span data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
                    Heavy Metal and Environmental Toxin Test
                  </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ag-test-text">
                                        <div class="ag-text-content">
                                            The Heavy Metal and Environmental Toxin Test is an energy-based test that provides information on the presence of heavy metals and toxic elements in the body and whether or not their presence is causing a stress to the body. It measures the total presence of the toxin (circulating and stored) and does not differentiate between the various forms. Instead of providing information on physiological amounts of a particular toxin it identifies whether the toxin is causing physiological stress.

                                        </div>
                                    </div>
                                </div>
                            </b-col>

                        </b-row>
                    </div>


<!--                    <BasicTextBlock-->
<!--                        title="Choose one of our 5 proven tests"-->
<!--                        content="These days it can be a real struggle to maintain a good balanced diet and healthy lifestyle. When you’re not feeling right it can sometimes be hard to find the underlying reasons. Allergenics tests will help unlock that picture for you."-->
<!--                    ></BasicTextBlock>-->

                </div>
            </div>
        </div>
</template>

<script>

import Banner from "../components/home/Banner.vue";
import WhyTest from "../components/home/WhyTest.vue";
import FastTurnaround from "../components/home/FastTurnaround.vue";
import StartJourney from "../components/home/StartJourney.vue";
import OurTeam from "../components/home/OurTeam.vue";
import PricingPlans from "../components/shared/PricingPlans.vue";
import StepsRow from "../components/shared/StepsRow.vue";
import BasicTextBlock from "../components/shared/BasicTextBlock.vue";
import TestSections from "../components/shared/TestsSection.vue";
import Testimonials from "../components/shared/Testimonials.vue";
import CtaSection from "../components/shared/CtaSection.vue";
import axios from "axios";

export default {
  name: 'PractitionerHome',
    components: {
      // Banner,
    },
    data() {
        return {
            content: {}
        }
    },
    mounted() {
        axios.get('api/content/practitioner').then(({data}) => this.content = data);
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../sass/_variables";
@import "../../../sass/_mixins";

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
            max-width: none;
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
        overflow: hidden;
        width: 100%;

        ul {
            color: $green;
            padding-bottom: 20px;
            margin-bottom: 0;
            list-style-type: none;
            padding-left: 0;
        }

        ul li {
            padding-left: 12px;
            position: relative;
            margin-bottom: 2px;
        }
        ul li:before {
            content: '';
            position: absolute;
            left: 0;
            top: 9px;
            width: 5px;
            height: 5px;
            border-radius: 100%;
            overflow: hidden;
            background: #008288;
        }

        @include media-breakpoint-down(md) {
            .ag-list, ul {
                display: inline-block;
                width: auto;
                text-align: center;
                li {
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

.practitioner,
.practitioner-register {
    .two-fullwidth-tiles{
        background: $light-green;
        &.inverted{
            background: $gray-light;
        }
        .ag-text-content{
            width: 100%;
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

.ag-practitioner-tests {
    max-width: 1400px;
    margin: 0 auto;
    > .row{
        margin-left: -10px;
        margin-right: -10px;
        @include media-breakpoint-up(md) {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;
            align-content: flex-start;
            -webkit-align-content: flex-start;
            &::before {
                display: block!important;
            }
        }
        > [class*='col-'] {
            padding: 5px;
            @include media-breakpoint-up(md) {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                float: none!important;
            }
        }
    }
    .ag-test-inner{
        background: $gray-darker;
        height: 100%;
        max-width: 470px;
        margin: 0 auto;
    }
    .ag-test{
        .ag-image-holder{
            position: relative;
            img{
                o-object-fit: cover;
                object-fit: cover;
                width:470px;
                height:300px;
                max-width: 100%;
            }
            .ag-text-hold{
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba($black, 0.4);
                .ag-text{
                    color: $white;
                    text-align: center;
                    font-weight: 400;
                    height: 100%;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: -webkit-flex;
                    display: flex;
                    align-items: center;
                    span{
                        width: 100%;
                        padding: 0 50px;
                        font-size: 24px;
                        line-height: 1.2;
                        @include media-breakpoint-up(lg) {
                            padding: 0 90px;
                        }
                    }
                }
            }
        }
    }
    .ag-test-text{
        padding: 30px 20px;
        @include media-breakpoint-up(md) {
            padding: 50px 40px;
        }
    }

    @include media-breakpoint-up(md) {
        .ag-text-content {
            max-width: 100%;
        }
    }
}
</style>
