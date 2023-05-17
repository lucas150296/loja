document.querySelectorAll('[link]').forEach(link => {
    const conteudo = document.getElementById('conteudo')

    link.onclik = function(e) {
        e.preventDefault()
        fetch(link.getAttribute('link'))
            .then(resp => resp.text())
            .then(html => conteudo.innerHTML = html)
    }
})
