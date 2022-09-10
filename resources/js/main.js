import Vue from 'vue'
import App from './src/App.vue'
import BootstrapVue from "bootstrap-vue";
import routes from './src/routes/index';
import * as VueAos from 'vue-aos';
import * as axios from 'axios'
// import { loadScript } from "vue-plugin-load-script";

Vue.config.productionTip = false;

Vue.use(BootstrapVue);
Vue.use(VueAos);

axios.defaults.baseURL = 'https://nz.allergenics-v4.test/';
axios.defaults.withCredentials = true;

// loadScript('https://js.stripe.com/v3/');

new Vue({
    router: routes,
  render: h => h(App),
}).$mount('#app')

