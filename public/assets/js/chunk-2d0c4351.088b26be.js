(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0c4351"],{"3a9f":function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-app",[r("v-overlay",{attrs:{value:e.isLoading}},[r("v-progress-circular",{attrs:{indeterminate:"",size:"64"}})],1),r("v-card",[r("v-card-title",{attrs:{"primary-title":""}},[e._v(e._s(e.title))]),r("v-container",[r("v-form",{ref:"form",attrs:{"lazy-validation":""},on:{prevent:e.submit},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[r("v-row",[r("v-col",{attrs:{cols:"12",md:"6"}},[r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Name is required"}],label:"Name",required:""},model:{value:e.form.name,callback:function(t){e.$set(e.form,"name",t)},expression:"form.name"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Official Email is required"}],label:"Official Email",required:""},model:{value:e.form.email,callback:function(t){e.$set(e.form,"email",t)},expression:"form.email"}}),r("v-select",{staticClass:"required",attrs:{"append-icon":"arrow_drop_down",items:e.departments,rules:[function(e){return!!e||"Department is required"}],"item-text":"name","item-value":"id",label:"Department",required:""},model:{value:e.form.department_id,callback:function(t){e.$set(e.form,"department_id",t)},expression:"form.department_id"}}),r("v-select",{staticClass:"required",attrs:{"append-icon":"arrow_drop_down",items:e.designations,rules:[function(e){return!!e||"Designation is required"}],"item-text":"name","item-value":"id",label:"Designation",required:""},model:{value:e.form.designation_id,callback:function(t){e.$set(e.form,"designation_id",t)},expression:"form.designation_id"}}),r("v-dialog",{ref:"dialog2",attrs:{"return-value":e.form.date_of_birth,persistent:"",width:"290px"},on:{"update:returnValue":function(t){return e.$set(e.form,"date_of_birth",t)},"update:return-value":function(t){return e.$set(e.form,"date_of_birth",t)}},scopedSlots:e._u([{key:"activator",fn:function(t){var a=t.on;return[r("v-text-field",e._g({staticClass:"required",attrs:{rules:[function(e){return!!e||"Date of Birth is required"}],label:"Date of Birth","prepend-icon":"event",readonly:""},model:{value:e.form.date_of_birth,callback:function(t){e.$set(e.form,"date_of_birth",t)},expression:"form.date_of_birth"}},a))]}}]),model:{value:e.dialog2,callback:function(t){e.dialog2=t},expression:"dialog2"}},[r("v-date-picker",{attrs:{"next-icon":"keyboard_arrow_right","prev-icon":"keyboard_arrow_left",scrollable:""},model:{value:e.form.date_of_birth,callback:function(t){e.$set(e.form,"date_of_birth",t)},expression:"form.date_of_birth"}},[r("v-spacer"),r("v-btn",{attrs:{text:"",color:"primary"},on:{click:function(t){e.dialog2=!1}}},[e._v("Cancel")]),r("v-btn",{attrs:{text:"",color:"primary"},on:{click:function(t){return e.$refs.dialog2.save(e.form.date_of_birth)}}},[e._v("OK")])],1)],1)],1),r("v-col",{attrs:{cols:"12",md:"6"}},[r("v-dialog",{ref:"dialog",attrs:{"return-value":e.form.date_of_joining,persistent:"",width:"290px"},on:{"update:returnValue":function(t){return e.$set(e.form,"date_of_joining",t)},"update:return-value":function(t){return e.$set(e.form,"date_of_joining",t)}},scopedSlots:e._u([{key:"activator",fn:function(t){var a=t.on;return[r("v-text-field",e._g({staticClass:"required",attrs:{rules:[function(e){return!!e||"Date of Joining is required"}],label:"Date of Joining","prepend-icon":"event",readonly:""},model:{value:e.form.date_of_joining,callback:function(t){e.$set(e.form,"date_of_joining",t)},expression:"form.date_of_joining"}},a))]}}]),model:{value:e.dialog,callback:function(t){e.dialog=t},expression:"dialog"}},[r("v-date-picker",{attrs:{"next-icon":"keyboard_arrow_right","prev-icon":"keyboard_arrow_left",scrollable:""},model:{value:e.form.date_of_joining,callback:function(t){e.$set(e.form,"date_of_joining",t)},expression:"form.date_of_joining"}},[r("v-spacer"),r("v-btn",{attrs:{text:"",color:"primary"},on:{click:function(t){e.dialog=!1}}},[e._v("Cancel")]),r("v-btn",{attrs:{text:"",color:"primary"},on:{click:function(t){return e.$refs.dialog.save(e.form.date_of_joining)}}},[e._v("OK")])],1)],1),r("v-select",{staticClass:"required",attrs:{"append-icon":"arrow_drop_down",items:e.bloodGroups,rules:[function(e){return!!e||"Blood Group is required"}],label:"Blood Group",required:""},model:{value:e.form.blood_group,callback:function(t){e.$set(e.form,"blood_group",t)},expression:"form.blood_group"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Father's Name is required"}],label:"Father's Name",required:""},model:{value:e.form.fathers_name,callback:function(t){e.$set(e.form,"fathers_name",t)},expression:"form.fathers_name"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Mother's Name is required"}],label:"Mother's Name",required:""},model:{value:e.form.mothers_name,callback:function(t){e.$set(e.form,"mothers_name",t)},expression:"form.mothers_name"}}),r("v-select",{staticClass:"required",attrs:{"append-icon":"arrow_drop_down",items:e.maritalStatuses,rules:[function(e){return!!e||"Marital Status is required"}],label:"Marital Status"},model:{value:e.form.marital_status,callback:function(t){e.$set(e.form,"marital_status",t)},expression:"form.marital_status"}}),"Married"==e.form.marital_status?r("v-text-field",{staticClass:"required",attrs:{label:"Spouse Name",rules:[function(e){return!!e||"Spouse name is required"}]},model:{value:e.form.spouse_name,callback:function(t){e.$set(e.form,"spouse_name",t)},expression:"form.spouse_name"}}):e._e()],1)],1),r("v-row",[r("v-col",{attrs:{cols:"12",md:"12"}},[r("v-btn",{staticClass:"mr-4",attrs:{disabled:!e.valid},on:{click:function(t){return e.submit()}}},[e._v(" Next ")])],1)],1)],1)],1)],1)],1)},o=[],i=(r("b0c0"),{data:function(){return{isLoading:!1,title:"Add Employee",dialog:!1,dialog2:!1,valid:!0,radioGroup:1,designations:[],departments:[],maritalStatuses:["Single","Married"],bloodGroups:["A+","A-","B+","B-","O+","O-","AB+","AB-"],checkbox:!1,menu:!1,modal:!1,menu2:!1,form:{date_of_joining:(new Date).toISOString().substr(0,10),date_of_birth:(new Date).toISOString().substr(0,10)}}},methods:{validate:function(){return this.$refs.form.validate()},resetForm:function(){this.$refs.form.reset()},getDepartments:function(){var e=this;this.$axios.get("/departments").then((function(t){e.departments=t.data})).catch((function(t){e.$store.commit("setSnackbar",{text:t,color:"error"})}))},getDesignations:function(){var e=this;this.$axios.get("/designations").then((function(t){e.designations=t.data})).catch((function(t){e.$store.commit("setSnackbar",{text:t,color:"error"})}))},submit:function(){this.validate()&&this.addEmployee()},addEmployee:function(){var e=this;this.isLoading=!0,this.$axios.post("add-employee",this.form).then((function(t){e.$store.commit("setSnackbar",{text:t.data.success,color:"success"}),e.$router.push({name:"Employee Detail",params:{id:t.data.user_id}}),e.resetForm()})).catch((function(t){e.$store.commit("setSnackbar",{text:t,color:"error"})}))}},mounted:function(){this.getDepartments(),this.getDesignations(),this.title=this.$route.name,"Edit Employee"==this.title&&(this.form=this.$route.params.data)}}),n=i,s=r("2877"),l=Object(s["a"])(n,a,o,!1,null,null,null);t["default"]=l.exports}}]);