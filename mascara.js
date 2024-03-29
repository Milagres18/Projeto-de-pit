const input = document.getElementById('cpf')

input.addEventListener('keypress', () => {
    let inputlength = input.value.length

    if (inputlength === 3 || inputlength === 7) {
        input.value += '.'
    } else if (inputlength === 11) {
        input.value += '-'
    }
})

const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }

const cep = document.getElementById('cep')

cep.addEventListener('keypress', () => {
    let ceplength = cep.value.length

    if (ceplength === 5) {
        cep.value += '-'
    }
})