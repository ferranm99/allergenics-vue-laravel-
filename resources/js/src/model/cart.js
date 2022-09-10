import {PROCESSING_OPTIONS} from "../config/processingOptions";
import {CONSULTATION_OPTIONS} from "../config/consultationOptions";
import {GENDER_OPTIONS} from "../config/genderOptions";

const defaultCart = {
    firstName: '',
    lastName: '',
    gender: GENDER_OPTIONS.MALE,
    items: [],
    processing: { options: { name: PROCESSING_OPTIONS.STANDARD }  },
    consultation: { value: CONSULTATION_OPTIONS.CONSULTATION.checked },
    totals: {
        subTotal: 0,
        taxTotal: 0,
        total: 0
    },
    country: 'nz'
}

export default defaultCart;

export const scrubForUI = (data) => {
    const cart = defaultCart;

    cart.firstName = data?.client_first_name;
    cart.lastName = data?.client_last_name;

    if (data?.client_gender) {
        cart.gender = data?.client_gender;
    }
    cart.totals = data?.totals;
    cart.items = [];

    Object.keys(data?.items).map((key) => {
        const item = data.items[key];
        cart.items.push(item)
    });

    if (data?.fees?.consultation) {
        cart.consultation = {
            ...data.fees.consultation,
            value: CONSULTATION_OPTIONS.CONSULTATION.checked
        };
    } else {
        cart.consultation = {
            value: CONSULTATION_OPTIONS.CONSULTATION.unchecked
        };
    }

    if (data?.fees?.processing) {
        cart.processing = data.fees.processing;
    }

    if (data?.country) {
        cart.country = data.country;
    }

    return cart;
}

export function getCurrencyLabel(cart) {
    return cart?.country === 'nz' ? 'NZD' : 'AUD';
}
