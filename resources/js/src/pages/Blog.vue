<template>
    <div class="wrapper" role="document">
        <div class="content">
            <div class="main">
                <div class="agg-content-holder ag-blog-holder">
                    <b-container>
                        <div class="agg-heading ag-small">
<!--                            <div class="page-header">-->
<!--                                <h1 v-if="content.data && content.data.blog_page_title.length">-->
<!--                                    {{ content.data && content.data.blog_page_title }}-->
<!--                                </h1>-->
<!--                            </div>-->
<!--                            <p v-if="content.data && content.data.blog_page_text.length">-->
<!--                                {{ content.data && content.data.blog_page_text }}-->
<!--                            </p>-->
                        </div>

                        <form class="ag-search-form" role="search" method="get" action="https://allergenicstesting.com/">
                            <div class="ag-input-hold">
                                <b-form-input class="ag-form-control search-field" placeholder="Search blog..."></b-form-input>
                                <b-button value="Search" class="search-submit" type="submit">
                                    <span class="icon-search"></span>
                                </b-button>
                            </div>
                        </form>

                        <div class="ag-blog-wrapper">
                            <b-row class="flex-row">

                                <b-col cols="12" md="4" lg="3"
                                       v-for="post in laravelData.data.blog_post" :key="post.id"
                                >
                                    <div class="ag-blogpost">
                                        <div class="ag-img-wrap">
<!--                                            <b-img :src="require('../assets/images/' + post.attributes.blog_image).default" fluid alt=""></b-img>-->
                                            <time class="updated ag-blog-date" datetime="2020-03-01T22:46:10+00:00">02 Mar 2020</time>
                                        </div>
                                        <div class="ag-blog-text">
                                            <h3 class="entry-title">
                                                <a href="https://allergenicstesting.com/blog/how-to-dine-out-with-a-food-allergy/">
                                                {{ post.attributes.title }}</a>
                                            </h3>
                                            <p class="excerpt">
                                                {{ getPostExcerpt(post) }}</p>
                                            <b-link to="/blog-single" class="ag-more">Read more</b-link>
                                        </div>
                                    </div>
                                </b-col>


<!--                                <ul>-->
<!--&lt;!&ndash;                                    <li v-for="item in content.data.blog_post" :key="item.key">&ndash;&gt;-->
<!--&lt;!&ndash;                                        {{ item.attributes.title }}&ndash;&gt;-->
<!--&lt;!&ndash;                                    </li>&ndash;&gt;-->
<!--                                    <li v-for="post in laravelData.data.blog_post" :key="post.id">{{ post.attributes.title }}</li>-->
<!--                                </ul>-->

                                <Pagination :data="laravelData" @pagination-change-page="getResults" />

                            </b-row>
                        </div>

                        <div class="ag-blog-pagination">
                            <pagination :data="laravelData">
                                <span slot="prev-nav">&lt; Previous</span>
                                <span slot="next-nav">Next &gt;</span>
                            </pagination>
                        </div>

                    </b-container>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axios from "axios";
// import LaravelVuePagination from 'laravel-vue-pagination';
// import { Paginatable, PerPageable } from 'laravel-nova';

export default {
  name: 'Blog',
    components: {
        // 'Pagination': LaravelVuePagination
    },
    // mixins: [Paginatable, PerPageable],
    // data() {
    //     return {
    //         content: {}
    //     }
    // },
    // mounted() {
    //     axios.get('api/content/region/4').then(({data}) => this.content = data);
    // }
    data() {
        return {
            // Our data object that holds the Laravel paginator data
            laravelData: {},
        }
    },

    mounted() {
        // Fetch initial results
        this.getResults();
    },

    methods: {
        // Our method to GET results from a Laravel endpoint
        getResults(page = 1) {
            axios.get('api/content/region/4?page=' + page)
                .then(response => {
                    this.laravelData = response.data;
                });
        },
        getPostExcerpt (post) {
            let excerpt = this.stripTags(post.attributes.content);

            return excerpt.length > 310 ? excerpt.substring(0, 310) + '...' : excerpt;
        },
        stripTags (text) {
            return text.replace(/(<([^>]+)>)/ig, '');
        }
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
</style>
