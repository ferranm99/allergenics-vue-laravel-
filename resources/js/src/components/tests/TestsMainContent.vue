<template>
    <div>
        <div class="ag-basic-header-and-text ">
            <b-container>
                <div class="agg-heading">
                    <h2>{{ title }}</h2>
                </div>
            </b-container>
        </div>
        <div class="two-fullwidth-tiles-wrapper">
            <div class="two-fullwidth-tiles">
                <div class="ag-column">
                    <div class="ag-image-holder">
                        <div class="agg-bg-image">
                            <b-img :src="require('../../assets/images/' + image).default" fluid :alt=image_alt></b-img>
                        </div>
                    </div>
                </div>
                <div class="ag-column ag-with-text">
                    <div class="ag-text-content">
                        <p v-html="content"></p>
                        <div v-if="list" v-html="list" v-vue-aos="{animationClass:'fadeInRight animated faster'}"></div>
                        <p class="mb-0" v-if="sample_link">
                            <b-link :href="sample_href" target="_blank">
                                <b-img :src="require('../../assets/images/download-icon.svg').default" width="18px" alt="Download Icon"></b-img>
                                {{ sample_link }}
                            </b-link>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>

export default {
  name: 'TestsMainContent',
    props: {
        title: String,
        image: String,
        image_alt: String,
        content: String,
        list: String,
        sample_link: String,
        sample_href: String
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

.agg-bg-image img {
    object-fit: cover;
    object-position: center;
    max-width: 100%;
    width: 100%;
    height: 100%;
    max-height: 100%;
}

a:hover {
    color: $green;
}

.ag-content-text p {
    margin-bottom: 35px;
}

</style>
