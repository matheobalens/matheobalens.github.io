var animateButton = function(e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');

    e.target.classList.add('animate');
    setTimeout(function(){
        e.target.classList.remove('animate');
    },700);
};

var bubblyButton = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButton.length; i++) {
    bubblyButton[i].addEventListener('click', animateButton, false);
}