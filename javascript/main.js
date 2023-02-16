//Menu Start
const openMenu = document.querySelector(".open-menu");
const closeMenu = document.querySelector(".close-menu");
const navbarUl = document.querySelector(".navbar ul");

const openMenuControl = () => {
    openMenu.style.display = "none";
    closeMenu.style.display= "block";
    navbarUl.style.display = "block";
}

const closeMenuControl = () => {
    closeMenu.style.display = "none";
    openMenu.style.display = "block";
    navbarUl.style.display = "none";
}

openMenu.addEventListener("click", () => {
    openMenuControl();
});

closeMenu.addEventListener("click", () => {
    closeMenuControl();
})

//Menu End


//Question Form Start
const question = document.getElementById("question");
question.addEventListener("submit",(event) => {
    event.preventDefault();

    const subjectInput = document.getElementById("subjectInput");
    const questionInput = document.getElementById("questionInput");
    const correctInput = document.getElementById("correctInput");
    const answerInput1 = document.getElementById("answerInput1");
    const answerInput2 = document.getElementById("answerInput2");
    const answerInput3 = document.getElementById("answerInput3");
    const nameInput = document.getElementById("nameInput");
    const mailInput = document.getElementById("mailInput");

    const Elements = [subjectInput, questionInput, correctInput, answerInput1, answerInput2, answerInput3, nameInput, mailInput];

    Elements.forEach(element => {
       if(element.value == "")
       {
           element.style.borderBottomColor = "red";
           element.style.borderBottomWidth = "2px";
       }
       else
       {
           element.style.borderBottomColor = "#fff";
           element.style.borderBottomWidth = "1px";
       }

    });
});

