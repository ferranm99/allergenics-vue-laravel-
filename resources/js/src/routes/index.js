import Vue from "vue";
import VueRouter from "vue-router";
import Home from '../pages/Home.vue';
import PractitionerHome from '../pages/PractitionerHome.vue';
import WhyAllergenics from "../pages/WhyAllergenics.vue";
import HairTestingService from "../pages/HairTestingService.vue";
import FoodAndEnvironmental from "../pages/FoodAndEnvironmental.vue";
import OptimumNutrition from "../pages/OptimumNutrition.vue";
import WomensHealth from "../pages/WomensHealth.vue";
import MensHealth from "../pages/MensHealth.vue";
import SleepAndMood from "../pages/SleepAndMood.vue";
import HairSample from "../pages/HairSample.vue";
import Testimonials from "../pages/Testimonials.vue";
import Faqs from "../pages/Faqs.vue";
import TermsAndConditions from "../pages/TermsAndConditions.vue";
import Privacy from "../pages/Privacy.vue";
import SampleReports from "../pages/SampleReports.vue";
import Contact from "../pages/Contact.vue";
import Blog from "../pages/Blog.vue";
import Checkout from "../pages/Checkout.vue";
import OrderTests from "../pages/OrderTests.vue";
import OrderWho from "../pages/OrderWho.vue";
import OrderPayment from "../pages/OrderPayment.vue";
import Success from "../pages/Success.vue";
import Survey from "../pages/Survey.vue";
import BlogSingle from "../pages/BlogSingle.vue";
import MyAccount from "../pages/MyAccount.vue";
import Orders from "../components/user/Orders.vue";
import EditAccount from "../components/user/EditAccount.vue";
import EditAddress from "../components/user/EditAddress.vue";
import MyAccountHome from "../components/user/MyAccountHome.vue";
import IncompleteQuestionnaires from "../components/user/IncompleteQuestionnaires.vue";
import Login from "../pages/Login.vue";
import ViewOrder from "../components/user/ViewOrder.vue";
import BillingAddress from "../components/user/BillingAddress.vue";
import ShippingAddress from "../components/user/ShippingAddress.vue";


Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: 'home',
        component: Home,
    },
    {
        path: "/practitioner",
        name: 'practitioner-home',
        component: PractitionerHome,
    },
    {
        path: "/why-allergenics",
        name: 'why-allergenics',
        component: WhyAllergenics
    },
    {
        path: "/hair-testing-service",
        name: 'hair-testing-service',
        component: HairTestingService
    },
    {
        path: "/food-and-environmental-sensitivity-test",
        name: 'food-and-environmental-sensitivity-test',
        component: FoodAndEnvironmental
    },
    {
        path: "/optimum-nutrition-test",
        name: 'optimum-nutrition-test',
        component: OptimumNutrition
    },
    {
        path: "/comprehensive-womens-health-test",
        name: 'comprehensive-womens-health-test',
        component: WomensHealth
    },
    {
        path: "/comprehensive-mens-health-test",
        name: 'comprehensive-mens-health-test',
        component: MensHealth
    },
    {
        path: "/sleep-and-mood-test",
        name: 'sleep-and-mood-test',
        component: SleepAndMood
    },
    {
        path: "/hair-sample",
        name: 'hair-sample',
        component: HairSample
    },
    {
        path: "/testimonials",
        name: 'testimonials',
        component: Testimonials
    },
    {
        path: "/faqs",
        name: 'faqs',
        component: Faqs
    },
    {
        path: "/terms-and-conditions",
        name: 'terms-and-conditions',
        component: TermsAndConditions
    },
    {
        path: "/privacy",
        name: 'privacy',
        component: Privacy
    },
    {
        path: "/sample-reports",
        name: 'sample-reports',
        component: SampleReports
    },
    {
        path: "/contact",
        name: 'contact',
        component: Contact
    },
    {
        path: "/articles-blog-page",
        name: 'articles-blog-page',
        component: Blog
    },
    {
        path: "/blog-single",
        name: 'blog-single',
        component: BlogSingle
    },
    {
        path: "/checkout",
        name: 'checkout',
        component: Checkout
    },
    {
        path: "/order/who",
        name: 'order-who',
        component: OrderWho
    },
    {
        path: "/order/tests",
        name: 'order-tests',
        component: OrderTests
    },
    {
        path: "/order/payment",
        name: 'order-payment',
        component: OrderPayment
    },
    {
        path: "/success",
        name: 'success',
        component: Success
    },
    {
        path: "/start-here",
        name: 'survey',
        component: Survey
    },
    {
        path: "/log-in",
        name: 'login',
        component: Login
    },
    {
        path: "/my-account",
        name: 'my-account',
        component: MyAccount,
        children: [
            {
                path: '',
                name: 'my-account-home',
                component: MyAccountHome,
            },
            {
                path: 'orders',
                name: 'orders',
                component: Orders,
            },
            {
                path: 'edit-account',
                name: 'edit-account',
                component: EditAccount,
            },
            {
                path: 'edit-address',
                name: 'edit-address',
                component: EditAddress,
                children: [
                    {
                        path: 'billing',
                        name: 'billing',
                        component: BillingAddress,
                    },
                    {
                        path: 'shipping',
                        name: 'shipping',
                        component: ShippingAddress,
                    },

                ],
            },
            {
                path: 'incomplete-questionnaires',
                name: 'incomplete-questionnaires',
                component: IncompleteQuestionnaires,
            },
            {
                path: 'view-order',
                name: 'view-order',
                component: ViewOrder,
            },
        ],
    },
];

export default new VueRouter({
    mode: "history",
    routes: routes,
    scrollBehavior
});

function scrollBehavior(to, from, savedPosition) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            if (to.hash) {
                return resolve({
                    selector: to.hash,
                    behavior: 'smooth',
                })
            }

            if (savedPosition) {
                return resolve(savedPosition)
            }

            if (from.name !== to.name) {
                return resolve({ x: 0, y: 0 })
            }

            if (from.params.resourceName !== to.params.resourceName) {
                return resolve({ x: 0, y: 0 })
            }

            return resolve({})
        }, 100)
    })
}
