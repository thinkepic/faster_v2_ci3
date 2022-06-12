$(document).ready(function(){

  var options = {selector: "#kt_docs_tinymce_basic"};

  if (KTApp.isDarkMode()) {
      options["skin"] = "oxide-dark";
      options["content_css"] = "dark";
  }
  
  tinymce.init(options);

})