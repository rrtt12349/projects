let gam = document.querySelector('.gamburger')
let open = document.querySelector('.open')
let close = document.querySelector('.close')

gam.addEventListener('click', function () {
    open.classList.add('opened')
    gam.classList.add('closed')
    close.classList.add('opened')
})

close.addEventListener('click', function () {
    gam.classList.remove('closed')
    open.classList.remove('opened')
    close.classList.remove('opened')
})