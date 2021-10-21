const reviewRepositoryFiles = () => {
    const url = `${base_url}?c=clienteexterno&a=parser`;
    try {
        fetch(url);
    } catch (error) {
        console.error(error);
    }
}

document.addEventListener('DOMContentLoaded', reviewRepositoryFiles);