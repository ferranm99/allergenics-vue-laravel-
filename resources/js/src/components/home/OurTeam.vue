<template>
    <div class="ag-team-block agg-light-grey-bg">
        <b-container>
            <vue-aos animation-class="zoomIn animated faster">
                <div class="agg-heading ag-small">
                    <h2 v-if="content.data && content.data.team_title.length">
                        {{ content.data && content.data.team_title }}
                    </h2>
                    <p v-if="content.data && content.data.team_content.length" class="text-center"
                       v-html="content.data && content.data.team_content">
                    </p>
                </div>
            </vue-aos>
            <b-row>
                <b-col cols="12" sm="4">
                    <div class="ag-person-block">
                        <div class="ag-img-hold">
                            <b-img
                                :src="content.data && content.data.team_one_image.original_url"
                                fluid
                                :alt="content.data && content.data.team_one_image.custom_properties.alt">
                            </b-img>
                        </div>
                        <div class="ag-text-hold">
                            <div class="ag-info">
                                <p v-if="content.data && content.data.team_one_title.length" class="f-16 mb-0"
                                   v-html="content.data && content.data.team_one_title">
                                </p>
                            </div>
                            <p v-if="content.data && content.data.team_one_content.length"
                               v-html="content.data && content.data.team_one_content">
                            </p>
                        </div>
                    </div>
                </b-col>

                <b-col cols="12" sm="4">
                    <div class="ag-person-block">
                        <div class="ag-img-hold">
                            <b-img
                                :src="content.data && content.data.team_two_image.original_url"
                                fluid
                                :alt="content.data && content.data.team_two_image.custom_properties.alt">
                            </b-img>
                        </div>
                        <div class="ag-text-hold">
                            <div class="ag-info">
                                <p v-if="content.data && content.data.team_two_title.length" class="f-16 mb-0"
                                   v-html="content.data && content.data.team_two_title">
                                </p>
                            </div>
                            <p v-if="content.data && content.data.team_two_content.length"
                               v-html="content.data && content.data.team_two_content">
                            </p>
                        </div>
                    </div>
                </b-col>

                <b-col cols="12" sm="4">
                    <div class="ag-person-block">
                        <div class="ag-img-hold">
                            <b-img
                                :src="content.data && content.data.team_three_image.original_url"
                                fluid
                                :alt="content.data && content.data.team_three_image.custom_properties.alt">
                            </b-img>
                        </div>
                        <div class="ag-text-hold">
                            <div class="ag-info">
                                <p v-if="content.data && content.data.team_three_title.length" class="f-16 mb-0"
                                   v-html="content.data && content.data.team_three_title">
                                </p>
                            </div>
                            <p v-if="content.data && content.data.team_three_content.length"
                               v-html="content.data && content.data.team_three_content">
                            </p>
                        </div>
                    </div>
                </b-col>
            </b-row>
        </b-container>
    </div>

</template>

<script>

import axios from "axios";

export default {
  name: 'OurTeam',
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
@import "../../../../sass/_mixins";

.ag-team-block {
    padding: 35px 0;

    @include media-breakpoint-up(md) {
        padding: 62px 0 66px;
    }
}

.ag-person-block {
    text-align: center;
    font-size: 14px;
    line-height: 1.29;
    max-width: 290px;
    margin: 0 auto 40px;

    @include media-breakpoint-up(md) {
        margin-bottom: 0;
    }

    .ag-img-hold {
        max-width: 242px;
        margin: 0 auto 20px;
        overflow: hidden;
        border-radius: 100%;

        @include media-breakpoint-up(md) {
            max-width: 180px;
        }

        @include media-breakpoint-up(lg) {
            max-width: 242px;
        }
    }

    .ag-info {
        font-size: 16px;
        line-height: 1.2;
        padding: 0 0 14px;
    }

    .ag-name {
        display: block;
        font-weight: 500;
    }

    .ag-post {
        display: block;
    }
}


</style>
