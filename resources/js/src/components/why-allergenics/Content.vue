<template>
    <div class="two-fullwidth-tiles-wrapper">
        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img
                            :src="content.data && content.data.country_image.original_url"
                            fluid
                            :alt="content.data && content.data.country_image.custom_properties.alt">
                        </b-img>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <vue-aos animation-class="fadeInRight animated faster">
                        <h3>{{ content.data && content.data.country_title }}</h3>
                    </vue-aos>
                    <p v-html='content.data && content.data.country_text'></p>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img
                            :src="content.data && content.data.practitioners_image.original_url"
                            fluid
                            :alt="content.data && content.data.practitioners_image.custom_properties.alt">
                        </b-img>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <vue-aos animation-class="fadeInLeft animated faster">
                        <h3>{{ content.data && content.data.practitioners_title }}</h3>
                    </vue-aos>
                    <p v-html='content.data && content.data.practitioners'></p>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img
                            :src="content.data && content.data.range_image.original_url"
                            fluid
                            :alt="content.data && content.data.range_image.custom_properties.alt">
                        </b-img>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <vue-aos animation-class="fadeInRight animated faster">
                        <h3>{{ content.data && content.data.range_title }}</h3>
                    </vue-aos>
                    <p v-html='content.data && content.data.range'></p>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles inverted">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img
                            :src="content.data && content.data.reporting_image.original_url"
                            fluid
                            :alt="content.data && content.data.reporting_image.custom_properties.alt">
                        </b-img>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <vue-aos animation-class="fadeInLeft animated faster">
                        <h3>{{ content.data && content.data.reporting_title }}</h3>
                    </vue-aos>
                    <p v-html='content.data && content.data.reporting'></p>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img
                            :src="content.data && content.data.preferred_image.original_url"
                            fluid
                            :alt="content.data && content.data.preferred_image.custom_properties.alt">
                        </b-img>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <vue-aos animation-class="fadeInRight animated faster">
                        <h3>{{ content.data && content.data.preferred_title }}</h3>
                    </vue-aos>
                    <p v-html='content.data && content.data.preferred_by'></p>
                </div>
            </div>
        </div>

        <div class="two-fullwidth-tiles">
            <div class="ag-column">
                <div class="ag-image-holder">
                    <div class="agg-bg-image">
                        <b-img
                            :src="content.data && content.data.safety_image.original_url"
                            fluid
                            :alt="content.data && content.data.safety_image.custom_properties.alt">
                        </b-img>
                    </div>
                </div>
            </div>
            <div class="ag-column ag-with-text">
                <div class="ag-text-content">
                    <vue-aos animation-class="fadeInLeft animated faster">
                        <h3>{{ content.data && content.data.safety_title }}</h3>
                    </vue-aos>
                    <p v-html='content.data && content.data.safety'></p>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import axios from "axios";

export default {
  name: 'Content',
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

    //p {
    //    font-size: large;
    //}

    .ag-text-content {
        overflow: hidden;
        p:last-child {
            margin-bottom: 0;
        }
    }

    img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%;
        max-height: 100%;
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
            max-width: none;
            object-fit: cover;
            object-position: center;
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
            .ag-list, ul {
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

.why-allergenics {
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

</style>
