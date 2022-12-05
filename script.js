let mnpict = document.querySelector(".main-picture");
let inf = document.querySelector('.info');
let skinf = document.querySelector('.skills-info');
let links = document.querySelector('.links');

function GetClassSelectetEl(selectetPoint) {
    if ("avatar_point" == selectetPoint.classList[1]) {
        mnpict.classList.add("selectet_point");
    }
    else if("skills_point" == selectetPoint.classList[1]){
        inf.classList.add("selectet_point");
    }
    else if("exp_point" == selectetPoint.classList[1]){
        skinf.classList.add("selectet_point");
    }
    else if("ref_point" == selectetPoint.classList[1]){
        links.classList.add("selectet_point");
    }
    else{}
}
function DelClassSelectetEl(selectetPoint) {
    if ("avatar_point" == selectetPoint.classList[1]) {
        mnpict.classList.remove("selectet_point");
    }
    else if("skills_point" == selectetPoint.classList[1]){
        inf.classList.remove("selectet_point");
    }
    else if("exp_point" == selectetPoint.classList[1]){
        skinf.classList.remove("selectet_point");
    }
    else if("ref_point" == selectetPoint.classList[1]){
        links.classList.remove("selectet_point");
    }
    else{}
}
