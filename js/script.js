const nav = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 500) {
                nav.classList.add('active-nav');
            } else {
                nav.classList.remove('active-nav');
            }
        })

/* temporaire-----------------------*/

let iconMove = document.querySelector(".icon_move")
let iconMoveLatLeft = document.querySelector(".icon_move_left")
let iconMoveLatRight = document.querySelector(".icon_move_right")

function mouseOver() {
    iconMove.classList.add('rotate');
  }  
function mouseOut() {
    iconMove.classList.remove('rotate');
  }

  function mouseOverA() {
    iconMoveLatLeft.classList.add('animate__animated', 'animate__slideOutLeft', 'icon_moveLL');
}
  
function mouseOutA() {
    iconMoveLatLeft.classList.remove('animate__animated', 'animate__slideOutLeft', 'icon_moveLL');
  }  

function mouseOverB() {
    iconMoveLatRight.classList.add('animate__animated', 'animate__slideOutRight', 'icon_moveLR');
  }
  
function mouseOutB() {
    iconMoveLatRight.classList.remove('animate__animated', 'animate__slideOutRight', 'icon_moveLR');
  }  
// document.querySelector(".icon_move").addEventListener("click", function() {
//     iconMove.classList.add('animate__animated', 'animate__rotateOut');
//   });