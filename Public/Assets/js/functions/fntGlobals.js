const reviewRepositoryFiles = async () => {
    const url = `${base_url}?c=clienteexterno&a=parser`;
    try {
        const req = await fetch(url);
        const data = await req.json();
        console.log(data);
    } catch (error) {
        console.error(error);
    }
}

document.addEventListener('DOMContentLoaded', reviewRepositoryFiles);