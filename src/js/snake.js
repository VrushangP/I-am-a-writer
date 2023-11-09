$(document).ready(function () {
    console.log("Hello Worlasd");


    let last = 0;
    const SPEED = 3;
    const body = [{x:11, y:11}];
    const gameboard = document.getElementById('game-board');

    function game(currentTime) {
        window.requestAnimationFrame(game);
        const sinceLast = (currentTime - last) / 1000
        if (sinceLast < 1/SPEED) {
            return
        }

        Update();
        printer(gameboard);
        console.log("reders");
        last = currentTime;
    }

    // window.requestAnimationFrame(game);
    function Update() {

    }

    function printer(gameboard) {
        console.log(body.x, body.y)
        body.forEach(segment => {
            const bodyElem = document.createElement('div');
            bodyElem.style.gridRowStart = segment.x;
            bodyElem.style.gridColumnStart = segment.y;
            bodyElem.classList.add('snake');
            gameboard.appendChild(bodyElem);
        })
    }

 });
 