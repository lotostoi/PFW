/* window.onload = () => {
  try {
    const form = document.querySelector('.contract__form');

    /*     const startFields = localStorage.getItem('fields') ? JSON.parse(localStorage.getItem('fields')) : []
  
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

    const button = document.querySelector('.lotos_send_from');

    button.addEventListener('click', async e => {
      e.preventDefault();
      const body = new FormData(form);
      body.append('action', 'my_action');
      const response = await fetch(ajax_obj.ajaxurl, {
        method: 'POST',
        body
      });
      const res = await response.json();
    });
  } catch (e) {
    console.log(e);
  }
};
 */