(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6c959e60"],{"083d":function(e,t,r){"use strict";r.r(t);var i=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-app",[r("v-stepper",{model:{value:e.e1,callback:function(t){e.e1=t},expression:"e1"}},[[r("v-stepper-header",[r("v-stepper-step",{attrs:{step:"1"}},[e._v(" Address & Contacts ")]),r("v-divider"),r("v-stepper-step",{attrs:{step:"2"}},[e._v(" Emergency Contacts ")]),r("v-divider"),r("v-stepper-step",{attrs:{step:"3"}},[e._v(" Bank Account Details ")]),r("v-divider"),r("v-stepper-step",{attrs:{step:"4"}},[e._v(" Important Documents ")]),r("v-divider"),r("v-stepper-step",{attrs:{step:"5"}},[e._v(" Interview & Certificate ")])],1),r("v-stepper-items",[r("v-stepper-content",{attrs:{step:"1"}},[r("AddressContacts",{on:{saved:function(t){return e.onSaved(1)}}})],1),r("v-stepper-content",{attrs:{step:"2"}},[r("EmergencyContact",{on:{saved:function(t){return e.onSaved(2)}}})],1),r("v-stepper-content",{attrs:{step:"3"}},[r("BankAccount",{on:{saved:function(t){return e.onSaved(3)}}})],1),r("v-stepper-content",{attrs:{step:"4"}},[r("ImportantDocuments",{on:{saved:function(t){return e.onSaved(4)}}})],1),r("v-stepper-content",{attrs:{step:"5"}},[r("InterviewCertificate",{on:{saved:function(t){return e.onSaved(5)}}})],1)],1)]],2)],1)},a=[],n=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-form",{ref:"form",attrs:{"lazy-validation":""},on:{prevent:e.submit},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[r("v-overlay",{attrs:{value:e.isLoading}},[r("v-progress-circular",{attrs:{indeterminate:"",size:"64"}})],1),r("v-card",{attrs:{elevation:"0"}},[r("v-row",[r("v-col",[r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Contact person's name is required"}],label:"1st Emergency Contact Person Name",required:""},model:{value:e.form.first_emergency_contact_name,callback:function(t){e.$set(e.form,"first_emergency_contact_name",t)},expression:"form.first_emergency_contact_name"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Relationship is required"}],label:"Relationship",required:""},model:{value:e.form.first_emergency_relationship,callback:function(t){e.$set(e.form,"first_emergency_relationship",t)},expression:"form.first_emergency_relationship"}}),r("v-file-input",{staticClass:"required",attrs:{rules:e.audioFile,"prepend-icon":"attach_file",accept:"audio/*",label:"Verification Audio"},model:{value:e.form.first_emergency_verification,callback:function(t){e.$set(e.form,"first_emergency_verification",t)},expression:"form.first_emergency_verification"}})],1),r("v-col",[r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Contact person's name is required"}],label:"2nd Emergency Contact Person Name",required:""},model:{value:e.form.second_emergency_name,callback:function(t){e.$set(e.form,"second_emergency_name",t)},expression:"form.second_emergency_name"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Relationship is required"}],label:"Relationship",required:""},model:{value:e.form.second_emergency_relationship,callback:function(t){e.$set(e.form,"second_emergency_relationship",t)},expression:"form.second_emergency_relationship"}}),r("v-file-input",{staticClass:"required",attrs:{rules:e.audioFile,"prepend-icon":"attach_file",accept:"audio/*",label:"Verification Audio"},model:{value:e.form.second_emergency_verification,callback:function(t){e.$set(e.form,"second_emergency_verification",t)},expression:"form.second_emergency_verification"}})],1)],1)],1),r("v-btn",{attrs:{disabled:!e.valid,text:"",outlined:""},on:{click:function(t){return e.submit()}}},[e._v(" Next ")])],1)},s=[],o={data:function(){return{valid:!0,form:{},isLoading:!1,error:"",audioFile:[function(e){return!e||e.size<2e6||"Audio file size should be less than 2 MB!"},function(e){return!!e||"Audio File is required"}]}},methods:{validate:function(){return this.$refs.form.validate()},submit:function(){this.validate()&&this.saveDetails()},saveDetails:function(){var e=this;this.isLoading=!0;var t=this.form,r=this.$route.params.id,i=new FormData;for(var a in t)i.append(a,t[a]);i.append("user_id",r),this.$axios.post("add-emergency-contacts",i,{headers:{"content-type":"multipart/form-data"}}).then((function(t){e.$emit("saved"),e.showAlert("success",t.data.success),e.$refs.form.reset(),e.isLoading=!1})).catch((function(t){e.error=t,e.showAlert("error","Invalid User ID"),e.isLoading=!1}))},showAlert:function(e,t){this.$store.commit("setSnackbar",{text:t,color:e})}}},l=o,c=r("2877"),u=Object(c["a"])(l,n,s,!1,null,null,null),d=u.exports,f=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-form",{ref:"form",attrs:{"lazy-validation":""},on:{prevent:e.submit},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[r("v-overlay",{attrs:{value:e.isLoading}},[r("v-progress-circular",{attrs:{indeterminate:"",size:"64"}})],1),r("v-card",{attrs:{elevation:"0"}},[r("v-row",[r("v-col",[r("v-text-field",{attrs:{label:"Company Mobile No."},model:{value:e.form.company_mobile_no,callback:function(t){e.$set(e.form,"company_mobile_no",t)},expression:"form.company_mobile_no"}}),r("v-text-field",{attrs:{label:"Company Whatsapp No."},model:{value:e.form.company_whatsapp_no,callback:function(t){e.$set(e.form,"company_whatsapp_no",t)},expression:"form.company_whatsapp_no"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Personal phone no. is required"}],label:"Personal Phone No."},model:{value:e.form.personal_phone_no,callback:function(t){e.$set(e.form,"personal_phone_no",t)},expression:"form.personal_phone_no"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Personal Whatsapp No. is required"}],label:"Personal Whatsapp No.",required:""},model:{value:e.form.personal_whatsapp_no,callback:function(t){e.$set(e.form,"personal_whatsapp_no",t)},expression:"form.personal_whatsapp_no"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Personal email id is required"}],label:"Personal email id",required:""},model:{value:e.form.personal_email_id,callback:function(t){e.$set(e.form,"personal_email_id",t)},expression:"form.personal_email_id"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Educational Qualification is required"}],required:"",label:"Educational Qualification"},model:{value:e.form.educational_qualification,callback:function(t){e.$set(e.form,"educational_qualification",t)},expression:"form.educational_qualification"}}),r("v-file-input",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Curriculum Vite(CV) is required"}],"prepend-icon":"attach_file",accept:"image/*",label:"Curriculum Vite(CV)"},model:{value:e.form.curriculum_vite,callback:function(t){e.$set(e.form,"curriculum_vite",t)},expression:"form.curriculum_vite"}})],1),r("v-col",[r("v-file-input",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Passport size photo is required"}],"prepend-icon":"attach_file",accept:"image/*",label:"Passport Size Photo"},model:{value:e.form.passport_size_photo,callback:function(t){e.$set(e.form,"passport_size_photo",t)},expression:"form.passport_size_photo"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Permanent address is required"}],label:"Permanent address",required:""},model:{value:e.form.permanent_address,callback:function(t){e.$set(e.form,"permanent_address",t)},expression:"form.permanent_address"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"PIN Code is required"}],label:"PIN Code",required:""},model:{value:e.form.pernament_address_pin_code,callback:function(t){e.$set(e.form,"pernament_address_pin_code",t)},expression:"form.pernament_address_pin_code"}}),r("v-file-input",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Permanent address proof is required"}],label:"Permanent address proof",required:"","prepend-icon":"attach_file",accept:"image/*"},model:{value:e.form.permanent_address_proof_image,callback:function(t){e.$set(e.form,"permanent_address_proof_image",t)},expression:"form.permanent_address_proof_image"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Present address is required"}],label:"Present address",required:""},model:{value:e.form.present_address,callback:function(t){e.$set(e.form,"present_address",t)},expression:"form.present_address"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Present address PIN Code is required"}],label:"Present address PIN Code",required:""},model:{value:e.form.present_address_pin_code,callback:function(t){e.$set(e.form,"present_address_pin_code",t)},expression:"form.present_address_pin_code"}}),r("v-file-input",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Present address proof is required"}],label:"Present address proof",required:"","prepend-icon":"attach_file",accept:"image/*"},model:{value:e.form.present_address_proof_image,callback:function(t){e.$set(e.form,"present_address_proof_image",t)},expression:"form.present_address_proof_image"}})],1)],1)],1),r("v-btn",{attrs:{disabled:!e.valid,text:"",outlined:""},on:{click:function(t){return e.submit()}}},[e._v(" Next ")])],1)},m=[],p={data:function(){return{valid:!0,form:{},isLoading:!1,error:""}},methods:{validate:function(){return this.$refs.form.validate()},submit:function(){this.validate()&&this.saveDetails()},saveDetails:function(){var e=this;this.isLoading=!0;var t=this.form,r=this.$route.params.id,i=new FormData;for(var a in t)i.append(a,t[a]);i.append("user_id",r),this.$axios.post("add-employee-detail",i,{headers:{"content-type":"multipart/form-data"}}).then((function(t){e.$emit("saved"),e.showAlert("success",t.data.success),e.$refs.form.reset(),e.isLoading=!1})).catch((function(t){e.error=t,e.showAlert("error","Invalid User ID"),e.isLoading=!1}))},showAlert:function(e,t){this.$store.commit("setSnackbar",{text:t,color:e})}}},v=p,_=Object(c["a"])(v,f,m,!1,null,null,null),h=_.exports,b=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-form",{ref:"form",attrs:{"lazy-validation":""},on:{prevent:e.submit},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[r("v-overlay",{attrs:{value:e.isLoading}},[r("v-progress-circular",{attrs:{indeterminate:"",size:"64"}})],1),r("v-card",{attrs:{elevation:"0"}},[r("v-row",[r("v-col",[r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Account holder name is required"}],label:"Account Holder Name"},model:{value:e.form.account_holder_name,callback:function(t){e.$set(e.form,"account_holder_name",t)},expression:"form.account_holder_name"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Account number is required"}],label:"Account Number"},model:{value:e.form.account_number,callback:function(t){e.$set(e.form,"account_number",t)},expression:"form.account_number"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Bank name is required"}],label:"Bank Name"},model:{value:e.form.bank_name,callback:function(t){e.$set(e.form,"bank_name",t)},expression:"form.bank_name"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Branch name is required"}],label:"Branch Name"},model:{value:e.form.branch_name,callback:function(t){e.$set(e.form,"branch_name",t)},expression:"form.branch_name"}})],1),r("v-col",[r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Branch address is required"}],label:"Branch Address"},model:{value:e.form.branch_address,callback:function(t){e.$set(e.form,"branch_address",t)},expression:"form.branch_address"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"PIN Code is required"}],label:"PIN Code"},model:{value:e.form.pin_code,callback:function(t){e.$set(e.form,"pin_code",t)},expression:"form.pin_code"}}),r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"IFSC is required"}],label:"IFSC"},model:{value:e.form.ifsc,callback:function(t){e.$set(e.form,"ifsc",t)},expression:"form.ifsc"}}),r("v-file-input",{staticClass:"required",attrs:{rules:e.passbookImage,label:"Passbook Image",accept:"image/*","prepend-icon":"attach_file"},model:{value:e.form.passbook_image,callback:function(t){e.$set(e.form,"passbook_image",t)},expression:"form.passbook_image"}})],1)],1)],1),r("v-btn",{attrs:{text:"",disabled:!e.valid,outlined:""},on:{click:function(t){return e.submit(2)}}},[e._v(" Next ")])],1)},g=[],x={data:function(){return{valid:!1,isLoading:!1,form:{},passbookImage:[function(e){return!e||e.size<2e6||"Passbook image must be less than 2MB!"},function(e){return!!e||"Passbook image is required"}]}},methods:{validate:function(){return this.$refs.form.validate()},submit:function(){this.validate()&&this.saveDetails()},saveDetails:function(){var e=this,t=this.form;this.isLoading=!0;var r=this.$route.params.id,i=new FormData;for(var a in t)i.append(a,t[a]);i.append("user_id",r),this.$axios.post("add-bank-details",i,{headers:{"content-type":"multipart/form-data"}}).then((function(t){e.$emit("saved"),e.showAlert("success",t.data.success),e.$refs.form.reset(),e.isLoading=!1})).catch((function(t){e.showAlert("error",t),e.isLoading=!1}))},showAlert:function(e,t){this.$store.commit("setSnackbar",{text:t,color:e})}}},q=x,C=Object(c["a"])(q,b,g,!1,null,null,null),y=C.exports,w=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-form",{ref:"form",attrs:{"lazy-validation":""},on:{prevent:e.submit},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[r("v-card",{attrs:{elevation:"0"}},[r("v-row",[r("v-col",[r("v-text-field",{staticClass:"required",attrs:{label:"Aadhar No.",rules:[function(e){return!!e||"Aadhar No. is required"}],required:""},model:{value:e.form.aadhar_no,callback:function(t){e.$set(e.form,"aadhar_no",t)},expression:"form.aadhar_no"}}),r("v-file-input",{staticClass:"required",attrs:{label:"Aadhar Image",rules:[function(e){return!!e||"Aadhar Image is required"},function(e){return!e||e.size<1e6||"Image should be less than 1MB"}],"prepend-icon":"attach_file",accept:"image/*",required:""},model:{value:e.form.aadhar_image,callback:function(t){e.$set(e.form,"aadhar_image",t)},expression:"form.aadhar_image"}}),r("v-text-field",{staticClass:"required",attrs:{label:"PAN Card No.",rules:[function(e){return!!e||"PAN Card No. is required"}],required:""},model:{value:e.form.pan_card_no,callback:function(t){e.$set(e.form,"pan_card_no",t)},expression:"form.pan_card_no"}}),r("v-file-input",{staticClass:"required",attrs:{label:"PAN Card Image",rules:[function(e){return!!e||"PAN Card Image is required"},function(e){return!e||e.size<1e6||"Image should be less than 1MB"}],"prepend-icon":"attach_file",accept:"image/*",required:""},model:{value:e.form.pan_card_image,callback:function(t){e.$set(e.form,"pan_card_image",t)},expression:"form.pan_card_image"}}),r("v-select",{staticClass:"required",attrs:{label:"Have driving licence",rules:[function(e){return!!e||"This field is required"}],"append-icon":"arrow_drop_down",items:e.options,required:""},model:{value:e.form.driving_licence,callback:function(t){e.$set(e.form,"driving_licence",t)},expression:"form.driving_licence"}}),"Yes"==e.form.driving_licence?r("v-text-field",{staticClass:"required",attrs:{label:"Licence No.",rules:[function(e){return!!e||"Licence No. is required"}],required:""},model:{value:e.form.driving_licence_no,callback:function(t){e.$set(e.form,"driving_licence_no",t)},expression:"form.driving_licence_no"}}):e._e(),"Yes"==e.form.driving_licence?r("v-file-input",{staticClass:"required",attrs:{label:"Licence Image",rules:[function(e){return!!e||"Licence Image is required"},function(e){return!e||e.size<1e6||"Image should be less than 1MB"}],"prepend-icon":"attach_file",accept:"image/*",required:""},model:{value:e.form.driving_licence_image,callback:function(t){e.$set(e.form,"driving_licence_image",t)},expression:"form.driving_licence_image"}}):e._e()],1),r("v-col",[r("v-select",{staticClass:"required",attrs:{required:"",label:"Company Agreement Name",items:e.agreements,rules:[function(e){return!!e||"Company Agreement Name is required"}],"append-icon":"arrow_drop_down"},model:{value:e.form.company_agreement_type,callback:function(t){e.$set(e.form,"company_agreement_type",t)},expression:"form.company_agreement_type"}}),r("v-file-input",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Agreement copy is required"},function(e){return!e||e.size<1e6||"Image should be less than 1MB"}],"prepend-icon":"attach_file",label:"Agreement Copy"},model:{value:e.form.company_agreement_copy,callback:function(t){e.$set(e.form,"company_agreement_copy",t)},expression:"form.company_agreement_copy"}}),r("v-select",{staticClass:"required",attrs:{requirired:"",label:"Require MMT User ID","append-icon":"arrow_drop_down",items:e.options,rules:[function(e){return!!e||"Reuire MMT ID is required"}]},model:{value:e.form.require_mmt_user_id,callback:function(t){e.$set(e.form,"require_mmt_user_id",t)},expression:"form.require_mmt_user_id"}}),"Yes"==e.form.require_mmt_user_id?r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Dashboard Name is required"}],label:"Dashboard Name"},model:{value:e.form.dashboard_name,callback:function(t){e.$set(e.form,"dashboard_name",t)},expression:"form.dashboard_name"}}):e._e(),"Yes"==e.form.require_mmt_user_id?r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"User Name is required"}],label:"User Name"},model:{value:e.form.user_name,callback:function(t){e.$set(e.form,"user_name",t)},expression:"form.user_name"}}):e._e(),"Yes"==e.form.require_mmt_user_id?r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Password is required"}],type:"password",label:"Password"},model:{value:e.form.password,callback:function(t){e.$set(e.form,"password",t)},expression:"form.password"}}):e._e(),"Yes"==e.form.require_mmt_user_id?r("v-text-field",{staticClass:"required",attrs:{rules:[function(e){return!!e||"Password Confirmation is required"}],type:"password",label:"Password Confirmation"},model:{value:e.form.password_confirmation,callback:function(t){e.$set(e.form,"password_confirmation",t)},expression:"form.password_confirmation"}}):e._e()],1)],1)],1),r("v-btn",{attrs:{text:"",disabled:!e.valid,outlined:""},on:{click:function(t){return e.submit(3)}}},[e._v(" Next ")])],1)},k=[],$={data:function(){return{valid:!1,form:{},options:["Yes","No"],agreements:["Test agreement","Demo"]}},methods:{validate:function(){return this.$refs.form.validate()},submit:function(){this.validate()&&this.saveDetails()},saveDetails:function(){var e=this,t=this.form;this.isLoading=!0;var r=this.$route.params.id,i=new FormData;for(var a in t)i.append(a,t[a]);i.append("user_id",r),this.$axios.post("important-documents",i,{headers:{"content-type":"multipart/form-data"}}).then((function(t){e.$emit("saved"),e.showAlert("success",t.data.success),e.$refs.form.reset(),e.isLoading=!1})).catch((function(t){e.showAlert("error",t),e.isLoading=!1}))},showAlert:function(e,t){this.$store.commit("setSnackbar",{text:t,color:e})}}},A=$,I=Object(c["a"])(A,w,k,!1,null,null,null),N=I.exports,P=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-form",{ref:"form",attrs:{"lazy-validation":""},on:{prevent:e.submit},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[r("v-overlay",{attrs:{value:e.isLoading}},[r("v-progress-circular",{attrs:{indeterminate:"",size:"64"}})],1),r("v-card",{attrs:{elevation:"0"}},[r("v-row",[r("v-col",[r("fieldset",{staticClass:"my-fieldset"},[r("legend",[e._v("Interview Related Documents")]),r("v-simple-table",[r("table",[r("thead",[r("tr",[r("th",[e._v("Type")]),r("th",[e._v("Attendees")]),r("th",{attrs:{colspan:"2"}},[e._v("Audio/Video")])])]),r("tbody",e._l(e.interview,(function(t,i){return r("tr",{key:i},[r("td",[r("v-select",{attrs:{"append-icon":"arrow_drop_down",items:e.interviewTypes,"item-text":"type","item-value":"id",label:"Interview Type",rules:[function(e){return!!e||"Interview Type is required"}]},model:{value:t.type,callback:function(r){e.$set(t,"type",r)},expression:"item.type"}})],1),r("td",[r("v-text-field",{attrs:{rules:[function(e){return!!e||"Please mention the names of attendees"}],label:"Attendee names"},model:{value:t.attendees,callback:function(r){e.$set(t,"attendees",r)},expression:"item.attendees"}})],1),r("td",[r("v-file-input",{attrs:{"prepend-icon":"attach_file",rules:[function(e){return!!e||"Interview file is required"},function(e){return!e||e.size<5e6||"Video file size should be less than 5MB"}],label:"File",accept:"video/*"},model:{value:t.file,callback:function(r){e.$set(t,"file",r)},expression:"item.file"}})],1),r("td",[r("v-btn",{attrs:{icon:""},on:{click:function(r){return e.deleteInterview(t)}}},[r("v-icon",[e._v("delete")])],1)],1)])})),0)]),r("v-btn",{attrs:{icon:""},on:{click:e.addInterview}},[r("v-icon",[e._v("add")])],1)],1)],1)]),r("v-col",[r("fieldset",{staticClass:"my-fieldset"},[r("legend",[e._v("Certificates")]),r("v-simple-table",[r("table",[r("thead",[r("tr",[r("th",[e._v("Name of Certificate")]),r("th",{attrs:{colspan:"2"}},[e._v("Certificate Image")])])]),r("tbody",e._l(e.certificates,(function(t,i){return r("tr",{key:i},[r("td",[r("v-text-field",{staticClass:"required",attrs:{label:"Certificate name",rules:[function(e){return!!e||"Name of the Certificate is required"}]},model:{value:t.name,callback:function(r){e.$set(t,"name",r)},expression:"item.name"}})],1),r("td",[r("v-file-input",{staticClass:"required",attrs:{"prepend-icon":"attach_file",label:"Certificate file",rules:[function(e){return!!e||"File of the certificate is required"},function(e){return!e||e.size<1e6||"File size should be less than 1MB!"}],accept:"image/*"},model:{value:t.certificate_image,callback:function(r){e.$set(t,"certificate_image",r)},expression:"item.certificate_image"}})],1),r("td",[r("v-btn",{attrs:{icon:""},on:{click:function(r){return e.deleteCertificate(t)}}},[r("v-icon",[e._v("delete")])],1)],1)])})),0)]),r("v-btn",{attrs:{icon:""},on:{click:e.addCertificate}},[r("v-icon",[e._v("add")])],1)],1)],1)])],1)],1),r("v-btn",{attrs:{disabled:!e.valid,text:"",outlined:""},on:{click:function(t){return e.submit()}}},[e._v(" Save ")])],1)},L=[],D=(r("c975"),r("a434"),r("b0c0"),{data:function(){return{valid:!1,isLoading:!1,interview:[{type:"",attendees:"",file:null}],certificates:[{name:"",certificate_image:null}],interviewTypes:[]}},mounted:function(){var e=this;this.$axios.get("interview-types").then((function(t){e.interviewTypes=t.data})).catch((function(t){e.showAlert("error",t)}))},methods:{addInterview:function(){this.interview.push({type:"",attendees:"",file:null})},addCertificate:function(){this.certificates.push({name:"",certificate_image:null})},deleteInterview:function(e){var t=this.interview.indexOf(e);1!=this.interview.length?this.interview.splice(t,1):this.showAlert("error","At Least One Item Is Required")},deleteCertificate:function(e){var t=this.certificates.indexOf(e);1!=this.certificates.length?this.certificates.splice(t,1):this.showAlert("error","At Least One Item Is Required")},validate:function(){return this.$refs.form.validate()},submit:function(){this.validate()&&this.saveDetails()},saveDetails:function(){var e=this,t=this.interview,r=this.certificates;this.isLoading=!0;var i=this.$route.params.id,a=new FormData;for(var n in t)a.append("interview["+n+"][type]",t[n]["type"]),a.append("interview["+n+"][attendees]",t[n]["attendees"]),a.append("interview["+n+"][file]",t[n]["file"]);for(var s in r)a.append("certificate["+s+"][name]",r[s]["name"]),a.append("certificate["+s+"][certificate]",r[s]["certificate_image"]);a.append("user_id",i),this.$axios.post("add-interview-related",a,{headers:{"content-type":"multipart/form-data"}}).then((function(t){e.showAlert("success",t.data.success),e.$refs.form.reset(),e.isLoading=!1,e.$router.push("view-employees")})).catch((function(t){e.showAlert("error",t),e.isLoading=!1}))},showAlert:function(e,t){this.$store.commit("setSnackbar",{text:t,color:e})}}}),z=D,S=Object(c["a"])(z,P,L,!1,null,null,null),B=S.exports,O={components:{EmergencyContact:d,BankAccount:y,AddressContacts:h,ImportantDocuments:N,InterviewCertificate:B},data:function(){return{e1:1,steps:5}},watch:{steps:function(e){this.e1>e&&(this.e1=e)}},methods:{validate:function(){return this.$refs.form.validate()},nextStep:function(e){e===this.steps?this.e1=1:this.e1=e+1},onSaved:function(e){this.nextStep(e)}}},E=O,M=(r("3c60"),Object(c["a"])(E,i,a,!1,null,null,null));t["default"]=M.exports},"1dde":function(e,t,r){var i=r("d039"),a=r("b622"),n=r("2d00"),s=a("species");e.exports=function(e){return n>=51||!i((function(){var t=[],r=t.constructor={};return r[s]=function(){return{foo:1}},1!==t[e](Boolean).foo}))}},"3c60":function(e,t,r){"use strict";var i=r("53eb"),a=r.n(i);a.a},"53eb":function(e,t,r){},8418:function(e,t,r){"use strict";var i=r("c04e"),a=r("9bf2"),n=r("5c6c");e.exports=function(e,t,r){var s=i(t);s in e?a.f(e,s,n(0,r)):e[s]=r}},a434:function(e,t,r){"use strict";var i=r("23e7"),a=r("23cb"),n=r("a691"),s=r("50c4"),o=r("7b0b"),l=r("65f0"),c=r("8418"),u=r("1dde"),d=r("ae40"),f=u("splice"),m=d("splice",{ACCESSORS:!0,0:0,1:2}),p=Math.max,v=Math.min,_=9007199254740991,h="Maximum allowed length exceeded";i({target:"Array",proto:!0,forced:!f||!m},{splice:function(e,t){var r,i,u,d,f,m,b=o(this),g=s(b.length),x=a(e,g),q=arguments.length;if(0===q?r=i=0:1===q?(r=0,i=g-x):(r=q-2,i=v(p(n(t),0),g-x)),g+r-i>_)throw TypeError(h);for(u=l(b,i),d=0;d<i;d++)f=x+d,f in b&&c(u,d,b[f]);if(u.length=i,r<i){for(d=x;d<g-i;d++)f=d+i,m=d+r,f in b?b[m]=b[f]:delete b[m];for(d=g;d>g-i+r;d--)delete b[d-1]}else if(r>i)for(d=g-i;d>x;d--)f=d+i-1,m=d+r-1,f in b?b[m]=b[f]:delete b[m];for(d=0;d<r;d++)b[d+x]=arguments[d+2];return b.length=g-i+r,u}})},c975:function(e,t,r){"use strict";var i=r("23e7"),a=r("4d64").indexOf,n=r("a640"),s=r("ae40"),o=[].indexOf,l=!!o&&1/[1].indexOf(1,-0)<0,c=n("indexOf"),u=s("indexOf",{ACCESSORS:!0,1:0});i({target:"Array",proto:!0,forced:l||!c||!u},{indexOf:function(e){return l?o.apply(this,arguments)||0:a(this,e,arguments.length>1?arguments[1]:void 0)}})}}]);