const cookieBox = document.querySelector(".cookieWrap"),
    acceptBtn = cookieBox.querySelector(".buttons button");

acceptBtn.onclick = () => {
    //setting cookie for 1 month, after one month it'll be expired automatically
    document.cookie = "Cookie=Cookie; max-age=" + 60 * 60 * 24 * 30;
    if (document.cookie) { //if cookie is set
    cookieBox.classList.add("hide"); //hide cookie box
    } else { //if cookie not set then alert an error
    alert("No se puede configurar la cookie! Desbloquee en este sitio desde la configuración de cookies de su navegador.");
    }
}
let checkCookie = document.cookie.indexOf("Cookie=Cookie"); //checking our cookie
//if cookie is set then hide the cookie box else show it
checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");