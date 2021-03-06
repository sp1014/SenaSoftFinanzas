const selectListCategories = document.getElementById('txtCategoria');
const selectListDocumentType = document.getElementById('txtTipoDoc');
const formClienteExt = document.querySelector('#form-clienteex');
const formDatosPersonales = document.querySelector('#frm-admin');

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

const loadDocumentType = async () => {
    const url = `${base_url}?c=clienteexterno&a=getTiposDocumento`;
    try {
        const req = await fetch(url);
        const { status, data } = await req.json();
        if (status) {
            selectListDocumentType.innerHTML = '<option value="" selected disabled>-- Selecciona un tipo documento --</option>';
            data.forEach(item => {
                selectListDocumentType.innerHTML += `
                                                    <option value="${item.id}">${item.tipo_documento}</option>
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

const savePersonalData = async (e) => {
    e.preventDefault();
    const formData = new FormData(formDatosPersonales);
    const url = `${base_url}?c=admin&a=Guardar`;
    try {
        const req = await fetch(url, {
            method: 'POST',
            body: formData
        });
        const { status, msg } = await req.json();
        if (status) {
            Swal.fire('Registro exitoso', msg, 'success');
            formDatosPersonales.reset();
        } else {
            Swal.fire('Error', msg, 'error');
        }
    } catch (error) {
        console.error(error);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    if (selectListCategories) {
        loadCategories();
    }
    if (selectListDocumentType) {
        loadDocumentType();
    }
});

if (formClienteExt) {
    formClienteExt.addEventListener('submit', validateForm);
}

if (formDatosPersonales) {
    formDatosPersonales.addEventListener('submit', savePersonalData);
}