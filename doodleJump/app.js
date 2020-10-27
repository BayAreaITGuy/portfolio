document.addEventListener('DOMContentLoaded', () => {
    const grid = document.querySelector('.grid') //picking out the class of .grid
    const doodler = document.createElement('div') //creating div doodler
    let isGameOver = false
    // let speed = 3
    let platformCount = 4 //number of platforms allowed on screen
    let platforms = []
    let score = 0 //starting score
    let doodlerLeftSpace = 50
    let startPoint = 150
    let doodlerBottomSpace = startPoint
    // const gravity = .9
    let upTimerId
    let downTimerId
    let isJumping = true
    let isGoingLeft = false
    let isGoingRight = false
    let leftTimerId
    let rightTimerId

    class Platform {
        constructor(newPlatBottom) {
            this.left = Math.random() * 400 //area where platforms can spawn within
            this.bottom = newPlatBottom
            this.visual = document.createElement('div')

            const visual = this.visual
            visual.classList.add('platform')
            visual.style.left = this.left + 'px'
            visual.style.bottom = this.bottom + 'px'
            grid.appendChild(visual)
        }
    }
    // createPlatforms function
    function createPlatforms() {
        for (let i = 0; i < platformCount; i++) {
            let platGap = 600 / platformCount
            let newPlatBottom = 100 + i * platGap //using for loop to increment the gap space
            let newPlatform = new Platform(newPlatBottom)
            platforms.push(newPlatform)
            // console.log(platforms) //shows platform array in console
        }
    }
    // movePlatforms functions
    function movePlatforms() {
        if (doodlerBottomSpace > 200) {
            platforms.forEach(platform => {
                platform.bottom -= 4
                let visual = platform.visual
                visual.style.bottom = platform.bottom + 'px'

                if (platform.bottom < 10) {
                    let firstPlatform = platforms[0].visual //grabbing the first item of the platforms array
                    firstPlatform.classList.remove('platform') //remote the class of .platform from the firstPlatform
                    platforms.shift() //gets rid of the first item/platform of array
                    // console.log(platforms)
                    score++
                    var newPlatform = new Platform(600)
                    platforms.push(newPlatform)
                }
            })
        }

    }
    //createDoodler function
    function createDoodler() {
        grid.appendChild(doodler) //adds the doodler div to .grid
        doodler.classList.add('doodler') //adds class .doodler to doodler grid
        doodlerLeftSpace = platforms[0].left
        doodler.style.left = doodlerLeftSpace + 'px' //space to left of doodler in px
        doodler.style.bottom = doodlerBottomSpace + 'px' //space from bottom of doodler in px
    } 
    //falling function
    function fall() {
        isJumping = false
        clearInterval(upTimerId)
        downTimerId = setInterval(function () {
            doodlerBottomSpace -= 8//higher num = faster fall spped
            doodler.style.bottom = doodlerBottomSpace + 'px'
            if (doodlerBottomSpace <= 0) {
                gameOver()
            }
            platforms.forEach(platform => {
                if (
                    (doodlerBottomSpace >= platform.bottom) &&
                    (doodlerBottomSpace <= (platform.bottom + 15)) &&
                    ((doodlerLeftSpace + 60) >= platform.left) &&
                    (doodlerLeftSpace <= (platform.left + 85)) && //width of the platform
                    !isJumping
                ) {
                    // console.log('tick')
                    startPoint = doodlerBottomSpace //whatever doodlerBottomSpace is right now, make it the startPoint, overwriting the 400 start point
                    jump()
                    // console.log('start', startPoint)
                    isJumping = true
                }
            })

        }, 25) //"fall spped" - invoking fall every 30 milli, controls how fast you fall. higher num = slower fall
    }
    //jumping function
    function jump() {
        clearInterval(downTimerId)
        isJumping = true
        upTimerId = setInterval(function () {
            // console.log(startPoint)
            // console.log('1', doodlerBottomSpace)
            doodlerBottomSpace += 20
            doodler.style.bottom = doodlerBottomSpace + 'px'
            // console.log('2', doodlerBottomSpace)
            // console.log('s', startPoint)
            if (doodlerBottomSpace > (startPoint + 200)) {
                fall()
                isJumping = false
            }
        }, 30) //invoking jump every 30 millisec
    }
    //moveLeft function
    function moveLeft() {
        if (isGoingRight) {
            clearInterval(rightTimerId)
            isGoingRight = false
        }
        isGoingLeft = true
        leftTimerId = setInterval(function () {
            if (doodlerLeftSpace >= 0) {
                console.log('going left')
                doodlerLeftSpace -= 5 //speed of left/right movement
                doodler.style.left = doodlerLeftSpace + 'px'
            } else moveRight()
        }, 30)//invoking every 30 millisec
    }
    //moveRight Function
    function moveRight() {
        if (isGoingLeft) {
            clearInterval(leftTimerId)
            isGoingLeft = false
        }
        isGoingRight = true
        rightTimerId = setInterval(function () {
            //400 is width of the paper grid, if a higher number is subbed in the doodler will move outside boundary
            if (doodlerLeftSpace <= 400) {
                console.log('going right')
                doodlerLeftSpace += 5 //speed of left/right movement
                doodler.style.left = doodlerLeftSpace + 'px'
            } else moveLeft()
        }, 30)//invoking every 30 millisec
    }
    //moveStraight function
    function moveStraight() {
        isGoingLeft = false
        isGoingRight = false
        clearInterval(leftTimerId)
        clearInterval(rightTimerId)
    }
    //assign functions to keyCodes
    function control(e) {
        doodler.style.bottom = doodlerBottomSpace + 'px'
        if (e.key === 'ArrowLeft') {
            moveLeft() //if the key is equal to the left key, moveLeft
        } else if (e.key === 'ArrowRight') {
            moveRight() //if the key is equal to the right key, moveRight
        } else if (e.key === 'ArrowUp') {
            moveStraight() //if the key is equal to the up key, move up/straight
        }
    }
    //gameOver function
    function gameOver() {
        isGameOver = true
        while (grid.firstChild) {
            console.log('remove')
            grid.removeChild(grid.firstChild)
        }
        grid.innerHTML = score + " platforms jumped, nice!"
        clearInterval(upTimerId)
        clearInterval(downTimerId)
        clearInterval(leftTimerId)
        clearInterval(rightTimerId)
    }
    //start function
    function start() {
        if (!isGameOver) {
            createPlatforms() //creates random platforms
            createDoodler() //if game is NOT over create Doodler
            setInterval(movePlatforms,30) 
            jump(startPoint)
            document.addEventListener('keyup', control)
        }
    }
    //attach this function to a button
    start()
})
//refresh page on enter key press
document.addEventListener('keyup', function (e) {
    if (e.keyCode == 13)
        window.location.reload();
})

