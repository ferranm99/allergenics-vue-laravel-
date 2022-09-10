<template>
    <b-container>
        <!--Steps row-->

        <div class="agg-heading mt-50">
            <h2>Steps</h2>
        </div>

        <b-row class="agg-steps-block">

            <b-col cols="4" class="pr-0 pl-40">
                <div class="steps-inner">
                    <div class="steps-tile">
                        <div class="steps-number">1</div>
                        <h4 class="steps-text">Choose your test</h4>
                    </div>
                    <div class="steps-icon">
                        <b-img :src="require('../../assets/images/icon-steps.svg').default" fluid alt="Next Step"></b-img>
                    </div>
                </div>
            </b-col>

            <b-col cols="4" class="pr-0 pl-40">
                <div class="steps-inner">
                    <div class="steps-tile">
                        <div class="steps-number">2</div>
                        <h4 class="steps-text">Send us hair</h4>
                    </div>
                    <div class="steps-icon">
                        <b-img :src="require('../../assets/images/icon-steps.svg').default" fluid alt="Next Step"></b-img>
                    </div>
                </div>
            </b-col>

            <b-col cols="4" class="p-0">
                <div class="steps-inner">
                    <div class="steps-tile">
                        <div class="steps-number">3</div>
                        <h4 class="steps-text">Get your test results</h4>
                    </div>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>

export default {
  name: 'StepsRow'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../../sass/_variables";
@import "../../../../sass/_mixins";

.agg-steps-block {
    margin-bottom: 30px;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;

    .pl-40 {
        padding-left: 15px;
    }

    @include media-breakpoint-up(lg) {
        margin-bottom: 70px;

        .pr-0 {
            padding-right: 0;
        }
        .p-0 {
            padding-left: 0;
            padding-right: 0;
        }
        .pl-40 {
            padding-left: 40px;
        }
    }

    @include media-breakpoint-down(lg) {
        .col-xs-4 {
            padding-left: 10px;
            padding-right: 10px;
        }
        .pl-40 {
            padding-left: 10px;
        }
    }

    .steps-inner {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-pack: distribute;
        justify-content: space-around;
    }

    .steps-tile {
        text-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .steps-number {
        font-size: 20px;
        color: $green;
        border-radius: 50%;
        border: 1px solid $green;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        margin: 20px auto;
        @include media-breakpoint-down(lg) {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 1rem;
        }
    }

    .steps-icon {
        img {
            height: 60px;
            margin-top: 30px;
            @include media-breakpoint-down(lg) {
                height: 40px;
                margin-top: 20px;
            }
            @include media-breakpoint-down(sm) {
                height: 30px;
            }
        }
    }

    .steps-text {
        @include media-breakpoint-down(lg) {
            font-size: 1rem;
        }
        @include media-breakpoint-down(sm) {
            font-size: 14px;
        }
    }
}

</style>
