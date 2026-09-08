import './bootstrap';
import 'trix'
import 'trix/dist/trix.css'

document.addEventListener('trix-attachment-add', function(event) {
    if (event.attachment.file) {
        uploadFileAttachment(event.attachment)
    }
})

function uploadFileAttachment(attachment) {
    const file = attachment.file
    const form = new FormData
    form.append('file', file)

    fetch('/admin/upload-trix', {
        method: 'POST',
        body: form,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
            'Accept': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            attachment.setAttributes({
                url: data.url,
                href: data.url
            })
        })
        .catch(() => attachment.remove())
}

// Optional: Hapus file di server kalau user hapus attachment di editor
document.addEventListener('trix-attachment-remove', function(event) {
    const url = event.attachment.getAttribute('url')

    if (url) {
        fetch('/admin/delete-trix', {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ url: url })
        })
    }
})
