/*PROFILE DROP DOWN MENU SECTION START */

const profPic = document.querySelector('#profile-picture');
const profMenuDropDownActivation = document.querySelector('.profile-dropdown-menu')
profPic.addEventListener("click", function() {
    if(profMenuDropDownActivation.classList.contains("active")) {
        profMenuDropDownActivation.classList.remove("active");
    }
    else {
        profMenuDropDownActivation.classList.add("active");
    }
})

/*PROFILE DROP DOWN MENU SECTION END */