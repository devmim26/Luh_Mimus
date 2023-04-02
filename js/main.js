function handleCredentialResponse(response) {
    const data = jwt_decode(response.credential)
  
    fullName.textContent = data.name
    sub.textContent = data.sub
    given_name.textContent = data.given_name
    family_name.textContent = data.family_name
    email.textContent = data.email
    verifiedEmail.textContent = data.email_verified
    picture.setAttribute("src", data.picture)
  }
  
  window.onload = function () {
    const clientID = window.prompt("58085472180-2hqi17c3vdhrfk8icefikntfqeng88mc.apps.googleusercontent.com")
  
    google.accounts.id.initialize({
      client_id: clientID,
      callback: handleCredentialResponse
    });
  
    google.accounts.id.renderButton(
      document.getElementById("buttonDiv"), {
      theme: "filled_white",
      size: "large",
      type: "standard",
      shape: "pill",
      locale: "pt-BR",
      logo_alignment: "left",
    } // customization attributes
    );
  
    google.accounts.id.prompt(); // also display the One Tap dialog
  }

  