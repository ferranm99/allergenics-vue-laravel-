<template>
    <div>
        <div class="products-dropdown-container">
            <div class="container">
                <div class="dropdown-inner">

                    <div>
                        <b-button variant="light" class="btn btn-dropdown" v-b-toggle.productCollapse>
                            Click here to see full list of items tested
                            <span class="icon-arrow-down"></span>
                        </b-button>
                        <b-collapse id="productCollapse">
                            <p v-html="content" id="menu-products-dropdown" class="products-dropdown"></p>
                        </b-collapse>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
  name: 'FullListTested',
    props: {
        content: String,
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
@import "../../../../sass/_variables";
@import "../../../../sass/_mixins";

.products-dropdown-container{
    background: $gray-light;
    padding: 30px 0;
    .dropdown-inner{
        text-align: center;
        .btn-dropdown {
            background: none;
            border: none;
            outline: none;
            font-weight: 500;
            font-size: 14px;
            padding: 0;
            @include media-breakpoint-up(sm) {
                font-size: $font-size-base;
            }
            &:active,
            &:hover,
            &:focus,
            &:visited {
                box-shadow: none;
                outline: none;
            }
            span{
                font-size: 9px;
                margin-left: 10px;
                @include media-breakpoint-up(sm) {
                    font-size: 10px;
                    margin-left: 25px;
                }
                display: inline-block;
                -webkit-transform: rotate(-90deg);
                -moz-transform: rotate(-90deg);
                -ms-transform: rotate(-90deg);
                -o-transform: rotate(-90deg);
                transform: rotate(-90deg);
                transition: .2s ease;
            }
            &.collapsed{
                span{
                    -webkit-transform: rotate(0);
                    -moz-transform: rotate(0);
                    -ms-transform: rotate(0);
                    -o-transform: rotate(0);
                    transform: rotate(0);
                }
            }
        }
        .products-dropdown{
            max-width: 650px;
            color: $green;
            display: block;
            text-align: left;
            margin: 15px auto 0 auto;
            padding-left: 0;
            line-height: 1.8;
            strong {
                margin-bottom: 5px;
            }
            p {
                //color: $base-text-color;
                margin-bottom: 5px;
                line-height: 1.8;
                strong {
                    margin-bottom: 5px;
                }
            }
        }
    }
}


</style>
