const form = document.querySelector('.Log-form form'),
    submitBtn = document.querySelector('.submit input'),
    errortext = document.querySelector('.error-text');

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    submitBtn.onclick = () =>{

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/signup.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    let data = xhr.response;
                    if (data == "Success") {
                        location.href = "verify.php"
                    }
                    else{
                        errortext.textContent = data;
                        errortext.style.dispaly = "block";
                    }
                }
            }

            let formData = new FormData(form);
            xhr.send(formData);
        }
    }