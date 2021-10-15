import { throttle } from './throttle'

const introHeader = document.querySelector('.header_intro')

const handleScroll = throttle((e) => {
  console.log(window.scrollY)
  if (window.scrollY > 200) {
    introHeader.classList.remove('header_intro')
    // introHeader.style.background = '#24315e'
  } else {
    introHeader.classList.add('header_intro')
    // introHeader.style.background = 'transparent'
  }
}, 300)

if (introHeader) {
  window.addEventListener('scroll', handleScroll)
}
