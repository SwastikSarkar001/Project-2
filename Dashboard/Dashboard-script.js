const theme = document.querySelector("#theme");

function themeclick() {
    theme.addEventListener("click", () => {
        theme.querySelector("span").classList.toggle("fa-moon");
        // theme.querySelector("span").classList.toggle("fa-solid");
    })
}

let sideopt = document.querySelectorAll('.sideopt');
// console.log(sideopt);
for(let i = 0;i<sideopt.length;i++) {
    sideopt[i].onclick = function() {
        let j = 0;
        while(j < sideopt.length) {
            sideopt[j++].className = "sideopt";
        }
        sideopt[i].className = "sideopt active";
    }
}



function setActiveClass(section, option) {
    if(section.getBoundingClientRect().top<=70 && section.getBoundingClientRect().bottom>=70) {
        if(option.className=="sideopt")
        option.className="sideopt active";
    }
    else {
        if(option.className=="sideopt active")
        option.className="sideopt";
    }
}

document.addEventListener("scroll", function() {
    const contentlist = document.querySelector(".sidebar").lastElementChild.children;
    const sections = document.querySelector(".main-content").children;
    for (let i = 0; i < sections.length; i++) {
        setActiveClass(sections[i],contentlist[i]);
    }
});

// document.querySelector(".sidebar").onmousemove = function() {
//     console.log("Over the sidebar");
//     document.querySelector(".main-content").style.overflow="hidden";
// };

let srbi = document.querySelectorAll('.search-results-bookinfo');
// console.log(sideopt);
for(let i = 0;i<srbi.length;i++) {
    srbi[i].onclick = function(e) {
        if(e.target != srbi[i].children[2] && e.target != srbi[i].children[2].children[0] && e.target != srbi[i].children[2].children[0].children[0]) {
            if(srbi[i].children[2].classList.contains("active")==false) {
                let j = 0;
                while(j < srbi.length) {
                    srbi[j].children[2].classList.remove("active");
                    srbi[j].children[1].lastElementChild.innerHTML = "Click to show options";
                    j++;
                }
                srbi[i].children[2].classList.add("active");
                srbi[i].children[1].lastElementChild.innerHTML = "Click to hide options";
            }
            else {
                srbi[i].children[2].classList.remove("active");
                srbi[i].children[1].lastElementChild.innerHTML = "Click to show options";
            }
        }
    }
}

const requestpaneloptions = document.querySelector("#request-panel-options").children;
const requestpanelrequests = document.querySelector("#request-panel-requests").children;

for (let i = 0; i < requestpaneloptions.length; i++) {
    requestpaneloptions[i].onclick = () => {
        let j = 0;
        while(j < requestpaneloptions.length) {
            requestpaneloptions[j].classList.remove("active");
            requestpanelrequests[j].classList.remove("active");
            j++;
        }
        requestpaneloptions[i].classList.add("active");
        requestpanelrequests[i].classList.add("active");
    }
}

/* Admin functionalities */

// A confirmation box should appear if the user is leaving
// the document and the notification contains some value.

const createnotification = document.getElementById("create-notification");
const writingsystem = document.getElementById("writing-system");

createnotification.onclick = () => {
    if (writingsystem.classList.contains("active")) {
        createnotification.children[0].children[0].style.rotate = "0deg";
        createnotification.children[1].textContent = "Create new notice";
        writingsystem.classList.remove("active");
    }
    else {
        createnotification.children[0].children[0].style.rotate = "135deg";
        createnotification.children[1].textContent = "Close the panel";
        writingsystem.classList.add("active");
    }
}