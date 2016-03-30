function glyphOver(foto) {
  document.getElementById('glyph').src = foto;
};

function register(){
  document.getElementById("regForm").style.visibility = "initial";
};

function formatString(mask, text){
  var len = text.value.length;
  var outline = mask.substring(0,1);
  var textsplit = mask.substring(len);

  if (textsplit.substring(0,1) != outline) {
    text.value += textsplit.substring(0,1);
  }
};
