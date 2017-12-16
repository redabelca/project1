import { getEl, addEvent } from "../partials/_DOM";
import { toggleCss } from "../partials/_css";

let menu2Humb=getEl('#menu2-humb'),menu2Ul=getEl('.menu2-ul');

export function menu2(){
  addEvent(menu2Humb,'click',()=>{
    toggleCss(menu2Ul,'menu2Ul_show');
  });
}