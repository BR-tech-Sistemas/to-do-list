require('./bootstrap');

import Alpine from 'alpinejs';
import Toastr from 'toastr';
import Swal from 'sweetalert2'

window.Alpine = Alpine;
window.toastr = Toastr;
window.Swal = Swal;

Alpine.start();
