export const PROCESSING_OPTIONS = {
    STANDARD: 'STANDARD',
    FAST: 'FAST',
    URGENT: 'URGENT',
}

export default [
    {name: 'standard', value: PROCESSING_OPTIONS.STANDARD, label: 'Standard'},
    {name: 'fast', value: PROCESSING_OPTIONS.FAST, label: 'FAST (3 working days)', price: 50.00},
    {name: 'urgent', value: PROCESSING_OPTIONS.URGENT, label: 'URGENT (1 working day)', price: 100.00},
];

