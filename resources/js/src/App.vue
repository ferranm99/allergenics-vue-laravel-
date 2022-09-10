<template>
  <div :class="pageClassName">
      <Navbar></Navbar>
        <router-view></router-view>
      <Footer
          v-if="!['my-account-home' ,
                    'orders',
                    'edit-account',
                    'edit-address' ,
                    'billing',
                    'shipping' ,
                    'view-order' ,
                    'order-payment' ,
                    'order-who' ,
                    'order-tests' ,
                    'survey' ,
                    'success'
                     ].includes($route.name)"
      ></Footer>
  </div>
</template>

<script>
import Footer from "./components/Footer.vue";
import Navbar from "./components/Navbar.vue";

export default {
  name: 'App',
  components: {
      Footer,
      Navbar
  },
    data() {
        return {
            pageClassName: ''
        }
    },
    mounted() {
      this.pageClassName = this.$route.name;
    },
    watch: {
        $route(to, from) {
            this.pageClassName = to.name;
        }
    }
}
</script>

