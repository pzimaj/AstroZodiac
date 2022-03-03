AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

let navigation = document.getElementById('nav');

function scroll(){ 
    if(document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        navigation.classList.add("bg-dark");
        navigation.classList.remove("bg-transparent");
    } 
    else{
        navigation.classList.add("bg-transparent");
        navigation.classList.remove("bg-dark");
    }
};

function scrolLess(){ 
    if(document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
        navigation.classList.add("bg-dark");
        navigation.classList.remove("bg-transparent");
    } 
    else{
        navigation.classList.add("bg-transparent");
        navigation.classList.remove("bg-dark");
    }
};

function scrolEvenLess(){
    if(document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        navigation.classList.add("bg-dark");
        navigation.classList.remove("bg-transparent");
    } 
    else{
        navigation.classList.add("bg-transparent");
        navigation.classList.remove("bg-dark");
    }
}

function dateSign(){
    const form = document.forms["signForm"];

    const date = form["date"].value;
    const finalDate = new Date(date);

    let birthMonth = finalDate.getMonth() + 1;
    let birthDay = finalDate.getDate();

    if(birthMonth === 1){
        if(birthDay >= 1 && birthDay <= 19){
            capricornDiv();
        }

        if(birthDay >= 20 && birthDay <= 31){
            aquariusDiv();
        }
    }

    if(birthMonth === 2){
        if(birthDay >= 1 && birthDay <= 18){
            aquariusDiv();
        }

        if(birthDay >= 19 && birthDay <= 29){
            piscesDiv();
        }
    }

    if(birthMonth === 3){
        if(birthDay >=1 && birthDay <= 20){
            piscesDiv();
        }

        if(birthDay >= 21 && birthDay <= 31){
            ariesDiv();
        }
    }

    if(birthMonth === 4){
        if(birthDay >= 1 && birthDay <=19){
            ariesDiv();
        }

        if(birthDay >= 20 && birthDay <= 30){
            taurusDiv();
        }
    }

    if(birthMonth === 5){
        if(birthDay >= 1 && birthDay <= 20){
            taurusDiv();
        }

        if(birthDay >= 21 && birthDay <= 31){
            geminiDiv();
        }
    }

    if(birthMonth === 6){
        if(birthDay >= 1 && birthDay <= 20){
            geminiDiv();
        }

        if(birthDay >= 21 && birthDay <= 30){
            cancerDiv();
        }
    }

    if(birthMonth === 7){
        if(birthDay >= 1 && birthDay <= 22){
            cancerDiv();
        }

        if(birthDay >= 23 && birthDay <= 31){
            leoDiv();
        }
    }

    if(birthMonth === 8){
        if(birthDay >= 1 && birthDay <=22){
            leoDiv();
        }

        if(birthDay >= 23 && birthDay <= 31){
            virgoDiv();
        }
    }

    if(birthMonth === 9){
        if(birthDay >= 1 && birthDay <= 22){
            virgoDiv();
        }

        if(birthDay >= 23 && birthDay <= 30){
            libraDiv();
        }
    }

    if(birthMonth === 10){
        if(birthDay >= 1 && birthDay <= 22){
            libraDiv();
        }

        if(birthDay >= 23 && birthDay <= 31){
            scorpioDiv();
        }
    }

    if(birthMonth === 11){
        if(birthDay >= 1 && birthDay <= 21){
            scorpioDiv();
        }

        if(birthDay >= 22 && birthDay <= 30){
            sagittariusDiv();
        }
    }

    if(birthMonth === 12){
        if(birthDay >= 1 && birthDay <= 21){
            sagittariusDiv();
        }

        if(birthDay >= 22 && birthMonth <= 31){
            capricornDiv();
        }
    }
    
    return true;
};

let signDiv = document.getElementById("feedback-card");

function ariesDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/aries/aries.png" class="card-img" alt="Aries image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are an Aries!</h2>
                                <p>Courages, confident and optimistic. You can cheer anyone up.</p>
                                <div class="text-center">
                                    <a href="aries.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function taurusDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/taurus/taurus.png" class="card-img" alt="Taurus image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Taurus!</h2>
                                <p>Reliable, responsible and patient. You can help anyone with their problems.</p>
                                <div class="text-center">
                                    <a href="taurus.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function geminiDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/gemini/gemini.png" class="card-img" alt="Gemini image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Gemini!</h2>
                                <p>Curious, smart and adaptable. You can adapt to any situation.</p>
                                <div class="text-center">
                                    <a href="gemini.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function cancerDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/cancer/cancer.png" class="card-img" alt="Cancer image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Cancer!</h2>
                                <p>Emotional, loyal and sympathetic. You can make anyone feel at home.</p>
                                <div class="text-center">
                                    <a href="cancer.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function leoDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/leo/leo.png" class="card-img" alt="Leo image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Leo!</h2>
                                <p>Passionate, generous, eccentric. You can light up any room.</p>
                                <div class="text-center">
                                    <a href="leo.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function virgoDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/virgo/virgo.png" class="card-img" alt="Virgo image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Virgo!</h2>
                                <p>Passionate, generous, eccentric. You can light up any room.</p>
                                <div class="text-center">
                                    <a href="virgo.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function libraDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/libra/libra.png" class="card-img" alt="Libra image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Libra!</h2>
                                <p>Friendly, kind and fair. You will always stop any argument.</p>
                                <div class="text-center">
                                    <a href="libra.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function scorpioDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/scorpio/scorpio.png" class="card-img" alt="Scorpio image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Scorpio!</h2>
                                <p>Mysterious, passionate and loyal. You would do anything for a friend.</p>
                                <div class="text-center">
                                    <a href="scorpio.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function sagittariusDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/saggittarius/sagittarius.png" class="card-img" alt="Sagittarius image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Sagittarius!</h2>
                                <p>Adventurous, idealistic and generous. You are always searching for an adventure.</p>
                                <div class="text-center">
                                    <a href="sagittarius.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function capricornDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/capricorn/capricorn.png" class="card-img" alt="Capricorn image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Capricorn!</h2>
                                <p>Responsible, disciplined and reliable. You lead your disciples to victory.</p>
                                <div class="text-center">
                                    <a href="capricorn.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function aquariusDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/aquarius/aquarius.png" class="card-img" alt="Aquarius image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are an Aquarius!</h2>
                                <p>Unique, independent and friendly. You don't let anyone tell you what you should be.</p>
                                <div class="text-center">
                                    <a href="aquarius.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function piscesDiv(){
    signDiv.innerHTML = `<div data-aos="fade-down" class="row no-gutters">
                            <div class="col-md-4">
                                <img src="assets/images/pisces/pisces.png" class="card-img" alt="Pisces image">
                            </div>
                            <div class="col-md-8 signDiv-text text-center">
                                <h2 class="astro-font">You are a Pisces!</h2>
                                <p>Artistic, wise and compassionate. You always put others before yourself.</p>
                                <div class="text-center">
                                    <a href="pisces.php" class="btn btn-primary button-color mt-3" role="button" aria-pressed="true">Find out more</a>
                                </div>
                            </div>
                        </div>`;
};

function validateComment(){
    const form = document.forms["commentForm"];

    const firstName = form["firstName"].value;
    const lastName = form["lastName"].value;
    const comment = form["comment"].value;

    if(firstName === "" || firstName.trim().length === 0){
        errorPrint("First name must be filled out", "firstNameError");
        return false;
    }
    else{
        removeError("firstNameError");
    }

    if(lastName === "" || lastName.trim().length === 0){
        errorPrint("Last name must be filled out", "lastNameError");
        return false;
    }
    else{
        removeError("lastNameError");
    }

    if(comment === "" || comment.trim().length === 0){
        errorPrint("The comment field must be filled out", "commenError");
        return false;
    }
    else{
        removeError("commentError");
    }

    return true;
};

function errorPrint(errorMessage, id){
    document.getElementById(id).innerHTML = `<div class="p-3 mb-3 bg-danger text-white">${errorMessage}</div>`;
};

function removeError(id){
    document.getElementById(id).innerHTML = "";
};

const rightDestination = 1000;
let animatedSolar;
let solarTimer;

const solarMove = function(){
    solarTimer = setInterval(solarMoveRight, 35);
};

const solarMoveRight = function(){
    const oldPosition = parseInt(animatedSolar.style.left);
    const newPosition = oldPosition + 5;
    animatedSolar.style.left = `${newPosition}px`;

    if(newPosition > rightDestination){
        clearInterval(solarTimer);
        animatedSolar.style.left = "0px";
    }
};

window.onload = function(){
    animatedSolar = document.getElementById("solar-gif");
    animatedSolar.style.position = "relative";
    animatedSolar.style.left = "0px";
    document.getElementById("btn-gif").onclick = solarMove;
}