import { throttle } from './throttle'

const bodyWithFloatHeader = document.querySelector('.body_float-header')

const handleScroll = throttle((e) => {
  console.log(window.scrollY)
  if (window.scrollY > 200) {
    bodyWithFloatHeader.classList.remove('body_float-header')
  } else {
    bodyWithFloatHeader.classList.add('body_float-header')
  }
}, 300)

if (bodyWithFloatHeader) {
  window.addEventListener('scroll', handleScroll)
}
