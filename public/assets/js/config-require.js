/**
 * global configure object for require.js
 * require.js loads modules with this setting automatically
 */
var require = {
    baseUrl: BASE_URL + 'assets/js',
    paths: {
        'jquery': 'jquery-1.9.1.min',
        'bootstrap': 'bootstrap.min',
    },
    deps: [
        'jquery',
        'bootstrap',
    ],
    shim: {
        'bootstrap': {
            deps: ['jquery'],
        },
    }
}