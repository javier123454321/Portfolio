var x = document.getElementById("contact");

document.addEventListener('submit', e => {
    const form = e.target;
    e.preventDefault();
  
    fetch(form.action, {
        method: form.method,
        body: new FormData(form)
      })
  });
