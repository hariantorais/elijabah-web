import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";

window.addEventListener('toast', ((event) => {
    const { message, type } = event.detail;

    const isError = type === 'error';
    const icon = isError ? '⚠️ ' : '✅ ';

    Toastify({
        text: icon + (message || 'Proses berhasil!'),
        duration: 4000,
        gravity: "bottom",
        position: "right",
        style: {
            background: type === 'error' ? '#ef4444' : '#0d9488',
            borderRadius: "12px"
        }
    }).showToast();
}));
