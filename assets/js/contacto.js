// FORMULARIO CONTACTO
const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
    e.preventDefault();
    statusTxt.style.color = "#0D6EFD";
    statusTxt.style.display = "block";
    statusTxt.innerText = "Enviando tu mensaje...";
    form.classList.add("disabled");

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/message.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response;
            if(response.indexOf("obligatorio") != -1 || response.indexOf("válido") != -1 || response.indexOf("No") != -1){
                statusTxt.style.color = "red";
            }else{
                form.reset();
                setTimeout(()=>{
                    statusTxt.style.display = "none";
                }, 3000);
            }
            statusTxt.innerText = response;
            form.classList.remove("disabled");
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}