document.querySelectorAll('[link-nav]').forEach(link => {
    const conteudo = document.getElementById('conteudo')
    console.log(link.getAttribute('link-nav'))

    link.onclick = function (e) {
        e.preventDefault()
        fetch(link.getAttribute('link-nav'))
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
    }
})
function limpa_form_cep() {
    document.getElementById('cidade').value = ("")
    document.getElementById('estado').value = ("")
}

function atualizar_cep(json) {
    if (!("erro" in json)) {
        document.querySelector(" [name='cidade'] ").value = json.localidade
        document.getElementById('estado').value = json.uf;
    } else {
        limpa_form_cep()
        alert("CEP nao localizado")
    }
}
function consultaCep() {
    console.log('teste')
    const cep = document.getElementById('cep').value.replace(/[^0-9]+/, '');
    console.log(cep)
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    fetch(url)
        .then(response => response.json())
        .then(json => {
            atualizar_cep(json)
        });


    ;
}
