window.onload = () => {
  const button = document.getElementById('lotos-my-button')

  button.addEventListener('click', async (e) => {
    e.preventDefault()
    const form = document.getElementById('contract-form')

    const response = await fetch('/wp-content/plugins/LotosFormPlagin/api.php', {
      method: 'POST',
      body: new FormData(form),
    })

    const res = await response.json()

    console.log(res)
  })
}
