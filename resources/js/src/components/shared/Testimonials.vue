<template>
    <div class="ag-testimonial-outer">

        <div class="ag-testimonial-heading agg-heading ag-small">
            <h2 class="mb-0">{{ content.data && content.data.testimonials_section_title }}</h2>
        </div>

        <div class="ag-testimonial-holder">
            <b-container>
                <b-row no-gutters>
                    <b-col md="10" class="mx-auto">

                        <b-carousel
                            v-if="content.data && content.data.testimonials_slide.length"
                            id="carousel-testimonials"
                            controls
                            :interval="0"
                        >
                            <b-carousel-slide v-for="item in content.data.testimonials_slide" :key="item.key">
                                <p class="ag-quote-holder">
                                    <span v-html="item.attributes.content"></span>
                                    <span class="agg-by d-block mt-4">
                                    <span>- {{ item.attributes.name }}</span>
                                    <span v-if="item.attributes.city">, {{ item.attributes.city }}</span>
                                    <span v-if="item.attributes.date">- {{ item.attributes.date }}</span>
                                </span>
                                </p>
                            </b-carousel-slide>

                        </b-carousel>

                    </b-col>
                </b-row>
            </b-container>
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
@import "../../../../sass/_variables";
@import "../../../../sass/_mixins";

.agg-by,
.ag-quote-holder {
    text-align: center;
    color: #6c6c6c;
}

#carousel-testimonials .carousel-caption {
    width: 100%;
    left: 0;
    right: 0;
}

.ag-testimonial-holder {
    background: $white;
    padding: 0;

   @include media-breakpoint-up(md){
        padding: 0 0 53px;
    }

    &:hover {
        .ag-testimonial-slider {
            .slick-arrow {
                color: #666;

                &:hover {
                    color: $green;
                }
            }
        }
    }
}



.ag-quote-holder {
    text-align: center;
    color: #6c6c6c;

    h2 {
        color: $green;
        margin-bottom: 19px;
    }

    .ag-by {
        display: block;
        font-style: italic;
        padding-top: 6px;
    }
}

.ag-testimonial-heading.agg-heading{
    padding: 35px 10px 0 10px;
    @include media-breakpoint-up(md) {
        padding: 65px 0 0 0;
    }
}

#carousel-testimonials {
    @include media-breakpoint-down(md) {
        max-width: 85%;
        margin-right: auto;
        margin-left: auto;
    }
}

</style>
