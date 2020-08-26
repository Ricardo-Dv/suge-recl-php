function confirmarElim() {
    let x = confirm("¿Está seguro que desea eliminar?");

    if (x) {
        return true;
    }
    else {
        return false;
    }
};