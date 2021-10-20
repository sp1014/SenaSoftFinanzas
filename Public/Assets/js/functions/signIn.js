const formLogin = document.querySelector('#signIn');

const validateForm = (e) => {
    e.preventDefault();
    const user = document.getElementById('txtEmail');
    const password = document.getElementById('txtPass');

    if (user.value.trim() === '' || password.value.trim() === '') {
        Swal.fire('Campos obligatorios !!', 'Todos los campos son obligatorios !!', "error");
    } else {
        signIn();
    }
}

const signIn = async () => {
    const formData = new FormData(formLogin);
    const url = `${base_url}?c=Login&a=signIn`;
    try {
        const req = await fetch(url, {
            method: 'POST',
            body: formData
        });
        const { status, msg } = await req.json();
        if (!status) {
            Swal.fire('Error', msg, 'error');
            formLogin.reset();
        } else {
            if (msg === 'ok') {
                window.location.href = `${base_url}`;
            }
        }
    } catch (error) {
        console.error(error);
    }
}

formLogin.addEventListener('submit', validateForm);