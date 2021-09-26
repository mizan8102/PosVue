require('./bootstrap');
require('node-waves')
import Vue from 'vue'
window.$ = window.jQuery = require('jquery');
require('../assets/plugins/jquery/jquery.min')
require('../assets/plugins/bootstrap/js/bootstrap')
require('../assets/plugins/jquery-slimscroll/jquery.slimscroll')
require('../assets/plugins/node-waves/waves')
require('../assets/js/admin')
require('../assets/js/demo')
import Swal from 'sweetalert2'
window.Swal =Swal;
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
// image picker

window. VueImageChooser;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  window.Toast =Toast;
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
