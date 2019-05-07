var tipo = document.querySelector('select[name=tipo]');

tipo.onchange = function()
{
    var tipos = ['cpf', 'cnpj'];

    document.querySelector('#id').children[1].name = tipos[tipo.value];
    document.querySelector('#id').children[0].innerHTML = tipos[tipo.value].toUpperCase() + ': ';

}

