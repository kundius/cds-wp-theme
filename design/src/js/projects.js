import MicroModal from "./micromodal";
import "@splidejs/splide/dist/css/splide.min.css";
import Splide from '@splidejs/splide';

function createModal() {
  const wrapper = document.createElement("div");
  wrapper.classList.add("modal", "micromodal-slide", "modal_project");
  wrapper.setAttribute("id", "project-details-modal");

  const overlay = document.createElement("div");
  overlay.classList.add("modal__overlay");
  overlay.setAttribute("tabindex", "-1");
  overlay.setAttribute("data-micromodal-close", "true");

  const container = document.createElement("div");
  container.classList.add("modal__container");

  const close = document.createElement("button");
  close.classList.add("modal__close");
  close.setAttribute("data-micromodal-close", "true");

  const content = document.createElement("div");
  content.classList.add("modal__content");

  container.appendChild(close);
  container.appendChild(content);
  overlay.appendChild(container);
  wrapper.appendChild(overlay);
  document.body.appendChild(wrapper);

  return wrapper;
}

function createProject(data) {
  const wrapper = document.createElement("div");
  wrapper.classList.add("project-modal");

  const left = document.createElement("div");
  left.classList.add("project-modal__left");

  const center = document.createElement("div");
  center.classList.add("project-modal__center");

  const previous = document.createElement("button");
  previous.classList.add("project-modal__previous", "js-project-modal");
  previous.setAttribute("data-id", data.previous.ID);
  previous.innerHTML = "Предыдущий";

  const next = document.createElement("button");
  next.classList.add("project-modal__next", "js-project-modal");
  next.setAttribute("data-id", data.next.ID);
  next.innerHTML = "Следующий";

  const neighbors = document.createElement("div");
  neighbors.classList.add("project-modal__neighbors");

  const right = document.createElement("div");
  right.classList.add("project-modal__right");

  const gallery = document.createElement("div");
  gallery.classList.add("project-modal__gallery");

  if (data.gallery.length > 0) {
    const splide = document.createElement("div");
    splide.classList.add("splide");
    const splideTrack = document.createElement("div");
    splideTrack.classList.add("splide__track");
    const splideList = document.createElement("ul");
    splideList.classList.add("splide__list");
    for (let item of data.gallery) {
      const splideSlide = document.createElement("li");
      splideSlide.classList.add("splide__slide");
      const image = document.createElement("img");
      image.setAttribute("src", item.url);
      splideSlide.appendChild(image);
      splideList.appendChild(splideSlide);
    }
    splideTrack.appendChild(splideList);
    splide.appendChild(splideTrack);
    gallery.appendChild(splide);

    new Splide(splide, {
      type: 'loop'
    }).mount();
  } else if (data.thumbnail) {
    const image = document.createElement("img");
    gallery.classList.add("project-modal__image");
    image.setAttribute("src", data.thumbnail);
    gallery.appendChild(image);
  }

  // <div class="splide">
  //   <div class="splide__track">
  //     <ul class="splide__list">
  //       <li class="splide__slide">Slide 01</li>
  //       <li class="splide__slide">Slide 02</li>
  //       <li class="splide__slide">Slide 03</li>
  //     </ul>
  //   </div>
  // </div>

  const date = document.createElement("div");
  date.classList.add("project-modal__date");
  date.innerHTML = new Date(data.post.post_date).toLocaleDateString();

  const title = document.createElement("div");
  title.classList.add("project-modal__title");
  title.innerHTML = data.post.post_title;

  const content = document.createElement("div");
  content.classList.add("project-modal__content");
  content.innerHTML = data.post.post_content;

  center.appendChild(gallery);
  center.appendChild(neighbors);
  if (data.previous) {
    neighbors.appendChild(previous);
  }
  if (data.next) {
    neighbors.appendChild(next);
  }
  right.appendChild(date);
  right.appendChild(title);
  right.appendChild(content);
  wrapper.appendChild(left);
  wrapper.appendChild(center);
  wrapper.appendChild(right);

  return wrapper;
}

function init(wrapper) {
  const projectModalAll = wrapper.querySelectorAll(".js-project-modal");

  if (!projectModalAll.length) return;

  projectModalAll.forEach((button) => {
    button.addEventListener("click", () => {
      let modal = document.getElementById("project-details-modal");
      if (!modal) {
        modal = createModal();
      }

      const loader = document.createElement("div");
      loader.classList.add("modal__loader");

      const data = new FormData();

      data.append("action", "project");
      data.append("nonce", CdsWpThemeAjax.nonce);
      data.append("id", button.dataset.id);

      modal.querySelector(".modal__container").appendChild(loader);
      fetch(CdsWpThemeAjax.ajax_url, {
        method: "POST",
        credentials: "same-origin",
        body: data,
      })
        .then((response) => response.json())
        .then((json) => {
          const project = createProject(json);
          init(project);
          modal.querySelector(".modal__content").innerHTML = null;
          modal.querySelector(".modal__content").appendChild(project);
          modal.querySelector(".modal__container").removeChild(loader);
        });

      MicroModal.show(modal.id);
    });
  });
}

init(document);
