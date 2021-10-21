const selectListCategories = document.getElementById('txtCategoria');
const formClienteExt = document.querySelector('#form-clienteex');

const loadCategories = async () => {
    const url = `${base_url}?c=clienteexterno&a=getCategorias`;
    try {
        const req = await fetch(url);
        const { status, data } = await req.json();
        if (status) {
            selectListCategories.innerHTML = '<option value="" selected disabled>-- Selecciona una categoría --</option>';
            data.forEach(item => {
                selectListCategories.innerHTML += `
                                                    <option value="${item.id}">${item.nombre}</option>
                                                `;
            })
        } else {
            console.log(data)
        }
    } catch (error) {
        console.error(error);
    }
}

const validateForm = (e) => {
    e.preventDefault();
    const categorie = document.querySelector('#txtCategoria');
    const file = document.querySelector('#txtFile');

    if (categorie.value.trim() === '' || file.value === '') {
        Swal.fire("Campos obligatorios", "Todos los campos son obligatorios", "error");
    } else {
        insert();
    }
}

const insert = async () => {
    const formData = new FormData(formClienteExt);
    const url = `${base_url}?c=clienteexterno&a=insert`;
    try {
        const req = await fetch(url, {
            method: 'POST',
            body: formData
        });
        const { status, msg } = await req.json();
        if (status) {
            Swal.fire('Registro exitoso', msg, 'success');
        } else {
            Swal.fire('Error', msg, 'error');
        }
    } catch (error) {
        console.error(error);
    }
    formClienteExt.reset();
}

document.addEventListener('DOMContentLoaded', loadCategories);

if (formClienteExt) {
    formClienteExt.addEventListener('submit', validateForm);
}