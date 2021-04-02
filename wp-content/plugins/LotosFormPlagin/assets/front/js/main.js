window.onload = () => {
  
  const form = document.getElementById('contract-form')
  const startFields = localStorage.getItem('fields') ? JSON.parse(localStorage.getItem('fields')) : []

  if (startFields.length) {
    startFields.forEach((el) => {
      const newEl = form.querySelector(`[name="${el.name}"]`)
      newEl.value = el.value
    })
  }

  form.addEventListener('input', (e) => {
    const fields = [...form.querySelectorAll('input'), ...form.querySelectorAll('textarea')].map((el) => ({
      name: el.name,
      value: el.value,
    }))
    localStorage.setItem('fields', JSON.stringify(fields))
  })

  const button = document.getElementById('lotos-my-button')
  button.addEventListener('click', async (e) => {
    e.preventDefault()

    const response = await fetch('/wp-content/plugins/LotosFormPlagin/api.php', {
      method: 'POST',
      body: new FormData(form),
    })

    const res = await response.json()

    console.log(res)
  })
}
