const reviewRepositoryFiles = async () => {
    const url = `${base_url}?c=clienteexterno&a=parser`;
    try {
        const req = await fetch(url);
        const data = await req.json();
        data.forEach(item => {
            console.log(item);
            Swal.fire(
                'Respositorio de archivos',
                item.msg,
                'success'
            );
        });
    } catch (error) {
        console.error(error);
    }
}

document.addEventListener('DOMContentLoaded', reviewRepositoryFiles);