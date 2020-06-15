$(".deletebtn").click(e =>{
  console.log("Icon clicked");
  let textvalue = displayData(e);

  console.log(textvalue);
  let id = $("input[name*=delete_id]");
  id.val(textvalue[0]);
  });



function displayData(e) {
  let id = 0;
  let td = $(".table-borderless tr td ");
  textvalue = [];
  for (const value of td) {
    if (value.dataset.id == e.target.dataset.id) {
      textvalue[id++] = value.textContent;
    }
  }
 return textvalue;
}
