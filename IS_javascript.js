let con = document.getElementById("confirm");
let dec = document.getElementById("decline");
let conE = document.getElementById("agreeEmoji");
let decE = document.getElementById("declineEmoji");
let getF = document.getElementById("getform");
let offC = document.getElementById("offcomment");


// the changes in the index page ie, the buttons click show and hide others

function confirmf() {

    dec.style.display = "none";
    conE.style.display = "block";
    getF.style.display = "block";
    con.style.display = "none";

}

function declinef() {
    dec.style.display = "none";
    con.style.display = "none";
    decE.style.display = "block"
    offC.innerHTML = "THANK YOU FOR VISITING THE WEBSITE. GOOD BYE!!";
}
// function to change the page from index to show the form 
function pagechange() {
    window.location.href = "IS_form.php";
}