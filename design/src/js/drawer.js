const forEach = function (collection, callback, scope) {
	if (Object.prototype.toString.call(collection) === '[object Object]') {
		for (var prop in collection) {
			if (Object.prototype.hasOwnProperty.call(collection, prop)) {
				callback.call(scope, collection[prop], prop, collection);
			}
		}
	} else {
		for (var i = 0, len = collection.length; i < len; i++) {
			callback.call(scope, collection[i], i, collection);
		}
	}
};

forEach(document.querySelectorAll('.drawer__menu'), function(menu) {
  forEach(document.querySelectorAll('.menu-item-has-children'), function(item) {
    let timer = null
    const close = () => {
      item.classList.remove('menu-item-opened')
    }
    const open = () => {
      item.classList.add('menu-item-opened')
    }
    const toggle = () => {
      if (item.classList.contains('menu-item-opened')) {
        close()
      } else {
        open()
      }
    }

    const link = item.querySelector('a')
    const handler = document.createElement('span')
    handler.classList.add('menu-toggle')
    link.appendChild(handler)

    handler.addEventListener('click', (e) => {
      e.preventDefault()
      e.stopPropagation()
      toggle()
    })

    link.addEventListener('click', (e) => {
      if (!item.classList.contains('menu-item-opened') && !window.matchMedia("(min-width: 1200px)").matches) {
        e.preventDefault()
        open()
      }
    })

    if (window.matchMedia("(min-width: 1200px)").matches) {
      item.addEventListener('mouseenter', () => {
        clearTimeout(timer)
        timer = setTimeout(open, 200)
      })
      item.addEventListener('mouseleave', () => {
        clearTimeout(timer)
        timer = setTimeout(close, 200)
      })
    }
  })
})

forEach(document.querySelectorAll('.js-drawer-toggle'), function(handler) {
  const header = document.querySelector('.header')
  const drawer = document.querySelector('.drawer')
  const close = () => {
    header.classList.remove('header_menu-opened')
    drawer.classList.remove('drawer_opened')
  }
  const open = () => {
    header.classList.add('header_menu-opened')
    drawer.classList.add('drawer_opened')
  }
  const toggle = () => {
    if (drawer.classList.contains('drawer_opened')) {
      close()
    } else {
      open()
    }
  }
  handler.addEventListener('click', (e) => {
    e.preventDefault()
    toggle()
  })
})
