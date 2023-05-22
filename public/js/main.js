var login;


const log=()=>{
    login=document.getElementById("connexion").style.display='';
    login=document.getElementById("inscrire").style.display='none';    
}

function log(index){
    
    if (index==1) {
        login=document.getElementById("connexion").style.display='none';
        login=document.getElementById("inscrire").style.display='';
    }
    if (index==2) {
        login=document.getElementById("connexion").style.display='none';
        login=document.getElementById("inscrire").style.display='';
    }
}
