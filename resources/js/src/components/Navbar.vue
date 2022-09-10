<template>
    <header ref="navScroll" id="header" class="header">
        <b-container>
            <b-navbar toggleable="md" class="p-0">
                <b-navbar-brand href="/" class="logo">
                    <Logo></Logo>
                </b-navbar-brand>

                <div class="navigation ml-auto">
                    <b-link to="/checkout" class="credits mobile-only"><span>Back to Order</span></b-link>
                    <b-navbar-toggle class="nav-opener border-0" target="nav-collapse">
                        <span></span>
                    </b-navbar-toggle>

                    <b-collapse id="nav-collapse" is-nav class="nav-hold">
                        <b-navbar-nav id="menu-main-menu-right" class="ml-auto main-nav">
                            <b-nav-item-dropdown text="Our Tests & Pricing" left>
                                <b-dropdown-item @click="() => this.$router.push({ name:'hair-testing-service' }).catch(() => {})"
                                                 exact
                                                 exact-active-class="active">
                                    Test Overview and Pricing
                                </b-dropdown-item>
                                <b-dropdown-item @click="() => this.$router.push({ name: 'food-and-environmental-sensitivity-test' }).catch(() => {})"
                                                 exact
                                                 exact-active-class="active">
                                    Food & Environmental
                                </b-dropdown-item>
                                <b-dropdown-item @click="() => this.$router.push({ name: 'optimum-nutrition-test' }).catch(() => {})"
                                                 exact
                                                 exact-active-class="active">
                                    Optimum Nutrition
                                </b-dropdown-item>
                                <b-dropdown-item @click="() => this.$router.push({ name: 'comprehensive-womens-health-test' }).catch(() => {})"
                                                 exact
                                                 exact-active-class="active">
                                    Women’s Health
                                </b-dropdown-item>
                                <b-dropdown-item @click="() => this.$router.push({ name: 'comprehensive-mens-health-test' }).catch(() => {})"
                                                 exact
                                                 exact-active-class="active">
                                    Men’s Health
                                </b-dropdown-item>
                                <b-dropdown-item @click="() => this.$router.push({ name: 'sleep-and-mood-test' }).catch(() => {})"
                                                 exact
                                                 exact-active-class="active">
                                    Sleep & Mood
                                </b-dropdown-item>
                            </b-nav-item-dropdown>

                            <b-nav-item @click="() => this.$router.push({ name: 'why-allergenics' }).catch(() => {})"
                                         exact
                                         exact-active-class="active">
                                Why Allergenics?
                            </b-nav-item>
                            <b-nav-item @click="() => this.$router.push({ name: 'articles-blog-page' }).catch(() => {})"
                                        exact
                                        exact-active-class="active">
                                Blog
                            </b-nav-item>
                            <b-nav-item href="#">Practitioners</b-nav-item>
                            <b-nav-item @click="() => this.$router.push({ name: 'my-account-home' }).catch(() => {})">
                                Login
                            </b-nav-item>
                        </b-navbar-nav>

<!--                        Back to order link-->
                        <b-link to="/checkout" class="credits"><span>Back to Order</span></b-link>
                    </b-collapse>
                </div>
            </b-navbar>
        </b-container>
    </header>
</template>

<script>
import Logo from "./Logo.vue";

export default {
  name: 'Navbar',
    components: {
      Logo
    },
    mounted() {
        window.addEventListener("scroll", this.handleScroll);
    },

    beforeUnmount() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll() {
            const navScroll = this.$refs.navScroll;

            if (window.scrollY > 0) {
                navScroll.classList.add("scrolling");
            } else {
                navScroll.classList.remove("scrolling");
            }
        },
    },
    destroyed () {
        document.removeEventListener('scroll', this.handleScroll);
    }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>


</style>
