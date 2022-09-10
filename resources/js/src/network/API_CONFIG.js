export default  {
    GET_PRODUCTS: {
        url: '/api/order/products'
    },
    GET_CURRENT: {
        url: '/api/order/current'
    },
    POST_TESTS: {
        url: '/api/order/tests',
        body: ({ items = [] }) => ({ 'items': items })
    },
    POST_FEES: {
        url: '/api/order/fees',
        body: ({ processing = '', consultation = ''  }) => {
            return {
                'fees': [{"processing": processing }, {'consultation': consultation}]
            }
        }
    },
    POST_WHO: {
        url: '/api/order/who',
        body: ({ firstName = '', lastName = '', gender = '' }) => ({
            'client_first_name': firstName,
            'client_last_name': lastName,
            'client_gender': gender
        })
    },
    STRIPE_PAYMENT: {
        url: '/api/order/payment/account',
        body: ({token = ''}) => ({ token })
    },
    CHECK_EMAIL: {
        url: '/check-email',
        body: ({email = ''}) => ({ email })
    },
    LOGIN: {
        url: '/login',
        body: ({email = '', password}) => ({ email, password })
    },
    REGISTER: {
        url: '/register',
        body: ({email = '', password = ''}) => ({ email, password })
    },
    COOKIE: {
        url: '/sanctum/csrf-cookie'
    },
    CHECK_LOGIN: {
        url: '/login'
    },
}
