(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-97323068"],{"1aa8":function(e,t,i){"use strict";i.r(t);var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-app",[i("v-data-table",{staticClass:"elevation-1",attrs:{headers:e.headers,items:e.employees,"sort-by":"calories"},scopedSlots:e._u([{key:"top",fn:function(){return[i("v-toolbar",{attrs:{flat:"",color:"white"}},[i("v-toolbar-title",[e._v("Employees")]),i("v-divider",{staticClass:"mx-4",attrs:{inset:"",vertical:""}}),i("v-spacer"),i("v-btn",{staticClass:"mb-2",attrs:{color:"primary",dark:"",link:"",to:"/add-employee"}},[e._v("New Employee")])],1)]},proxy:!0},{key:"item.actions",fn:function(t){var n=t.item;return[i("v-icon",{staticClass:"mr-2",attrs:{small:""},on:{click:function(t){return e.editItem(n)}}},[e._v(" edit ")]),i("v-icon",{attrs:{small:""},on:{click:function(t){return e.deleteItem(n)}}},[e._v(" delete ")])]}},{key:"no-data",fn:function(){return[i("v-btn",{attrs:{color:"primary"},on:{click:e.initialize}},[e._v("Reset")])]},proxy:!0}])})],1)},o=[],a=(i("c975"),i("a434"),{data:function(){return{dialog:!1,headers:[{text:"Name",align:"start",sortable:!1,value:"name"},{text:"Father's Name",value:"fathers_name"},{text:"Date of Joining",value:"date_of_joining"},{text:"Department",value:"department.name"},{text:"Designation",value:"designation.name"},{text:"Actions",value:"actions",sortable:!1}],employees:[],editedIndex:-1}},computed:{formTitle:function(){return-1===this.editedIndex?"New Item":"Edit Item"}},watch:{dialog:function(e){e||this.close()}},created:function(){this.initialize()},methods:{initialize:function(){var e=this;this.$axios.get("employees").then((function(t){e.employees=t.data})).catch((function(t){e.$store.commit("setSnackbar",{text:t,color:"error"})}))},editItem:function(e){this.$router.push({name:"Edit Employee",params:{id:e.id,data:e}})},deleteItem:function(e){var t=this.employees.indexOf(e);confirm("Are you sure you want to delete this item?")&&this.employees.splice(t,1)},close:function(){var e=this;this.dialog=!1,this.$nextTick((function(){e.editedItem=Object.assign({},e.defaultItem),e.editedIndex=-1}))},save:function(){this.editedIndex>-1?Object.assign(this.employees[this.editedIndex],this.editedItem):this.employees.push(this.editedItem),this.close()}}}),r=a,s=i("2877"),c=Object(s["a"])(r,n,o,!1,null,null,null);t["default"]=c.exports},"1dde":function(e,t,i){var n=i("d039"),o=i("b622"),a=i("2d00"),r=o("species");e.exports=function(e){return a>=51||!n((function(){var t=[],i=t.constructor={};return i[r]=function(){return{foo:1}},1!==t[e](Boolean).foo}))}},8418:function(e,t,i){"use strict";var n=i("c04e"),o=i("9bf2"),a=i("5c6c");e.exports=function(e,t,i){var r=n(t);r in e?o.f(e,r,a(0,i)):e[r]=i}},a434:function(e,t,i){"use strict";var n=i("23e7"),o=i("23cb"),a=i("a691"),r=i("50c4"),s=i("7b0b"),c=i("65f0"),l=i("8418"),d=i("1dde"),u=i("ae40"),f=d("splice"),m=u("splice",{ACCESSORS:!0,0:0,1:2}),h=Math.max,p=Math.min,v=9007199254740991,x="Maximum allowed length exceeded";n({target:"Array",proto:!0,forced:!f||!m},{splice:function(e,t){var i,n,d,u,f,m,y=s(this),b=r(y.length),g=o(e,b),I=arguments.length;if(0===I?i=n=0:1===I?(i=0,n=b-g):(i=I-2,n=p(h(a(t),0),b-g)),b+i-n>v)throw TypeError(x);for(d=c(y,n),u=0;u<n;u++)f=g+u,f in y&&l(d,u,y[f]);if(d.length=n,i<n){for(u=g;u<b-n;u++)f=u+n,m=u+i,f in y?y[m]=y[f]:delete y[m];for(u=b;u>b-n+i;u--)delete y[u-1]}else if(i>n)for(u=b-n;u>g;u--)f=u+n-1,m=u+i-1,f in y?y[m]=y[f]:delete y[m];for(u=0;u<i;u++)y[u+g]=arguments[u+2];return y.length=b-n+i,d}})},c975:function(e,t,i){"use strict";var n=i("23e7"),o=i("4d64").indexOf,a=i("a640"),r=i("ae40"),s=[].indexOf,c=!!s&&1/[1].indexOf(1,-0)<0,l=a("indexOf"),d=r("indexOf",{ACCESSORS:!0,1:0});n({target:"Array",proto:!0,forced:c||!l||!d},{indexOf:function(e){return c?s.apply(this,arguments)||0:o(this,e,arguments.length>1?arguments[1]:void 0)}})}}]);