// code for hamburger menubar display

burger = document.querySelector('.burger');
navbar = document.querySelector('.navbar');
rightnav = document.querySelector('.rightNav');
navlist = document.querySelector('.nav-list');

burger.addEventListener('click', ()=>{
 rightnav.classList.toggle('v-class-resp');
 navlist.classList.toggle('v-class-resp');
 navbar.classList.toggle('height-nav-resp');
});

// code for subscribe and unsubscribe button
let toggle = button =>{
    if(button.id === "Sub"){
        button.innerText = "Unsubscribe";
        button.id= "Unsub";
        alert("Thank you! Subscribed!");
    }
    else{
        button.innerText = "Subscribe";
        button.id= "Sub";
        alert("Ohh! feeling sad... Unsubscribed!");
    }

}

//code for watch video button and popup video window
const popup= document.getElementById("popup");
const closed= document.getElementById("close");
const videoPopup1= document.getElementById("videoPopup1");
let vid= document.getElementById("myVideo");

popup.addEventListener("click", ()=>{

    videoPopup1.style.display= "block";
});

closed.addEventListener("click", ()=>{
    vid.pause();
    videoPopup1.style.display= "none";
    
});


var searchInEnt = document.getElementById("search");
searchInEnt.addEventListener("keypress", function(event){
    if(event.key === "Enter"){
        event.preventDefault();
        document.getElementById("searchbtn").onclick();
    }
});

function search(){
    
    var searchInput= document.getElementById('search');
    var searchTerm= searchInput.value.trim();
    //get all elements containing text
    const searchIn= document.querySelectorAll('.text-small');

    const oldhigh= document.getElementsByClassName("high");
    if(oldhigh.length){
        for( let i=0; i<oldhigh.length; i++)    
            oldhigh[i].style.backgroundColor= null;
    }
    

    //loop through each element
    if(searchTerm !== ''){
        let result, count=0;
        searchIn.forEach((element)=>{
            const conent= element.innerHTML;
            const highlightedContent = conent.replace(
                new RegExp(searchTerm,'gi'),
                '<span class="high" style="background-color: #27e6efd9;">$&</span>'
            );
            element.innerHTML = highlightedContent;  
            let pattern= new RegExp(searchTerm,'gi');
            result = pattern.test(conent);
            if(result === true) count++;
        });
        
        if(count <= 0 )
            alert("No match found!!!");
    }
    else{
      //  element.innerHTML = element.textContent;
        alert("please enter valid search term!");
    }
    
}