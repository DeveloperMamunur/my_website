 "use strict"
// ========= typing animation =========

class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 8);
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of word
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if(this.isDeleting) {
      // Remove char
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add char
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // change color for data-text
    this.txtElement.innerHTML = `<span class="txt" style="color: #028181;">${this.txt}</span>`;

    // Initial Type Speed
    let typeSpeed = 100;

    if(this.isDeleting) {
      typeSpeed /= 2;
    }

    // If word is complete
    if(!this.isDeleting && this.txt === fullTxt) {
      // Make pause at end
      typeSpeed = this.wait;
      // Set delete to true
      this.isDeleting = true;
    } else if(this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      // Move to next word
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 300;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
  

  
}

// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}




       // ============= sideBar toggler ===============
const menuBar = document.getElementById('menu_btn');
const sideBar = document.querySelector('.main_navber');
const close = document.querySelector('.close_btn');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('show')
});


close.addEventListener('click', () => {
    sideBar.classList.toggle('show')
});



//========= scroll top button and scroll section  ========= 

//Get the button

let sections = document.querySelectorAll('main section');
let navLinks = document.querySelectorAll('header nav .navbar_left a');

let mybutton = document.getElementById("myBtn");

window.onscroll = ()=>{
    
  skillSectionLoad();
  scrollFunction();
  sections.forEach(sec=>{
    
      let top = window.scrollY;
      let offset = sec.offsetTop - 250;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if(top >= offset && top < offset + height){
        
          navLinks.forEach(links=> {
            
              links.classList.remove('active');
              document.querySelector('header nav .navbar_left a[href*= '+id+']').classList.add('active');
          })
      }
  })
    
}

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
    
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


        // ========= Dark Mode toggler =========
const toggler = document.getElementById('theme-toggle');


toggler.addEventListener('change', function () {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
});




// < ====== filter project ======= >

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filter");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    RemoveFilterClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddFillterClass(x[i], "show");
  }
}

// Show filtered elements
function AddFillterClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveFilterClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
document.addEventListener('DOMContentLoaded', function() {

  const selector = '.item';
  const elems = Array.from(document.querySelectorAll(selector));
  const navigation = document.querySelector('#myBtnContainer');

  function makeActive(evt) {
    const target = evt.target;

     if (!target || !target.matches(selector)) {
       return;
     }
     
    elems.forEach(elem => elem.classList.remove('active'));
    evt.target.classList.add('active');
  };
  navigation.addEventListener('mousedown', makeActive);

});


// circle progress bar =============================================================
const circularProgress = document.querySelectorAll(".progress_circle");
const PrValues = Array(circularProgress.length);
const progressInterval = Array(PrValues.length);
PrValues.fill(0);
let slidespeed = 50;
const skillSection = document.querySelector('section.skills');

function skillSectionLoad(){
  let top = window.scrollY;
  let height = skillSection.offsetHeight;
  let offset = skillSection.offsetTop - 250;
  let offset2 = skillSection.offsetTop - 700;
  if(top >= offset && top < offset + height || top >= offset2 && top < offset2 + height) {
    circularProgress.forEach((prvalue, key)=>{
      progressInterval[key] = setInterval(()=>{
        if(PrValues[key] === parseInt(prvalue.dataset.progress)){
          clearInterval(progressInterval[key]);
        }else{
          PrValues[key] ++;
          prvalue.querySelector('.progress_value').innerHTML = PrValues[key] + "%";
          prvalue.style.background = `conic-gradient(var(--clr) ${PrValues[key] * 3.6}deg, #ededed 0deg)`
          
        }
      }, slidespeed);
    })
  }
};


// testimonial Image slider =======================================================================

let testSlide = document.querySelectorAll('.slideItem');
let dots = document.querySelectorAll('.dot');

var slideCounter = 0;

function switchTest(currentSlide){
  currentSlide.classList.add('active');
    const slideId = currentSlide.getAttribute('attr');
    if(slideId > slideCounter){
        testSlide[slideCounter].style.animation = 'next1 0.5s ease-in forwards';
        slideCounter=slideId;
        testSlide[slideCounter].style.animation = 'next2 0.5s ease-in forwards';
    }else if(slideId == slideCounter){
        return;
    }else{
        testSlide[slideCounter].style.animation = 'prev1 0.5s ease-in forwards';
        slideCounter=slideId;
        testSlide[slideCounter].style.animation = 'prev2 0.5s ease-in forwards';
    }
    indicators();
}
function indicators(){
    for(let i=0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(' active', '')
    }
    dots[slideCounter].className +=  ' active';
}

function slideNext(){
    testSlide[slideCounter].style.animation = 'next1 0.5s ease-in forwards';
    if(slideCounter >= testSlide.length - 1){
      slideCounter = 0;
    }else{
      slideCounter++;
    }
    testSlide[slideCounter].style.animation = 'next2 0.5s ease-in forwards';
    indicators();
}
function autoSliding(){
 let deleteInterval = setInterval(timer, 3000);
    function timer(){
        slideNext();
        indicators();
    }
const slidContainer = document.querySelector('.indicators');
slidContainer.addEventListener('mouseover', pause);
function pause(){
    clearInterval(deleteInterval);
}
slidContainer.addEventListener('mouseout', autoSliding);
}
autoSliding();



