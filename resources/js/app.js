import './bootstrap';

var Turbolinks = require("turbolinks")
// Turbolinks.start()



// document.addEventListener('DOMContentLoaded',function(){
//     setTimeout(() => {
//         document.getElementById('loading').className='d-none'
//         document.getElementById('Main').className='d-block'
//     }, 400);
// })






//events



document.addEventListener('working_on_it',function (){
    Swal.fire('We still working on it Thx :)')
})

window.addEventListener('saveSuccessWithSid',function(event){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    try{
        navigator.clipboard.writeText(event.detail.sidLink)
        Toast.fire({
            icon: 'success',
            title: 'saved successfully'
        })
    }catch(err){
        Toast.fire({
            icon: 'error',
            title: 'smth went wrong'
        })
    }
})

window.addEventListener('saveSuccess',function(){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'saved successfully'
    })
})

window.addEventListener('saveFaild',function(){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'error',
        title: 'smth went wrong'
    })
})

window.addEventListener('messageSuccess',function(event){
    const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-outline-success mx-2 fw-bold',
                cancelButton: 'btn btn-outline-danger mx-2 fw-bold'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emit('skillRemoved',event.detail.id)
            swalWithBootstrapButtons.fire(
            'Deleted!',
            'skill has been deleted.',
            'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled'
            )
        }
    })
})
