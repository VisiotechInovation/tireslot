'use strict'; function scrollEvent() {
  const b = document.querySelector("header"); var c = document.querySelector(".banner"); const a = document.querySelector("main"); if (c) { const e = b.offsetHeight, d = c.offsetHeight; 200 < window.pageYOffset ? (c.style.transform = `translate3d(0px, -${d}px, 0px)`, a.style.paddingTop = `${e}px`, b.style.paddingTop = 0) : (c.style.transform = "translate3d(0px, 0px, 0px)", a.style.paddingTop = `${60 + d}px`, b.style.paddingTop = `${d}px`) } else c = b.offsetHeight, 200 < window.pageYOffset ? (a.style.paddingTop = `${c}px`,
    b.style.paddingTop = 0) : a.style.paddingTop = `${c}px`
} function dropmenus(b, c = !1) { document.querySelectorAll(b).forEach(function (a) { let e = a.querySelector(`.${a.className}__open`), d = a.querySelector(`.${a.className}__list`); e && d && (c && (a.classList.add("active"), d.classList.add("active")), e.addEventListener("click", function () { a.classList.toggle("active"); d.classList.toggle("active"); a.classList.contains("active") && a.scrollIntoView({ behavior: "smooth", block: "start" }) })) }) }
function leftbar(b, c, a, e, d) {
  const f = document.getElementById(b); b = document.getElementById(c); const g = document.getElementById(a); a = document.getElementById(e); d = document.getElementById(d); const h = document.querySelector("body"); f && b && g && a && (f.addEventListener("click", () => {
    g.classList.add("active"); switch (f.id) {
      case "basketOpen": dataLayer.push({ event: "view_minicart", ecommerce: {} }); break; case "wishOpen": dataLayer.push({ event: "view_wishlist", ecommerce: {} }); break; case "searchOpen": dataLayer.push({
        event: "view_search",
        ecommerce: {}
      }); break; case "menuOpen": dataLayer.push({ event: "view_menu", ecommerce: {} }); break; default: return
    }h.style.overflow = "hidden"; scrollEvent()
  }), b.addEventListener("click", () => { g.classList.remove("active"); h.style.overflow = "auto" }), d.addEventListener("click", k => { g.classList.remove("active"); h.style.overflow = "auto" }), document.addEventListener("keydown", function (k) { 27 === k.keyCode && (g.classList.remove("active"), h.style.overflow = "auto") }))
}
function searchBar() {
  const b = document.getElementById("searchOpen"), c = document.getElementById("searchClose"), a = document.getElementById("searchInput"), e = document.getElementById("modalClose"), d = document.getElementById("searching"); b.addEventListener("click", function () { (new Promise(f => { document.body.style.overflow = "hidden"; f() })).then(() => { a.focus() }) }); c.addEventListener("click", function () { document.body.style.overflow = "auto" }); e.addEventListener("click", function () { document.body.style.overflow = "auto" });
  a.addEventListener("keypress", function (f) { "Enter" === f.key && (f.preventDefault(), window.location.href = "/search/" + encodeURIComponent(a.value)) }); d.addEventListener("click", function () { window.location.href = "/search/" + encodeURIComponent(a.value) })
} let lastTap = 0; function DoubleTapRedirect(b) { const c = (new Date).getTime(), a = c - lastTap; lastTap = c; 500 > a && 0 < a && (window.location.href = b) } searchBar(); leftbar("menuOpen", "menuClose", "menuList", "menuContent", "menuHidden"); leftbar("searchOpen", "searchClose", "searchList", "searchContent", "modalClose"); dropmenus(".dropmenu", !1); dropmenus(".submenu", !1); scrollEvent(); window.addEventListener("scroll", scrollEvent); window.addEventListener("resize", scrollEvent);
