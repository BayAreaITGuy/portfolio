(this["webpackJsonprecipe-app"]=this["webpackJsonprecipe-app"]||[]).push([[0],{13:function(e,t,c){},15:function(e,t,c){},16:function(e,t,c){"use strict";c.r(t);var n=c(0),a=c(1),i=c.n(a),r=c(6),s=c.n(r),o=(c(13),c(5)),p=c.n(o),u=c(7),l=c(3),j=c(2),b=c.n(j),f=function(e){var t=e.title,c=e.calories,a=e.image,i=e.ingredients;return Object(n.jsxs)("div",{className:b.a.recipe,children:[Object(n.jsx)("h1",{className:b.a.recipe,children:t}),Object(n.jsx)("ol",{children:i.map((function(e){return Object(n.jsx)("li",{children:e.text})}))}),Object(n.jsx)("img",{src:a,alt:"",className:b.a.image}),Object(n.jsxs)("p",{children:["Total Calories: ",c]})]})},h=(c(15),function(){var e=Object(a.useState)([]),t=Object(l.a)(e,2),c=t[0],i=t[1],r=Object(a.useState)(""),s=Object(l.a)(r,2),o=s[0],j=s[1],b=Object(a.useState)("chicken"),h=Object(l.a)(b,2),d=h[0],m=h[1];Object(a.useEffect)((function(){O()}),[d]);var O=function(){var e=Object(u.a)(p.a.mark((function e(){var t,c;return p.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,fetch("https://api.edamam.com/search?q=".concat(d,"&app_id=").concat("3ff71135","&app_key=").concat("b830afa1a8c195fd4a91a8d6a91e9c72"));case 2:return t=e.sent,e.next=5,t.json();case 5:c=e.sent,i(c.hits),console.log(c.hits);case 8:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}();return Object(n.jsxs)("div",{className:"App",children:[Object(n.jsxs)("form",{onSubmit:function(e){e.preventDefault(),m(o),j("")},className:"search-form",children:[Object(n.jsx)("input",{className:"search-bar",type:"text",value:o,onChange:function(e){j(e.target.value),console.log(o)}}),Object(n.jsx)("button",{className:"search-button",type:"submit",children:"Search"})]}),Object(n.jsx)("div",{className:"recipes",children:c.map((function(e){return Object(n.jsx)(f,{title:e.recipe.label,calories:e.recipe.calories,image:e.recipe.image,ingredients:e.recipe.ingredients},e.recipe.label)}))})]})}),d=function(e){e&&e instanceof Function&&c.e(3).then(c.bind(null,17)).then((function(t){var c=t.getCLS,n=t.getFID,a=t.getFCP,i=t.getLCP,r=t.getTTFB;c(e),n(e),a(e),i(e),r(e)}))};s.a.render(Object(n.jsx)(i.a.StrictMode,{children:Object(n.jsx)(h,{})}),document.getElementById("root")),d()},2:function(e,t,c){e.exports={recipe:"recipe_recipe__NNd2S",image:"recipe_image__36GDC"}}},[[16,1,2]]]);
//# sourceMappingURL=main.dddecf0f.chunk.js.map