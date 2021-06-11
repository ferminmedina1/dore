"use strict"

document.addEventListener('DOMContentLoaded', loadAlert);

function loadAlert () {

    let message = document.getElementById("avisoCaptcha");

    if(message.innerHTML != ""){
        message.classList.add("error");
    }
}