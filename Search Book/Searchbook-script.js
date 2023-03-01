let searchcontent = document.querySelector("#searchfield-content");
let searchinput = document.querySelector("#searchfield");
let sugg = document.querySelector("#autocomplete");
console.log(searchinput);
console.log(sugg);

searchinput.onkeyup = () => {
    findSuggestions();
}

searchinput.onfocus = () => {
    findSuggestions();
}

function findSuggestions() {
    let userdata = searchinput.value;
    let emptyarray = [];
    if(userdata) {
        emptyarray = suggestions.filter((data) => {
            return data.toLocaleLowerCase().includes(userdata.toLocaleLowerCase());
        });
        emptyarray = emptyarray.map((data) => {
            return data = '<li class="suggestions" onclick="valuewrite(this);">'+ data +'</li>';
        });   
    }
    else {
        
    }
    showSuggestions(emptyarray);

    //Removing extra suggestions from the list

    if(sugg.hasChildNodes) {
        while(sugg.children.length > 6) {
            sugg.lastElementChild.remove();
        }
    }

    if(sugg.hasChildNodes) {
        sugg.style.boxShadow = "0px 2px 10px rgba(0, 0, 0, 0.5)";
    }
    else {
        sugg.style.boxShadow = "none";
    }

    //Bolding the usertext inside the suggestions

    let pattern = new RegExp(`${userdata}`,"gi");
    for(i=0;i<sugg.children.length;i++) {
        sugg.children[i].innerHTML = sugg.children[i].textContent.replace(pattern, match => `<span style="font-weight:bold;padding:0;">${match}</span>`);
    }
}

function showSuggestions(list) {
    let listdata;
    if(!list.length) {
        listdata="";
    }
    else {
        listdata = list.join('');
    }
    sugg.innerHTML = listdata;
}

function valuewrite(obj) {
    searchinput.value = obj.textContent;
    findSuggestions();
}

//If user clicks outside the search engine, then it will remove all the suggestions


// window.onclick = (e) => {
//     if(e.target!=searchcontent.parentElement.children)
//     console.log("Not matching");

// }

let active = -1;

searchcontent.addEventListener("keydown",(e) => {
    console.log(e.key);
    // console.log(sugg.children);
    if(sugg.children.length > 0) {
        if(e.key=="ArrowUp") {
            if(active < sugg.children.length-1) {
                active+=1;
                sugg.children[active].classList.add("active");
            }
        }
        if(e.key=="ArrowDown") {
            if(active >= -1) {
                active-=1;
                sugg.children[active].classList.add("active");
            }
        }
    }
})

document.addEventListener("keypress", e => {
    console.log(e.key);
})

let srbi = document.querySelectorAll('.search-results-bookinfo');
// console.log(sideopt);
for(let i = 0;i<srbi.length;i++) {
    srbi[i].onclick = function(e) {
        if(e.target != srbi[i].children[2] && e.target != srbi[i].children[2].children[0] && e.target != srbi[i].children[2].children[0].children[0]) {
            if(srbi[i].children[2].classList.contains("active")==false) {
                let j = 0;
                while(j < srbi.length) {
                    srbi[j].children[2].classList.remove("active");
                    srbi[j].children[1].children[5].innerHTML = "Click to show options";
                    j++;
                }
                srbi[i].children[2].classList.add("active");
                srbi[i].children[1].children[5].innerHTML = "Click to hide options";
            }
            else {
                srbi[i].children[2].classList.remove("active");
                srbi[i].children[1].children[5].innerHTML = "Click to show options";
            }
        }
    }
}