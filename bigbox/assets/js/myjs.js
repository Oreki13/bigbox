
document.getElementById('close').addEventListener('click', function () {
    // document.querySelector('.newsletter').classList.add('slide-bottom')
    document.querySelector('.newsletter').style.bottom = '-550px'
    setTimeout(function () {
        document.querySelector('.newsletter').style.display = 'none'
    }, 1000)
})

var handle2 = 0
document.querySelector('#gotit').addEventListener('click', function () {
    handle2 = 1
    document.querySelector('.fixed').style.top = '-400px'
    setTimeout(function () {
        document.querySelector('.fixed').style.display = 'none'
    }, 1000)
    document.querySelector('.on-fixed').style.paddingTop = '0'
})

var handel = 0
window.addEventListener("scroll", function (event) {
    var scroll = this.scrollY;



    if (scroll > 350 && handel == 0) {
        handel = 1
        document.querySelector('.newsletter').style.bottom = '0'
    }


});

setTimeout(function () {
    document.querySelector('.fixed').style.top = '0'
    if (window.innerWidth < 710) {
        document.querySelector('.on-fixed').style.paddingTop = '120px'
    } else {
        document.querySelector('.on-fixed').style.paddingTop = '73px'
    }
}, 300)



window.addEventListener('resize', function () {
    console.log(handle2);

    if (handle2 == 0) {

        if (window.innerWidth < 710) {
            document.querySelector('.on-fixed').style.paddingTop = '120px'
        } else {
            document.querySelector('.on-fixed').style.paddingTop = '73px'
        }
    }
})

console.log(window.innerWidth);

