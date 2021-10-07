require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'


createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .mount(el);
    },
});

InertiaProgress.init();

window.catchError = function(errors) {
    console.log(errors);
    var message = '';
    $.each(errors, function (index, item) {
        $.each(item, function (index, item) {
            message += item + '\n';
        })
    });
    alertify.alert(message, function () {
        alertify.error('Please try again.');
    });
};

window.select2Binder = function (id, value, label) {
    $(id).append('<option value="' + value + '">' + label + '</option>');
    $(id).val(value);
    $(id).trigger('change');
};
