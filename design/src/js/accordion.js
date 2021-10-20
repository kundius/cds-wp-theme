// const blockAccordionAll = document.querySelectorAll(".block-accordion");
// const header = document.querySelector(".header");

// const accordionCreator = (nodes) => {
//   const items = new Map();
//   let running = false;

//   nodes.forEach((node) => {
//     items.set(node, {
//       direction: -1,
//       progress: 0,
//       body: node.querySelector(".accordion-item__body"),
//       content: node.querySelector(".accordion-item__content"),
//     });
//   });

//   const animate = () => {
//     let next = false;

//     items.forEach((state) => {
//       let run = false;
//       if (state.direction == -1 && state.progress > 0) {
//         state.progress -= 0.02;
//         run = true;
//       }
//       if (state.direction == 1 && state.progress < 1) {
//         state.progress += 0.02;
//         run = true;
//       }
//       if (run) {
//         state.body.style.height = `${Math.max(
//           0,
//           state.content.clientHeight * state.progress
//         )}px`;
//         next = true;
//       }
//     });

//     if (next) {
//       requestAnimationFrame(animate);
//     } else {
//       running = false;
//     }
//   };

//   const process = () => {
//     if (!running) {
//       running = true;
//       animate();
//     }
//   };

//   const open = (node) => {
//     items.forEach((value, key) => {
//       if (key != node && value.direction == 1) {
//         close(key);
//       }
//     });
//     const state = items.get(node);
//     state.direction = 1;
//     node.classList.add("accordion-item_opened");
//     process();
//   };

//   const close = (node) => {
//     const state = items.get(node);
//     state.direction = -1;
//     node.classList.remove("accordion-item_opened");
//     process();
//   };

//   return {
//     open,
//     close,
//     items,
//   };
// };

// if (blockAccordionAll) {
//   blockAccordionAll.forEach((block) => {
//     const accordionItemAll = block.querySelectorAll(".accordion-item");
//     if (blockAccordionAll) {
//       const accordion = accordionCreator(accordionItemAll);

//       accordionItemAll.forEach((item) => {
//         const toggle = () => {
//           const state = accordion.items.get(item);

//           let scrollTop = 0;
//           scrollTop +=
//             item.getBoundingClientRect().top +
//             document.documentElement.scrollTop;
//           scrollTop -=
//             header.getBoundingClientRect().top +
//             header.getBoundingClientRect().height;
//           for (let [node, state] of accordion.items) {
//             if (node == item) {
//               break;
//             }
//             scrollTop -= state.body.clientHeight;
//           }
//           window.scrollTo({
//             top: scrollTop,
//             behavior: "smooth",
//           });

//           if (state.direction == -1) {
//             accordion.open(item);
//           } else {
//             accordion.close(item);
//           }
//         };

//         item
//           .querySelector(".accordion-item__head")
//           .addEventListener("click", toggle);
//         item
//           .querySelector(".accordion-item__collapse button")
//           .addEventListener("click", toggle);
//       });
//     }
//   });
// }

const blockAccordionAll = document.querySelectorAll(".block-accordion");
const header = document.querySelector(".header");

if (blockAccordionAll) {
  blockAccordionAll.forEach((block) => {
    const accordionItemAll = block.querySelectorAll(".accordion-item");
    if (blockAccordionAll) {
      accordionItemAll.forEach((item) => {
        const toggle = () => {
          let scrollTop = 0;
          scrollTop +=
            item.getBoundingClientRect().top +
            document.documentElement.scrollTop;
          scrollTop -=
            header.getBoundingClientRect().top +
            header.getBoundingClientRect().height;
          for (let node of accordionItemAll) {
            if (node == item) {
              break;
            }
            scrollTop -= node.querySelector(
              ".accordion-item__body"
            ).clientHeight;
          }
          window.scrollTo({
            top: scrollTop,
            behavior: "smooth",
          });

          for (let node of accordionItemAll) {
            if (node == item) {
              continue;
            }
            node.querySelector(".accordion-item__body").style.height = 0;
            node.classList.remove("accordion-item_opened");
          }

          if (item.classList.contains("accordion-item_opened")) {
            item.querySelector(".accordion-item__body").style.height = 0;
            item.classList.remove("accordion-item_opened");
          } else {
            item.querySelector(".accordion-item__body").style.height = `${
              item.querySelector(".accordion-item__content").clientHeight
            }px`;
            item.classList.add("accordion-item_opened");
          }
        };

        item
          .querySelector(".accordion-item__head")
          .addEventListener("click", toggle);
        item
          .querySelector(".accordion-item__collapse button")
          .addEventListener("click", toggle);
      });
    }
  });
}
