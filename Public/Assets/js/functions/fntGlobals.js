const reviewRepositoryFiles = async () => {
    const url = `${base_url}?c=clienteexterno&a=parser`;
    try {
        const req = await fetch(url);
        const data = await req.json();
        let res = '';
        data.forEach((item, i) => {
            res += (i + 1) + '. ' + item.msg + '\n';
        });
        console.log(res);
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: res,
            showConfirmButton: false,
            timer: 1500
        })
    } catch (error) {
        console.error(error);
    }
}

document.addEventListener('DOMContentLoaded', reviewRepositoryFiles);