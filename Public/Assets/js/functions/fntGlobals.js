const reviewRepositoryFiles = async () => {
    const url = `${base_url}?c=clienteexterno&a=parser`;
    try {
        const req = await fetch(url);
        const data = await req.json();
        console.log(data[0]);
        // if (status && msg !== '') {
        //     msg.forEach(item => console.log(item));
        //     return;
        //     Swal.fire({
        //         position: 'top-end',
        //         icon: 'success',
        //         title: msg,
        //         showConfirmButton: false,
        //         timer: 1500
        //     })
        // }
    } catch (error) {
        console.error(error);
    }
}

document.addEventListener('DOMContentLoaded', reviewRepositoryFiles);