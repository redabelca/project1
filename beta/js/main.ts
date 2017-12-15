//Partials
import { updateData } from "./partials/data";
import { getWindowScrollY } from "./partials/_layout";
import { addEvent } from "./partials/_DOM";
import { ready } from "./partials/_ready";
import { throttle } from "./partials/_optimization";

//Components
import { menu } from "./components/menu/_travelo-side-nav";
import { header } from "./components/_travelo-header";
import { comment } from "./components/_travelo-comment";
import { presentation } from "./components/_travelo-presentation";
import { triggerAnimationMonitor } from "./partials/_animation";

((w) => {
  function init() {
    //General
    updateData('scrollTop', getWindowScrollY());
    addEvent(w, 'scroll', throttle(()=>{
      updateData('scrollTop', getWindowScrollY());
    },300));
    //Menu
    menu();
    //Header
    header();
    //Comment
    comment();
    //Presentation
    setTimeout(()=>{
      presentation();
      triggerAnimationMonitor();
    },600);
  }
  ready(init);
})(window);