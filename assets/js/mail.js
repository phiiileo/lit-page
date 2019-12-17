var client_name = document.getElementById('client_name');
var email = document.querySelector("#email");
var content = document.querySelector("#Description");
var submit = document.querySelector("#button");


test = () => {
  console.log(client_name.value)
}

const submitForm = () => {
  var form = new FormData();
  form.append("name", client_name.value);
  form.append("email", email.value);
  form.append("content", content.value);

  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://formsubmit.io/send/07ca5013-93c2-4181-91db-ac62d90dd089",
    "method": "POST",
    "headers": {
      "Accept": "*/*",
    },
    "processData": false,
    "contentType": false,
    "mimeType": "multipart/form-data",
    "data": form
  }

  $.ajax(settings).done(function (response) {
    console.log(response);
  });
}

submit.addEventListener('click', async function (e) {

  if (email.value === "" || client_name.value === "" || content.value === "") {
    return alertify.error('None of the fields can be empty ');
  } else {
    e.preventDefault()
    await submitForm();
    alertify.success('Message Sent');
    email.value = "";
    client_name.value = "";
    content.value = "";
  }

})
